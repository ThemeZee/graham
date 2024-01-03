<?php
/**
 * Title: Magazine Hero
 * Slug: graham/magazine-hero
 * Categories: graham_magazine
 *
 * @package Graham
 */

?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"},"metadata":{"name":"Magazine Hero"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)">

	<!-- wp:query {"query":{"perPage":"1","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0">

			<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%">

				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%">

				<!-- wp:pattern {"slug":"graham/postmeta"} /-->

				<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}}} /-->

				<!-- wp:post-excerpt {"excerptLength":20, "moreText":"<?php esc_html_e( 'Continue reading', 'graham' ); ?>","style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
