<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

add_image_size( 'latest-news-small', 600, 400,true);

include 'wp_theme_settings.php';
add_action('admin_enqueue_scripts', 'wp_theme_settings_add_stylesheet');
function wp_theme_settings_add_stylesheet()
{
    wp_enqueue_style('wp_theme_settings', get_template_directory_uri() . '/wp_theme_settings.css');
    wp_register_script('wp_theme_settings', get_template_directory_uri() . '/wp_theme_settings.js', array('wp-color-picker'));
    wp_enqueue_script('wp_theme_settings');
}

$wpts_general_fields = array(
    'text' => 'General', 'dashicon' => 'dashicons-admin-generic',
    'tabFields' => array(
        array(
            'type' => 'text',
            'label' => 'Facebook',
            'name' => 'wp_ts_facebook',
            'class' => '',
            'description' => '',
        ),
        array(
            'type' => 'text',
            'label' => 'Twitter',
            'name' => 'wp_ts_twitter',
            'class' => '',
            'description' => '',
        ),

    ),
);

$wpts = new wp_theme_settings(
    array(
        'general' => array('description' => 'General settings page'),
        'settingsID' => 'wp_theme_settings',
        'settingFields' => array('wp_theme_settings_title'),
        'tabs' => array(
            'general' => $wpts_general_fields
        ),
    )
);

add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() { ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-6465061-71"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-6465061-71');
</script>
<?php }