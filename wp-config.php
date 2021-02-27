<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_arusen' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZY$KYU du.*1c8j_)|KB ~]^KSmp`U}r</;l6`aFUZ)}e4Wn)Bf1#s@=&}?}K_gs' );
define( 'SECURE_AUTH_KEY',  '8i$& [b(|0/8fvql.dC7]>qOo}NGXM1gQ]y@^y}4>s+Z|f1J~M5McQnhu>[IIE;Y' );
define( 'LOGGED_IN_KEY',    'w4-ZgMd6ax^7pl&zCQSa=cNwxN_jrZ;P3G)J-XWE/qegZ XxH$H;N4[O<)<P%.s>' );
define( 'NONCE_KEY',        'gsaCJnc#?Gg61<!mD}$1=?!zK2sd-hAp]8|S;L=JPs4`#9`#?<VvaiBw)l_O8 KD' );
define( 'AUTH_SALT',        ',Z$L3$]MZ{Krq`o{uOe.?}ZHWRuLlKPFCm+$6hTQh$dbhl^c&J:dIPk#*%)CbmXA' );
define( 'SECURE_AUTH_SALT', '[&m-_Hlv_8_)L(iSHkZCg5gh*9&G?#:g,>mO0 sc-nz52bkB;53{hP<T:}w!+9_5' );
define( 'LOGGED_IN_SALT',   'Z2[{ =]|p!OI]aO#!8oCI oN 5lT[`|7jJb87Ju:rO<@G2Pk6lMs/s||?]^X L)O' );
define( 'NONCE_SALT',       'k~`zSTOU;r_[!2.]XBlb|qaJ(H]Lg,qcfh)2zDP#1qc]u_E.OjQU)63!Wo`l+r<j' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
