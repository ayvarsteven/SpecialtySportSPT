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
if(strstr($_SERVER['SERVER_NAME'], 'powwowsmokeshop.com.test')) {
    define( 'DB_NAME', 'powwowsmokeshop.com' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', '' );
    define( 'DB_HOST', 'localhost' );
} else {
    define( 'DB_NAME', 'powwowsmokeshop' );
    define( 'DB_USER', 'steve_powwowsmokeshop' );
    define( 'DB_PASSWORD', 'september51995' );
    define( 'DB_HOST', 'localhost' );
}

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
define( 'AUTH_KEY',         'AZXxBORyQvzSQYn1ACm9nxOx4AiZ4LbD0CBfIAGMNwEABzmWRqWqlCYwB7dlrBOy' );
define( 'SECURE_AUTH_KEY',  'YeCTWNQtJpHpYC2ivBdygNU07rx7x8lzoE0xnd4pipT8CA7o9HfllAsNFjByt5DI' );
define( 'LOGGED_IN_KEY',    '3mxsTGz645voDR7Ju71VxrwmjNcR3f0w7lt9HvjIMnqn3ccv6Dp3jzmb3La4WBdY' );
define( 'NONCE_KEY',        'sTCDSCqviCssTJvGrtITTCmrbpf2tkCYxkIp72HCcbxc9wMfiABd4iutuylLHG4F' );
define( 'AUTH_SALT',        'Vg4Sfc88BPN9VO0fQfYdnEMnda6MmBK0oN0dTshCCmaBDBe6rnrSHoi9cN0g9tiZ' );
define( 'SECURE_AUTH_SALT', 'oCt7DMPJT20NXTNPg2fyRHckfVUweSSkfgB1HUSD4wN10GHWAahxlu8MT3WKzgxj' );
define( 'LOGGED_IN_SALT',   '9rYYBc8fF92PVXx2IsudGBVYMULucY22P7Sr4OcJuU8xpD3SaBXtcQ9CN0jmczfi' );
define( 'NONCE_SALT',       'h5VLK1mu0M1ATQjj3bVHoSjKuFLY4IP0LfOByU2pYWdv6yLmW65AUU75UUKeJgYq' );

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
