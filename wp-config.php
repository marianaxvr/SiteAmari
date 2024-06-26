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
define( 'DB_NAME', 'amari_db' );

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
define( 'AUTH_KEY',         'k1^hC^4>r]O:tzX1}F1nD vXS_ZydI$r<n.D:(pQvx;e;H,X&K|FTb:I7L-!,2=Y' );
define( 'SECURE_AUTH_KEY',  'f)r5ih-3F32/h`<C**G JK0Ue`7Th$ET<?>2T jW3G?37g{J]fj=P{^$P>]jx(]F' );
define( 'LOGGED_IN_KEY',    '>7U73h*vyTkRZO&i|edINL;%BgTqT_~rL17$FDfVn]Oh}g*O0{8#VE(0}2aX~@kB' );
define( 'NONCE_KEY',        '$;9N $E8*O;n=IQf+=fNni7Jg}o>s2%RyqP=npPwabDAHy%_E;tlC^cR2,WhY,?2' );
define( 'AUTH_SALT',        '2]=ZzIpOFHFg|j/>=H?4`(-4fGM}ZgO&B]~J%d#a?>EuN_nu0+b;u`I&92i9@<{S' );
define( 'SECURE_AUTH_SALT', '/vf`vAguVL]2v@#ZP1d<NN-EYb0lGuk:XXGRD[61[y(0LeDutSjRo,sAiucb]jUJ' );
define( 'LOGGED_IN_SALT',   'g_K%Zn^;t5az)aYdJ-J^_9HW^1e.%KvaA#Uq;`}-N*h~<DjvS^|g/_h3e_]?iK_6' );
define( 'NONCE_SALT',       'IXE*y?AFeL3 {ytLgUMfq}2.PcCIXTy(ook}UR{Wj#G32[UB[M3b|Cs6ssH&(ilt' );

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
