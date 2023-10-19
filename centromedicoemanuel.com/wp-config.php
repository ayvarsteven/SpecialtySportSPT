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
define( 'DB_NAME', 'centromedicoemanuel.com' );

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
define( 'AUTH_KEY',         'H8hf1TUgIX1utPuz0ONr57wJGE1zSMiPWbqyKOUYujZpsuSWpMZUwJda1TpTYFKv' );
define( 'SECURE_AUTH_KEY',  'Y4AjLiwmoezEwBdmg0ronSfV4X9nxkMRxh0MPGv9YMaENs7UWFGVSgV36njWgg2a' );
define( 'LOGGED_IN_KEY',    'On7oVElukjCsNjEq6OlaCoK96lk5S3VJlz4LnopBqe3UiI5ckEjisH1WJNxUVJU3' );
define( 'NONCE_KEY',        'fUczUAcUARzw4b4n3b59XzzeXYnei7obNyi3MUOuQ40Jo2EVxBvtcq9ebBICGNKI' );
define( 'AUTH_SALT',        'J7XSGOKJVIjNRtWzTmSQBuA20RZzDAb64wWmYhAChzjIjRZUCf1BLTEf9g9TOjnF' );
define( 'SECURE_AUTH_SALT', 'g85fRH8LkerEq13odXgUnhcGwTntqgEIKXNbzCySIsYfFtcZDK9deHQBkmbYCynf' );
define( 'LOGGED_IN_SALT',   'OYwHrdm2NpX7LJoQYXbmjWob54yXF0M4PSQwySIf9HamqRhcB6ViCTIjLTPQ8wLs' );
define( 'NONCE_SALT',       'CsHIcVkWGPDjgeBhkcxLpBixWjY6xEfdeHx1HEqABOx3vlnn4eUbhY7RaTr28ggG' );

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
