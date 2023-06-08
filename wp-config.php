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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'zoeboon');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'ThDyqXWU8>Kj+:Hn`O%#5xb?k^4!s`8}%H!8 `|:c)*!I`eg@S6T27R;%_yYm.z0');
define('SECURE_AUTH_KEY',  'Vo$1L=M|%LoI]TsVJ@eGBff#_Q+dku#5Hvu,I<^cRxpK<}b@7ih,kk8tfhr[]FS=');
define('LOGGED_IN_KEY',    '( >33XXbtH]RI*(Xo7tDF03?PW?1HuB/1Y^vdGRjpBBA<;3G6#yvl`Uti P{9;<I');
define('NONCE_KEY',        '0&jIVR.R)6ouwD~^yr<)VGCYUQgdV  |[z]o{@e25Ji#N:)mzb+AGdxj9,S<JO)8');
define('AUTH_SALT',        '.%:Bsa OO`F)-IPdQ<d.Pp(DBu+hwu-]3L/.TuSGoz;#Ix87?QYZ{p,h ,&]L(h7');
define('SECURE_AUTH_SALT', '5DNqFo)G)Hh!L7VT]zx}>.X&=t`vK`w&~RR, XH}d]t,CCrhK2;.Ov<NM~LKgPhe');
define('LOGGED_IN_SALT',   'f5:_:%pIX$M,[9J9k}+D@zx$Lee)iH]97>W*z?c!|+]TKnDjp)+C #O2[|Ox,#mR');
define('NONCE_SALT',       'd]*W[xmV=w$8R:B&f*?_2#b~3QUPpfv$[YRAItv7El{YY5ZybK]RN^/TvF!x&F(I');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */


define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
