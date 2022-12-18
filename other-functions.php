<?php
// Also Work with WP Basic elements, Like Titles, Post Title, Expcerts
add_filter( 'the_title', 'do_shortcode' );
add_filter( 'single_post_title', 'do_shortcode' );
add_filter( 'wp_title', 'do_shortcode' );
add_filter('the_excerpt', 'do_shortcode');
add_filter('widget_text', 'do_shortcode');
add_action('wp_footer', 'process_shortcodes');

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
    return '&copy; [c_year] [s_title] All Rights Reserved. ';
  }
  add_shortcode('f_copyrights', 'copyright_symbol_shortcode_aadmy');
  
  // Add Copy Rights Symbol
  
  function copy_symbol_shortcode_aadmy() {
    return '&copy;';
  }
  add_shortcode('copy', 'copy_symbol_shortcode_aadmy');
