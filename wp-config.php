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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i4571709_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i4571709_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'G.cnnDczsiU6BV2oqsV71' );

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
define('AUTH_KEY',         '8Tao9UbBSlj2P5wJwQPXv9J512tCqxI7S6YQsTqoe0hcBUNJUfBWQOh9N3boL6zU');
define('SECURE_AUTH_KEY',  'Py30ifRjwnXjRBwo6O5JRGcOb8lPDzbXSFfcOdCrLCJOMU05q8pHsc4XcHZLI1W4');
define('LOGGED_IN_KEY',    '8rNGwFxwv8zI4fqofufjryQHM3EQ0wG8LEkoyr7U4qbo0FfbDG6rkS3r75n78VkA');
define('NONCE_KEY',        'TCCeqWmiaHJikFhzZcNWnlc3p12leH7Tyc5aBuEPE6ws0BtRVWmsOdEa3nhWpi8p');
define('AUTH_SALT',        'CoCpLSE7F2RUjRhjbkOG2MvZjtP2hMsYSi6jap7yRhUZq70t6MkFA31l731yxxuI');
define('SECURE_AUTH_SALT', '0ks9OyC0W3irfPKzOrnL5nPbG6NTf1HRccgrUZ2SqnxmGvIYExgiftkxZLjZjbbD');
define('LOGGED_IN_SALT',   'fz0747hlSj9hXvfe7seSXtnblUubJR68xaAIhyG7drvrFqECmA1UlTH7HBkIdOPj');
define('NONCE_SALT',       'vLwk8cEzXcfvsQkwcwJ4m1AXweQLMcI45qFehk0m9t6HdOxJ2KIj3ufIK5v9VlCt');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
