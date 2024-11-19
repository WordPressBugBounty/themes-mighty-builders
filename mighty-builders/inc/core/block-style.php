<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package mighty_builders
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function mighty_builders_register_block_styles()
    {
        register_block_style(
            'core/columns',
            array(
                'name'  => 'mighty-builders-boxshadow',
                'label' => __('Box Shadow', 'mighty-builders')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'mighty-builders-boxshadow',
                'label' => __('Box Shadow', 'mighty-builders')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'mighty-builders-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'mighty-builders')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'mighty-builders-boxshadow-large',
                'label' => __('Box Shadow Large', 'mighty-builders')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'mighty-builders-boxshadow',
                'label' => __('Box Shadow', 'mighty-builders')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'mighty-builders-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'mighty-builders')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'mighty-builders-boxshadow-large',
                'label' => __('Box Shadow Larger', 'mighty-builders')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'mighty-builders-boxshadow',
                'label' => __('Box Shadow', 'mighty-builders')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'mighty-builders-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'mighty-builders')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'mighty-builders-boxshadow-larger',
                'label' => __('Box Shadow Large', 'mighty-builders')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'mighty-builders-image-pulse',
                'label' => __('Iamge Pulse Effect', 'mighty-builders')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'mighty-builders-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'mighty-builders')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'mighty-builders-image-hover-pulse',
                'label' => __('Hover Pulse Effect', 'mighty-builders')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'mighty-builders-image-hover-rotate',
                'label' => __('Hover Rotate Effect', 'mighty-builders')
            )
        );
        register_block_style(
            'core/columns',
            array(
                'name'  => 'mighty-builders-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'mighty-builders')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'mighty-builders-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'mighty-builders')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'mighty-builders-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'mighty-builders')
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'categories-background-with-round',
                'label' => __('Background with round corner style', 'mighty-builders')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-primary-color',
                'label' => __('Hover: Primary color', 'mighty-builders')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-secondary-color',
                'label' => __('Hover: Secondary color', 'mighty-builders')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-color',
                'label' => __('Hover: Primary Color', 'mighty-builders')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'mighty-builders')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-bgcolor',
                'label' => __('Hover: Primary color fill', 'mighty-builders')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-bgcolor',
                'label' => __('Hover: Secondary color fill', 'mighty-builders')
            )
        );

        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-color',
                'label' => __('Hover: Primary Color', 'mighty-builders')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'mighty-builders')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-fill',
                'label' => __('Hover: Primary Fill', 'mighty-builders')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-fill',
                'label' => __('Hover: secondary Fill', 'mighty-builders')
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-no-bullet',
                'label' => __('List Style: Hide bullet', 'mighty-builders')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-primary',
                'label' => __('Hover style with primary color and hide bullet', 'mighty-builders')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-secondary',
                'label' => __('Hover style with secondary color and hide bullet', 'mighty-builders')
            )
        );

        register_block_style(
            'core/gallery',
            array(
                'name'  => 'enable-grayscale-mode-on-image',
                'label' => __('Enable Grayscale Mode on Image', 'mighty-builders')
            )
        );
        register_block_style(
            'core/social-links',
            array(
                'name'  => 'social-icon-border',
                'label' => __('Border Style', 'mighty-builders')
            )
        );
        register_block_style(
            'core/page-list',
            array(
                'name'  => 'mighty-builders-page-list-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'mighty-builders')
            )
        );
        register_block_style(
            'core/categories',
            array(
                'name'  => 'mighty-builders-categories-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'mighty-builders')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'mighty-builders-cover-round-style',
                'label' => __('Round Corner Style', 'mighty-builders')
            )
        );
    }
    add_action('init', 'mighty_builders_register_block_styles');
}
