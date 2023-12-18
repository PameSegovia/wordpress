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
define( 'DB_NAME', 'proyecto1' );

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
define( 'AUTH_KEY',         '@64`?rt~a*K5,iM{jlg}Z_2PRV32]|F!r1+w#,DCPb3D|a==kGMqe4qk)}kjum)S' );
define( 'SECURE_AUTH_KEY',  'Q9UkT5`3-k)F^ZLDsH|^RTLYSx-|vKh%h:.8}VN>r(^[(a+GE?P@U@3/)d)*I*vA' );
define( 'LOGGED_IN_KEY',    'nAf#7clysaRNJG@F9T5iuBI1h9*rw%bx+Pw5MxPnlT?~@>QX[0<q0OjzvaA|bl#O' );
define( 'NONCE_KEY',        'Uo&3{lqKWn) bYm7Z>P{7[$}7x_qQ[5o|aKle%FV9Wp2WqofZ|=blE{$|N;IbTI3' );
define( 'AUTH_SALT',        'gNRjs?.)?6>g(olPCN[D)mNSuoojytfr0~]$<MxsIjENkcv,>HO*o1;#.;m@Iljx' );
define( 'SECURE_AUTH_SALT', 'XI%iKkA-+p8Hm*UqfFttg]S9L8w9YptB|iY65(!>b*DZ8t6rrXRzA`f7s&Ya*U1Z' );
define( 'LOGGED_IN_SALT',   'T]R5r$Q.8p1N30PDZbaMNu6H<>--WDS.tabv?+w=jXb/<q5}|4@C.DjA60[A>J/M' );
define( 'NONCE_SALT',       '_![EXrB!h*r0J/En*m4ed4QEYBnk+vEB;O)old&jY38chgZBIyd<^0~Yu 8u|iBz' );

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