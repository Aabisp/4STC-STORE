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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '4stcstore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '29XnsenT;6O|#$3(Q)8|_Bi*xCBBH0Gy}a%5]+bRv8Hfj[eNvnT(^yqACc4=dBsE' );
define( 'SECURE_AUTH_KEY',  '1.fXpa_pxh=$S/j)CkI+!POP/~[W*nPqy`tXV&u%}AL48`@AA Di:>m3e`Zi^lgv' );
define( 'LOGGED_IN_KEY',    '$B[%ODq5rX-[G< ^v/.dJ|Sl<aK{2_SIzVPo!_?o6]j%lir(C~5i#si:OFmoVC]n' );
define( 'NONCE_KEY',        '&_J%c$&/9D?V{P2g45PHXENR,m#V.AFvcrl-xa888LHz%r6^r2#5|ef.`4e=oS|R' );
define( 'AUTH_SALT',        'o)+o#lrC=8Ml;S c+@6},iI[DhY_+JRp.~H_)T(|2u%k#9DO]rB7lJ?k[G=FC.{U' );
define( 'SECURE_AUTH_SALT', 'amVo&XGfaiVRkUmLxDc:zv6Y)x5rC}{},!%*qXF*)oO$Q{G4>6MnzZX!7t*O`F6T' );
define( 'LOGGED_IN_SALT',   '4KWrX#sC.JPWeqrKB>KHIDCQW#r,=%)T|92Q*Xg/1JCs[YePbw<`sQ2].YneY`1z' );
define( 'NONCE_SALT',       '`Z{3/srWr?vO6s5e7VG?F0]QCRjkq=5vdaT!:*oS3=|xy[Vp@r;#Mygva%r8={}J' );

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
