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
define( 'DB_NAME', 'wp_furn' );

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
define( 'AUTH_KEY',         'bu(2/.,$7)c>oSa/GI$JG3UA7}Z6k 1r@0Cg$mNk&t9sA$.(Aj9kFx.()KvLHs*u' );
define( 'SECURE_AUTH_KEY',  '-JR$L??Pa/r5y$-slEcK $9<#wi+QeB[y6gBGW;fs1H1_:0}}Y$^=&ynTQ>6tC{I' );
define( 'LOGGED_IN_KEY',    'D@+l3w0]~jpmVsJEqVk=ze6*?{-i}+gEoggI$]PM3&ac#}5`tnog9HF0Fi5IR>0T' );
define( 'NONCE_KEY',        'XPhZ;pQ3VZ`F~S8QA$_V8Km0/d.grPoD1I:i?/1G7!iXjl[F6dX@dIQ_U!;0}mr4' );
define( 'AUTH_SALT',        'T2L:nJ31uDys|tE<d&v5wjPdgEv)7gch]4[Ilc,;Fse2FJN]Z^BroRjFhPkO:A:&' );
define( 'SECURE_AUTH_SALT', 'y&xP`@s[gHQuR MW<nP2WtSs}s,V UQqaIsk7d<D=/8E*0j,g_k7 VpJqfd<<xJ0' );
define( 'LOGGED_IN_SALT',   'D`2qGuJ6$ij1MX<{.=hi0oEdQFa&[ovj,fSxtmByygCH YfF/>V9aWr,P+kB7K+H' );
define( 'NONCE_SALT',       '%QBeJj?*k?b#ac}DM*c$d]8yyJ@Yra>UXNluaB+*9dK`!L!:4s[fZgFR^U11>uQh' );

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
