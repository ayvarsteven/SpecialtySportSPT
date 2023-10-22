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

if(strstr($_SERVER['SERVER_NAME'], 'santosherreratire.com.test')) {
    define( 'DB_NAME', 'santosherreratire.com' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', '' );
    define( 'DB_HOST', 'localhost' );
} else {
    define( 'DB_NAME', 'santosherreratire' );
    define( 'DB_USER', 'steve_santosherreratire' );
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
define( 'AUTH_KEY',         'WAg4KpqAlChy7ib1VQPx2dUkTlM5QQfAXhF1iP4ZqNMbVviOeMxn8rnEEX7yacGq' );
define( 'SECURE_AUTH_KEY',  'Ud0qvlBzvjUKsTzzx9WNRfKYBh66Ym4mqwm4qjIVTGKI6PLznaKDmldYh7OHAy7N' );
define( 'LOGGED_IN_KEY',    'ppVJhz0oRbD2gbrLojLvvaLLNbHqjPRgGt2mCGv5kcTH2F7ysOfLVNIZeMeYI5IK' );
define( 'NONCE_KEY',        'okeUGscQlx6KJZAY4ZJiN7mSkTPuo5YylFpqu4bgI2IwhhpBxSmiTscjfwKCQ2aE' );
define( 'AUTH_SALT',        'nfx75kgjQTxtcNIcHFH663XYRAWytj6R1RNtmpSt7PxlxTIECVtPR7GEghfgZYBy' );
define( 'SECURE_AUTH_SALT', 'sERuF0QpvdaZZfyhHzkYOAkDTIplV0dkUvN5pz02vIUT3NF5wxxNzQf42kBhc7ck' );
define( 'LOGGED_IN_SALT',   'ATxXFCgHdcc7yVDZ0RvfH2ha7XEJOc1xdD1cRGCITXO1YstBlZfebXuO2NA56WbJ' );
define( 'NONCE_SALT',       'azkuDNlaJ380FSc4mgZ5Lz4xNgBNwhOBJ3g4fTYdkyxH9BrVfbGMtu4SILRJgCXz' );

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

define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';



