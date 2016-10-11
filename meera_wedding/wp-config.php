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
define('DB_NAME', 'meera_wedding');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '_RI$<qproUnFSyl+8sWWJ~ .+}(0d(BSft0^G$VifHQZ(1!~SQ+jpo56Bbt(dk=R');
define('SECURE_AUTH_KEY',  '1^?Qu@wiG=`EEwbFT=@z9=M|`9T,ZRUA^0O9hOh4vmHGv74R3?u.^p[@c|:-WgZl');
define('LOGGED_IN_KEY',    '<s>|s,-0 2{(E$)NdUWtk;S2y,XpY-d-So[J!?Xg,zKvnc={(@_NDBQ&X$j/a<j?');
define('NONCE_KEY',        '=e99-ol56^TX_6?-@!gN59Kt_sB#~)2w|tUN06H_f: w<Jv48KVrDeknivoO+#/f');
define('AUTH_SALT',        '+a@;N@d-SRu~|qs.c{{gr>Ttb`b4/sV9y5b]T+c-0b-Wu_wx^U{}yCJ}2bw`#B3&');
define('SECURE_AUTH_SALT', 'yYlOu6BPr&}@M]!fjGMyD6e|<@=.f`^T,gqh@;>staq&i3{NJiJfj/HhC-%&_@SP');
define('LOGGED_IN_SALT',   'm j`(EHH4r?P7c L(erhHD+3Gf`?p2,7eN{{BV0V%aNZN$KW%7,!|M4 267*?`fa');
define('NONCE_SALT',       '`De3{VIh~0$}Z-SNS69`EsKg6{l>)0YAnZg3O<Fg6SHIt2VUzNQVI&&&_R#!4 8}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
