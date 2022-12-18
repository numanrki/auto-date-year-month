<?php
/*
 * Plugin Name: (AADMY) Add Auto Date Month Year In Posts Dynamically
 * Plugin URI: https://wordpress.org/plugins/add-auto-date-month-year-in-posts-dynamically
 * Description: A simple plugin that adds the current year, month, day, next year, previous year dynamically to WordPress posts, pages, and anywhere else on the site using a short code.
 * Version: 1.0.0
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
define( 'Auto_Date_Year_Month_AADMY', '1.0.0' );

/* Current Year */
function add_current_year_shortcode_aadmy()
{
  $current_year = date('Y');
  return $current_year;
}
add_shortcode('c_year', 'add_current_year_shortcode_aadmy');

/* Current Month */
function add_current_month_shortcode_aadmy()
{
  $current_month = date('F');
  return $current_month;
}
add_shortcode('c_month', 'add_current_month_shortcode_aadmy');

/* Current Day */
function add_current_day_shortcode_aadmy()
{
  $current_day = date('l');
  return $current_day;
}
add_shortcode('c_day', 'add_current_day_shortcode_aadmy');

/* Full Date */
function add_current_date_shortcode_aadmy()
{
  $current_date = date('F j, Y');
  return $current_date;
}
add_shortcode('today', 'add_current_date_shortcode_aadmy');

/* Previous Year */
function add_previous_year_shortcode_aadmy()
{
  $previous_year = date('Y', strtotime('-1 year'));
  return $previous_year;
}
add_shortcode('p_year', 'add_previous_year_shortcode_aadmy');

/* Next Year */
function add_next_year_shortcode_aadmy()
{
  $next_year = date('Y', strtotime('+1 year'));
  return $next_year;
}
add_shortcode('n_year', 'add_next_year_shortcode_aadmy');

// Also Work with WP Basic elements, Like Titles, Post Title, Expcerts

add_filter( 'the_title', 'do_shortcode' );
add_filter( 'single_post_title', 'do_shortcode' );
add_filter( 'wp_title', 'do_shortcode' );
add_filter('the_excerpt', 'do_shortcode');


// Add Copy Rights 

function copyright_symbol_shortcode_aadmy() {
  return '&copy; All rights reserved.';
}
add_shortcode('copyrights', 'copyright_symbol_shortcode_aadmy');

// Add Copy Rights Symbol

function copy_symbol_shortcode_aadmy() {
  return '&copy;';
}
add_shortcode('copy', 'copy_symbol_shortcode_aadmy');