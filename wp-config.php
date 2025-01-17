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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ':vM6X-#XIu;[Q8[Aye`#]gyk_%J{&nq0_qAU*ke]m*q=)8HXg<31%qv$D_Fes,7T' );
define( 'SECURE_AUTH_KEY',   '_;f)TizcfG5!3,HZ0&>ZFSO{;dn:tb?9|$1kEs*H+5G8A+F!j`LfkROd+k#l}*(-' );
define( 'LOGGED_IN_KEY',     'yktSAf}UP:Xd%J@HvD[~`U$yFbrPdB~f4ye_mU2hxA;jp.&^$]N!=9h77_KQAzek' );
define( 'NONCE_KEY',         'ey&=Y5ypyp!p^ON%);UI7S4VEuD:Ib[^0!LO50ojI]5_>y2S45COzDqUefVbH3G3' );
define( 'AUTH_SALT',         't$1L!u#1m/Mp0hn;S9*AsSc.t@8fJ*AS0kF|@*a6-M;-WUe[ukL=l4?b4^Dz-8ze' );
define( 'SECURE_AUTH_SALT',  'Jo5V[pXgXP`/4Lbz@:V=RO3/V)`TU[y4+=aW.h?(`5G_pIE?9joG=Sjn kyyM@V)' );
define( 'LOGGED_IN_SALT',    'xuA11NRAw%,q8gLZl?B#X@?`Ff>^lRFH~8s1V8?KM>F7l.:8C68!uLGO(eEt@(=5' );
define( 'NONCE_SALT',        '-pil6^9c72#{x3@ |5rjc4ZTzvJ^YEyFUR(*`66H1{:ywmQKvnnZe8/6w;y<~RE/' );
define( 'WP_CACHE_KEY_SALT', '#,U#]{~!okJe6b s5BJ(4NOq*C_lWd^X4!wUf]J?>Z;<`$|%=;#_05&34URSNY?I' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
