<?php
/*
 * Plugin Name: (AADMY) Add Auto Date Month Year In Posts Dynamically
 * Plugin URI: https://wordpress.org/plugins/auto-date-year-month/
 * Description: This WordPress plugin allows you to dynamically add current dates, years, months, and other time-related elements to your content. It helps to keep your content up-to-date and improve your SEO thus ensuring that your website's content is always fresh and relevant. With this plugin, you can easily add dynamic current time elements to your website without any coding knowledge.
 * Version: 1.0.3
 * Requires at least: 4.7
 * Tested up to: 6.0
 * Author: Numan Rasheed
 * Author URI: https://www.numanrki.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
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

define( 'Auto_Date_Year_Month_AADMY', '1.0.3' );

//Other Functions to process
require 'other-functions.php';
shortcode_get_domain_name_aadmy();
copyright_symbol_shortcode_aadmy();
copy_symbol_shortcode_aadmy();
modified_date_shortcode_aadmy();

/* Current Year */
function add_current_year_shortcode_aadmy()
{
  $current_year = date_i18n('Y');
  return $current_year;
}
add_shortcode('c_year', 'add_current_year_shortcode_aadmy');

/* Current Month */
function add_current_month_shortcode_aadmy()
{
  $current_month = date_i18n('F');
  return $current_month;
}
add_shortcode('c_month', 'add_current_month_shortcode_aadmy');

/* Current Day */
function add_current_day_shortcode_aadmy()
{
  $current_day = date_i18n('l');
  return $current_day;
}
add_shortcode('c_day', 'add_current_day_shortcode_aadmy');

// Current Date
function add_current_n_date_shortcode_aadmy( $atts ){
  return date_i18n( 'j' );
}
add_shortcode( 'c_date', 'add_current_n_date_shortcode_aadmy' );

// Short form of Day
function add_current_short_day_shortcode_aadmy() {
  $current_day_short = date_i18n('D');
  return $current_day_short;
}
add_shortcode('s_day', 'add_current_short_day_shortcode_aadmy');

/* Full Date */
function add_current_date_shortcode_aadmy()
{
  $current_date = date_i18n('F j, Y');
  return $current_date;
}
add_shortcode('today', 'add_current_date_shortcode_aadmy');

/* Previous Year */
function add_previous_year_shortcode_aadmy()
{
  $previous_year = date_i18n('Y', strtotime('-1 year'));
  return $previous_year;
}
add_shortcode('p_year', 'add_previous_year_shortcode_aadmy');

/* Next Year */
function add_next_year_shortcode_aadmy()
{
  $next_year = date_i18n('Y', strtotime('+1 year'));
  return $next_year;
}
add_shortcode('n_year', 'add_next_year_shortcode_aadmy');

/* Next Month Name*/
function get_next_month_aadmy() {
  $next_month = date_i18n('F', strtotime('+1 month'));
  return $next_month;
}
add_shortcode('n_month', 'get_next_month_aadmy');


/* Previous Month Name */
function get_prev_month_aadmy() {
  $current_month = date_i18n('m');
  $prev_month = $current_month - 1;
  $prev_month_name = date_i18n('F', strtotime("2020-$prev_month-01"));
  return $prev_month_name;
}
add_shortcode( 'p_month', 'get_prev_month_aadmy' );


// Also Work with WP Basic elements, Like Titles, Post Title, Expcerts
add_filter( 'the_title', 'do_shortcode' );
add_filter( 'single_post_title', 'do_shortcode' );
add_filter( 'wp_title', 'do_shortcode' );
add_filter('the_excerpt', 'do_shortcode');
add_filter('widget_text', 'do_shortcode');
add_action('wp_footer', 'do_shortcode');

include 'aadmy-menu.php';

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