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
define( 'DB_NAME', 'wearecactus_db' );

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
define( 'AUTH_KEY',         'TtI&Z%hpzqY_.T~vI2;+Pp5E@*2bhCTRmJ|AnB%TfMD)+?K{_nWd(#)rO@(7&iv<' );
define( 'SECURE_AUTH_KEY',  '/Tw^;y]{<+S?jB*gkS.S6hA]I5CXnH2XG;F`wd6>l9ACFn%CM7qRKRIPzZhX5|FE' );
define( 'LOGGED_IN_KEY',    'yb8~(%tg jQR:}lEV3P<~?mPx{9K/o.?-[O]VK2XeKthMfDMkJ ,>4$), ^wFMG5' );
define( 'NONCE_KEY',        '89)?4`JVH 4NtIi zM;0^RbM8LGs9>?U|Q$J4k1:R>>~r>iXNgkm-c0K~5CYy_1o' );
define( 'AUTH_SALT',        'e;PXPZVwT4ITFXa]3z)KD//JH@SpfuMC-LsC9^@Kv{-JLha4>x!j>I0FqBHk<]:`' );
define( 'SECURE_AUTH_SALT', 'hXI]{Pl.bIjPNpo+|STM>k4~$hn%6;cs^bFk}uS:yIU<N;wi{*L;O=neiXWM*50Z' );
define( 'LOGGED_IN_SALT',   '%aCA)NCc8iQw$9k_)%MNjK=)@Wu$v?@]gI,zTHwKM-36Vc<;]`ThL)cHx;AQMVU*' );
define( 'NONCE_SALT',       'q[!f(;-Si&M3-G,Q6s}zL*E.y}C#$)0[f?~Z(;1A5$YZR~nKD5AC@.:{$d||cc)3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wac_';

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
