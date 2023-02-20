<?php
/**
 * Title: Magazine Double
 * Slug: graham/magazine-double
 * Categories: graham_magazine
*/
?>

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|medium-gray","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--medium-gray);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--70)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:heading {"style":{"typography":{}},"className":"flip-link-hover","fontSize":"base"} -->
			<h2 class="wp-block-heading flip-link-hover has-base-font-size"><?php esc_html_e( 'Category', 'graham' ); ?>: <a href="#">Name</a></h2>
			<!-- /wp:heading -->

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

			<!-- wp:query {"query":{"perPage":"2","pages":"1","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
			<div class="wp-block-query">

				<!-- wp:post-template -->

				<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|60","bottom":"0"}}}} -->
				<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0">

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

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:heading {"style":{"typography":{}},"className":"flip-link-hover","fontSize":"base"} -->
			<h2 class="wp-block-heading flip-link-hover has-base-font-size"><?php esc_html_e( 'Category', 'graham' ); ?>: <a href="#">Name</a></h2>
			<!-- /wp:heading -->

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

			<!-- wp:query {"query":{"perPage":"2","pages":"1","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
			<div class="wp-block-query">

				<!-- wp:post-template -->

				<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|60","bottom":"0"}}}} -->
				<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0">

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
