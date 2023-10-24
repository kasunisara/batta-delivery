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
define( 'DB_NAME', 'batta-delivery' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '`nJ%/u7:&E:rpX!;d[)HA:TL5LZ;Kc~N%/AE,9%{qQvkk`?<s3U4o__f07G%qu B' );
define( 'SECURE_AUTH_KEY',  '}lz[I()q;(FQV(d|b1]7k9VIb;o vMX7)fYU+~7g{i.#XuQfHm6( *c[w=oNEVaL' );
define( 'LOGGED_IN_KEY',    'Yl6Ed|wY6wN,##}wML,Ij|$)>B8A*Ok}|*.Qx<=`Jv|-Kxe3/9Nox%DMeZzDzuo<' );
define( 'NONCE_KEY',        'X.?07|Ff4m1*!9K*YS(B2<:I{]!@W:qdv[+bOb0lnMJ;v|1bN$@V{ftS.!<!mpp(' );
define( 'AUTH_SALT',        '>.*s!CWd`>v)+<g*+UGuZ$)l&tE530e)yA*QzR0l.sW1dJI6><LGo%SS{d+Bj3X|' );
define( 'SECURE_AUTH_SALT', ')8<L}ySbW`{i4Y_R#)rJ[M3,oeTUS$&l%j,9Fr_*Sy&/dl6Sdzpoj8jL[}|a-sa3' );
define( 'LOGGED_IN_SALT',   '3jk]&Xyr)ndg;+Dp3la[I2a@vXtIh,Y#*6;3(Z}`(LGEHT !z56*[bPM|9$7CfV,' );
define( 'NONCE_SALT',       'M|wMc0{~o$#4s&Hns)A&wzswH#)q>Mc#T9Z~kyN=~+7p*+/|~?$k7n!1gMd/wy7>' );

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
