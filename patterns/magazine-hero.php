<?php
/**
 * Title: Magazine Hero
 * Slug: graham/magazine-hero
 * Categories: graham_magazine
*/
?>

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--70)">

	<!-- wp:query {"query":{"perPage":"1","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0">

			<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%">

				<!-- wp:post-featured-image {"isLink":true,"height":"480px"} /-->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%">

				<!-- wp:pattern {"slug":"graham/postmeta"} /-->

				<!-- wp:post-title {"level":1,"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}}} /-->

				<!-- wp:post-excerpt {"moreText":"<?php esc_html_e( 'Continue reading', 'graham' ); ?>","style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
