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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myAppDB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Wn~|sVF#0`v<j`SrlSZ6v$Cs[F}3$<w4!e9SX9,G>EVEMY@DZ!2 %p p~X:|S86m' );
define( 'SECURE_AUTH_KEY',  'z<|(i`4}ReDzL m@S<yxZNxIjk2`qS%#1vQUzqBH{oEo4Y<J];@-=;m7y6Df8 |I' );
define( 'LOGGED_IN_KEY',    'Qx*{8D,w#1u8MX{y/v5KRnC/QgF{07-?F`BdC#VD&_m%yy3u3#039Sb~8Q-k)8pJ' );
define( 'NONCE_KEY',        '#XfrE4#[=M.eg)wW1&wiQn/?eZoJiXlf~E(;U3E$docE`-%>?~Y3uR@0Z88q(a4)' );
define( 'AUTH_SALT',        'GD{lt1;@-=)7;<w>:}e$?t<fHYyd_?M)~i;~HhB]??k;P$^~bDl5)Q6X)^=<LE(c' );
define( 'SECURE_AUTH_SALT', 'LFZ=Qin ar?!ayd)=yR<ge$B:4+b*a=&}n>^!F}wWv*ak!x>cqKkij?In<`GfbV}' );
define( 'LOGGED_IN_SALT',   'LZQx5b^GTQe~_4yfUF?Z|aPU;uxQvU1-L;wa)Le6sl<z!{iE`[*hY&5,P!aOkN${' );
define( 'NONCE_SALT',       '44%%XTw<PpND4T@PT]mPQH^WGa!H~./D;{(TaH`XcIu1L=stVosxhGMl)~[5#;yg' );

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
