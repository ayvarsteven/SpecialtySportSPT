<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'centromedicomanuel.com' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bI6NSwURKCRhaggB1hf7aOytDwJFAwbsGK5laqDyZDzIirJ6P2Qw6BuNzebt8OuS' );
define( 'SECURE_AUTH_KEY',  'XnWKfz3zAn9TUwepU8398BSYlDmc1OZTG5yiUg0MrnpPYaW9mjbWQjbZINbRqQAu' );
define( 'LOGGED_IN_KEY',    'jflMqdcyICiMCXb8YGEma2xlSZQdxu8Ti6oxwT0qRttveXLCGy5aLkWAGJ8ZNsFV' );
define( 'NONCE_KEY',        'jaDXP7g2dYKv7LjkClC0sX9spGYhCIebXhMBofQDfhiluy6FLCbHJYqUHuDDWp7O' );
define( 'AUTH_SALT',        'eqg1qGC4B2q338Zimduds9yQC8xbNy23MuLCtJ0ADn52VDEuYY1hSUxxenTHIVMs' );
define( 'SECURE_AUTH_SALT', 'nuhxPNTzmFPKm1iDgVdQur6dYwy09NtXv7afkMNo3YuIg5l9KgmcpntEthuhhu0u' );
define( 'LOGGED_IN_SALT',   'C4jhpQHIigqf1ziQwQCBWnoaQjVQQEW4tbbrmE3yrEu8QNE0k8FxFVsPsuXfVdFq' );
define( 'NONCE_SALT',       'goMWbjsBUp9uEXl0D5c0jFlfSTr5s05AOzQkxJMiTXeWRsnI71p3McpBDjtutlev' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
