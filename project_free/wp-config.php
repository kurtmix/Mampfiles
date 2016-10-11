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
define('DB_NAME', 'project_free');

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
define('AUTH_KEY',         'p},xI:QyYIP7geVLe,iQcZ%8vSL>HyUQuXZvCqLN.R<>=!;XK:b7h>+##3yWRzt)');
define('SECURE_AUTH_KEY',  'BEr0Kao4d!E]w;9H>h_p_@lvzT#O*[uH-nsQv,&KqL q[raW7HbBXA[p3:-L~IsT');
define('LOGGED_IN_KEY',    'o3Pk3U]/tvf];bM^J,wD:!P>A+OBlFhIA8.nx7u=EY059)m~r1vG(K_+fnHPXOC6');
define('NONCE_KEY',        'o%my[kY(r>0FuxPoaW2;qejjK96Z,e*9ba<`i$~=]B)(Jdtw?V6Td.1yuz=G9LNN');
define('AUTH_SALT',        'k)NDAsattcG>8ACPC1nD[HDYe//y>W80&PNP.q4efmvdO;j+<gjG]z91e*8F?~.J');
define('SECURE_AUTH_SALT', '~d#/i~KJ<]K]<I37%bI/LpKia`<HLq=&xnIhggb+Hb<MO|2ge|8K5kQPtxpy^13;');
define('LOGGED_IN_SALT',   'T%U0V=^p0a{JsUI|^KQ`Js=S },[?fcFTSxHxrtPR:o^H8a~*97e-#lFV]rzp29M');
define('NONCE_SALT',       'MMu&k@IR{W8+IS@LrHT2SP)wft +/RB$vPM$E*r#L ;t8 G>(+N2bBsP!yH4[9c?');

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
