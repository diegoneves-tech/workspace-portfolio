<?php

// Register settings
function IntelliTicks_register_settings()
{
  register_setting( 'IntelliTicks_settings_group', 'IntelliTicks_settings' );
}
add_action( 'admin_init', 'IntelliTicks_register_settings' );

// Delete options on uninstall
function IntelliTicks_uninstall()
{
  delete_option( 'IntelliTicks_settings' );
}
register_uninstall_hook( __FILE__, 'IntelliTicks_uninstall' );


?>
