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
define( 'DB_NAME', 'dbsekolah' );

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
define( 'AUTH_KEY',         'uH4tS`]WV2!.3zHb$ IWI<#hTzJnTkO4E -.BmMA23h)^~I~l:IEFGQzM<dAQu2*' );
define( 'SECURE_AUTH_KEY',  'jatyijVeg?:OnjHFe6UlwRyt{x%&j0h|lG{lHHyqUGf8G3nN^4;A^pK$-BjL0vmx' );
define( 'LOGGED_IN_KEY',    'zT,f%p4>H#.Q?$<wX!B7X.0qZu;h<G/=1)T#&b,pkhH`5QL,z9#,PTOP:ga^+lbK' );
define( 'NONCE_KEY',        'CbWK#1_bO`2cl1[cEBt6`w7nI=4V[ey]bc29}aTrV=1mOk8<|Vt)]>u8*9IYj},.' );
define( 'AUTH_SALT',        '+{<:y30_!m85_Yo81 E/WkF;E$sU3PNd&;R#Qb8*Iwz])YYxN.rBX)bcHb*9+#&Z' );
define( 'SECURE_AUTH_SALT', 'L37w00[a3@IN5h-Z3F&.2]n t>X<ut?A`!fPf/!`&MSt68/X=A05@stq}6.jGF/*' );
define( 'LOGGED_IN_SALT',   'a^c{dSM:aPKV*E,-@B-|b[1,V~>[k+tp/WUV-=qtm>x`: m<C;uyUwqKQ*(9BE26' );
define( 'NONCE_SALT',       '1J?hDEvN.3f7Pmdw6q}-(:}g>(%P]ZPg?]NP@!>Z7vAC4=Ud}oX1VIuV;gI* ~Oi' );

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
