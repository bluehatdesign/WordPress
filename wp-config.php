<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cornerstone_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Xt2$z');

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
define('AUTH_KEY',         'x#{|P!IeQ7jczd^)I71jSBcRde}d%/BG~SJkq8<*^LJcK9G1 1lU`m!OJLE$~]Qo');
define('SECURE_AUTH_KEY',  '<#xwrLi]M.4i{Go7N*&T|oS_2(caKWyIeE_G;}aPGJ=lOBdjJecw:34,Olfo$?+&');
define('LOGGED_IN_KEY',    'Y:>:ZbLq/_yXv ,YFt,V: 2>bHj`,N(R]uPP0d5S}>yr<W.ayAl4_ZfggHq-HO1!');
define('NONCE_KEY',        'j 0Zx7Y cjnGvRus~qAV,3tpb-+v/wbP5caU3V k51Y>0%e~,.TsfOjS()K>8ru9');
define('AUTH_SALT',        ' BgRP|18dSZ=Y4{(oM^p]&9H;9,Ny6/pg</)O6S`rf+Kr;1W{/8adMGlBg>DSWJ[');
define('SECURE_AUTH_SALT', '-z!ZZEF.45we91(jfv{C%>MT0h%pi]vb[;d:2J`+g7U;CQSP$vbHEd|Jo;UoJfkL');
define('LOGGED_IN_SALT',   'Ydfb%_iO{~Hk_P2atb6X1)xq9XFh7F#4eJ{Lj,faDtP~+`y#9pp33Y%{$0Rw_K@+');
define('NONCE_SALT',       'E3W2j~awK+xm?aZ=0Pr.%Gvw23q)OtTy%).-J[6C3{z~s.6z=.AZ}4JkTbsDl%0%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
