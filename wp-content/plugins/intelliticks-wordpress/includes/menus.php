<?php

// Create a option page for settings
add_action('admin_menu', 'add_intelliticks_option_page');

// Add top-level admin bar link
add_action('admin_bar_menu', 'add_intelliticks_link_to_admin_bar', 999);

// Adds IntelliTicks link to top-level admin bar
function add_intelliticks_link_to_admin_bar()
{
  global $wp_version;
  global $wp_admin_bar;

//  $intelliticks_icon = '<img src="' . DRIFT_4f050d29b8BB9_PATH . '/assets/intelliticks-icon-16x16-white.png' . '">';

  $args = array(
    'id' => 'intelliticks-admin-menu',
    'title' => '<span class="ab-label">IntelliTicks</span>', // alter the title of existing node
    'parent' => FALSE,   // set parent to false to make it a top level (parent) node
    'href' => get_bloginfo('wpurl') . '/wp-admin/admin.php?page=menus.php',
    'meta' => array('title' => 'IntelliTicks')
  );

  $wp_admin_bar->add_node($args);
}

// Hook in the options page functionå
function add_intelliticks_option_page()
{
  add_options_page('IntelliTicks Options', 'IntelliTicks', 'activate_plugins', basename(__FILE__), 'intelliticks_options_page');
}

