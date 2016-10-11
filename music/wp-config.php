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
define('DB_NAME', 'music');

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
define('AUTH_KEY',         '5)DtwHCz,X>wTso=QkCOtU=>WK*ppb=Fi)IOa]nM9p)>WTV*wu>+4#_A[%|_%ID;');
define('SECURE_AUTH_KEY',  'bC,ua@5O[lGpz_oG`5ytL@cb$$iwC#zm{=QuR]</4?I.C*rAq6_D#za fi!*aUo_');
define('LOGGED_IN_KEY',    'su4^:I6_2N|noS#nrEQ.K*i-mB@q}$n{1$EGU&xS[i.;2FrIU*I2`eJ.n^x+$!]e');
define('NONCE_KEY',        'b:~U=IB`nmp JF2,l7nN:;>3Re=5KK=x=,J,Bl4*t+8j9xY[WxX_Cuna}:etOmk1');
define('AUTH_SALT',        ';r)[UBkl*^{i>;&|0$n9YI0M@U:(Z>w(GG>iIHaVs{J+R<-2}Dm)Hc-lh,`_(5$J');
define('SECURE_AUTH_SALT', '|+9e)hqX8#q05NKI%ZcDyh!P4xXMUz/QN19Q:QwC=D<q.p+,_ekC{gzZ`!u^7X|H');
define('LOGGED_IN_SALT',   'f(3k<)4V kUzFvR&q<B8-]p:zF1?4,m|yns<hKE[RyTfryiU1wy{ZVQox$0A_V-M');
define('NONCE_SALT',       'l0Mnw!o=cDK0O]xJ_w`Hv~}4fU } Eidu:?>=QU(C5CjGAP@{/u=]C7/&};j,|mh');

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
