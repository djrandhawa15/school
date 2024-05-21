<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'school' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         'g%<frBo~{1Za-2MJkstCl#F#|wijSZAqhrid99d0sDfHW/>+Fz/owy]o45~-|C:}');
define('SECURE_AUTH_KEY',  'e[0<q<|W*LJ_i(6[}*K,M)[@*Ep8zOvKu*J>hp-W!J{-eSU,-E:R`r+|0{Bpg[|~');
define('LOGGED_IN_KEY',    '- VC ;0QbafE!>:]+h+mSARyw?E5|(<}d4O_:Yl22ZVes]n$V)J`YBA^+0-+Ef&9');
define('NONCE_KEY',        'j,838<?#zG:];9&j9@8_Fs45]q,yM|7-2Q`0![mp1o5KgUqu85ac>AC0OA}X7Dz$');
define('AUTH_SALT',        'DCR$ lWi!R|4!#i#Pd|M_6~Xt|P2Hcr27AMbYH-&Z+y[P]-Aol3_X>t4[dzUL)hG');
define('SECURE_AUTH_SALT', 'znw@}{47#KB.&O|mp=CBVGITRxRO77ky>l8TyPT49Ne88[kX|Jy6hrDKr+g^4s/K');
define('LOGGED_IN_SALT',   '^-a=pk^e,P+KzJGrpNF2So|H$;8YO<esZ8wqkK;`f7F079nXO_Y.D+[5TUH[Hv-|');
define('NONCE_SALT',       '$9RjS=70IvIzln0:##u%)*O+=Xs1n$~;m:+H+}U-9>@yow;[LJ*.$;#N;N-@)W~9');

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
