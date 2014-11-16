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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'OD:{VsBaVJb)ILv4|Dk=W2Ro3^c73>l+tg0M#}JQ8H}]l*N1bP&i9+oX4?dB,jH4');
define('SECURE_AUTH_KEY',  'h:|QC#p^Z<hE9W+]rAVHy4&V#DFf#5 >+vNf/+(0^/xd5-*^R>W+b!#uKz(3&qHr');
define('LOGGED_IN_KEY',    '|s-556jEHQTh|SaDW0c3IAkq-EXN8jdGQ7HTl}ZF]P#h-7+9#ur$a<-6XrwYJ1cB');
define('NONCE_KEY',        'KSX-|lE)oZR-o+7n-zB9lLn!V(=F6L8kySa*JiaT{x!bp-I^er)05]Li?&0(|{C=');
define('AUTH_SALT',        'o27:zDV~)pQq8bQi/pUIa=WvtSevFOtVgGjl0}/at03{zFpHLoL|#y=5ol/We,p`');
define('SECURE_AUTH_SALT', ',V,F&Xkvh 3YUgpyz[/&Tg+`cwq&;CDXN~=_wR90J4]qq+{9e}~^bHqgCYjA#IzB');
define('LOGGED_IN_SALT',   'ahA3^K2zj2z.E#m:GLrWvn7|+w1-m25n=>hykU4`SUGN$yb|IZ5nPc+~@-dEaMGI');
define('NONCE_SALT',       'QhL,3G-hm*e5Xw2}ke5Wy:~%J<YW4*?~&m`k_a#s+V?FVe45-N2,):R5]V++u,ja');

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
