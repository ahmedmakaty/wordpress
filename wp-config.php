<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-^=dhrOSzp+y|f^Ryfp:-c4+yA76GH|AG!_7m-oKlOWgOs [8%[y)TCKpZ+t)W3.');
define('SECURE_AUTH_KEY',  'yld>CLy6v7l_n.XUb,f=^5v_1u-O!TeS]<}u}*4akepxDc}92l/;NQ<9!EVSYNGa');
define('LOGGED_IN_KEY',    '?nMMOPyLc3Pke]p(RF`BCxg&kT+>;R ec&r#J^:VwqN^-Q3+uPn62%3LLuc(h@Fd');
define('NONCE_KEY',        'P$ne,z4ZqcXV(JC~Kp,XMmT5|-ImFhO)x$C%9NXGp-Wvx+2ypig,s67EIsjucGF(');
define('AUTH_SALT',        'NWhp&t|l{AK7*iBN.guy=9Z6p1exbkyi8_f?|uhsmIRq`5aYO8#,gl!]XZZQ+=Hj');
define('SECURE_AUTH_SALT', 'su[}0JR3c=/KEd$Z(eFXkQgJ?O)c^Sz?+(8EV!b8-=>[X]^&T}teunEHc;@sS+rE');
define('LOGGED_IN_SALT',   ':?FJD5tbidY`p.E&fA0KOFWk*Um^]3Tw|OY7pfX4p{1lvoQ+O#eC;_&Pw7|u!`Hr');
define('NONCE_SALT',       'f.r+R>UTwG`rj:d!&h|`[-lL_h(.>M1R2cQ1B4*xMfimleVWwlJt8H{Lq#:c5/Wc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
