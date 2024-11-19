<?php

/**
 * file for holding dashboard welcome page for theme
 */
if (!function_exists('mighty_builders_is_plugin_installed')) {
    function mighty_builders_is_plugin_installed($plugin_slug)
    {
        $plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
        return file_exists($plugin_path);
    }
}
if (!function_exists('mighty_builders_is_plugin_activated')) {
    function mighty_builders_is_plugin_activated($plugin_slug)
    {
        return is_plugin_active($plugin_slug);
    }
}
if (!function_exists('mighty_builders_welcome_notice')) :
    function mighty_builders_welcome_notice()
    {
        if (get_option('mighty_builders_dismissed_custom_notice')) {
            return;
        }
        global $pagenow;
        $current_screen  = get_current_screen();

        if (is_admin()) {
            if ($current_screen->id !== 'dashboard' && $current_screen->id !== 'themes') {
                return;
            }
            if (is_network_admin()) {
                return;
            }
            if (!current_user_can('manage_options')) {
                return;
            }
            $theme = wp_get_theme();

            if (is_child_theme()) {
                $theme = wp_get_theme()->parent();
            }
            $mighty_builders_version = $theme->get('Version');


?>
            <div class="mighty-builders-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice" id="mighty-builders-dismiss-notice">
                <div class="info-content">
                    <div class="notice-holder">
                        <h5><span class="theme-name"><span><?php echo __('Welcome to Mighty Builders', 'mighty-builders'); ?></span></h5>
                        <h1><?php echo __('Take your website building to next level with Cozy Blocks!', 'mighty-builders'); ?></h1>
                        </h3>
                        <div class="notice-text">
                            <p class="cozy-blocks-text"><?php echo __('Build website for any niche effortlessly with Cozy Blocks! Just install and activate to access over 30 advanced blocks, 200+ ready to use patterns, and a comprehensive library of 10+ starter templates. Start crafting your perfect website today!', 'mighty-builders') ?></p>
                            <p><?php echo __('Please install and activate all recommended to use blcoks and demo importer features- Cozy Addons, Cozy Essential Addons, Advanced Import.', 'mighty-builders') ?></p>
                        </div>
                        <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'mighty-builders'); ?></a>
                        <a href="<?php echo admin_url(); ?>themes.php?page=about-mighty-builders" class="button admin-button info-button"><?php echo __('Explore Mighty Builders', 'mighty-builders'); ?></a>

                    </div>
                </div>
                <div class="theme-hero-screens">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/screen_plugin_ct.png'); ?>" />
                </div>

            </div>
    <?php
        }
    }
endif;
add_action('admin_notices', 'mighty_builders_welcome_notice');
function mighty_builders_dismissble_notice()
{
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'mighty_builders_admin_nonce')) {
        wp_send_json_error(array('message' => 'Nonce verification failed.'));
        return;
    }

    $result = update_option('mighty_builders_dismissed_custom_notice', 1);

    if ($result) {
        wp_send_json_success();
    } else {
        wp_send_json_error(array('message' => 'Failed to update option'));
    }
}
add_action('wp_ajax_mighty_builders_dismissble_notice', 'mighty_builders_dismissble_notice');
// Hook into a custom action when the button is clicked
add_action('wp_ajax_mighty_builders_install_and_activate_plugins', 'mighty_builders_install_and_activate_plugins');
add_action('wp_ajax_nopriv_mighty_builders_install_and_activate_plugins', 'mighty_builders_install_and_activate_plugins');
add_action('wp_ajax_mighty_builders_rplugin_activation', 'mighty_builders_rplugin_activation');
add_action('wp_ajax_nopriv_mighty_builders_rplugin_activation', 'mighty_builders_rplugin_activation');

// Function to install and activate the plugins



function mighty_builders_check_plugin_installed_status($pugin_slug, $plugin_file)
{
    return file_exists(ABSPATH . 'wp-content/plugins/' . $pugin_slug . '/' . $plugin_file) ? true : false;
}

/* Check if plugin is activated */


function mighty_builders_check_plugin_active_status($pugin_slug, $plugin_file)
{
    return is_plugin_active($pugin_slug . '/' . $plugin_file) ? true : false;
}

