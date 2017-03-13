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
define('DB_NAME', 'chairs4kidz');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '>lt;7@;wTz0~&4bVvL?}NRmzjTG6JCGIHhuY2i}EZ $QSa.&g:*Fde,;yY?p2,.N');
define('SECURE_AUTH_KEY',  'fBTh#H{y;tt7u;$ejxb=MPV)wQ*;S-I)]JXzeCzD87h/qVaaf:` 3LQS?CXod~Z+');
define('LOGGED_IN_KEY',    '5^,eWZhE+j*TrEuX;Q<&KE=vPRm:-cR!`$;SrmF|HnQR@=}|-bMX66pJ1E7&@D!{');
define('NONCE_KEY',        'G(2Ip~SaWynHjZw}dGJIm>:)d_l<DL`=6rF>m$WjP`@z7=m57cmJAx=gA&uuK2dh');
define('AUTH_SALT',        'og;8ka16xM-!qRg*7H5;Cs%_*T|Z HD<MJ|~;S>dw&X[orU=^pzDsad~rH;g+n]A');
define('SECURE_AUTH_SALT', ']1$qledmYz,p;YII?YPqLlVP6:_hm!9#RJ~Zj}cg,f2aUS(QA=j<fqN=`<.m]yjm');
define('LOGGED_IN_SALT',   'ZaJDZBG.,gq9BQQ? d3MyF3,,ZQC[tF:MK-l(Q!P0K^qBm$rNYW8S>&<npz?2GM_');
define('NONCE_SALT',       'c*#+w_zwz(`Wh0eA#-$5}2|8iub^y5.h|Vss5URBxpn7F.<8hqvjW}.T/oJ/y)}W');

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
