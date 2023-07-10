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
define( 'DB_NAME', 'DOinversiones' );

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
define( 'AUTH_KEY',         'GOuXo3Pixhb7pvaJSLjd8m40HHtlfRefA3Etb11gqStYIidyK1Ctluwiy7f8bUuy' );
define( 'SECURE_AUTH_KEY',  'IL2T0GEQQFTy3lwB0C20YSQzYtneUthNB7Kbf1DYFsDSF9WNS41egMolX4PUXlWC' );
define( 'LOGGED_IN_KEY',    'INlgZgFHFp5gzXHT83M4jBokomxt7TXdMCBmBXIPLOWFwfIe4Sf7UvvnpU9k7MhP' );
define( 'NONCE_KEY',        'mHUSrIqeVUWqEaik9YsT3HsGZK8lj5hEqNdQBzGmPfwaNWRmUnmKwe4vaZD5Hgn9' );
define( 'AUTH_SALT',        'qoUn5A9wRWUkKdWS2cjyFabaKUQKqUhwqht3Ko0sVjS6tAo3YTTAZGxe7Hb5d0tB' );
define( 'SECURE_AUTH_SALT', 'TsCqtaO83fJL3JgN00PKeGVWq7Rs8hZrc8KD2qpQePXvLL8zouRE0a9WxIU5M1jy' );
define( 'LOGGED_IN_SALT',   'uNmoEJPIAsWRSwlV8jNv3YummXPer3HProZ8yhkRrpQpSSA8oDaLinm3vBPNWkmO' );
define( 'NONCE_SALT',       'P4i3oQ6mqpzgby32Te30mdbkj6xTDFqDAk9ZyGTMIyd3Zm5yTb4gki9DnSBuzYG0' );

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
