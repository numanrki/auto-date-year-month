<?php
/*
 * Plugin Name: AADMY - Add Auto Date Month Year Into Posts
 * Plugin URI: https://wordpress.org/plugins/auto-date-year-month/
 * Description: Easily boost your SEO by dynamically adding current dates, months, and years to your WordPress posts, pages, keeping your content fresh without manual updates.
 * Version: 2.0.2
 * Requires at least: 6.0
 * Tested up to: 6.6.2
 * Requires PHP: 7.4
 * Author: Numan Rasheed 
 * Author URI: https://www.numanrki.com
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */


// If this file is called directly, abort.


if ( ! defined( 'WPINC' ) ) {
  die;
}

if ( ! function_exists( 'aadmyipd_fs' ) ) {
  // Create a helper function for easy SDK access.
  function aadmyipd_fs() {
      global $aadmyipd_fs;

      if ( ! isset( $aadmyipd_fs ) ) {
          // Include Freemius SDK.
          require_once dirname(__FILE__) . '/freemius/start.php';

          $aadmyipd_fs = fs_dynamic_init( array(
              'id'                  => '11653',
              'slug'                => 'auto-date-year-month',
              'type'                => 'plugin',
              'public_key'          => 'pk_f571b91cf88e2eaa5eb8e0f903478',
              'is_premium'          => false,
              'has_addons'          => false,
              'has_paid_plans'      => false,
              'menu'                => array(
                  'slug'           => 'aadmy-settings',
                  'first-path'     => 'options-general.php?page=aadmy-settings',
                  'account'        => false,
                  'contact'        => false,
                  'parent'         => array(
                      'slug' => 'options-general.php',
                  ),
              ),
          ) );
      }

      return $aadmyipd_fs;
  }

  // Init Freemius.
  aadmyipd_fs();
  // Signal that SDK was initiated.
  do_action( 'aadmyipd_fs_loaded' );
}

define( 'Auto_Date_Year_Month_AADMY', '2.0.2' );

// Include the offsets file
include_once( plugin_dir_path( __FILE__ ) . 'aadmy-shortcodes/aadmy-offsets.php' );
include_once( plugin_dir_path( __FILE__ ) . 'aadmy-shortcodes/aadmy-other-functions.php' );
include_once( plugin_dir_path( __FILE__ ) . 'aadmy-shortcodes/aadmy-countdown.php' );


// //Other Functions to process
// require 'other-functions.php';
// shortcode_get_domain_name_aadmy();
// copyright_symbol_shortcode_aadmy();
// copy_symbol_shortcode_aadmy();
// modified_date_shortcode_aadmy();

/* Current Year */
function add_current_year_shortcode_aadmy()
{
  $current_year = date_i18n('Y');
  return $current_year;
}
add_shortcode('cy', 'add_current_year_shortcode_aadmy');

/* Current Month */
function add_current_month_shortcode_aadmy()
{
  $current_month = date_i18n('F');
  return $current_month;
}
add_shortcode('cm', 'add_current_month_shortcode_aadmy');

/* Previous Day e.g. Thursday */
function add_previous_day_shortcode_aadmy()
{
  $previous_day = date_i18n('l', strtotime('-1 day'));
  return $previous_day;
}
add_shortcode('pd', 'add_previous_day_shortcode_aadmy');

/* Current Day e.g. Friday */
function add_current_day_shortcode_aadmy()
{
  $current_day = date_i18n('l');
  return $current_day;
}
add_shortcode('day', 'add_current_day_shortcode_aadmy');

/* Previous Day e.g. Saturday */
function add_next_day_shortcode_aadmy()
{
  $next_day = date_i18n('l', strtotime('+1 day'));
  return $next_day;
}
add_shortcode('nd', 'add_next_day_shortcode_aadmy');

// Current Date e.g. 27
function add_current_n_date_shortcode_aadmy( $atts ){
  return date_i18n( 'j' );
}
add_shortcode( 'cd', 'add_current_n_date_shortcode_aadmy' );

// Short form of Day
function add_current_short_day_shortcode_aadmy() {
  $current_day_short = date_i18n('D');
  return $current_day_short;
}
add_shortcode('sd', 'add_current_short_day_shortcode_aadmy');

/* Full Date */
function add_current_date_shortcode_aadmy()
{
  $current_date = date_i18n('F j, Y');
  return $current_date;
}
add_shortcode('today', 'add_current_date_shortcode_aadmy');

/* Show Tomorrow Full Date */
function get_next_full_date_aadmy() {
  // Get the current date as a timestamp
  $current_date = strtotime(date_i18n('Y-m-d'));

  // Calculate the next day's timestamp
  $next_date = strtotime('+1 day', $current_date);

  // Format the next date as MM DD, YYYY
  $formatted_next_date = date_i18n('F d, Y', $next_date);

  return $formatted_next_date;
}

