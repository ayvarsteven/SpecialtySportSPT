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
define( 'DB_NAME', 'appledentalcosmeticsdb' );

/** Database username */
define( 'DB_USER', 'appledental_dev' );

/** Database password */
define( 'DB_PASSWORD', 'september51995' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'll3lCy=Szz8U1{@!^U1sSgo$6gUkpbybX-.V~]WX(lF`]lEbgpMD2Nx?72{=5I6b' );
define( 'SECURE_AUTH_KEY',  'V9Qz+r0xTB1=vhGzZ^V^mn&^(ot}*%6)&}fDZC`Xl#Gu~ZSFq}.)JnhKiN7OmNSS' );
define( 'LOGGED_IN_KEY',    'S]Ak8m]xYzVU6u34y2-2yuMM)ZZ)``FS3aTs5>j+$Q!IdG0H%jv0/`mb&.p.W+aP' );
define( 'NONCE_KEY',        ',_?P)r.s? O$$tf`<]X5o]=qoneaD 1C>Ih>!1WJk<+:,RwdMn~&379BY(4@@b86' );
define( 'AUTH_SALT',        '^b8Z+)tgM2>@[^|8pFmwQ_$WM1qGn={/]Cy6~A[sOx=^19#B, Qgl_/+-T`Xv:hn' );
define( 'SECURE_AUTH_SALT', '8_[+iO0/C;M7^&5q )d%(H4mDly5akqPGm;PJ$m@HLo!l}tAz[ZvD}a/M}wk~U^ ' );
define( 'LOGGED_IN_SALT',   'V)E7SRF2%oa=nfnIon(,|(y)t:)a`!|h)#JxQn/nMv2bxLH,G8:$o[il6 T~5B1c' );
define( 'NONCE_SALT',       '?iKgnY#8P%?8M/TF7W@XK;+K!GDlf_>7BF7?.wykCrccn+/g6dq2ytc$a{}6?PEk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_apple';

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
