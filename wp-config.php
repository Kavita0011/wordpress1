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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'a9PGou=*bq |%_q6jn|_.zYIl/>hTo^39saJ}fCtZu-7yA.Q$w6u%X/J4HkH#_d0' );
define( 'SECURE_AUTH_KEY',  '&IK_RHj*X}mr; O6 mDVny>i%)Y>xGE,+9w+vK(Bu;QtnU;7su:vH^5um,9=6d`o' );
define( 'LOGGED_IN_KEY',    '|9`75>Ybuah]y22O3fL=z+ihrp)~;)P2YKn:NvZJI1&VO8B^J_q]D@n ,tETAr: ' );
define( 'NONCE_KEY',        '<CO# Ia> a2&$ueL(ycYu#mE~2<#hvi,fI!vk2,@aoSx3>Jt3Vp`ik$l+!6NGObg' );
define( 'AUTH_SALT',        'Y}*aPtdoA83NK>g&t[zA>m*OT8l5x~/}0@u545`@>n|H@^F<6n?sO`/5(eld^#@Y' );
define( 'SECURE_AUTH_SALT', 'EEbSf3H$3#k+IZA7bu1FIe 1K[KJOIok=OSUCGDR4ss3A,~r+)|!XZB2.8tkY[t[' );
define( 'LOGGED_IN_SALT',   '2|ukwvC75)+j9fI @D.n?gBe[2gN_-VLK[ MEWHS`ze6mA;etpYwGB4mCR89jN+3' );
define( 'NONCE_SALT',       'xL5!a]FEgSB5{Vb^i<Ha=SrGl Vk,7lH)<!}(^ uxN{?x>4(yNrFo&x9kI]^&9%_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_prefix';

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
