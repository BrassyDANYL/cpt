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
define( 'DB_NAME', 'dev_cpt' );

/** Database username */
define( 'DB_USER', 'dev_cpt' );

/** Database password */
define( 'DB_PASSWORD', 'SadeR6#Js@NfeK' );

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
define( 'AUTH_KEY',          'UX)_CBWTPw[[GtWg9)U(W/sg9L7gCNSc!3+Kx{j&1QS?=#NuWe.G2p!r|@AujYzW' );
define( 'SECURE_AUTH_KEY',   '-J-0U%X3jB@lK9(0m%{,3hd#umW7?z+.[rY)VWA>?2/_Ft?4;M^|p/&&Xyo8kR7d' );
define( 'LOGGED_IN_KEY',     'I4%q?EYUV!?-z3^NaV?S8MVmgFyD/=O]2^j`)xVEtxK=0w%hp.O|j,NS+0P^N`U5' );
define( 'NONCE_KEY',         'R`j/lL___A{H FYg/.qbupx*m48cVIDS%wtNi<,``kG3mAy?,GK)bObsK5b99/ck' );
define( 'AUTH_SALT',         '*(Q9>uyTF[%n.0@wN{ll9@*WJHFR/g+yVY]<!Xr/)kT T^!(|v%8b@4)FJBiuRDO' );
define( 'SECURE_AUTH_SALT',  'haEWHMErw6yL}uhbtvf l2CU`BP+AAkiL,{WD5>uGl)k?fj3}lyfdhRhfqs{& )@' );
define( 'LOGGED_IN_SALT',    '55~e5P>DUVzEU**$HvPbNX,ucj5(]EZ:l^ {K3k>cp$VzF*IbQ@@.9(|C`[I~dIW' );
define( 'NONCE_SALT',        'HW k(N55U*Q8uMSD!e#%PVhm2C>mZh?Ot frP7C G219>zG,0R!^Dg`nuH-t!AxJ' );
define( 'WP_CACHE_KEY_SALT', '{oOU^{q98W E*1Ljg0QhU-P%y(~@Q(D K3!~4NvJP&|Gu5qTIDN!BmY/aKJ$w4za' );

define('FS_METHOD','direct');
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


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
