<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'undangan' );

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
define( 'AUTH_KEY',         'fs34KlLxoO2uyhqZ4fqjuwowMebyK1hvK2CuTfXcoAR0MC7llPUwP4gwk5gu5Sqo' );
define( 'SECURE_AUTH_KEY',  'tWxFEzC5J9FzrqFyryajUfzsobKqEjGBsxsOYWVuJKOMyv9870Xkn8i44rojUMzk' );
define( 'LOGGED_IN_KEY',    'LyNaBncitMwMd2TpjFidWK6I13UWWx6XMubEbs7a1b0gQsRjIZxSAjGWqRVqaZ7p' );
define( 'NONCE_KEY',        '7NJOlusWjJ0bx4zv6AyQg1MGWaCC9aNLWpjwcRF6hlwTWWmKdxqnCerxh9H7NEqJ' );
define( 'AUTH_SALT',        'VvNw4imJWxGvpnMXCB73Nniuol3Y9PxrhCv99l8OARI6iSZYMO21kAwsPTLEJ0xv' );
define( 'SECURE_AUTH_SALT', 'WbUEaZjNUgzqU1maR5YrbYlqPk9NQIht7JUQrtKgUw2HaqSVYbwuv8KuQfyWMZY2' );
define( 'LOGGED_IN_SALT',   'lEsGt7fAzxz5pt1tXP2EuW4vr7oaseHViaXgTNRhhP7KrU0rlBs0xmV93dovKeqJ' );
define( 'NONCE_SALT',       'ZVodyJ5RBojUjtgacqXsP2SzeP7zfaMtnZri8Il0ECPNDJzMiYV8W0UgXdzAwxAO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
