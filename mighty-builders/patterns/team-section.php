<?php

/**
 * Title: Team Section
 * Slug: mighty-builders/team-section
 * Categories: mighty-builders
 */
$mighty_builders_url = trailingslashit(get_template_directory_uri());
$mighty_builders_images = array(
    $mighty_builders_url . 'assets/images/team_1.jpg',
    $mighty_builders_url . 'assets/images/team_2.jpg',
    $mighty_builders_url . 'assets/images/team_3.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"gradient":"light-shade-color","className":"mighty-builders-fade-up","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group mighty-builders-fade-up has-light-shade-color-gradient-background has-background" style="padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
            <h1 class="wp-block-heading has-text-align-left" style="font-style:normal;font-weight:600"><?php esc_html_e('Meet the Team', 'mighty-builders') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph -->
            <p><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas that emphasize cleanliness', 'mighty-builders') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"54px"},"blockGap":{"left":"44px"}}}} -->
    <div class="wp-block-columns" style="margin-top:54px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"mighty-builders-team-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group mighty-builders-team-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($mighty_builders_images[0]) ?>","id":459,"dimRatio":50,"customGradient":"linear-gradient(180deg,rgba(7,146,227,0) 0%,rgb(42,48,201) 100%)","contentPosition":"bottom left","style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"0px"}},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(7,146,227,0) 0%,rgb(42,48,201) 100%)"></span><img class="wp-block-cover__image-background wp-image-459" alt="" src="<?php echo esc_url($mighty_builders_images[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
                            <h4 class="wp-block-heading has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'mighty-builders') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('Founder', 'mighty-builders') ?></p>
                            <!-- /wp:paragraph -->
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
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"mighty-builders-team-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group mighty-builders-team-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($mighty_builders_images[1]) ?>","id":466,"dimRatio":50,"customGradient":"linear-gradient(180deg,rgba(7,146,227,0) 0%,rgb(42,48,201) 100%)","contentPosition":"bottom left","style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"0px"}},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(7,146,227,0) 0%,rgb(42,48,201) 100%)"></span><img class="wp-block-cover__image-background wp-image-466" alt="" src="<?php echo esc_url($mighty_builders_images[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
                            <h4 class="wp-block-heading has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Lacy Larrat', 'mighty-builders') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('Finance Head', 'mighty-builders') ?></p>
                            <!-- /wp:paragraph -->
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
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"mighty-builders-team-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group mighty-builders-team-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($mighty_builders_images[2]) ?>","id":467,"dimRatio":50,"customGradient":"linear-gradient(180deg,rgba(7,146,227,0) 0%,rgb(42,48,201) 100%)","contentPosition":"bottom left","style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"0px"}},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(7,146,227,0) 0%,rgb(42,48,201) 100%)"></span><img class="wp-block-cover__image-background wp-image-467" alt="" src="<?php echo esc_url($mighty_builders_images[2]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
                            <h4 class="wp-block-heading has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Matt Patrick', 'mighty-builders') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('Project Manager', 'mighty-builders') ?></p>
                            <!-- /wp:paragraph -->
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