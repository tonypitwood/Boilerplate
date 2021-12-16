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
define( 'DB_NAME', 'plugin_boilerplate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
 
define('AUTH_KEY',         'f[PPY@/A76[w=j-bB#7p(UqQbzG&u-lP3@vR 7h1YXe)jI%gawm+uC,~s)kN}7~9');
define('SECURE_AUTH_KEY',  'PPH`;Tt-e2Zi%cW:zr$Y#Lu5=~r-r.uo:,,N[e5obte0Nt6V<Hr9I]xN,:7+~/9l');
define('LOGGED_IN_KEY',    'GLwW]c-1^{k-FGOxP$bxOo+:#GsF}`VTje1*}lEjT6RTUmFE+3i.@f_Su#P5&`7g');
define('NONCE_KEY',        'c0GH13QD)!6tDU@2%@faHFSNYe-B<Xnhqmgs{OP;v@<q-ogE/*|%v.3rQ;geYjV#');
define('AUTH_SALT',        '`a4W/#sU;Be_H`1]d)22q2+&?DM5*_$k<si[Di_!z60vH++[Io:zH4OW<]X.o>~W');
define('SECURE_AUTH_SALT', '-&}z<j|3-/-_)x]DV>-5O-T{f3q_8~[N?+M|mGy=Cnx_:-btXhn/DIa|e}C9v8&%');
define('LOGGED_IN_SALT',   'r^4w-._nAA+05}^)1cW*aS--RL&2V,y{`B[L.jvID/2|V8@E:X4?qgN23iv&:2A2');
define('NONCE_SALT',       '6zQ2!+BvRK9OTbR 8Gn`aGd[49+Ct1)b#08|OK:z2F%xmb{@{`k2Q*-C,Bpz(th:');
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
