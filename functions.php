<?php
/**
 * Graham functions and definitions
 *
 * @package Graham
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function graham_setup() {

	// Make theme available for translation.
	load_theme_textdomain( 'graham', get_template_directory() . '/languages' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

	// Remove Core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'graham_setup' );


/**
 * Enqueue scripts and styles.
 */
function graham_scripts() {

	// Register and Enqueue Stylesheet.
	wp_enqueue_style( 'graham-stylesheet', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'graham_scripts' );


/**
 * Enqueue block styles and scripts for Gutenberg Editor.
 */
function graham_block_scripts() {

	// Enqueue Editor Styling.
	wp_enqueue_style( 'graham-editor-styles', get_theme_file_uri( '/assets/css/editor-styles.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );

}
add_action( 'enqueue_block_editor_assets', 'graham_block_scripts' );


/**
 * Change excerpt length for default posts
 *
 * @param int $length Length of excerpt in number of words.
 * @return int
 */
function graham_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}

	return apply_filters( 'graham_excerpt_length', 22 );
}
add_filter( 'excerpt_length', 'graham_excerpt_length' );


/**
 * Registers block pattern categories.
 *
 * @return void
 */
function graham_register_block_pattern_categories() {
	$block_pattern_categories = array(
		'graham_hero'         => array( 'label' => __( 'Graham: Hero', 'graham' ) ),
		'graham_cta'          => array( 'label' => __( 'Graham: Call to Action', 'graham' ) ),
		'graham_features'     => array( 'label' => __( 'Graham: Features', 'graham' ) ),
		'graham_magazine'     => array( 'label' => __( 'Graham: Magazine', 'graham' ) ),
		'graham_media_text'   => array( 'label' => __( 'Graham: Media Text', 'graham' ) ),
		'graham_portfolio'    => array( 'label' => __( 'Graham: Portfolio', 'graham' ) ),
		'graham_services'     => array( 'label' => __( 'Graham: Services', 'graham' ) ),
		'graham_testimonials' => array( 'label' => __( 'Graham: Testimonials', 'graham' ) ),
		'graham_team'         => array( 'label' => __( 'Graham: Team', 'graham' ) ),
		'graham_blog'         => array( 'label' => __( 'Graham: Blog Posts', 'graham' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 */
	$block_pattern_categories = apply_filters( 'graham_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'graham_register_block_pattern_categories', 9 );


/**
 * Registers block styles.
 *
 * @return void
 */
function graham_register_block_styles() {

	// Register Main Navigation block style.
	register_block_style( 'core/navigation', array(
		'name'         => 'main-navigation',
		'label'        => esc_html__( 'Main Navigation', 'graham' ),
		'style_handle' => 'graham-stylesheet',
	) );

	// Register Footer Navigation block style.
	register_block_style( 'core/navigation', array(
		'name'         => 'footer-navigation',
		'label'        => esc_html__( 'Footer Navigation', 'graham' ),
		'style_handle' => 'graham-stylesheet',
	) );

	// Register Inherit Colors block style.
	register_block_style( 'core/social-links', array(
		'name'         => 'inherit-colors',
		'label'        => esc_html__( 'Inherit Colors', 'graham' ),
		'style_handle' => 'graham-stylesheet',
	) );

	// Register Primary Hover block style.
	register_block_style( 'core/social-links', array(
		'name'         => 'primary-hover',
		'label'        => esc_html__( 'Primary Hover', 'graham' ),
		'style_handle' => 'graham-stylesheet',
	) );

	// Register Thin Line block style.
	register_block_style( 'core/separator', array(
		'name'         => 'thin',
		'label'        => esc_html__( 'Thin Line', 'graham' ),
		'style_handle' => 'graham-stylesheet',
	) );

	// Register Underlined Heading block style.
	$underlined_heading_style = array(
		'name'         => 'underlined-heading',
		'label'        => esc_html__( 'Underlined', 'graham' ),
		'style_handle' => 'graham-stylesheet',
	);

	register_block_style( 'core/heading', $underlined_heading_style );
	register_block_style( 'core/post-title', $underlined_heading_style );
	register_block_style( 'core/query-title', $underlined_heading_style );
}
add_action( 'init', 'graham_register_block_styles', 9 );


/**
 * Set up the Plugin Updater Constants.
 */
define( 'GRAHAM_THEME_VERSION', '1.0' );
define( 'GRAHAM_THEME_NAME', 'Graham' );
define( 'GRAHAM_THEME_ID', 256624 );
define( 'GRAHAM_THEME_STORE_URL', 'https://themezee.com' );


/**
 * Include License Settings and Plugin Updater.
 */
include dirname( __FILE__ ) . '/includes/class-graham-admin-page.php';
include dirname( __FILE__ ) . '/includes/class-graham-license-settings.php';
include dirname( __FILE__ ) . '/includes/class-graham-theme-updater.php';


/**
 * Initialize the updater. Hooked into `init` to work with the
 * wp_version_check cron job, which allows auto-updates.
 */
function graham_run_theme_updater() {

	// To support auto-updates, this needs to run during the wp_version_check cron job for privileged users.
	$doing_cron = defined( 'DOING_CRON' ) && DOING_CRON;
	if ( ! current_user_can( 'manage_options' ) && ! $doing_cron ) {
		return;
	}

	// Retrieve our license key from the DB.
	$options     = get_option( 'graham_theme_settings', array() );
	$license_key = ! empty( $options['graham_license_key'] ) ? trim( $options['graham_license_key'] ) : false;

	// Setup the updater.
	new Graham_Theme_Updater(
		array(
			'remote_api_url' => GRAHAM_THEME_STORE_URL,
			'item_name'      => GRAHAM_THEME_NAME,
			'theme_slug'     => get_template(),
			'version'        => GRAHAM_THEME_VERSION,
			'author'         => 'ThemeZee',
			'item_id'        => GRAHAM_THEME_ID,
		),
		array(
			'update-available' => esc_html__( 'Version %2$s of %1$s is available. <a href="%3$s">View changelog of %4$s</a> or <a href="%5$s" %6$s>update now</a>.', 'graham' ),
			'update-notice'    => esc_html__( 'Updating this theme will override all theme files. Click "Cancel" to stop, "OK" to update.', 'graham' ),
		)
	);
}
add_action( 'init', 'graham_run_theme_updater' );
