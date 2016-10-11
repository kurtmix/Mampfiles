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
define('DB_NAME', 'project_kurt');

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
define('AUTH_KEY',         'X> @q[ |<A*pe+Au4WnH/M3n2}EMOof$oNswQhl]b@hbK{G?TSu1aGA5ySo=*%Th');
define('SECURE_AUTH_KEY',  'uYJ`r{Rq/[iTS` }rvmIxX?7*`Dm)&d+3~;gM@mBAUqP)kdG#-b-8w%$qcwITph ');
define('LOGGED_IN_KEY',    '3vX@68YUf#nY29LbJ^Td5w{>sZd*MOx}2pNbm0Fgkz5!t5-U$^dEv&d+OhF:o1ku');
define('NONCE_KEY',        ';n+bnkOhROQP^z&#2evDTWfEQQk f+r)^ryz*zfiK;z?S4R}<;TF~D//NnKUXp3^');
define('AUTH_SALT',        ',WJwzUYgc7*~a)6@hz$#%XFp{HqRN>Kvq|S6F_.z3J+C)yuMJ{]gx1O,cP4tV`Hj');
define('SECURE_AUTH_SALT', '3bUft+].CrC*Xrg]rFn!#X`#)46Q{$6q1eJW3$L00[.,:vWN02+dO0@sA{k6Bj3R');
define('LOGGED_IN_SALT',   '}~R[e72!v|RH{9$Y>%r0.5Ay^1-KLMxKnCLebN5)1,ji)q#vSu1T!-YC/W,:(^_l');
define('NONCE_SALT',       '5R)2ZHG64v7!cAA>I:GMk83C{{hMVjNOy)5.P<9NP3%2$3jml1;<Zg=$*QD_w5(x');

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
