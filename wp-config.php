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
define( 'DB_NAME', 'caltex' );

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
define( 'AUTH_KEY',         '}MUBs5ch)P6)b7U6@U;ag`e3M/cm&EVH0@8e+n8>7hMdnYQDV?Hp@2j4qDc>S)s~' );
define( 'SECURE_AUTH_KEY',  'aPs_G2 Jto(q4_KZl{ukD=i>U|q6zBuZ?`*$VS_mZDT1wxCc0y#6m=z:tHzM ZkD' );
define( 'LOGGED_IN_KEY',    ']kI|biP(A^ib9+^Ow#`-$=Zc#p#umfax<:KkPP3D67,ycREN7R8Ekp7wcA)YIlew' );
define( 'NONCE_KEY',        'G=NO?c8?9<E=4swXpTv@jDIoB8eQL|{.H@8g3*.-uP]n50s6XFS^SMY_[sL9,{(|' );
define( 'AUTH_SALT',        '_K 8hwhGL2MBAQYZS7?z!PHWkOa(LfRt]m3lKgIio^/)^)u!T*[@E&p}CMg-^%nH' );
define( 'SECURE_AUTH_SALT', '&42: wRqACs4adGabZY&QP8b?pX3@7:0~MxA)|EeNOH#Jk+dwH5d6&gUgUrKHlPO' );
define( 'LOGGED_IN_SALT',   'O,M$dnXMG_foha^@n*`,:}g+Y7Wr,wi>5lQA6ca|Fjr(:Zt,/$KkCMSFx|fgxJhX' );
define( 'NONCE_SALT',       'IaD?wU}gE}pY23wx|DRi.bv_{k}LQ(`a@7:Hvf{B2n$iyhs0uVmz6}ngK]S/eoG(' );

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
