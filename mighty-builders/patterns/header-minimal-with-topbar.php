<?php

/**
 * Title: Header Minimal with Topbar
 * Slug: mighty-builders/header-minimal-with-topbar
 * Categories: mighty-builders
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"20px"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:20px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-dark-shade-background-color has-background" style="border-bottom-style:none;border-bottom-width:0px;padding-top:10px;padding-right:var(--wp--preset--spacing--40);padding-bottom:10px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"light-color","fontSize":"small"} -->
                <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><a href="#"><?php esc_html_e('Get a 30% discount on all services when you refer someone.', 'mighty-builders') ?></a></h5>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:social-links {"iconColor":"dark-shade","iconColorValue":"#012526","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFF","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"className":"mighty-builders-header-socials"} -->
            <ul class="wp-block-social-links has-icon-color has-icon-background-color mighty-builders-header-socials"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"x"} /-->

                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"32px","bottom":"32px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:32px;padding-right:var(--wp--preset--spacing--40);padding-bottom:32px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:site-logo {"width":44} /-->

                <!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"10px"}}},"fontSize":"big"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:navigation {"textColor":"heading-color","overlayBackgroundColor":"secondary-bg","overlayTextColor":"heading-color","className":"mighty-builders-navigation","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"32px"}},"fontSize":"normal"} -->
            <!-- wp:page-list /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->