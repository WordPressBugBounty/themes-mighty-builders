<?php

/**
 * mighty_builders: Block Patterns
 *
 * @since mighty_builders 1.0.0
 */

/**
 * Registers pattern categories for mighty_builders
 *
 * @since mighty_builders 1.0.0
 *
 * @return void
 */
function mighty_builders_register_pattern_category()
{
	$block_pattern_categories = array(
		'mighty-builders' => array('label' => __('Mighty Builders Sections', 'mighty-builders')),
		'mighty-builders-home' => array('label' => __('Mighty Builders Home Pages', 'mighty-builders')),
		'mighty-builders-contact' => array('label' => __('Mighty Builders Contact Us Pages', 'mighty-builders')),
		'mighty-builders-services' => array('label' => __('Mighty Builders Service Pages', 'mighty-builders')),
		'mighty-builders-about' => array('label' => __('Mighty Builders About Us Pages', 'mighty-builders'))
	);

	$block_pattern_categories = apply_filters('mighty_builders_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'mighty_builders_register_pattern_category', 9);
