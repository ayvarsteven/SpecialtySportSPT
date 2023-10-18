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
define( 'DB_NAME', 'i9071433_wp2' );

/** Database username */
define( 'DB_USER', 'i9071433_wp2' );

/** Database password */
define( 'DB_PASSWORD', 'F.J8sd9VcB05ufI50C604' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'T1Mo1uyqez31N82Sc7q3s2SKsQYgxsTbD468MedAmlde6TQqosPxdERbV8U6v1p7');
define('SECURE_AUTH_KEY',  'B4PUuo6AddZfRx9aJqpFuoVmgPph5XA6TyZns7C4s5ShoxEitzQkEkXUROfNLkyu');
define('LOGGED_IN_KEY',    '0TozVhox8EYE68oi0aYKbEKLY75JhV5aweQN29CIdHBpByBgjPjMUFw562SXRhJA');
define('NONCE_KEY',        'PhpX3tdlq93T4BFHpBIEUxjhevjJ1PykggSiQeRDlP6oRpyquc7kgzInVxV8EPSp');
define('AUTH_SALT',        'ezjuxLqBCY3nE3m6Vv4UH7Tc06f7jneEHvIGyPX7S8ePh6EEspTuU0tiGL3glm87');
define('SECURE_AUTH_SALT', 'pamU0ajJvLFOheY9NnYwGIn7bhK3bTBZDKqJlRB1WcRysj5ATV9YVYU9OAhDAzzx');
define('LOGGED_IN_SALT',   'fP7K3E4zyvzHfNXSPiAdluNaWQdMc2X3Uy28ZmDLE61EL5fM5FTDHDRiE5gC2lDa');
define('NONCE_SALT',       'nsF4DVHZMyyWMph4PyguECQxTuvA74shulkk73Gs5NjN9OZrVVNhemhzmj3YlTmP');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
