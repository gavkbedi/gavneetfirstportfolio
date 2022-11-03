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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kimdatabase' );

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
define( 'AUTH_KEY',         ')[UchhVLFjf^:`dC&!}Ot#X;Do78/d#>c2cDk_A!%=89&@|-LrmjxwzUpdbW7JPt' );
define( 'SECURE_AUTH_KEY',  'x(Dx)!(`DU4j,+&Dmj$n2nY5#/oi<xw<NK1BQi*22@uyf<-V7Q1ocS2P1n 2-}D*' );
define( 'LOGGED_IN_KEY',    'AsC9J*Qs_U&Fsd]4^lho(7.0&;=t%_KJ%83Q!L][C%%u[,8j8pI54c8R{XvkV@Uw' );
define( 'NONCE_KEY',        '}GE?q+BD#&b5n2Y]uuVdLL3zBQ<s]p}@SY1B*lV)mkzWiJc9qL$Z9vRO|N[n>Bi-' );
define( 'AUTH_SALT',        '(wK|i#(DR-{IwXaC|!Hv$.|sh-348]oK$#Qs-q%yJ7t(:3QPa,@]f|D]$xyrdWmw' );
define( 'SECURE_AUTH_SALT', 'pTDU4^s,[!^m9[3[BY:5aXuV;<8l~0SM7GQ>:bLN[OgRh@adP_k:t9WON(u9cwUr' );
define( 'LOGGED_IN_SALT',   'a,|v=Ml9M;Aglzl}%JUE; 7U8nPJX.1|Gk3|_`h8_4W|um8uLl~BliKZZ7hw`_#q' );
define( 'NONCE_SALT',       'rTrpvLX0rULqG`TwFyS$;4A}F_jWn%F>l Kt3`!kkE;g+`|26ar^8r)FIH~BBfHY' );

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
