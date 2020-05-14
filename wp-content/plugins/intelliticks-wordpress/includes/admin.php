<?php

// Output the options page
function intelliticks_options_page()
{
  // Get options
  $options = get_option('IntelliTicks_settings');

  // Check to see if IntelliTicks is enabled
  $intelliticks_activated = false;
  if ( esc_attr( $options['intelliticks_enabled'] ) == "on" ) {
    $intelliticks_activated = true;
    wp_cache_flush();
  }

?>
        <div class="wrap">
        <form name="IntelliTicks-form" action="options.php" method="post" enctype="multipart/form-data">
          <?php settings_fields( 'IntelliTicks_settings_group' ); ?>

            <h1>IntelliTicks</h1>
            <h3>Basic Options</h3>
            <?php if ( ! $intelliticks_activated ) { ?>
                <div style="margin:10px auto; border:3px #f00 solid; background-color:#fdd; color:#000; padding:10px; text-align:center;">
                IntelliTicks Live Chat is currently <strong>DISABLED</strong>.
                </div>
            <?php } ?>
            <?php do_settings_sections( 'IntelliTicks_settings_group' ); ?>

            <table class="form-table" cellspacing="2" cellpadding="5" width="100%">
                <tr>
                    <th width="30%" valign="top" style="padding-top: 10px;">
                        <label for="intelliticks_enabled">IntelliTicks (Live Chat) is:</label>
                    </th>
                    <td>
                      <?php
                          echo "<select name=\"IntelliTicks_settings[intelliticks_enabled]\"  id=\"intelliticks_enabled\">\n";

                          echo "<option value=\"on\"";
                          if ( $intelliticks_activated ) { echo " selected='selected'"; }
                          echo ">Enabled</option>\n";

                          echo "<option value=\"off\"";
                          if ( ! $intelliticks_activated ) { echo" selected='selected'"; }
                          echo ">Disabled</option>\n";
                          echo "</select>\n";
                        ?>
                    </td>
                </tr>
            </table>
                <table class="form-table" cellspacing="2" cellpadding="5" width="100%">
                <tr>
                    <th valign="top" style="padding-top: 10px;">
                        <label for="IntelliTicks_widget_code">IntelliTicks script:</label>
                    </th>
                    <td>
                      <textarea rows="15" cols="100" placeholder="<!-- Insert the IntelliTicks tag here -->" name="IntelliTicks_settings[intelliticks_widget_code]"><?php echo esc_attr( $options['intelliticks_widget_code'] ); ?></textarea>
                        <p style="margin: 5px 10px;">Enter your IntelliTicks code snippet.  You can find your script <a href="https://app.intelliticks.com/settings" target="_blank" title="IntelliTicks Settings">here</a>.</p>
                    </td>
                </tr>
                </table>
            <p class="submit">
                <?php echo submit_button('Save Changes'); ?>
            </p>
        </div>
        </form>

<?php
}
?>
