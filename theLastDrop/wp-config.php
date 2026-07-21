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
define('DB_NAME', 'SCWORDPRESS-3132392376');

/** MySQL database username */
define('DB_USER', 'SCWORDPRESS-3132392376');

/** MySQL database password */
define('DB_PASSWORD', 'eff0b3c687cd435f');

/** MySQL hostname */
define('DB_HOST', 'wordpressdb-i.hosting.stackcp.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'c6z0tNdllMz0HjjCxJ8qYszek4svUZ5r');
define('SECURE_AUTH_KEY', 'aF9gY/lE+5sKgPQp5w1YsxJLeCHHK7EX');
define('LOGGED_IN_KEY', 'zNfq/W04oyusyyWyRtvNu3ZlDO5dbLr7');
define('NONCE_KEY', '68xPG8c01ke/wKcYTuanGOda3ElB+I2n');
define('AUTH_SALT', 'VdbCHiqE6DOqnH5hbjLTZRDBQykNpEgo');
define('SECURE_AUTH_SALT', 'KuflVcoN72gDkbXTtKUdiRw9yyNV0Mxk');
define('LOGGED_IN_SALT', '2Fwr9X3H/gTsfOq+c9YBmwPhPcvLRzrB');
define('NONCE_SALT', 'ClMoE5W/OUjfvtH1wHk/WulIeuv0KdLu');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '18_';

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
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);
@ini_set('display_errors', 1);

define('FS_METHOD', 'direct');
// define('WP_HOME', 'https://leadingedgesignage.co.uk/');
// define('WP_SITEURL', 'https://leadingedgesignage.co.uk/');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
