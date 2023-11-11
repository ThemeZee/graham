<?php
/**
 * Title: Query (List)
 * Slug: graham/query-list
 * Block Types: core/query
 * Categories: query
*/
?>

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"},"margin":{"bottom":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--70)">

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"spacing":{"margin":{"top":"0"}}}} /-->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:pattern {"slug":"graham/postmeta"} /-->

			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}}} /-->

			<!-- wp:post-excerpt {"moreText":"<?php esc_html_e( 'Continue reading', 'graham' ); ?>","excerptLength":15} /-->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<!-- wp:query-pagination-numbers /-->
	<!-- /wp:query-pagination -->

</div>
<!-- /wp:query -->
