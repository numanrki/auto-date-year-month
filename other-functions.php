<?php
// Also Work with WP Basic elements, Like Titles, Post Title, Expcerts
add_filter( 'the_title', 'do_shortcode' );
add_filter( 'single_post_title', 'do_shortcode' );
add_filter( 'wp_title', 'do_shortcode' );
add_filter('the_excerpt', 'do_shortcode');
add_filter('widget_text', 'do_shortcode');
add_action('wp_footer', 'do_shortcode');

// Add Site Name with URL 
function shortcode_get_domain_name_aadmy()
{
    $site_url = home_url();
    $site_name = get_bloginfo('name');
    return '<a href="' . $site_url . '">' . $site_name . '</a>';
}


// Add Copy Rights 

function copyright_symbol_shortcode_aadmy() {
    return '&copy; [c_year] [s_title] All Rights Reserved. ';
  }
  
  
  // Add Copy Rights Symbol
  
  function copy_symbol_shortcode_aadmy() {
    return '&copy;';
  }
  
