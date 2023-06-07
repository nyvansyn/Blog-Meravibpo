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
define( 'DB_NAME', 'meravibpo_blog' );

/** Database username */
define( 'DB_USER', 'meravibpo_admin' );

/** Database password */
define( 'DB_PASSWORD', 'meravibpo12345' );

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
define( 'AUTH_KEY',         '^sSXj.^f]HO}t=Dg07@V> A,h#u{Ic8a8upR#5xi($2<N$VoCK_Z6/#qx|&Pspq>' );
define( 'SECURE_AUTH_KEY',  '[P22G(6N[i()7ElLl%Yl` &GRr0x*dd%{9E,zB-[:[kJ`|TLUNSn.;;?Zp(>(o:x' );
define( 'LOGGED_IN_KEY',    't4W{ZLvI`&t(<BmUx((.Gip)h*wG3|B,<n3V{YxUcCnJH2Sd#jx@J6;3u$O;uJBA' );
define( 'NONCE_KEY',        '(uJx3x=3fKPoAi/-p(gBL9j]~kRQm>ffAU;hNXd6-1nw97M47m++5.Ka>p^#73gE' );
define( 'AUTH_SALT',        'lU]v9Z46[ZnSWBM+G9n6w!1T7))ajeof?ST4dUCR}vDIu<h8{F+?PZTr5B %Gc[B' );
define( 'SECURE_AUTH_SALT', 'CJ^[<l~@R,o3iE2);On,+SL#lPpQ(wZgLx!3RKZ!Q[y0aL]G`vn>n,|K*4nHHyVR' );
define( 'LOGGED_IN_SALT',   'LTR(w2YSZzZK]wec2U$0$<04*QHwkN|_wZt^9hGUd+h_d$^,Y 9>*&e>$_Ly~F3r' );
define( 'NONCE_SALT',       'nFaX]?-fF^Ma,3NFR]l-T5jrWhR{N;LTGq37Ux/7<JiiJ~`38M]BiwTbG+5K6@p?' );

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
