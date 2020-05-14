<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ujmgyz2wunxh7htumcyxzxwtj3adw3j64indivjryowvipyk1a634zm7fnnexn15' );
define( 'SECURE_AUTH_KEY',  'i4dwbshgddxdncefs1lrglqhxkiq0ioz6pgnfacimtiahhutcry4gm4jsdv5dfqt' );
define( 'LOGGED_IN_KEY',    'vlwtvpsxds5otykjewda1fq0eigw3ouylr4fmnk8dhmtytowe7gor7zlhxfghq8y' );
define( 'NONCE_KEY',        'u3qyotabli7vfctj4cw0lypzbbpxb60c6wvxjiq0rhpk3m2bcgq02cwmrnsdna4d' );
define( 'AUTH_SALT',        'pbdwkuau1ifxxdyreqajoibbn0tqzevn6gursj35yk7rbicmyzmh2yslebi7u65i' );
define( 'SECURE_AUTH_SALT', 'u14n0lwmrqqbbnwrzuw5wmctvoraixsgtywojczed45djacosk0aek76egf1z2j2' );
define( 'LOGGED_IN_SALT',   'cxkbgjgaes6ymycua7x8ffiishwussvfvrpvdhue3e9jnbff1zj3xicbtovede4c' );
define( 'NONCE_SALT',       'hv6pz20uae8gpca1ueljapawyxxxsbyste4ib5rsgkir3caehv6jgoohwlt26oxm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wprc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
