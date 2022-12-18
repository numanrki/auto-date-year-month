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
    return '&copy; All rights reserved.';
  }
  add_shortcode('copyrights', 'copyright_symbol_shortcode_aadmy');
  
  // Add Copy Rights Symbol
  
  function copy_symbol_shortcode_aadmy() {
    return '&copy;';
  }
  add_shortcode('copy', 'copy_symbol_shortcode_aadmy');
