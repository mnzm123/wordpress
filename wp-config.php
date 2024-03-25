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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         '7 Ko[[a-_Gd(g[aUXzB-k+_2jcu2Xx![[`nWkPE{PSD*TO|1*R!Y=n,]FvOsTR;|' );
define( 'SECURE_AUTH_KEY',  '|d({]yoN|51_hDY{m%5{AzP=&`+tN&`w3rbyL8Kf>X3)r+=t;+K|4lpRA~e%zp>N' );
define( 'LOGGED_IN_KEY',    '^[K5Gybw.;:LIyE-)g$GbEfXnJ#gZ|7_N/$r2({|5+4pR=Cr}yN j|njNq7VuhiD' );
define( 'NONCE_KEY',        'Qpadav;<to-OO Dl/65_`C-E-D*cGG7YlcD9J ;thw]O{KBFzf*gs<t4fx*?Zh@!' );
define( 'AUTH_SALT',        '{zgcl)f@57C[JwFY@*Yszy25ZA(Ymgu._jgheMeUk515>K}7PYKW!LxT!R>SM(1z' );
define( 'SECURE_AUTH_SALT', '>W5k+21}}@k;z2Y&W^Zw5X^C|:>:scP6yT+hR(=4$VygUo{kW.pB/|Kgu1,QiG:L' );
define( 'LOGGED_IN_SALT',   '[ANZGW8jMtlvw,=5N^Hi{PBn3#2|gwT8k>o#RuA_~6w:TGC.&q1~PrjX=?@=LCR9' );
define( 'NONCE_SALT',       '&||T~)38rJLX8JDvq,3p/oSY7=3+!M>}~Q}*8@_k[p9]`^?*h]zl7|Aor-1gA*OH' );

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
