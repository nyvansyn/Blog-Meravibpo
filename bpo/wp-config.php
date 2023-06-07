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
define( 'DB_NAME', 'db_bpo_article' );

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
define( 'AUTH_KEY',         '3=K*+qEhXts]p.M{qn),J]6V]waZUU5C%>Qt6N#$ P^|Dq&71y.{wN8PR<P@uds3' );
define( 'SECURE_AUTH_KEY',  'R9zsPO|XHa`!NV!;~a)#@i0pw2.yp+e}es)3f#Nbp(SLK~Fy,`xUo_k//mfJm4wY' );
define( 'LOGGED_IN_KEY',    '!FKGwUgpd^D_^N@Na1pYl5TkHkul]]}0$;3Q>zT6]-mEEu-y4np$TXnDz` 0mBYq' );
define( 'NONCE_KEY',        '%~e2^*`R]Pdy3U56PJ!MZxaEYdm7Aq0z-Ge3%v{7+}6j^W&k7k3rJ^Ab,oCt7[Sw' );
define( 'AUTH_SALT',        '~.V<_}95JMI0@vQ5IZ9<s:Tnlu<qTZW_.?8nDrg3<C2?l@WllY#s_BXGA0*< C*B' );
define( 'SECURE_AUTH_SALT', 'Bfxumaz0x(<E90w~ih|PNi8s^X5T.GXLhN:L-fSi.E>n(>mMG<T[,#aDHunx$W8]' );
define( 'LOGGED_IN_SALT',   'L&[|F4l{-v+-SVFc<73w0iNtqr:0NlDOo&z^,6{+Q_QbQ?[LOC43}#V<u+.0**RB' );
define( 'NONCE_SALT',       'p:TJP_k8Z$tw%u{@BeD+d~0*GPE{P;4,<8WCs0aq2F3UYdV~LE/@eLutU=|kVsN^' );

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
