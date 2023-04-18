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
define( 'DB_NAME', 'wordpressdemo' );

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
define( 'AUTH_KEY',         '}_ZW]t?dR{++U$GHzt{|YO#^2U<[63#dS38<0%C- uc-=zwP#CFh_.Gnh`[kbSiK' );
define( 'SECURE_AUTH_KEY',  '(P2^7utR)C&/?w4.,i6VQY2WSbnt{/=5v5|J8|( #/+0A<]$k`1{ep(@^!{&pYb;' );
define( 'LOGGED_IN_KEY',    'H&MflCpXt4+UwTKY)J5O?NP%9~cxJn.+?dt  .aT/rNa0_bLacLYr%#pH=~gcsW}' );
define( 'NONCE_KEY',        'qTOn5H]jg7[UiK3/}0?!ZpC~@G92JDG.Yv9ywJBRFgOix0g{ch?1=H(V{>u#iUL:' );
define( 'AUTH_SALT',        'q( 8;2=g{2OhM}c4-{09Aq8-)l[hH.Ec{n=}b;h|]KQG~eG(_i?.bg PEgKD-]oW' );
define( 'SECURE_AUTH_SALT', '/epi;iff,5Te3IlSi?*[Hq}EgLOtnz9ZC_Z-(6q}Jz~B]bR-(0i8]UAWy@yijpNE' );
define( 'LOGGED_IN_SALT',   'F*hZl)m<T`([fI&7g{IfAUQX<*}W?:5HM})->^sz+}UM$_@-DF;a$~Nd;k_IgW<Y' );
define( 'NONCE_SALT',       '?9}@f562&a_+cdG; C]0CmmCW_4PJ3<GZipe*NqA|tM;N1C{9j#vp|fX;U*!3E0y' );

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
