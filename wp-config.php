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
define( 'DB_NAME', 'ecommercedb' );

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
define( 'AUTH_KEY',         '1s-b)9G~.E,v&La*&FvXJEAt9kf*IvU>EXoc2&5JXps31N.PPu+06Y]7b#(Af|9V' );
define( 'SECURE_AUTH_KEY',  'PF)Z`2uulYIPjyQj%?{OR;b^VQ/}:j%h,DUf+!oTl<j/onWXym%{(k.6-er]FWfK' );
define( 'LOGGED_IN_KEY',    'TYovU? ?t0tj1. BCR^,=J8.cZz3B6m^[^almj3rrv1Y<)8d^N!;rx*y;3?Q*jlM' );
define( 'NONCE_KEY',        '+d/Q97@Wh,FPG@jM)/XHpZlT{l5dW_.2wwX%X<2kJZVWw7eo@wU.Rsv*aWb29L!d' );
define( 'AUTH_SALT',        'U53LD8sT>S)[kspl_I)$Bz-`M( 2?z3v% G8f;{{iX:Rhc,j%o00[a?g=-Jo!h^=' );
define( 'SECURE_AUTH_SALT', 'V#aCUb)L/UFMTVS-(2{?9]J[84;nEbp*q{@gj.I>udzhX8=4HK49K<_+%poo.iu!' );
define( 'LOGGED_IN_SALT',   'Dwy;CJXj4f{SD1$hvT*n<e~&j4?GR(4RMvSD})iq62GkU*Qch=}1>^C:7n--rRn@' );
define( 'NONCE_SALT',       '2GIF(AKC+2~-Tt?r3z;Ty!MkVqPGM_G z_bMu0rRF2NYxTu!<Su.,{+7$YIrv.]9' );

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
