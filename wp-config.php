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
define( 'DB_NAME', 'BAX' );

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
define( 'AUTH_KEY',         'MF{q`i^=gMsg}2lPSK|D./94+BmYRwOc`[FfkvY?<Q`Q=R50>j-3d9N@;(URmSEY' );
define( 'SECURE_AUTH_KEY',  'jB`F+*yYsDP]tZ20tdhh[gr>T@g).X[UNOztH]|JoQ?z2!1VJuD|#6t7-fk_Xd:&' );
define( 'LOGGED_IN_KEY',    '-R%#JO!h9y^#ClT.m UM$c9PK{{%{6uN?HsX&de s|ORBm*gTCX}0wy]ze}_Ee3o' );
define( 'NONCE_KEY',        '#/6o~6q!e+:KT]Is}Gc^r.b ${qa-{FS. ,^KSk%Ikn%t[v-Z?~@2pUH[^-JPw=U' );
define( 'AUTH_SALT',        'Nq}FcA?yM|;: hs+cjK1q[T:fon.jR|Tb^x-9`&X:C7a-NF})f)pGWg_ftrvcp7.' );
define( 'SECURE_AUTH_SALT', 'Da[L#8Wb;Qz^^tD&?s60#s/9.O2LPcE]9R8^W%9A]Z@XoKMy}[D?@rWgU3Ds6m0Q' );
define( 'LOGGED_IN_SALT',   '!$|H%0LLwS&xOb5x#9aNfqTIh)Q ]A`H<k6>/I`^kv6Lt4X:54xV4XiNa8~tuKD+' );
define( 'NONCE_SALT',       '>-vNz^K,$ !?g8>t|B5R/g^f.PW:blaj&09p.:6@&Ti1 vM>6.[/qr^{L>:%i8<;' );

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
