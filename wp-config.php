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
define( 'DB_NAME', 'wordpressauto' );

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
define( 'AUTH_KEY',         'Qe>D(>^bn+hihay<AYw&mQ>hz ]a=!}:#3zt``)qE@_1S%@Qb`oF0:8t$3Y|1y?N' );
define( 'SECURE_AUTH_KEY',  '4Z0BC@ZX~Rq>CYyRbO&nwb:cM[FowD)<POSwh6QV15xO5vOPcY2}1K#mz8eh3fyg' );
define( 'LOGGED_IN_KEY',    '^zL[NOzEd2?_3u/T<Wt<si)=B;CTqzgF!(LQCMO/Uhs[|5,ULTT XdBM_,dvoT)d' );
define( 'NONCE_KEY',        'FpAJYS4*tJ4+|s+13Y-0Pe>DNw=YZ|l?7<H;n&9f [<zRW_K4=)tbjMMQ7KAYNkT' );
define( 'AUTH_SALT',        'cZv;~BGa|_mik7q~M;<0livaWXQ_u&49i%Diu!q*U*Ks42QuP2c?M/B)o+X[#$`~' );
define( 'SECURE_AUTH_SALT', '6`.[~FUHIN BTo?~c=3iq<%GqU.2oWZL9$)+/qv[U9~$.x^OgI~W<v}6+.^U?b=<' );
define( 'LOGGED_IN_SALT',   'goJz}4sQ(ohwV!ECU.m{I43}~db`{tWD:FAWCA$;ycj0++vz$yK:<Qr$r3/W<?GY' );
define( 'NONCE_SALT',       'JbTn%!UQojT*fd^4Y!6BmIg6:Xy$x9!~FR=^5u7%/7wL&`%!G3-Urt+<wFQ-Vx{#' );

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
