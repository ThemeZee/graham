<?php
/**
 * Title: Magazine Horizontal
 * Slug: graham/magazine-horizontal
 * Categories: graham_magazine
*/
?>

<!-- wp:group -->
<div class="wp-block-group">

	<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"base"} -->
	<h2 class="wp-block-heading is-style-default has-base-font-size" style="text-transform:uppercase"><?php esc_html_e( 'Category Title', 'graham' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":"1","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"bottom":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--60)">

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">

				<!-- wp:post-featured-image {"isLink":true,"height":"360px"} /-->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">

				<!-- wp:pattern {"slug":"graham/postmeta"} /-->

				<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}}} /-->

				<!-- wp:post-excerpt {"moreText":"Continue reading","style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

	<!-- wp:query {"query":{"perPage":"3","pages":"1","offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
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