require_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/misc.php');
require_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
function mighty_builders_install_and_activate_plugins()
{
    if (!current_user_can('manage_options')) {
        return;
    }
    check_ajax_referer('mighty_builders_welcome_nonce', 'nonce');
    // Define the plugins to be installed and activated
    $recommended_plugins = array(
        array(
            'slug' => 'cozy-addons',
            'file' => 'cozy-addons.php',
            'name' => __('Cozy Addons', 'mighty-builders')
        ),
        array(
            'slug' => 'advanced-import',
            'file' => 'advanced-import.php',
            'name' => __('Advanced Imporrt', 'mighty-builders')
        ),
        array(
            'slug' => 'cozy-essential-addons',
            'file' => 'cozy-essential-addons.php',
            'name' => __('Cozy Essential Addons', 'mighty-builders')
        ),
        // Add more plugins here as needed
    );

    // Include the necessary WordPress functions


    // Set up a transient to store the installation progress
    set_transient('install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10);

    // Loop through each plugin
    foreach ($recommended_plugins as $plugin) {
        $plugin_slug = $plugin['slug'];
        $plugin_file = $plugin['file'];
        $plugin_name = $plugin['name'];

        // Check if the plugin is active
        if (is_plugin_active($plugin_slug . '/' . $plugin_file)) {
            mighty_builders_update_install_and_activate_progress($plugin_name, 'Already Active');
            continue; // Skip to the next plugin
        }

        // Check if the plugin is installed but not active
        if (is_mighty_builders_plugin_installed($plugin_slug . '/' . $plugin_file)) {
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);
            if (is_wp_error($activate)) {
                mighty_builders_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            mighty_builders_update_install_and_activate_progress($plugin_name, 'Activated');
            continue; // Skip to the next plugin
        }

        // Plugin is not installed or activated, proceed with installation
        mighty_builders_update_install_and_activate_progress($plugin_name, 'Installing');

        // Fetch plugin information
        $api = plugins_api('plugin_information', array(
            'slug' => $plugin_slug,
            'fields' => array('sections' => false),
        ));

        // Check if plugin information is fetched successfully
        if (is_wp_error($api)) {
            mighty_builders_update_install_and_activate_progress($plugin_name, 'Error');
            continue; // Skip to the next plugin
        }

        // Set up the plugin upgrader
        $upgrader = new Plugin_Upgrader();
        $install = $upgrader->install($api->download_link);

        // Check if installation is successful
        if ($install) {
            // Activate the plugin
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);

            // Check if activation is successful
            if (is_wp_error($activate)) {
                mighty_builders_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            mighty_builders_update_install_and_activate_progress($plugin_name, 'Activated');
        } else {
            mighty_builders_update_install_and_activate_progress($plugin_name, 'Error');
        }
    }

    // Delete the progress transient
    $redirect_url = admin_url('themes.php?page=advanced-import');

    // Delete the progress transient
    delete_transient('install_and_activate_progress');
    // Return JSON response
    wp_send_json_success(array('redirect_url' => $redirect_url));
}

// Function to check if a plugin is installed but not active
function is_mighty_builders_plugin_installed($plugin_slug)
{
    $plugins = get_plugins();
    return isset($plugins[$plugin_slug]);
}

// Function to update the installation and activation progress
function mighty_builders_update_install_and_activate_progress($plugin_name, $status)
{
    $progress = get_transient('install_and_activate_progress');
    $progress[] = array(
        'plugin' => $plugin_name,
        'status' => $status,
    );
    set_transient('install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10);
}


function mighty_builders_dashboard_menu()
{
    add_theme_page(esc_html__('About Mighty Builders', 'mighty-builders'), esc_html__('About Mighty Builders', 'mighty-builders'), 'edit_theme_options', 'about-mighty-builders', 'mighty_builders_theme_info_display');
}
add_action('admin_menu', 'mighty_builders_dashboard_menu');
function mighty_builders_theme_info_display()
{ ?>
    <div class="dashboard-about-mighty-builders">
        <div class="mighty-builders-dashboard">
            <ul id="mighty-builders-dashboard-tabs-nav">
                <li><a href="#mighty-builders-welcome"><?php echo __('Get Started', 'mighty-builders') ?></a></li>
                <li><a href="#mighty-builders-setup"><?php echo __('Setup Instruction', 'mighty-builders') ?></a></li>
                <li><a href="#mighty-builders-comparision"><?php echo __('FREE VS PRO', 'mighty-builders') ?></a></li>
            </ul> <!-- END tabs-nav -->
            <div id="tabs-content">
                <div id="mighty-builders-welcome" class="tab-content">
                    <h1> <?php echo __('Welcome to the Mighty Builders - Home Services WordPress Theme', 'mighty-builders') ?></h1>
                    <p><?php echo __('Introducing Mighty Builders, the premier WordPress theme designed specifically for home service businesses, spanning HVAC, plumbing, cleaning, pest control, and beyond. Engineered for lightning-fast performance and seamless cross-browser compatibility, Mighty Builders ensures your online presence thrives. With built-in SEO features, your website is primed for success from the start. Customization is effortless with Mighty Builders, allowing you to tailor your site to perfection. Drive conversions with strategically placed CTAs and seamlessly integrate social media for maximum engagement. Plus, Mighty Builders seamlessly integrates with the WordPress native editor, offering you unparalleled flexibility in content creation. Stay ahead of the curve with Mighty Builders\'s regular updates, ensuring your site performs at its peak at all times. Elevate your business\'s online presence with Mighty Builders and set yourself apart from the competition. Explore more about Mighty Builders at https://cozythemes.com/mighty-builders-ultimate-home-services-wordpress-theme.', 'mighty-builders') ?></p>
                    <h3><?php echo __('Required Plugins', 'mighty-builders'); ?></h3>
                    <p class="notice-text"><?php echo __('Please install and activate all recommended pluign to import the demo with "one click demo import" feature and unlock premium features!(for pro version)', 'mighty-builders') ?></p>
                    <ul class="mighty-builders-required-plugin">
                        <li>

                            <h4><?php echo __('1. Cozy Addons', 'mighty-builders'); ?>
                                <?php
                                if (mighty_builders_is_plugin_activated('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'mighty-builders');
                                } elseif (mighty_builders_is_plugin_installed('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'mighty-builders');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'mighty-builders') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>

                            <h4><?php echo __('2. Cozy Essential Addons', 'mighty-builders'); ?>
                                <?php
                                if (mighty_builders_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'mighty-builders');
                                } elseif (mighty_builders_is_plugin_installed('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'mighty-builders');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-essential-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'mighty-builders') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>
                            <h4><?php echo __('3. Advanced Import - Need only to use "one click demo import" features', 'mighty-builders'); ?>
                                <?php
                                if (mighty_builders_is_plugin_activated('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin has been already activated!', 'mighty-builders');
                                } elseif (mighty_builders_is_plugin_installed('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'mighty-builders');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'mighty-builders') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                    </ul>
                    <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'mighty-builders'); ?></a>
                </div>
                <div id="mighty-builders-setup" class="tab-content">
                    <h3 class="mighty-builders-baisc-guideline-header"><?php echo __('Basic Theme Setup', 'mighty-builders') ?></h3>
                    <div class="mighty-builders-baisc-guideline">
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Header Layout:', 'mighty-builders') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Header:', 'mighty-builders') ?></li>
                                        <li> - <?php echo __('click on Header > Click on Edit (Icon) -> Add or Remove Requirend block/content as your requirement.:', 'mighty-builders') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'mighty-builders') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Footer Layout:', 'mighty-builders') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Footer:', 'mighty-builders') ?></li>
                                        <li> - <?php echo __('click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'mighty-builders') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'mighty-builders') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'mighty-builders') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'mighty-builders') ?></li>
                                        <li> - <?php echo __('click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'mighty-builders') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'mighty-builders') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template(Like: Frontpage/Blog/Archive etc.)', 'mighty-builders') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'mighty-builders') ?></li>
                                        <li> - <?php echo __('Click on Manage all Templates', 'mighty-builders') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template', 'mighty-builders') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'mighty-builders') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template Parts(Header/Footer/Sidebar)', 'mighty-builders') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns:', 'mighty-builders') ?></li>
                                        <li> - <?php echo __('Click on Manage All Template Parts', 'mighty-builders') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template parts', 'mighty-builders') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'mighty-builders') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="mighty-builders-comparision" class="tab-content">
                    <div class="featured-list">
                        <div class="half-col free-features">
                            <h3><?php echo __('Mighty Builders Features (Free)', 'mighty-builders') ?></h3>
                            <ul>
                                <li><strong> - <?php echo __('Mighty Builders offer wide range of  ready to use Home Sections Patterns', 'mighty-builders') ?></strong>
                                    <ul>
                                        <li><?php echo __('Hero Section', 'mighty-builders') ?></li>
                                        <li><?php echo __('About Us Section - 2', 'mighty-builders') ?></li>
                                        <li><?php echo __('About Us Page Layout', 'mighty-builders') ?></li>
                                        <li><?php echo __('Contact Us Page Section', 'mighty-builders') ?></li>
                                        <li><?php echo __('Counter Section', 'mighty-builders') ?></li>
                                        <li><?php echo __('Enquiry Form Section', 'mighty-builders') ?></li>
                                        <li><?php echo __('FAQ Section', 'mighty-builders') ?></li>
                                        <li><?php echo __('Latest Post Section', 'mighty-builders') ?></li>
                                        <li><?php echo __('Portfolio Section', 'mighty-builders') ?></li>
                                        <li><?php echo __('Pricing Table Section - 3', 'mighty-builders') ?></li>
                                        <li><?php echo __('Service Section - 2', 'mighty-builders') ?></li>
                                        <li><?php echo __('Service Page Layout', 'mighty-builders') ?></li>
                                        <li><?php echo __('Team Section', 'mighty-builders') ?></li>
                                        <li><?php echo __('Testimonial Section', 'mighty-builders') ?></li>
                                        <li><?php echo __('Who We Serve Section', 'mighty-builders') ?></li>
                                    </ul>
                                </li>

                                <li> <strong>- <?php echo __('FSE Templates Ready', 'mighty-builders') ?></strong>
                                    <ul>
                                        <li> <?php echo __('404 Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Archive Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Product Catalog Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Blank Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Front Page Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Blog Home Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Index Page Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Search Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Sitemap Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Page Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Left Sidebar Page Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Full Width Page  Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Single Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Single Product Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Cart Page Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Checkout Page Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Left Sidebar Single Template', 'mighty-builders') ?></li>
                                        <li> <?php echo __('Full Width Single Template', 'mighty-builders') ?></li>

                                    </ul>
                                <li>
                                <li><strong> - <?php echo __('Fully Customizable Header Layout - 2', 'mighty-builders') ?></strong></li>
                                <li> <strong>- <?php echo __('Fully Customizable Footer Layout - 3 ', 'mighty-builders') ?></strong></li>
                                <li><strong> - <?php echo __('12 Beautiful Fonts Option', 'mighty-builders') ?></strong></li>
                                <li> <strong>- <?php echo __('Innper Page Templates', 'mighty-builders') ?></strong></li>
                                <li> <strong>- <?php echo __('On Scroll Animation option', 'mighty-builders') ?></strong></li>
                                <li> <strong>- <?php echo __('Access Cozy Blocks with upto 22 Advanced Blocks for FSE and Gutenberg Editor', 'mighty-builders') ?></strong></li>
                            </ul>
                        </div>
                        <div class="half-col pro-features">
                            <h3><?php echo __('Premium Features', 'mighty-builders') ?></h3>
                            <p><?php echo __('Including all free features and comes with 30+ advanced blocks that enhance and power up the ecommerce website, here are some blocks that add the powerful features for your ecommerce/shopping website. By seamlessly integrating these blocks with our ready-to-use patterns, you have the flexibility to craft a wide selection of captivating online store ease', 'mighty-builders') ?></p>
                            <ul>
                                <li><?php echo __('Post Blocks', 'mighty-builders') ?></li>
                                <li><?php echo __('Slider Block', 'mighty-builders') ?></li>
                                <li><?php echo __('Counter Block', 'mighty-builders') ?></li>
                                <li><?php echo __('Team Block (With Carousel)', 'mighty-builders') ?></li>
                                <li><?php echo __('Testimonials Block (With Carousel)', 'mighty-builders') ?></li>
                                <li><?php echo __('Social Shares Blocks', 'mighty-builders') ?></li>
                                <li><?php echo __('Social Icons Blocks', 'mighty-builders') ?></li>
                                <li><?php echo __('Breadcrumbs Block', 'mighty-builders') ?></li>
                                <li><?php echo __('Portfolio Block (With Custom Post Type)', 'mighty-builders') ?></li>
                                <li><?php echo __('Popup buidler Block to display offer and flash sale', 'mighty-builders') ?>
                                    <?php echo __('and access', 'mighty-builders') ?> <a href="https://cozythemes.com/cozy-addons/" target="_blank"><?php echo __('Cozy Blocks with more than 30+ advanced block.', 'mighty-builders') ?></a>
                                </li>

                            </ul>
                            <br />

                            <a href="https://cozythemes.com/pricing-and-plans/" class="upgrade-btn button" target="_blank"><?php echo __('Upgrade to Pro', 'mighty-builders') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
