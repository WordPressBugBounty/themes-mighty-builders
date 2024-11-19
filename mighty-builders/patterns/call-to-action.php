<?php

/**
 * Title: Call To Action Section
 * Slug: mighty-builders/call-to-action
 * Categories: mighty-builders
 */
$mighty_builders_url = trailingslashit(get_template_directory_uri());
$mighty_builders_images = array(
    $mighty_builders_url . 'assets/images/ctabg.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","bottom":"0px","top":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($mighty_builders_images[0]) ?>","id":7746,"dimRatio":60,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":540,"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7746" alt="" src="<?php echo esc_url($mighty_builders_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Ready to Build Your Vision? Contact Us Today!', 'mighty-builders') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.', 'mighty-builders') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"48px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:48px"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"22px","bottom":"22px"}},"border":{"radius":"70px"},"typography":{"fontSize":"18px"}}} -->
                <div class="wp-block-button has-custom-font-size" style="font-size:18px"><a class="wp-block-button__link wp-element-button" style="border-radius:70px;padding-top:22px;padding-right:var(--wp--preset--spacing--60);padding-bottom:22px;padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Schedule Quick Call', 'mighty-builders') ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"22px","bottom":"22px"}},"border":{"radius":"70px"},"typography":{"fontSize":"18px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:70px;padding-top:22px;padding-right:var(--wp--preset--spacing--50);padding-bottom:22px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Request an Estimate', 'mighty-builders') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->