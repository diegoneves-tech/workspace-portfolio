<?php
/*
 * Plugin Name: IntelliTicks
 * Version: 1.0
 * Description: IntelliTicks is AI-powered live chat with human fallback. Get at-least 30% more leads with personalized engagement. AI does the initial conversation, captures the lead and then passes chats to humans reps instantly.
 * Author: IntelliTicks
 * Author URI: https://www.intelliticks.com/?utm_source=wordpress
 * Plugin URI: https://www.intelliticks.com/?utm_source=wordpress
 */

// Prevent Direct Access
defined('ABSPATH') or die("Restricted access!");

/*
* Define
*/
define('INTELLITICKS_VERSION', '1.0');
define('INTELLITICKS_DIR', plugin_dir_path(__FILE__));
define('INTELLITICKS_URL', plugin_dir_url(__FILE__));
defined('INTELLITICKS_PATH') or define('INTELLITICKS_PATH', untrailingslashit(plugins_url('', __FILE__)));

require_once(INTELLITICKS_DIR . 'includes/core.php');
require_once(INTELLITICKS_DIR . 'includes/menus.php');
require_once(INTELLITICKS_DIR . 'includes/admin.php');
require_once(INTELLITICKS_DIR . 'includes/embed.php');

