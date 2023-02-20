<?php
/**
 * Title: Query (Grid)
 * Slug: graham/query-grid
 * Block Types: core/query
 * Categories: query
*/
?>

<!-- wp:query {"queryId":1,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":2}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->

		<!-- wp:group -->
		<div class="wp-block-group">

			<!-- wp:post-featured-image {"isLink":true,"height":"240px","style":{"spacing":{"margin":{"top":"0px"}}}} /-->

			<!-- wp:pattern {"slug":"graham/postmeta"} /-->

			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}}} /-->

			<!-- wp:post-excerpt {"moreText":"<?php esc_html_e( 'Continue reading', 'graham' ); ?>"} /-->

		</div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<!-- wp:query-pagination-numbers /-->
	<!-- /wp:query-pagination -->

</div>
<!-- /wp:query -->
