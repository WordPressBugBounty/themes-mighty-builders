<?php

/**
 * Title: Hero/Banner Section
 * Slug: mighty-builders/hero-section
 * Categories: mighty-builders
 */
$mighty_builders_url = trailingslashit(get_template_directory_uri());
$mighty_builders_images = array(
    $mighty_builders_url . 'assets/images/banner_image.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"657px"}},"gradient":"primary-gradient","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-primary-gradient-gradient-background has-background" style="min-height:657px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($mighty_builders_images[0]) ?>","id":7665,"dimRatio":40,"overlayColor":"background-alt","isUserOverlayColor":true,"minHeight":700,"contentPosition":"center center","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"30px","bottom":"30px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-cover" style="padding-top:30px;padding-right:var(--wp--preset--spacing--40);padding-bottom:30px;padding-left:var(--wp--preset--spacing--40);min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7665" alt="" src="<?php echo esc_url($mighty_builders_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
                <div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"mighty-builders-slide-up","layout":{"type":"constrained","contentSize":""}} -->
                    <div class="wp-block-group mighty-builders-slide-up" style="padding-right:0;padding-left:0"><!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"10px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
                        <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="margin-top:10px;margin-bottom:24px;text-transform:uppercase"><?php esc_html_e('Building Dreams, Crafting Futures: Your Trusted Construction Partner!', 'mighty-builders') ?></h1>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                        <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-builders') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"var:preset|spacing|30"}}} -->
                        <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"border":{"radius":"50px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:50px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Schedule Quick Call', 'mighty-builders') ?></a></div>
                            <!-- /wp:button -->

                            <!-- wp:button {"backgroundColor":"light-color","textColor":"dark-color","style":{"border":{"radius":"50px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:50px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Request an Estimate', 'mighty-builders') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"></div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->