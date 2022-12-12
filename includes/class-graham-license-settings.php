<?php
/**
 * Graham License Settings
 *
 * @package Graham
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Graham_License_Settings {

	/**
	 * Setup the Graham Licene Settings class
	 */
	static function setup() {

		// Register settings.
		add_action( 'admin_init', array( __CLASS__, 'register_settings' ) );

		// Add License API functions.
		add_action( 'admin_init', array( __CLASS__, 'activate_license' ) );
		add_action( 'admin_init', array( __CLASS__, 'deactivate_license' ) );

		// Add Admin notices.
		add_action( 'admin_notices', array( __CLASS__, 'license_activated_notice' ) );
		add_action( 'admin_notices', array( __CLASS__, 'theme_page_notice' ) );

		// Disable updates from WordPress.org.
		add_filter( 'http_request_args', array( __CLASS__, 'disable_wporg_request' ), 5, 2 );
	}

	/**
	 * Get settings
	 *
	 * @return array
	 */
	static function get_settings() {
		$default_settings = array(
			'graham_license_key'    => '',
			'graham_license_status' => 'inactive',
		);

		return wp_parse_args( get_option( 'graham_theme_settings', array() ), $default_settings );
	}

	/**
	 * Register all settings sections and fields
	 */
	static function register_settings() {

		// Add License Status Setting.
		add_settings_field(
			'graham_theme_settings[graham_license_status]',
			esc_html__( 'License Status', 'graham' ),
			array( __CLASS__, 'render_license_status_setting' ),
			'graham_theme_settings',
			'graham_license_section'
		);

		// Add License Key Setting.
		add_settings_field(
			'graham_theme_settings[graham_license_key]',
			esc_html__( 'License Key', 'graham' ),
			array( __CLASS__, 'render_license_key_setting' ),
			'graham_theme_settings',
			'graham_license_section'
		);
	}

	/**
	 * License Status Callback
	 */
	static function render_license_status_setting() {
		$options        = self::get_settings();
		$license_status = $options['graham_license_status'];
		$license_key    = ! empty( $options['graham_license_key'] ) ? trim( $options['graham_license_key'] ) : false;

		$html = '';
		if ( 'valid' === $license_status && ! empty( $license_key ) ) {
			$html .= '<span style="display: inline-block; margin-bottom: 12px; padding: 4px 8px; background: green; color: #fff;">' . esc_html__( 'Active', 'graham' ) . '</span>';
			$html .= '<br/><span class="description">' . esc_html__( 'You are receiving updates.', 'graham' ) . '</span>';
		} else {
			$html .= '<span style="display: inline-block; margin-bottom: 12px; padding: 4px 8px; background: #444; color: #fff;">' . esc_html__( 'Inactive', 'graham' ) . '</span>';
			$html .= '<br/><span class="description">' . esc_html__( 'Please activate your license.', 'graham' ) . '</span>';
		}

		echo $html;
	}

	/**
	 * License Key Callback
	 */
	static function render_license_key_setting() {
		$options        = self::get_settings();
		$license_status = $options['graham_license_status'];
		$license_key    = ! empty( $options['graham_license_key'] ) ? trim( $options['graham_license_key'] ) : false;

		$html = '';
		if ( 'valid' === $license_status && ! empty( $license_key ) ) {
			$html .= '<span style="display: inline-block; box-sizing: border-box; width: 25em; margin: 0 1px; padding: 0 8px;line-height: 2;border-radius: 4px;border: 1px solid #8c8f94;">*************************' . esc_html( substr( stripslashes( $license_key ), 25 ) ) . '</span>';
			$html .= '<input type="submit" class="button" name="graham_deactivate_license" value="' . esc_attr__( 'Deactivate License', 'graham' ) . '"/>';
		} else {
			$html .= '<input type="text" class="regular-text" id="graham_theme_settings[graham_license_key]" name="graham_theme_settings[graham_license_key]" value="' . esc_attr( stripslashes( $license_key ) ) . '"/>';
			$html .= '<input type="submit" class="button" name="graham_activate_license" value="' . esc_attr__( 'Activate License', 'graham' ) . '"/>';
		}

		echo $html;
		wp_nonce_field( 'graham_license_nonce', 'graham_license_nonce' );
	}

	/**
	 * Activates the license key.
	 */
	static function activate_license() {

		// Return early if not on Graham admin page.
		if ( ! isset( $_POST['graham_theme_settings'] ) ) {
			return;
		}

		// Listen for our activate button to be clicked.
		if ( ! isset( $_POST['graham_activate_license'] ) ) {
			return;
		}

		// Run a quick security check.
		if ( ! check_admin_referer( 'graham_license_nonce', 'graham_license_nonce' ) ) {
			return;
		}

		// Get License key.
		$license_key = ! empty( $_POST['graham_theme_settings']['graham_license_key'] ) ? sanitize_text_field( $_POST['graham_theme_settings']['graham_license_key'] ) : false;

		// Return if no license key was entered.
		if ( ! $license_key ) {
			return;
		}

		// Data to send in our API request.
		$api_params = array(
			'edd_action'  => 'activate_license',
			'license'     => $license_key,
			'item_id'     => GRAHAM_THEME_ID,
			'item_name'   => rawurlencode( GRAHAM_THEME_NAME ),
			'url'         => home_url(),
			'environment' => function_exists( 'wp_get_environment_type' ) ? wp_get_environment_type() : 'production',
		);

		// Call the custom API.
		$response = wp_remote_post(
			GRAHAM_THEME_STORE_URL,
			array(
				'timeout'   => 15,
				'sslverify' => true,
				'body'      => $api_params,
			)
		);

		// Make sure the response came back okay.
		if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {

			if ( is_wp_error( $response ) ) {
				$message = $response->get_error_message();
			} else {
				$message = __( 'An error occurred, please try again.', 'graham' );
			}
		} else {

			$license_data = json_decode( wp_remote_retrieve_body( $response ) );

			if ( false === $license_data->success ) {

				switch ( $license_data->error ) {

					case 'expired':
						$message = sprintf(
							/* translators: the license key expiration date */
							__( 'Your license key expired on %s.', 'graham' ),
							date_i18n( get_option( 'date_format' ), strtotime( $license_data->expires, current_time( 'timestamp' ) ) )
						);
						break;

					case 'disabled':
					case 'revoked':
						$message = __( 'Your license key has been disabled.', 'graham' );
						break;

					case 'missing':
						$message = __( 'Invalid license.', 'graham' );
						break;

					case 'invalid':
					case 'site_inactive':
						$message = __( 'Your license is not active for this URL.', 'graham' );
						break;

					case 'item_name_mismatch':
						/* translators: the plugin name */
						$message = sprintf( __( 'This appears to be an invalid license key for %s.', 'graham' ), GRAHAM_THEME_NAME );
						break;

					case 'no_activations_left':
						$message = __( 'Your license key has reached its activation limit.', 'graham' );
						break;

					default:
						$message = __( 'An error occurred, please try again.', 'graham' );
						break;
				}
			}
		}

		// Check if anything passed on a message constituting a failure.
		if ( ! empty( $message ) ) {
			$redirect = add_query_arg(
				array(
					'page'              => 'graham-theme',
					'graham_activation' => 'false',
					'message'           => rawurlencode( $message ),
				),
				admin_url( 'themes.php' )
			);

			wp_safe_redirect( $redirect );
			exit();
		}

		// Retrieve the license from the database.
		$options = self::get_settings();

		// $license_data->license will be either "valid" or "invalid".
		if ( 'valid' === $license_data->license ) {
			$options['graham_license_key'] = $license_key;
		}
		$options['graham_license_status'] = $license_data->license;
		update_option( 'graham_theme_settings', $options );

		wp_safe_redirect( admin_url( 'themes.php?page=graham-theme' ) );
		exit();
	}

	/**
	 * Deactivates the license key.
	 * This will decrease the site count.
	 */
	static function deactivate_license() {

		// Listen for our activate button to be clicked.
		if ( ! isset( $_POST['graham_deactivate_license'] ) ) {
			return;
		}

		// Run a quick security check.
		if ( ! check_admin_referer( 'graham_license_nonce', 'graham_license_nonce' ) ) {
			return;
		}

		// Retrieve our license key from the DB.
		$options     = self::get_settings();
		$license_key = ! empty( $options['graham_license_key'] ) ? trim( $options['graham_license_key'] ) : false;

		// data to send in our API request
		$api_params = array(
			'edd_action'  => 'deactivate_license',
			'license'     => $license_key,
			'item_id'     => GRAHAM_THEME_ID,
			'item_name'   => rawurlencode( GRAHAM_THEME_NAME ), // the name of our product in EDD
			'url'         => home_url(),
			'environment' => function_exists( 'wp_get_environment_type' ) ? wp_get_environment_type() : 'production',
		);

		// Call the custom API.
		$response = wp_remote_post(
			GRAHAM_THEME_STORE_URL,
			array(
				'timeout'   => 15,
				'sslverify' => true,
				'body'      => $api_params,
			)
		);

		// Make sure the response came back okay.
		if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {

			if ( is_wp_error( $response ) ) {
				$message = $response->get_error_message();
			} else {
				$message = __( 'An error occurred, please try again.', 'graham' );
			}

			$redirect = add_query_arg(
				array(
					'page'                  => 'graham-theme',
					'graham_activation' => 'false',
					'message'               => rawurlencode( $message ),
				),
				admin_url( 'themes.php' )
			);

			wp_safe_redirect( $redirect );
			exit();
		}

		// Deactivate the License key in DB.
		$options['graham_license_key']    = '';
		$options['graham_license_status'] = 'inactive';
		update_option( 'graham_theme_settings', $options );

		wp_safe_redirect( admin_url( 'themes.php?page=graham-theme' ) );
		exit();
	}

	/**
	 * This is a means of catching errors from the activation method above and displaying it to the customer
	 */
	static function license_activated_notice() {
		if ( isset( $_GET['graham_activation'] ) && ! empty( $_GET['message'] ) ) {

			switch ( $_GET['graham_activation'] ) {

				case 'false':
					$message = urldecode( $_GET['message'] );
					?>
					<div class="error">
						<p><?php echo wp_kses_post( $message ); ?></p>
					</div>
					<?php
					break;

				case 'true':
				default:
					// Developers can put a custom success message here for when activation is successful if they way.
					break;

			}
		}
	}

	/**
	 * Display activate license notice
	 *
	 * @return void
	 */
	static function theme_page_notice() {
		global $pagenow;
		$options = self::get_settings();

		if ( 'valid' !== $options['graham_license_status'] && in_array( $pagenow, array( 'index.php', 'update-core.php', 'themes.php' ) ) && ! isset( $_GET['page'] ) && current_user_can( 'manage_options' ) ) :
			?>

			<div class="notice notice-info">
				<p>
					<?php
					printf( __( 'Please enter your license key for the %1$s theme in order to receive updates and support. <a href="%2$s">Enter License Key</a>', 'graham' ),
						'Graham',
						admin_url( 'themes.php?page=graham-theme' )
					);
					?>
				</p>
			</div>

			<?php
		endif;
	}

	/**
	 * Disable requests to wp.org repository for this theme.
	 *
	 * @since 1.0.0
	 */
	static function disable_wporg_request( $r, $url ) {

		// If it's not a theme update request, bail.
		if ( 0 !== strpos( $url, 'https://api.wordpress.org/themes/update-check/1.1/' ) ) {
			return $r;
		}

		// Decode the JSON response.
		$themes = json_decode( $r['body']['themes'] );

		// Remove the active parent and child themes from the check.
		$parent = get_option( 'template' );
		$child  = get_option( 'stylesheet' );
		unset( $themes->themes->$parent );
		unset( $themes->themes->$child );

		// Encode the updated JSON response.
		$r['body']['themes'] = json_encode( $themes );

		return $r;
	}
}

// Run class.
Graham_License_Settings::setup();
