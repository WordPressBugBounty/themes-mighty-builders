<?php

/**
 * Title: Services Section
 * Slug: mighty-builders/services-section
 * Categories: mighty-builders
 */
$mighty_builders_url = trailingslashit(get_template_directory_uri());
$mighty_builders_images = array(
    $mighty_builders_url . 'assets/images/s1.jpg',
    $mighty_builders_url . 'assets/images/s2.jpg',
    $mighty_builders_url . 'assets/images/s3.jpg',
    $mighty_builders_url . 'assets/images/s4.jpg',
    $mighty_builders_url . 'assets/images/s5.jpg',
    $mighty_builders_url . 'assets/images/s6.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"mighty-builders-fade-up","layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group mighty-builders-fade-up"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
            <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
            <!-- /wp:separator -->

            <!-- wp:heading {"textAlign":"center","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary"} -->
            <h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e('Services', 'mighty-builders') ?></h6>
            <!-- /wp:heading -->

            <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
            <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color"><?php esc_html_e('Explore What We Offer', 'mighty-builders') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"12px"}}}} -->
        <p class="has-text-align-center" style="margin-top:12px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'mighty-builders') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"},"blockGap":{"left":"40px"}}},"className":"mighty-builders-fade-up"} -->
    <div class="wp-block-columns mighty-builders-fade-up" style="margin-top:60px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"30px","bottom":"30px","right":"30px","left":"30px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-mighty-builders-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-builders-boxshadow-medium has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":7723,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url($mighty_builders_images[0]) ?>" alt="" class="wp-image-7723" style="border-style:none;border-width:0px;border-radius:0px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-left has-big-font-size" style="margin-top:24px"><?php esc_html_e('General Contracting', 'mighty-builders') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-builders') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-builders') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"30px","bottom":"30px","right":"30px","left":"30px"}},"border":{"radius":"0px"}},"backgroundColor":"light-color","className":"is-style-mighty-builders-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-builders-boxshadow-medium has-light-color-background-color has-background" style="border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":7724,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($mighty_builders_images[1]) ?>" alt="" class="wp-image-7724" style="border-style:none;border-width:0px;border-radius:0px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-left has-big-font-size" style="margin-top:24px"><?php esc_html_e('Design Build', 'mighty-builders') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-builders') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-builders') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"30px","bottom":"30px","right":"30px","left":"30px"}},"border":{"radius":"0px"}},"backgroundColor":"light-color","className":"is-style-mighty-builders-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-builders-boxshadow-medium has-light-color-background-color has-background" style="border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":7725,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($mighty_builders_images[2]) ?>" alt="" class="wp-image-7725" style="border-style:none;border-width:0px;border-radius:0px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-left has-big-font-size" style="margin-top:24px"><?php esc_html_e('Construction Management', 'mighty-builders') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-builders') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-builders') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"left":"40px"}}},"className":"mighty-builders-fade-up"} -->
    <div class="wp-block-columns mighty-builders-fade-up" style="margin-top:40px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"30px","left":"30px","top":"30px","bottom":"30px"}},"border":{"radius":"0px"}},"backgroundColor":"light-color","className":"is-style-mighty-builders-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-builders-boxshadow-medium has-light-color-background-color has-background" style="border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":7726,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($mighty_builders_images[3]) ?>" alt="" class="wp-image-7726" style="border-style:none;border-width:0px;border-radius:0px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-left has-big-font-size" style="margin-top:24px"><?php esc_html_e('Structural Engineering', 'mighty-builders') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-builders') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-builders') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"30px","bottom":"30px","right":"30px","left":"30px"}},"border":{"radius":"0px"}},"backgroundColor":"light-color","className":"is-style-mighty-builders-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-builders-boxshadow-medium has-light-color-background-color has-background" style="border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":7731,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($mighty_builders_images[4]) ?>" alt="" class="wp-image-7731" style="border-style:none;border-width:0px;border-radius:0px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-left has-big-font-size" style="margin-top:24px"><?php esc_html_e('Land Development', 'mighty-builders') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-builders') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-builders') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"30px","bottom":"30px","right":"30px","left":"30px"}},"border":{"radius":"0px"}},"backgroundColor":"light-color","className":"is-style-mighty-builders-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-builders-boxshadow-medium has-light-color-background-color has-background" style="border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":7732,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($mighty_builders_images[5]) ?>" alt="" class="wp-image-7732" style="border-style:none;border-width:0px;border-radius:0px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-left has-big-font-size" style="margin-top:24px"><?php esc_html_e('Demolition', 'mighty-builders') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left"} -->
                    <p class="has-text-align-left"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-builders') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-builders') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->