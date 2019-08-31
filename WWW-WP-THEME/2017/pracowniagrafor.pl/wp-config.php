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
define('DB_NAME', 'progremo19_grafor2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sebek88k');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '9lu7{)v9E=KdCW>-*w#ElC0T+_8M{#/./#A79^[S{B3h/Jfz5nB*m(URrUm VOk#');
define('SECURE_AUTH_KEY',  '9Q>G1)#_=aPx_d#/WLmfNR~jG@QFM=MFi5cx~>mEZkvUL8R|?3s^I2iwDqiFMW7#');
define('LOGGED_IN_KEY',    '](M$k$n_G{&x,jVF<..C4tZ}1{:K0{PlVP{2B(w+=!!`!KsJMnPV8M*>AVNWOu94');
define('NONCE_KEY',        'Gdh`cbu(wFm6o>3fwJWp{wF EG?=5u,F4q%;4jCF(Ec?>P]68Sb2cz;D(`KhV=N}');
define('AUTH_SALT',        '/Rc4%+Y05!ue1w <7V1a?,56_/Rm~}~Xiw2r`0]AmcF4B}QucBEH;XN|aR LK0p{');
define('SECURE_AUTH_SALT', '0F2/GR:8N)2,LKq/-lc4F48f0O*o`~XO[NAs,SzW2{BD6U&I%6A[|0Xr M!</07s');
define('LOGGED_IN_SALT',   '3u:`wI&IgeGSo|H[B2VZxgecEK&e51GYt:HLu-[X#H.H;M!pI!9soJ|xDe,3T5:$');
define('NONCE_SALT',       '4LS{|C._elpGHl4C)L[B669PP]BS$e 75hDBND ]fBM4d|n)MS<nDh!s{y:ycU)a');


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

define('FS_METHOD', 'direct');
