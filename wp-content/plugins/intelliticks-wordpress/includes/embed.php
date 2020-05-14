<?php

// Add the IntelliTicks Javascript
add_action('wp_head', 'add_intelliticks');
add_action('wp_footer', 'add_intelliticks');

// The guts of the IntelliTicks script
function add_intelliticks()
{
  // Ignore admin, feed, robots or trackbacks
  if ( is_feed() || is_robots() || is_trackback() )
  {
    return;
  }

  $options = get_option('IntelliTicks_settings');

  // If options is empty then exit
  if( empty( $options ) )
  {
    return;
  }

  // Check to see if IntelliTicks is enabled
  if ( esc_attr( $options['intelliticks_enabled'] ) == "on" )
  {
    $intelliticks_tag = $options['intelliticks_widget_code'];
    
    // Insert tracker code
    if ( '' != $intelliticks_tag )
    {
      echo "<!-- Start IntelliTicks By WP-Plugin: IntelliTicks -->\n";
      echo $intelliticks_tag;
      echo"<!-- end: IntelliTicks Code. -->\n";
    }
  }
}
?>
