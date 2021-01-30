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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_passwd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'BT=o?_**6<,E*HL~k``S|gUs#Fd[n HN5@{-uZn(m>c4xZ6$+*p|+uYqAJm(]Xiy');
define('SECURE_AUTH_KEY',  'rlxMCrnKSIbz:o{~l(9gCaQOTKs+Kd7h+O::tboI-g41ql+o}eEs<ty:.a/|?{&z');
define('LOGGED_IN_KEY',    'q&Mpdchq@*g}uY8P~g?kRzw,/7Ucyy5;w[=oJ x`n-CM^|SbCh|Vp*QKuv9Iw}1p');
define('NONCE_KEY',        'Fudcp4h=XCzJ^LLKA8Hrvk&U:,BSc,k2fvM.%`048Yc>d>O!jNBM&M/gvX{691mk');
define('AUTH_SALT',        '7G1E5vg+;kd>Xb~~83p}4[-,kS*M@|b(.7}!<hYeeh:G6p>(LfnK,;3a/-c-[:t9');
define('SECURE_AUTH_SALT', ' Q<k`4`g)+g7H$|d%6&N**)!SQ7D0z1@GO+/I7vC|YHxDh:g4kV)vVb;<8MV49|x');
define('LOGGED_IN_SALT',   'N{7$PlLN<{!VF|f^-F6e@bw3C;P!}QG iqV &MxbGqD5#QB^zz;JjEs;;T;?cG5F');
define('NONCE_SALT',       'O?D|=RiXr>Esk$;<kjjZ!r#(P-SPi]jTF3gxEDN.|0(ZdlIoH+Q<8[X2@&jw|UdO');

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
