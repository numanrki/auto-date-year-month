<?php
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
  }

  // Not like register_uninstall_hook(), you do NOT have to use a static function.
  aadmyipd_fs()->add_action('after_uninstall', 'aadmyipd_fs_uninstall_cleanup');