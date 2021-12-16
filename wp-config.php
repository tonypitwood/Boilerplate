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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\plugin-boilerplate\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'plugin_boilerplate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q{VQv]&0WL=G0NC|mIV$.oL;2M`J*g=4;Bx{xtHJ^I}Y6_^Z|G3LeB|XZE[.h5Z9' );
define( 'SECURE_AUTH_KEY',  'UEi-INeqO(zBn/xk8J+SnFy9m4YAm e/*v&b_AbH!i/UA~|O>A3;j0mIai 3D74b' );
define( 'LOGGED_IN_KEY',    'R<98!H93rhAm1DO$GL^JNXf.+FJ0gBS>I}9ek;{PXS^;Q>MN_mSW- SvI1rj`V(p' );
define( 'NONCE_KEY',        'IM]3;|ik,Z:Ue6sW7HY*7ZAZzi={{v9<{ffiO5wsV%oa[aW{FORKt{OpIC;cCq8+' );
define( 'AUTH_SALT',        'BfY&;vH*;y36!i-a%44t}dO+wt-ugx@Xfe11Dt/PPz$W90$lWH^zc^[<N}Zp_J0a' );
define( 'SECURE_AUTH_SALT', '|5VY=T,u1(@X`s-avojgEh.M+Is?oJvy!#HZqAs<B]u,{w|:Z#S}?XiAW>`t2%_0' );
define( 'LOGGED_IN_SALT',   'A#aEyP.jFTvI_X?{RIz.68x5z}.p-)8$Q 3,L?*bgPu&t`~@9Ih7>`^d^P_zB3tF' );
define( 'NONCE_SALT',       'IU~eA75Q{7!N](%addy]hC.JXgds%sT+.8+(O|@d{!zk83{t#yoz:SeFen^g;AXH' );
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
