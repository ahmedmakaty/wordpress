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
define('AUTH_KEY',         '4yDEAO0+_;--X45PwzXBcIQyexdfxM[>stR4&ru}fj?r.8AbE&x[#-wd!.!%&VCN');
define('SECURE_AUTH_KEY',  '*:e7m>}bF}4*wr^GAnp|RMDbp)`n::Wqz]dGi#9Xib{:+,g6KkBU&HlaU~?>lWwm');
define('LOGGED_IN_KEY',    'z+v+eWj[LF1*~Es/^&_..-6_+o`=Ou!t{cJZ!zNTMzt~m6C`>(utS3g#LBQ3eM~k');
define('NONCE_KEY',        'AQw9|Mxolc{[I&YROE26YelmHL<@+P#Wo[Zd+<g8)R!XZ:{^j7|Mo{v/$(;6BlbL');
define('AUTH_SALT',        'cKZL&zGH0!QTneNFec-&QF|rZao$M3FW0ROl_uIaP;vM]_)bO$f]#aIwy+-1|usW');
define('SECURE_AUTH_SALT', 'A7r;2Di7@TKWm;9zBrPF!Ugc8#%#}!3@33r=1df18EfgxoQ:/* 4@V+,570o/QRn');
define('LOGGED_IN_SALT',   'p7*iHsd#.N%Q^&}`B!RN^P[@50~p-/8zE{fmj&04*XOICo D?GYJ$<do^>kzwahC');
define('NONCE_SALT',       '|(G)zoSIy2ML+xw):$[ka/,4%r8$;ML++{eL*iaO^[hj~a`ri4-:zv+Un0SWjA{;');

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
