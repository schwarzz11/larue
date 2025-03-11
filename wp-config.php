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
define( 'DB_NAME', 'larue' );

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
define( 'AUTH_KEY',         'q!&$O]<<=:f@?*Y~Ffn8b-e|p0(FYc?cRrXqYd^#dI{)6MsG}I;q=WCs2)43Bt5#' );
define( 'SECURE_AUTH_KEY',  'fLU/lBKU?%HR%P2u5,5bBXudnMKn6V$3q5K^-[1k{j)>y8RpA>ga`T_5i(+`b6/&' );
define( 'LOGGED_IN_KEY',    '``Q8; ptA }`:5y*_}tsdu%YU%s8?Kfpm?ZEL0sZeuL2Gn3i>Xc?@ ZRFnw!_~ a' );
define( 'NONCE_KEY',        '=&|( uyW6WyPiD)#y{0lr[c,NhL<yUSuu^nn(#1JWT&I(G/=NJ-g7i@%NRr>Ng:j' );
define( 'AUTH_SALT',        '?7y>SN&fqd&Vd4){pu.aDJQdO6]a/zAOa%7tVTfB$Ta-8!_{QAM~4RoPY:?S~l1[' );
define( 'SECURE_AUTH_SALT', '-iNZCB-gAp.R:K(W~b,XUyOGUiud;X/[,a( GVy*TpJTV}$:!1,JD$Dh?xO3dByx' );
define( 'LOGGED_IN_SALT',   '/zHSDaVo%EF%wg`50/H$D[4{fte^0]?T06z@o<,H4k7R |.9]!fToTkH6lH@6oiM' );
define( 'NONCE_SALT',       'sd!w &QT@{/5>%DR~^U7%~Z)OY%D-E8OkAtz,NrEfh6<L@z)CpR=eON}y]loMaV4' );

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
