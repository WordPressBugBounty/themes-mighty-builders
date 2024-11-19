<?php

/**
 * Title: Left Sidebar Page Template
 * Slug: mighty-builders/template-page-leftsidebar
 * Categories: template
 * Inserter: false
 */
$mighty_builders_url = trailingslashit(get_template_directory_uri());
$mighty_builders_images = array(
    $mighty_builders_url . 'assets/images/banner_image.jpg',
);
?>
<!-- wp:group {"tagName":"main","style":{"border":{"top":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"gradient":"primary-gradient-alt","layout":{"type":"constrained","contentSize":"100%"},"fontSize":"xx-large"} -->
    <div class="wp-block-group has-primary-gradient-alt-gradient-background has-background has-xx-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($mighty_builders_images[0]) ?>","id":7665,"dimRatio":20,"customOverlayColor":"#443c38","isUserOverlayColor":true,"minHeight":260,"style":{"spacing":{"padding":{"top":"80px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-cover" style="padding-top:80px;min-height:260px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim" style="background-color:#443c38"></span><img class="wp-block-cover__image-background wp-image-7665" alt="" src="<?php echo esc_url($mighty_builders_images[0]) ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontSize":"xx-large"} /--></div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"48px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
            <div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"mighty-builders","area":"uncategorized"} /--></div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"70%"} -->
            <div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-featured-image {"height":"580px","style":{"border":{"radius":"0px"},"spacing":{"margin":{"bottom":"40px"}}}} /-->

                <!-- wp:post-content /-->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->