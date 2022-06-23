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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cpt' );

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
define( 'AUTH_KEY',          '/Tj/RlLQq8]6(D[X4YMJ2G!/NKp(u9q=&*=~o0-T-KQK,./Xqstn9%^(nMjfy:My' );
define( 'SECURE_AUTH_KEY',   'B`P@JjZ,S{U=3F)MS]2I`)PE`G;,[SFCV(eDd]en0F_Egw^DbLqU7 Y~ Y!X?3iK' );
define( 'LOGGED_IN_KEY',     'X+4zMx[}99N)F$t:M}KqVBE!r!|*=&HPm}Do~U0).d{[Tv}tn/q8c;bcd=k.!iZy' );
define( 'NONCE_KEY',         '=`}1ccRudL_ZIwa[I1&MN/fxK_S#MTfx^R*ezSz&<``0JGpQdt xHiM3!_eSjgOc' );
define( 'AUTH_SALT',         ')yK<4D2buUii}A;7:yb*%f<NAa+x zjvE(1/y&<uph0l#u9ze;RBK8^8CVF&{nTH' );
define( 'SECURE_AUTH_SALT',  'b_zLL)k!h[4-eAJ<(9K@ kk~#]Z@ dV6v+s<wVy|7JN &V~h*fTF/C=3)L$>4U21' );
define( 'LOGGED_IN_SALT',    'vi8lln8gr_,xgH(w?!*Z7=0y<<sO?8qe3gEy713}=)`U[y@^ 0)e[ixY3iV+-bQv' );
define( 'NONCE_SALT',        '3*^`UjE*cBEA+l1HePxIEoaK;H/_e&u[T?P|Hq8.^/^W>fnQ]h/;4f5K]&aYU)a3' );
define( 'WP_CACHE_KEY_SALT', '}@O#YK ~>Q-6MC83(1}{@H=lt4k/d:kod/[W8CE>r9@ryiwoB]mPr0*d-|RjO3CA' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', "direct");


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
