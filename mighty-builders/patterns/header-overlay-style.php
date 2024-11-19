<?php

/**
 * Title: Header Overlay Style
 * Slug: mighty-builders/header-overlay-style
 * Categories: mighty-builders, header
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"var:preset|spacing|40","bottom":"10px","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"style":"none","width":"0px"}},"color":{"background":"#01252614"}},"className":"mighty-builders-header mighty-builders-overlap-nav mighty-builders-sticky-menu","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group mighty-builders-header mighty-builders-overlap-nav mighty-builders-sticky-menu has-background" style="border-bottom-style:none;border-bottom-width:0px;background-color:#01252614;margin-top:0;margin-bottom:0;padding-top:10px;padding-right:var(--wp--preset--spacing--40);padding-bottom:10px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"mighty-builders-sticky-navigation","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group mighty-builders-sticky-navigation"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:site-logo {"width":32} /-->

            <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"2px","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"7px"}}}} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:navigation {"textColor":"light-color","overlayBackgroundColor":"secondary-bg","overlayTextColor":"heading-color","className":"mighty-builders-navigation","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"32px"}},"fontSize":"normal"} -->
        <!-- wp:page-list /-->
        <!-- /wp:navigation -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"query":{"post_type":"product"},"isSearchFieldHidden":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"transparent","textColor":"light-color","className":"mighty-builders-nav-search","fontSize":"normal"} /-->

            <!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"alt","iconClass":"wc-block-customer-account__account-icon","className":"mighty-builders-nav-account","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

            <!-- wp:woocommerce/mini-cart {"priceColor":{"slug":"light-color","color":"#FFFFFF","name":"Light Color","class":"has-light-color-price-color"},"iconColor":{"slug":"light-color","color":"#FFFFFF","name":"Light Color","class":"has-light-color-price-color"},"productCountColor":{"slug":"primary","color":"#007766","name":"Primary","class":"has-primary-product-count-color"}} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->