<?php

/**
 * Title: Portfolio Showcase Section
 * Slug: mighty-builders/portfolio-block
 * Categories: mighty-builders
 */
$mighty_builders_url = trailingslashit(get_template_directory_uri());
$mighty_builders_images = array(
    $mighty_builders_url . 'assets/images/p1.jpg',
    $mighty_builders_url . 'assets/images/p2.jpg',
    $mighty_builders_url . 'assets/images/p3.jpg',
    $mighty_builders_url . 'assets/images/p4.jpg',
    $mighty_builders_url . 'assets/images/p5.jpg',
    $mighty_builders_url . 'assets/images/p6.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"7rem","bottom":"7em","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:0;padding-bottom:7em;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"mighty-builders-fade-up","layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group mighty-builders-fade-up"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
            <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
            <!-- /wp:separator -->

            <!-- wp:heading {"textAlign":"center","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary"} -->
            <h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e('Portfolios', 'mighty-builders') ?></h6>
            <!-- /wp:heading -->

            <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
            <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color"><?php esc_html_e('Latest Projects', 'mighty-builders') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"24px"}}}} -->
        <p class="has-text-align-center" style="margin-top:24px"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas that emphasize cleanliness', 'mighty-builders') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"44px"},"blockGap":{"left":"0px"}}},"className":"mighty-builders-fade-up"} -->
    <div class="wp-block-columns mighty-builders-fade-up" style="margin-top:44px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-mighty-builders-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-builders-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($mighty_builders_images[0]) ?>","id":7784,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":300,"isDark":false,"className":"mighty-builders-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light mighty-builders-portfolio-box" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7784" alt="" src="<?php echo esc_url($mighty_builders_images[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px"><?php esc_html_e('Project Construction', 'mighty-builders') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-builders') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-builders') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-mighty-builders-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-builders-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($mighty_builders_images[1]) ?>","id":7785,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":300,"className":"mighty-builders-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover mighty-builders-portfolio-box" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7785" alt="" src="<?php echo esc_url($mighty_builders_images[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px"><?php esc_html_e('Project Building', 'mighty-builders') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-builders') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-builders') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-mighty-builders-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-builders-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($mighty_builders_images[2]) ?>","id":7786,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":300,"className":"mighty-builders-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover mighty-builders-portfolio-box" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7786" alt="" src="<?php echo esc_url($mighty_builders_images[2]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Land Planning', 'mighty-builders') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-builders') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-builders') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"left":"0px"}}},"className":"mighty-builders-fade-up"} -->
    <div class="wp-block-columns mighty-builders-fade-up" style="margin-top:0px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-mighty-builders-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-builders-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($mighty_builders_images[3]) ?>","id":7787,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":300,"isDark":false,"className":"mighty-builders-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light mighty-builders-portfolio-box" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7787" alt="" src="<?php echo esc_url($mighty_builders_images[3]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px"><?php esc_html_e('Project Bridge', 'mighty-builders') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-builders') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-builders') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-mighty-builders-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-builders-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($mighty_builders_images[4]) ?>","id":7788,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":300,"isDark":false,"className":"mighty-builders-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light mighty-builders-portfolio-box" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7788" alt="" src="<?php echo esc_url($mighty_builders_images[4]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px"><?php esc_html_e('Underground Tunnel', 'mighty-builders') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-builders') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-builders') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-mighty-builders-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-builders-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($mighty_builders_images[5]) ?>","id":7789,"dimRatio":0,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":300,"isDark":false,"className":"mighty-builders-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light mighty-builders-portfolio-box" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7789" alt="" src="<?php echo esc_url($mighty_builders_images[5]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px"><?php esc_html_e('Project Stadium', 'mighty-builders') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-builders') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"9px","bottom":"9px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:9px;padding-right:var(--wp--preset--spacing--50);padding-bottom:9px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-builders') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->