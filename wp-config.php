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
define( 'DB_NAME', 'EcommerceWoo' );

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
define( 'AUTH_KEY',         'fsmwoet9L;j9@nK>+MHlGFtdfGD&s}P0UZA2rhCK7N_oW0&z~lub|SCs4M-kkAKF' );
define( 'SECURE_AUTH_KEY',  '7qvOZBdNQS+~kpo1aJmsPa*9t<-tFf2B,*C4v5A{/7[_y$Lc:rcPWc}jmA|,]-qV' );
define( 'LOGGED_IN_KEY',    '`DQ%e/[wJ=1Z5ol8:6ryRhhi%,^c5 %ofwN j|[$?`&vwlc+W}FI`,#EAGjHta_P' );
define( 'NONCE_KEY',        'vh>@r=AC8Nj0jJb6&.N;z4=Uq(H3$XJh[>W9EiMFgI(RrdIQdQL}FCl(gX{NBu2V' );
define( 'AUTH_SALT',        'leJ5tVLN5=N6 *OjkjnL)pmw4*XLNa?ix<bRw2@0O0Iq+[>F2Wlf(rEwR${TP_D{' );
define( 'SECURE_AUTH_SALT', ',+vU@Jg $Xdj)Wf8p*?J) ~vk5Y`DdT`8r2H*Utc!7P1HPFm]V2,wXdH[X{Z],}d' );
define( 'LOGGED_IN_SALT',   'LhjX$p.{[<G@;,FX(gv m*n4,zMiP9U6B#-[>ZS94 REaUYuu%K(Vpuszy[G/5{@' );
define( 'NONCE_SALT',       'Wo5/vj{?>~H}<)zmRIZXM_X,o6Aq_w2/0,ERU0sH/N:t!+QtsUS<>ndj)w-L6z),' );

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
