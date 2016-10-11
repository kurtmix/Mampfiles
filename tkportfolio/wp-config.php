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
define('DB_NAME', 'tkportfolio');

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
define('AUTH_KEY',         'na?Tnsz_]C1M~2VnWsy&)qI|}u5UnWcv?L,|!qvlZM*G7KS~a^)>KfIIlsTtku0k');
define('SECURE_AUTH_KEY',  '9!rmeRgQ38U#WE/Y*O>0;}NkLimcw=+GGW_4hoW~yk(d:i6r|KH,bjSal]iWF1Y0');
define('LOGGED_IN_KEY',    '}Mnz1s)bHXDlUAlp06;&qZ}#QW}<dQ9.r`$h4|W55S}lhHPZdg[wbwV.0i]=5_d(');
define('NONCE_KEY',        'XSM}Jnt/2ksRufC&VJm@-rD?J05v_MiF:YUFid5cwsBGS#RVWfs )N-e48D/)^</');
define('AUTH_SALT',        '*AYrc.}a4;Av@Vj0vP*2uptpI*[U`.Eq{[ 14gn?#_]{p*+HP3T-~6m69u{CM{K^');
define('SECURE_AUTH_SALT', 'c$h.Ppoc{.=B`Yd--%z+:%D,WauY1o]G/7;QDTav9n`N72&FN5M_ilKWLhU|~ ZK');
define('LOGGED_IN_SALT',   'H2x6t*~?j7IF~@S]np=U+TI<4u3Sc==G_{Le$uG;bZW]kO0bZ>(5v5yY5^&l1boH');
define('NONCE_SALT',       'P^DI4~04Z8-00k_wDw42IPF7y7}vd-w/l]H?UJ{>k0YrZcr?3N@D(RpN]Fbh3=H!');

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
