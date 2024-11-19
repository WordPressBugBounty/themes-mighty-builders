<?php

/**
 * Title: Latest Post Grid Section
 * Slug: mighty-builders/latest-post-grid
 * Categories: mighty-builders
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"80px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}}},"className":"mighty-builders-fade-up","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group mighty-builders-fade-up" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"48px"}}},"className":"mighty-builders-header"} -->
    <h1 class="wp-block-heading has-text-align-center mighty-builders-header" style="margin-bottom:48px;font-style:normal;font-weight:600"><?php esc_html_e('Latest Blogs and Insights', 'mighty-builders') ?></h1>
    <!-- /wp:heading -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:query {"queryId":23,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"default","columnCount":3}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}},"backgroundColor":"light-color","className":"is-style-mighty-builders-boxshadow-medium mighty-builders-post-featuredimg","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-mighty-builders-boxshadow-medium mighty-builders-post-featuredimg has-light-color-background-color has-background" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":40,"overlayColor":"background-alt","isUserOverlayColor":true,"minHeight":600,"contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"border":{"radius":"0px"}},"className":"mighty-builders-post-cover","layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-bottom-left mighty-builders-post-cover" style="border-radius:0px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim-40 has-background-dim"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                                <div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"meta-color","fontSize":"small"} /-->

                                    <!-- wp:paragraph -->
                                    <p>-</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} /-->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:query {"queryId":23,"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"grid","columnCount":2}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"mighty-builders-post-featuredimg is-style-default","layout":{"type":"constrained"}} -->
                <div class="wp-block-group mighty-builders-post-featuredimg is-style-default has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"160px","align":"wide","style":{"spacing":{"margin":{"bottom":"0px"}},"border":{"radius":"0px"}}} /-->

                    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","left":"0","right":"0","top":"24px"},"margin":{"top":"0","bottom":"0"}}},"className":"is-style-default","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"meta-color","fontSize":"small"} /-->

                            <!-- wp:paragraph -->
                            <p>-</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"small"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"medium"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->