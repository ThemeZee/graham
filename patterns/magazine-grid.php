<?php
/**
 * Title: Magazine Grid
 * Slug: graham/magazine-grid
 * Categories: graham_magazine
*/
?>

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--70)">

			<!-- wp:heading {"style":{"typography":{}},"className":"flip-link-hover","fontSize":"base"} -->
			<h2 class="wp-block-heading flip-link-hover has-base-font-size"><?php esc_html_e( 'Category', 'graham' ); ?>: <a href="#">Name</a></h2>
			<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":"6","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->

			<!-- wp:group -->
			<div class="wp-block-group">

				<!-- wp:post-featured-image {"isLink":true,"height":"180px"} /-->

				<!-- wp:pattern {"slug":"graham/postmeta-date"} /-->

				<!-- wp:post-title {"isLink":true,"fontSize":"medium", "style":{"spacing":{"margin":{"top":"0"}}}} /-->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
