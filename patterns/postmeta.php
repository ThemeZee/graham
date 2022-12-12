<?php
/**
 * Title: Postmeta
 * Slug: graham/postmeta
 * Inserter: no
*/
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"}} -->
<div class="wp-block-group has-gray-color has-text-color" style="font-style:normal;font-weight:500">

	<!-- wp:paragraph -->
	<p><?php _e( 'Posted on', 'graham' ); ?>&nbsp;</p>
	<!-- /wp:paragraph -->

	<!-- wp:post-date {"isLink":true} /-->

	<!-- wp:paragraph -->
	<p>&nbsp;<?php _e( 'by', 'graham' ); ?>&nbsp;</p>
	<!-- /wp:paragraph -->

	<!-- wp:post-author {"showAvatar":false} /-->

	<!-- wp:post-terms {"term":"category","prefix":"&nbsp;<?php _e( 'in', 'graham' ); ?>&nbsp;"} /-->

</div>
<!-- /wp:group -->
