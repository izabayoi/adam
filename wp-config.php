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
define( 'DB_NAME', 'kase' );

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
define( 'AUTH_KEY',         '1bH,Wi}<[3AbWyV7IvWV[V44@m-yuFT*e0!`+AMGqgFWfq[,bChM(N)<MYxxVs3}' );
define( 'SECURE_AUTH_KEY',  '.d5!Jh$gU k^(Un`7Xs6*G,cyHC$7uls`/p*j(w#:6v%b<@;e$P@@GZhdsE^}b Y' );
define( 'LOGGED_IN_KEY',    'WlML5[igc4E=G M(u>Hglh[*dx.W)Dm9fn 0;](PpRSN(~[v@B^:Ww+0 g.CjU7O' );
define( 'NONCE_KEY',        'lV,XjY{[s,Z?;,DX]&^H^7a=s;B5:3a+exQmZ~==GQwQ/@^`ec=W&}3K QY4Cv@;' );
define( 'AUTH_SALT',        '[X{(m+0L=RD}jL#ysds-j;/QA7La;n>mBKmkFEp)BxW2c(u?jLPB20|%Ft#rZnQ.' );
define( 'SECURE_AUTH_SALT', 'xhwa5&OXk[;YQ=`SmPFdH#%%B1DIJg2zX`+Ic.g{(;v35unaT!@%8MKxkZ ykaZQ' );
define( 'LOGGED_IN_SALT',   'n/1s%@UX8*VO+|pX:gaJ%6W,IsB<cuyksWZ0sl:uA.u|](D6j=o)pHne:fK!M_.,' );
define( 'NONCE_SALT',       'utnC>&7s )!)a=9dGZLKf<{!`d]*w|TISsSKwqY<&YZ[;,uFaN,C<jZ7nN7YTDcl' );

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
