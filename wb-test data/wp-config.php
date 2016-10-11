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
define('DB_NAME', 'wedding_meera');

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
define('AUTH_KEY',         ':HkUFc{cw4v`o.?ZG8TN.]|d=Ug[oF%,W5?+vDT)s17jY8E%Kt9[[_F1%l);YL5.');
define('SECURE_AUTH_KEY',  '-m;aK9<61xJbwt48=1PX>PBR|y5p2lu%,.Xy]Tz9yOR7l2{$c$eR%Wgn&l&HsD7 ');
define('LOGGED_IN_KEY',    'TIuc4;w]!4<RJE+WIj[} (?9g$S?LppHum:*qA~Ap$y7c593y}!iI#$kH@%Ihf2E');
define('NONCE_KEY',        '/g>zKf4?DaF?IDBcR@}(0b~8@,Q#^tm2$|3Bj%gMG/#klOU$zb~K/SkB}wM@KH V');
define('AUTH_SALT',        '>9GO]5qS)+tn6^=a@HR)11fF7L]P`dS:9%Gf#A#5qAnj<MXi]K!!MW#x5UhV~ga&');
define('SECURE_AUTH_SALT', '+|GScE3(~u0&a. B}$~tJ1>LT3$`7ftn<^by}M.=5aeMyq#2N:8oU-g<8C7qW<s`');
define('LOGGED_IN_SALT',   '4iucS TLYL+;__39W NviikHd$(I+2O4O0e{KTQMx]ZlI5L~zpHU M7$toj9Xh+&');
define('NONCE_SALT',       '{AE/WwrgJ#8s9JA^$SZ+tm 0T<N05Uc_hy-&rc/g!4#hUK6 !w JgkIg}&-LgTpx');

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
