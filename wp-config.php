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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u582932647_Cyda5' );

/** Database username */
define( 'DB_USER', 'u582932647_SehfB' );

/** Database password */
define( 'DB_PASSWORD', 'Welcome2@FancyW88' );

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
define('AUTH_KEY',         ')|w3m-:b n;e@8|;%+gd%VrmtH,-EFKsy#l=, u%&Va|w.#|ZeN>_<:wTq)*zk5{');
define('SECURE_AUTH_KEY',  '/trm:.H|~qx`ccJ|7pD&v+b1P3o-u3k9b&9+W029?)5ue!j1ws+O;<bXy;V`&b#q');
define('LOGGED_IN_KEY',    'd;2V Y{/`-co%5d&xs_9.qnP9s,e|Fn:p6OK-f;]sL3p~H&G](R93bo|GdG?4mh4');
define('NONCE_KEY',        ')>9sesr8m;XMV5;-*_^{9[Xy4[A[Wu@@s) ,7?}{4sHpw7:gB}k~<[O1TO0,21iy');
define('AUTH_SALT',        'I. q4n^g#mg.Z{]RSAP ^GU7_J]Xx|v2}%q,5V)cK)-2=5ehJs-@VFHU;1r%j8zp');
define('SECURE_AUTH_SALT', 'P^HVgI@c,3B?w;/!(I&]Dt40^DF@.?sG eJ!7@;BW~}72yWAn;f!SQ;7q-I?S&>c');
define('LOGGED_IN_SALT',   '5PY%iA:sd^sO?OKX)5K+U{kI6Fj))bizUa^V{9a#hMq1`%(XWO[PRX;.<~Cm|O6J');
define('NONCE_SALT',       ',ODuI`KDV8FPwi1BeSuew^AK{bnWZ`2SMOC9qV3BU3A4W<mtTbKH1J1Ev0F3quJC');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'ZGU1YT_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
