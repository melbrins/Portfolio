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
define('DB_NAME', 'wordpress');

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

/** Allow the installation of plugins locally instead of FTP */
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@_=xM.Y1,M.$-3|k%%WS=a@<5hR*NmQh_#h|YZie11q$3l$O8#loj-;u9Q|Zs)dR');
define('SECURE_AUTH_KEY',  '2qvlD|Ojb00sT45wEf1#E3R=@fLEHosi]T_(BO&(AS=m/yv|Cg0[WyMIM,3B$3R2');
define('LOGGED_IN_KEY',    '<axCLDMurMD@Ag+[`Jw2i+ #<nJifbE(EY?^WopBDkpowI8bhA+O|Mq}fi}~1wdp');
define('NONCE_KEY',        '/%zDC^9Bst7UuGj9ejVt4X=N}UVY``fXX(?3H-8XR^g^1lr7BZg097Ogp(56GiMC');
define('AUTH_SALT',        'Y@j)uz4$ku}0tvT%Tj!!LVrnHn#/OkGI |%U8n/jCQF:N9WK5Xi4U{N#s5vSKOMn');
define('SECURE_AUTH_SALT', 'pwH5xQ1yS@LwYhpWl&^gWm{^3qsu8/<f9DlTfV&DU/LV@o,F7f(7?E086H_{Cy>e');
define('LOGGED_IN_SALT',   '_1OU~-30Z%Y&Zby|qJJ(Q{#G]9/Ozs:A9Gu ysIizf!fo@IcwHz9n;+]roeEn|[0');
define('NONCE_SALT',       ')(3:EI@$>*dhD<9(k)U`fF[&]Qj6sZ{`$Azya]{]C|qdPSS!<fPo:f]z!v@/mhD!');

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
