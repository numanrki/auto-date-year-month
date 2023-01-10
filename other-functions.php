<?php

// Add Site Name with URL 
function shortcode_get_domain_name_aadmy()
{
    $site_url = home_url();
    $site_name = get_bloginfo('name');
    return '<a href="' . $site_url . '">' . $site_name . '</a>';
}
add_shortcode('s_title', 'shortcode_get_domain_name_aadmy');


// Add Copy Rights 
function copyright_symbol_shortcode_aadmy() {
  $copy_year = date('Y');
  return '&copy; ' . $copy_year . ' ' . do_shortcode('[s_title]') . ' All Rights Reserved.';
}
  add_shortcode('f_copyrights', 'copyright_symbol_shortcode_aadmy');

  // Add Copy Rights Symbol
  function copy_symbol_shortcode_aadmy() {
    return '&copy;';
  }
  add_shortcode('copy', 'copy_symbol_shortcode_aadmy');


// Modified date of Posts/Pages
function modified_date_shortcode_aadmy() {
  global $post;
  setup_postdata( $post );
  $modified_date = get_the_modified_date();
  return $modified_date;
}
add_shortcode('post_modified', 'modified_date_shortcode_aadmy');


// Calculate the difference between the provided DOB and current date
function get_current_age_aadmy($atts) {
  $atts = shortcode_atts(array(
    'dob' => ''
  ), $atts);

  $dob = $atts['dob'];

  // Calculate the difference between the provided DOB and current date
  $diff = date_diff(date_create($dob), date_create('now'));
  // Return the number of years
  return $diff->format('%y Years');
}
add_shortcode('age', 'get_current_age_aadmy');


// Define the function of Custom event Happned years/months/days ago
function aadmy_event_time_elapsed($event_date) {
  $event_date = strtotime($event_date);
  $current_time = time();
  $time_elapsed = $current_time - $event_date;
  $days_elapsed = floor($time_elapsed / 86400);
  $months_elapsed = floor($days_elapsed / 30);
  $years_elapsed = floor($months_elapsed / 12);
  $remaining_days = $days_elapsed % 30;
  $remaining_months = $months_elapsed % 12;

  if ($years_elapsed > 0) {
      return "$years_elapsed years, $remaining_months months, and $remaining_days days ago";
  } elseif ($months_elapsed > 0) {
      return "$months_elapsed months, and $remaining_days days ago";
  } else {
      return "$days_elapsed days ago";
  }
}

function aadmy_event_time_elapsed_shortcode($atts) {
  $atts = shortcode_atts(array(
      'date' => ''
  ), $atts, 'aadmy_event');

  return aadmy_event_time_elapsed($atts['date']);
}
add_shortcode('aadmy_event', 'aadmy_event_time_elapsed_shortcode');

// Calling Shortcode
// [aadmy_event date="04/12/2021"]