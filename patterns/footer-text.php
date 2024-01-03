<?php
/**
 * Title: Footer Text
 * Slug: graham/footer-text
 * Inserter: no
 *
 * @package Graham
 */

?>

<!-- wp:paragraph {"className":"flip-link-hover"} -->
<p class="flip-link-hover">&copy; <?php echo wp_kses_post( date_i18n( 'Y' ) . ' ' . get_bloginfo( 'name' ) ); ?> | <a href="#"><?php esc_html_e( 'Privacy Policy', 'graham' ); ?></a> | <a href="#"><?php esc_html_e( 'Imprint', 'graham' ); ?></a></p>
<!-- /wp:paragraph -->
