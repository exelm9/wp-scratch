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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpressFinal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.g;%GQ@A4b3g7tL!IXb@`ff*-;V-F/w4GWH]|~{bKI|IAC]S)OVA*~eA8vIZ^bL~');
define('SECURE_AUTH_KEY',  '038u+>0QCDipk7/GydI/oW#w>f&wNM^I4ydT(@Z6J&Ji].o@]acHz|f+dA`TG^Xc');
define('LOGGED_IN_KEY',    '|&UQh}:6;+@2c-##cb12R2  9W8s/{diY,Iy.Qz5,aThmQ3-^N?T `Cz|C!.J,f!');
define('NONCE_KEY',        '3)shU*1CPk.n_02YGm(d?8~4~&v<]^-/ln<v7|4sN|uO|~~dV_zH2/o2Y|G-q+<E');
define('AUTH_SALT',        '$r!}C[G1l0Dy|@T|_@Yz-t./icG1TCh_mWlpV^Y7,h,$=?U8Pen>[^p^v/C5,7_q');
define('SECURE_AUTH_SALT', '{.RPq#JrQ,{z7|ihp&#x0&9R|[XJ4)j-<~!m5K ?:n|-%lRT.Kw-; _{pT{;3r-A');
define('LOGGED_IN_SALT',   'vpvk#:)vQgV,x~^mw+ga{O,$7g}@eq?ZGfOwLsIT2#6qor-u50^w4+QcYJ!&!Luc');
define('NONCE_SALT',       'T[RR<}BxIu_%%CA_ iweFtq l1/K6+.iq]$mlt`DL7@0CFm73+;1B|24J+=co).b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
