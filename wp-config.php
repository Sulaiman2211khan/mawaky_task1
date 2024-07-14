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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '&~8)/x:{Ck4Vfe^]7NVb@DRNC)#*H4QoFwc2Lq7Eb{0%mYR,j>DzS +L7MuN Bpj' );
define( 'SECURE_AUTH_KEY',  '^$]:61-g)!Ni0{3`9qr8|+Hht!Q<V;R%k~1(iRsLypzg@c:ATCUw.,zA]>Q,`juQ' );
define( 'LOGGED_IN_KEY',    'o;b2`~yjcm(Zo;7=I6~n7}dQIy`ejNBSfZQKd(Z;;_:%#@wzbRsAT.|UeP!cP%N+' );
define( 'NONCE_KEY',        '~!nd@e0*;9=^llx,16^kpam4k`T!,ohTdTy:UTuw|{Zvd %sF??,4>yGosf6]VvW' );
define( 'AUTH_SALT',        ':bFkyazU{NIZ|G|B.VgInN)05cO13t>.vi*}4`=!bN9xuId(}U)hzArdynoCMl&A' );
define( 'SECURE_AUTH_SALT', 'x~!#>Lhk$~n.YOOs.5|^{exL$%?t1?8N0]^3AmYK,Lv66h|+?1@v%Rg.w Ctk^dJ' );
define( 'LOGGED_IN_SALT',   'a1&zr5{PIA-tZc .:e8Uj`?gz)Bm?/eAql+g<j-iP#KCd%KK!6LO}MO-k8Kyp&H<' );
define( 'NONCE_SALT',       '4|[Z3HBpPsK6>xz@cq2zm9DbkM(BS^&4*(^.H0x5+q--8>mxp^?Y_S;R;OIhD@k(' );

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
