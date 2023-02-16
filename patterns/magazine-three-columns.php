<?php
/**
 * Title: Magazine Three Columns
 * Slug: graham/magazine-three-columns
 * Categories: graham_magazine
*/
?>

<!-- wp:group -->
<div class="wp-block-group">

	<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"base"} -->
	<h2 class="wp-block-heading is-style-default has-base-font-size" style="text-transform:uppercase"><?php esc_html_e( 'Category Title', 'graham' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":"3","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->

			<!-- wp:group -->
			<div class="wp-block-group">

				<!-- wp:post-featured-image {"isLink":true,"height":"180px"} /-->

				<!-- wp:pattern {"slug":"graham/postmeta-date"} /-->

				<!-- wp:post-title {"isLink":true,"fontSize":"large", "style":{"spacing":{"margin":{"top":"0"}}}} /-->

				<!-- wp:post-excerpt {"moreText":"Continue reading","style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
