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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'caravane-dagadir-wp' );

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
define( 'AUTH_KEY',         '4NzsfKxdDfqD2h47m5B5RN92OiwqAk17QkUlXulqUzymH1DtoaBsKuXv5isxortw' );
define( 'SECURE_AUTH_KEY',  '0QGB9G4vqALlLKj6C2ltFf2SRwVOyDccoAtuYQ0zxKWKdlGoijU2Z3CUnRipuXaC' );
define( 'LOGGED_IN_KEY',    'AtDgD2Sn69QxkCFYpqs7nlwKpSW31Gn4gDKNGsTc8qo9YBlNwCCC5YOTxk9GbjKw' );
define( 'NONCE_KEY',        'ZheSJJQ3H2x07gNfLp2mXysKM7aGZxTbIcPAZ0rHHKjXj785N5FJfykvsnlaaVWN' );
define( 'AUTH_SALT',        'EIz32ByoJanw4FNuIF2zHL6CvpDXB1K9tEwvtlxaiWplZIUjzkUEI2lXlSvYFke7' );
define( 'SECURE_AUTH_SALT', 'hky8UPrxIFPheRy8dvtqi78C4AkFMgVlPC3VyBrvTLYagzPqpJu6h9G4YW4Zt18M' );
define( 'LOGGED_IN_SALT',   '6UBDcWnV26DD3mHupMeuMGHLBzIQEK7UEvKq1vvzvJFp22ZgSeYnjq9h6BjKo2kd' );
define( 'NONCE_SALT',       '8j2EhAcOH8b0eoveMUR0hnoTkwy5IEYxnMUxeYVu9c1EHOiWUG1ZJfqZUiU387f4' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