// Register the shortcode with aadmy
function tomorrow_shortcode_aadmy() {
  return get_next_full_date_aadmy();
}
add_shortcode('tomorrow', 'tomorrow_shortcode_aadmy');

/* Previous Year */
function add_previous_year_shortcode_aadmy()
{
  $previous_year = date_i18n('Y', strtotime('-1 year'));
  return $previous_year;
}
add_shortcode('py', 'add_previous_year_shortcode_aadmy');

/* Next Year */
function add_next_year_shortcode_aadmy()
{
  $next_year = date_i18n('Y', strtotime('+1 year'));
  return $next_year;
}
add_shortcode('ny', 'add_next_year_shortcode_aadmy');

/* Next Month Name*/
function get_next_month_aadmy() {
  $next_month = date_i18n('F', strtotime('+1 month'));
  return $next_month;
}
add_shortcode('nm', 'get_next_month_aadmy');


/* Previous Month Name */
function get_prev_month_aadmy() {
  $current_month = date_i18n('m');
  $prev_month = $current_month - 1;
  $prev_month_name = date_i18n('F', strtotime("2020-$prev_month-01"));
  return $prev_month_name;
}
add_shortcode( 'pm', 'get_prev_month_aadmy' );


// Parse shortcodes within alt attributes like (Images alt Text)
function parse_shortcodes_in_alt_attribute_aadmy( $attr, $attachment ) {
  $attr['alt'] = do_shortcode( $attr['alt'] );
  return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'parse_shortcodes_in_alt_attribute_aadmy', 10, 2 );


// Also Work with WP Basic elements, Like Titles, Post Title, Expcerts
// Posts and Pages
add_filter('the_title', 'do_shortcode');
add_filter('single_post_title', 'do_shortcode');
add_filter('wp_title', 'do_shortcode');
add_filter('the_content', 'do_shortcode');
add_filter('the_excerpt', 'do_shortcode');

// Widgets
add_filter('widget_text_content', 'do_shortcode');
add_filter('widget_text', 'do_shortcode');

// Menus
add_filter('wp_nav_menu', 'do_shortcode');

// Header and Footer
add_action('wp_head', 'do_shortcode');
add_action('wp_footer', 'do_shortcode');

// Comments
add_filter('comment_text', 'do_shortcode');

// Media
add_filter('the_content', 'do_shortcode');



// Archives
add_filter('get_archives_link', 'do_shortcode');

// Search
add_filter('get_search_form', 'do_shortcode');

// Login/Logout
add_filter('login_form', 'do_shortcode');
add_filter('logout_url', 'do_shortcode');


// Enable shortcodes in Elementor editor and frontend content
add_action('elementor/widget/render_content', function($content, $widget) {
  return do_shortcode($content);
}, 10, 2);

// Enable shortcodes for specific Elementor elements/widgets
add_filter('elementor/widget/text-editor/parse_text', 'do_shortcode');
add_filter('elementor/widget/shortcode/render', 'do_shortcode');

// Apply shortcodes to general Elementor frontend content
add_filter('elementor/frontend/the_content', 'do_shortcode');

// Disable shortcodes in comments to prevent execution
remove_filter('comment_text', 'do_shortcode');

// Sanitize comment content to remove shortcodes and HTML tags
add_filter('pre_comment_content', 'wp_strip_all_tags');



// SEOPress Plugin: Ensure shortcodes work in SEO titles and descriptions
add_filter('seopress_titles_title', 'do_shortcode');
add_filter('seopress_titles_desc', 'do_shortcode');

// Yoast SEO Plugin: Ensure shortcodes work in SEO titles and meta descriptions
add_filter('wpseo_title', 'do_shortcode');
add_filter('wpseo_metadesc', 'do_shortcode');

// Rank Math SEO Plugin: Ensure shortcodes work in titles and descriptions
function process_shortcodes_in_rank_math($content) {
    return do_shortcode($content);
}
add_filter('rank_math/frontend/title', 'process_shortcodes_in_rank_math', 20);
add_filter('rank_math/frontend/description', 'process_shortcodes_in_rank_math', 20);




// AAdmy Includes /CSS/Welcome Page/AADMY Menu
include( plugin_dir_path( __FILE__ ) . 'aadmy-includes/aadmy-menu.php' );

 // Settings Link ight Next to deactive Link
 add_filter('plugin_action_links', 'custom_plugin_settings_link_aadmy', 10, 2);
 function custom_plugin_settings_link_aadmy($links, $file)
 {
   static $this_plugin;
   if (!$this_plugin) $this_plugin = plugin_basename(__FILE__);

   if ($file == $this_plugin) {
     $settings_link = '<a href="' . get_bloginfo('wpurl') . '/wp-admin/options-general.php?page=aadmy-settings">Shortcodes List</a>';
     array_unshift($links, $settings_link);
   }
   return $links;
 }


 // Include the donation notice
 include( plugin_dir_path(__FILE__) . 'aadmy-includes/aadmy-notices/aadmy-donation.php' );

