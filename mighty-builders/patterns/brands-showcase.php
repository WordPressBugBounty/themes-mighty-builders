<?php

/**
 * Title: Brand Showcase Section
 * Slug: mighty-builders/brand-showcase
 * Categories: mighty-builders
 */
$mighty_builders_url = trailingslashit(get_template_directory_uri());
$mighty_builders_images = array(
    $mighty_builders_url . 'assets/images/brand_1.png',
    $mighty_builders_url . 'assets/images/brand_2.png',
    $mighty_builders_url . 'assets/images/brand_3.png',
    $mighty_builders_url . 'assets/images/brand_4.png',
    $mighty_builders_url . 'assets/images/brand_5.png'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="padding-top:60px;padding-right:var(--wp--preset--spacing--50);padding-bottom:60px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:gallery {"columns":5,"imageCrop":false,"linkTo":"none","className":"is-style-enable-grayscale-mode-on-image mighty-builders-brands"} -->
    <figure class="wp-block-gallery has-nested-images columns-5 is-style-enable-grayscale-mode-on-image mighty-builders-brands"><!-- wp:image {"id":7141,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($mighty_builders_images[0]) ?>" alt="" class="wp-image-7141" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":7142,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($mighty_builders_images[1]) ?>" alt="" class="wp-image-7142" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":7145,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($mighty_builders_images[2]) ?>" alt="" class="wp-image-7145" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":7144,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($mighty_builders_images[3]) ?>" alt="" class="wp-image-7144" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":7143,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($mighty_builders_images[4]) ?>" alt="" class="wp-image-7143" /></figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->
</div>
<!-- /wp:group -->