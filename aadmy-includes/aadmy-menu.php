<?php
    // Resgistering AADMY Plugin Menu
    function aadmy_settings_page_html()
    {
      include 'aadmy-welcome-message.php';
    }
    function aadmy_register_menu_page()
    {
      add_options_page('AADMY', 'AADMY Shortcodes', 'manage_options', 'aadmy-settings', 'aadmy_settings_page_html', 30);
    }
    add_action('admin_menu', 'aadmy_register_menu_page');

    // // Registering AADMY plugin Settings
    // function aadmy_plugin_settings(){

    //     register_setting('aadmy-settings', );

    //     add_settings_section( $id:string, $title:string, $callback:callable, $page:string, $args:array );

    //     add_settings_field( $id:string, $title:string, $callback:callable, $page:string, $section:string, $args:array );
    // }
    // add_action('admin-init','aadmy_plugin_settings')
