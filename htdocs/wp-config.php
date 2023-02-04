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
define( 'DB_NAME', 'wp_janfabre' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'XR?dNU58[cC5gT* ,3p+*7`+&yPT !O DIO%Yg.)i_+J~dcL)uEWUa8t&ZV)~(el' );
define( 'SECURE_AUTH_KEY',  '9u{IL(L|fU hmwcGwy)$lE&_:d^I7-acE=Ko$w`gmlj?}^a|CbB}nmj-coF#3S%c' );
define( 'LOGGED_IN_KEY',    'O}WsqT~0F$!EE`0fE/~nf{W)HmPW8=v{WzTAe,!]rI!~n4A||WSiCfy!`JLocY7X' );
define( 'NONCE_KEY',        'dk~Ym ^[He`ELiKwX%ho^KafX|_Vl^[^gPe~l2a=+IXHo%tML iAm-Bl^GhqoV*r' );
define( 'AUTH_SALT',        'mAM,u/6:=TP@hj0EA1 (y)ra4A6:MeR.V:Xh`,.y<LS&XwvkM`U vJyzHv6;)ON?' );
define( 'SECURE_AUTH_SALT', 'eQ^czs@ie[G?n.is|8Z,uHG<i?CN;9d4r?~^H1G8e+^K!%}gvBdFMe=S-CYl<y|h' );
define( 'LOGGED_IN_SALT',   '|cF#z{]*.HqrozKkLx%yxChTqW-3;Sn=k=Q`0goC0.*.|Jvodh.c|9>.,t&]7(|8' );
define( 'NONCE_SALT',       '0|~5tHB,r77JDM5UMxpW.oG[kvDy6(B>WEFMC2z}m34X?*kgIBe&pR(Ov;^)%o_+' );

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
