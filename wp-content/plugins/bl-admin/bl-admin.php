<?php
/*
Plugin Name: BL Admin
Plugin URI: 
Description: Remove wordpress logo and news etc.
Version: 1.0
Author: BL
Author URI: 
*/

define( 'BA_VERSION', '3.1.1' );
define( 'BA__MINIMUM_WP_VERSION', '3.2' );
define( 'BA__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'BA__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'BA_DELETE_LIMIT', 100000 );

// remove update notice for users
function remove_wp_update_notice() {
    if ( !current_user_can('manage_options') ) {
      remove_action( 'admin_notices', 'update_nag', 3);
      }
}
add_action('admin_init', 'remove_wp_update_notice');

function remove_footer_admin () {
    echo "";
}
add_filter('admin_footer_text', 'remove_footer_admin');

function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
}
add_action( 'admin_init', 'remove_dashboard_meta' );

add_action('admin_head', 'mytheme_remove_help_tabs');
function mytheme_remove_help_tabs() {
    $screen = get_current_screen();
    $screen->remove_help_tabs();
}


add_action('admin_bar_menu', 'remove_wp_logo', 999);

function remove_wp_logo( $wp_admin_bar ) {
    $wp_admin_bar->remove_node('wp-logo');
}

// removes the `profile.php` admin color scheme options
remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );

if ( ! function_exists( 'cor_remove_personal_options' ) ) {
  /**
   * Removes the leftover 'Visual Editor', 'Keyboard Shortcuts' and 'Toolbar' options.
   */
  function cor_remove_personal_options( $subject ) {
    $subject = preg_replace( '#<h3>Personal Options</h3>.+?/table>#s', '', $subject, 1 );
    return $subject;
  }

  function cor_profile_subject_start() {
    ob_start( 'cor_remove_personal_options' );
  }

  function cor_profile_subject_end() {
    ob_end_flush();
  }
}
add_action( 'admin_head-profile.php', 'cor_profile_subject_start' );
add_action( 'admin_footer-profile.php', 'cor_profile_subject_end' );

function change_wp_mail_from_name(){
    return "OBPS";
}
add_filter("wp_mail_from_name", "change_wp_mail_from_name");

function change_wp_mail_from(){
    return "no-reply@oceanbestpractices.org";
}
add_filter("wp_mail_from", "change_wp_mail_from");
