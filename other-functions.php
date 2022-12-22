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