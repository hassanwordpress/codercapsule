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
define( 'DB_NAME', 'coderscapsule' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9fYv.h_Hwus`sDOn<EB,dp*W/tC22)a%TjhdSj~)_i-$da:YZ,Mb*VjnW!,q9gZQ' );
define( 'SECURE_AUTH_KEY',  'coB(oljgi,&q~4xt&x,Mq-O)nA{iGRtNZ~8?x<?@RNzZ!WsN<|+Wu4_ms!t/.[.M' );
define( 'LOGGED_IN_KEY',    '`WS_C<yRFcNZ?Xj.Nhd#fX~U!lQHp:;]a,E^XW3JVXV0PPKzguYvnlo>d~e>kFn*' );
define( 'NONCE_KEY',        'bh0~`57NE`#]^|C1I/$uySCy,8!wb<)S34@LE(bWt)pXZ)n9zri`93Gv ${83mY&' );
define( 'AUTH_SALT',        'Bl 3Xs?bzN^1m|BtB04.&`2T+/^xY6TLn!`8`yMDQ^p%d/^9M!N1`pBKVNKubh/~' );
define( 'SECURE_AUTH_SALT', 't!hl}M!hX| dHz:hsM/Q]pgd_Q{aKtRef71+}+ei]Voq[_[Pm(A]@GHZX:!W+v]r' );
define( 'LOGGED_IN_SALT',   '%X^D:giTZf?l@{MF=hi>]WSwJo!bMW[ZB0NJp7D*!Wm]bN[Q!K2dLkhik?E/[U$$' );
define( 'NONCE_SALT',       '!dBSnQ}Fidc=[c@R{X#aATtm<NGu8Ns]MN>gc;e0G,zlfriUAro&DqL*wTwYp%Tv' );

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
