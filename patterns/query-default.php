<?php
/**
 * Title: Query (Default)
 * Slug: graham/query-default
 * Block Types: core/query
 * Categories: query
*/
?>

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->

		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">

			<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}}} /-->

			<!-- wp:pattern {"slug":"graham/postmeta"} /-->

			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"xxx-large"} /-->

			<!-- wp:post-excerpt {"moreText":"<?php esc_html_e( 'Continue reading', 'graham' ); ?>"} /-->

		</div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<!-- wp:query-pagination-numbers /-->
	<!-- /wp:query-pagination -->

</div>
<!-- /wp:query -->
