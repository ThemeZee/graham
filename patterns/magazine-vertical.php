<?php
/**
 * Title: Magazine Vertical
 * Slug: graham/magazine-vertical
 * Categories: graham_magazine
*/
?>

<!-- wp:group -->
<div class="wp-block-group">

	<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"base"} -->
	<h2 class="wp-block-heading is-style-default has-base-font-size" style="text-transform:uppercase"><?php esc_html_e( 'Category Title', 'graham' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--60)">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:query {"query":{"perPage":"1","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
			<div class="wp-block-query">

				<!-- wp:post-template -->

					<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
					<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">

						<!-- wp:post-featured-image {"isLink":true,"height":"300px"} /-->

						<!-- wp:pattern {"slug":"graham/postmeta"} /-->

						<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}}} /-->

						<!-- wp:post-excerpt {"moreText":"Continue reading","style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

					</div>
					<!-- /wp:group -->

				<!-- /wp:post-template -->

			</div>
			<!-- /wp:query -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:query {"query":{"perPage":"4","pages":"1","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
			<div class="wp-block-query">

				<!-- wp:post-template -->

				<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|60"}}}} -->
				<div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--60)">

					<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">

						<!-- wp:post-featured-image {"isLink":true} /-->

					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">

						<!-- wp:pattern {"slug":"graham/postmeta-date"} /-->

						<!-- wp:post-title {"isLink":true,"fontSize":"medium", "style":{"spacing":{"margin":{"top":"0"}}}} /-->

					</div>
					<!-- /wp:column -->

				</div>
				<!-- /wp:columns -->

				<!-- /wp:post-template -->

			</div>
			<!-- /wp:query -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
