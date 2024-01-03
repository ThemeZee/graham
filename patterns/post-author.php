<?php
/**
 * Title: Post Author
 * Slug: graham/post-author
 * Inserter: no
 *
 * @package Graham
 */

?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"0"}},"layout":{"type":"constrained"},"fontSize":"small","metadata":{"name":"Post Author"}} -->
<div class="wp-block-group has-small-font-size" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)">

	<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
	<p style="font-style:normal;font-weight:700"><?php esc_html_e( 'Written by', 'graham' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:post-author-name /-->

</div>
<!-- /wp:group -->
