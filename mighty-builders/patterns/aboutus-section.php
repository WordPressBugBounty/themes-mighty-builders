<?php

/**
 * Title: About Us Section
 * Slug: mighty-builders/aboutus-section
 * Categories: mighty-builders
 */
$mighty_builders_url = trailingslashit(get_template_directory_uri());
$mighty_builders_images = array(
    $mighty_builders_url . 'assets/images/about.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"100px","top":"100px"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"mighty-builders-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center mighty-builders-fade-up"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
                <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
                <!-- /wp:separator -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
                <p class="has-primary-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('About Us', 'mighty-builders') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"16px","bottom":"0"}}},"fontSize":"xx-large"} -->
            <h1 class="wp-block-heading has-xx-large-font-size" style="margin-top:16px;margin-bottom:0"><?php esc_html_e('Foundations of Excellence: Delve into Our Construction Story!', 'mighty-builders') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement, and well-being of a household. These services can be essential for homeowners to ensure the smooth functioning and comfort of their homes.', 'mighty-builders') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:30px"><!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"22px","bottom":"22px"}},"border":{"radius":"50px"},"typography":{"fontSize":"18px"}}} -->
                    <div class="wp-block-button has-custom-font-size" style="font-size:18px"><a class="wp-block-button__link has-light-color-color has-text-color has-link-color wp-element-button" style="border-radius:50px;padding-top:22px;padding-right:var(--wp--preset--spacing--70);padding-bottom:22px;padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Read More', 'mighty-builders') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"medium"} -->
                <p class="has-primary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Call Us : ', 'mighty-builders') ?> <a href="#"><?php esc_html_e('+1 (012) 345-6789', 'mighty-builders') ?></a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","className":"mighty-builders-slide-up"} -->
        <div class="wp-block-column is-vertically-aligned-center mighty-builders-slide-up"><!-- wp:image {"id":7735,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($mighty_builders_images[0]) ?>" alt="" class="wp-image-7735" style="border-radius:0px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->