<?php
define( 'WP_CACHE', true );
define( 'DISABLE_WP_CRON', true );
 // Added by WP Rocket

define( 'WP_MEMORY_LIMIT', '128M' );
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
define( 'DB_NAME', 'jeetbuzzllc_NGRmZDkzY2VkMDQzNG_dbname' );

/** Database username */
define( 'DB_USER', 'jeetbuzzllc_NGRmZDkzY2VkMDQzNG_username' );

/** Database password */
define( 'DB_PASSWORD', 'NGRmZDkzY2VkMDQzNGY1M2U0NzE5ZDMwZmYy' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_unicode_ci' );

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
define( 'AUTH_KEY',          'bn,QwF1*JT,x27N1gS%^9y6Z)JofklC|$CQFf]sGa8f1}YJ5*iiID}RJkm;wZ2^z' );
define( 'SECURE_AUTH_KEY',   'Yj!8uz?az4UoH>1X*jAuMmDEBr3#{, Xf`sYEf=_ndQF^^h_oRM$^=$Uo^*i/stD' );
define( 'LOGGED_IN_KEY',     'dp.@H18Ol:rD5-G2`kBIP-ZMqn-D$Q8u3%Gzpn@:c=`7z< 3:#@i!{:L2btqA<xu' );
define( 'NONCE_KEY',         'Ye%JX[!Ms#Nct{Uu_[em}Q^K7]8Dtl`URSvFrvd`=09I:w&mq&uo|Z`7NEl;_=;&' );
define( 'AUTH_SALT',         ':&5>QLpeGz? eL1bpDl6ZZ7ZVxJ}R,3uWV2H`*9~:`-&38A ]!e_:YOA`Q.9&a5w' );
define( 'SECURE_AUTH_SALT',  '{FF$+J4#qZ&d7r6WOg8-Wk[z>A07&4J[@>c=r{MxMnZj%x/!:uQiLG@fia-R<I42' );
define( 'LOGGED_IN_SALT',    '7-{4H-(Yn>f q$$]%5)X>:suyQzv;W|9YC`HoI9t$r`K6UQ>g@e~tU5R:>8m!_5|' );
define( 'NONCE_SALT',        'fuuLM+gJDuG32?(],bDelpWTB%i_(m+t:Vc`S[!uwYTj{y5Lzv}hoh0+Tr7E6%x<' );
define( 'WP_CACHE_KEY_SALT', 'xvxJIx%f* ^&Wfc9yx!$3MDot,G!25hQt>@O7KQhrL]t|MCNH4W3^cy$([)/3^T2' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ZGU1YT_';


/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
