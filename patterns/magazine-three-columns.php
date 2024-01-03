<?php
/**
 * Title: Magazine Three Columns
 * Slug: graham/magazine-three-columns
 * Categories: graham_magazine
 *
 * @package Graham
 */

?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"},"metadata":{"name":"Magazine Three Columns"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)">

	<!-- wp:heading {"style":{"typography":{}},"className":"flip-link-hover","fontSize":"base"} -->
	<h2 class="wp-block-heading flip-link-hover has-base-font-size"><?php esc_html_e( 'Category', 'graham' ); ?>: <a href="#">Name</a></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":"3","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3}} -->

			<!-- wp:group -->
			<div class="wp-block-group">

				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

				<!-- wp:pattern {"slug":"graham/postmeta-date"} /-->

				<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-large"} /-->

				<!-- wp:post-excerpt {"excerptLength":18} /-->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
