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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '^5#6uC8:SkXId3-H,5:a}G)EM*nL#a>p|6>nCq>W17/_<vukZXTt.g//mlI06Jmg' );
define( 'SECURE_AUTH_KEY',  '5s=}tkgxdlmq.>Vaqz9i9Jv4kuk5QTj!~d<SV;8k~o$-GmWbd;i__b>Vv_J8Wyu=' );
define( 'LOGGED_IN_KEY',    '<%f0SakW ><]2a(Q=P*t.dCJtlPBN62aTWE<[UG> 4tod:Il[?&e(VYJ({m4)]*`' );
define( 'NONCE_KEY',        'Qoh_.PP-=!X<5ZFI-T-^`@VDPlT^J9oefw!&w33fcpNEWwRVUN{3k70u0s:E~K?-' );
define( 'AUTH_SALT',        'rt/vcq#IaPkirZNU?bEYi:CiFX!(TYH!Hb=@H(yn_u0N3cA.[0w5^SRb/ZR)C7um' );
define( 'SECURE_AUTH_SALT', 'l v+lZdsj okeOa *Fv>x==NrY#/(7sxY}tH/Ntl@#Q?xbmk U[cTd;$ CfGk3!4' );
define( 'LOGGED_IN_SALT',   'm5bG:S^GE_k*+xopAC#yp>,gjl3 =??]k?O`4$;naY.&/82IDo<g@$hmm|`yWV]`' );
define( 'NONCE_SALT',       'c*L7 <1uy!3H_x0Z|jH.MZXs0eGb ]ucl_GM<(3`C@A:4bTiQHLMZJ3vxDU;VJ|$' );

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
