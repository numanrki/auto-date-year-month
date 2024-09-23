<?php

// Add Site Name with URL 
function shortcode_get_domain_name_aadmy()
{
    $site_url = home_url();
    $site_name = get_bloginfo('name');
    return '<a href="' . $site_url . '">' . $site_name . '</a>';
}
add_shortcode('st', 'shortcode_get_domain_name_aadmy');


// Add Copy Rights 
function copyright_symbol_shortcode_aadmy() {
  $copy_year = gmdate('Y');
  return '&copy; ' . $copy_year . ' ' . do_shortcode('[st]') . ' -' . ' All Rights Reserved.';
}
add_shortcode('fcr', 'copyright_symbol_shortcode_aadmy');


  // Add Copy Rights Symbol
  function copy_symbol_shortcode_aadmy() {
    return html_entity_decode('&copy;', ENT_QUOTES, 'UTF-8');
  }
  add_shortcode('cs', 'copy_symbol_shortcode_aadmy');


// Modified date of Posts/Pages
function modified_date_shortcode_aadmy() {
  global $post;
  setup_postdata($post);
  $modified_date = get_the_modified_date();
  return $modified_date;
}
add_shortcode('post_modified', 'modified_date_shortcode_aadmy');

// Modified date and time of Posts/Pages
function modified_datetime_shortcode_aadmy() {
  global $post;
  setup_postdata($post);
  $modified_datetime = get_the_modified_date() . ' at ' . get_the_modified_time();
  return $modified_datetime;
}
add_shortcode('post_mdt', 'modified_datetime_shortcode_aadmy');


// Calculate the difference between the provided DOB and current date
function get_current_age_aadmy($atts) {
  $atts = shortcode_atts(array(
    'dob' => ''
  ), $atts);

  $dob = $atts['dob'];

  // Convert the input date to the correct format (mm/dd/yyyy)
  $dob_formatted = gmdate("m/d/Y", strtotime($dob));

  // Calculate the difference between the provided DOB and current date
  $age = gmdate('Y') - gmdate('Y', strtotime($dob_formatted));
  if (gmdate('md') < gmdate('md', strtotime($dob_formatted))) {
    $age--;
  }
  
  // Return the number of years
  return $age . " Years";
}
add_shortcode('age', 'get_current_age_aadmy');




// // Define the function of Custom event Happned years/months/days ago
function aadmy_event_time_elapsed($event_date) {
  $event_date = DateTime::createFromFormat('m/d/Y', $event_date);
  $current_time = new DateTime();
  $interval = $current_time->diff($event_date);

  if ($interval->y > 0) {
      return "{$interval->y} years, {$interval->m} months, and {$interval->d} days ago";
  } elseif ($interval->m > 0) {
      return "{$interval->m} months, and {$interval->d} days ago";
  } else {
      return "{$interval->d} days ago";
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

// Calling Shortcode
// [aadmy_event date="04/12/2021"]


// Defines two shortcodes: 'copy' and 'paste'. The 'copy' shortcode saves a given value to a session variable. The 'paste' shortcode retrieves the saved value from the session variable and returns it. The shortcodes can be used with dynamic names by specifying a number after the shortcode name, like 'copy1', 'paste2', etc.
// @param array $atts An array of attributes passed to the shortcode.
// @param string $content The content within the shortcode.
// @return string An empty string for the 'copy' shortcode and the saved value for the 'paste' shortcode.

// Define the copy shortcode
// Define the copy shortcode
function copy_shortcode_aadmy($atts, $content = null) {
  // Extract and sanitize shortcode attributes
  $atts = shortcode_atts(array(
      'name' => '',
      'value' => '',
  ), $atts);

  // Sanitize the name and value before using
  $name = sanitize_key($atts['name']); // Sanitize as key for session
  $value = sanitize_text_field($atts['value']); // Sanitize value for text input
  
  // Save the sanitized value to the session variable with the sanitized name
  if (!empty($name)) {
      $_SESSION[$name] = $value;
  }

  // Return an empty string
  return '';
}
add_shortcode('copy', 'copy_shortcode_aadmy');




// Define the paste shortcode
function paste_shortcode_aadmy($atts, $content = null) {
  // Extract and sanitize shortcode attributes
  $atts = shortcode_atts(array(
      'name' => '',
  ), $atts);

  // Sanitize the name
  $name = sanitize_key($atts['name']); // Sanitize as key for session

  // Retrieve the sanitized value from the session variable with the sanitized name
  $value = isset($_SESSION[$name]) ? sanitize_text_field($_SESSION[$name]) : '';
  
  // Return the sanitized value
  return $value;
}
add_shortcode('paste', 'paste_shortcode_aadmy');

// Setting Shortcodes for Copy
// [copy name="copy1" value="AADMY Auto Plugin"]
// Pasting the Copy shortcode value Here
// [paste name="copy1"]
// Similarly, you can create and use additional copy and paste shortcodes with unique names to store and retrieve other values as needed.