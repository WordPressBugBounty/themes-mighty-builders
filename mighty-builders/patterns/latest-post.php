<?php

/**
 * Title: Latest Post Section
 * Slug: mighty-builders/latest-post
 * Categories: mighty-builders
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"100px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}}},"className":"mighty-builders-fade-up","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group mighty-builders-fade-up" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"48px"}}},"className":"mighty-builders-header"} -->
    <h1 class="wp-block-heading has-text-align-center mighty-builders-header" style="margin-bottom:48px;font-style:normal;font-weight:600"><?php esc_html_e('Latest Blogs and Insights', 'mighty-builders') ?></h1>
    <!-- /wp:heading -->

    <!-- wp:query {"queryId":23,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-mighty-builders-boxshadow-medium mighty-builders-post-featuredimg","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-mighty-builders-boxshadow-medium mighty-builders-post-featuredimg has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"240px","align":"wide","style":{"spacing":{"margin":{"bottom":"0px"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"1.8rem"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:1.8rem;padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"meta-color","fontSize":"small"} /-->

                    <!-- wp:paragraph -->
                    <p>-</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"small"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"big"} /-->

                <!-- wp:post-excerpt {"excerptLength":17,"style":{"spacing":{"margin":{"top":"16px","bottom":"0"}}}} /-->

                <!-- wp:read-more {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"50px","width":"1px"}},"backgroundColor":"transparent","textColor":"primary","className":"is-style-readmore-hover-secondary-fill mighty-builders-post-more"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->