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
define('DB_NAME', 'exam');

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
define('AUTH_KEY',         ':PuJq*(?w/c%,`lAv$z>RmueV&O7 >eBN]D,yEK?-9c8<Bc*/nhC/f,R*p1FQ%WU');
define('SECURE_AUTH_KEY',  'dS6n6g31cr.F+,BfXyYc9;:u$ey(*YR7~xWk~L(a3*E[Z<o/BM`T aGPfB5,Ac9?');
define('LOGGED_IN_KEY',    'MJ79faYs&LFtdR!BEYgA/^>3/=8<dK/FB/#pN<bP;*R^qWHfn6hfcKUsMId%>v7%');
define('NONCE_KEY',        'r|R<!yf6vf_wP|H :};Wshp:sNw @0r-l}}].fKCA%q/Fl/6/10,+Ps](]Q9AYnC');
define('AUTH_SALT',        '1 7}1f:+B?RKzqe?>@MYw>{kO8TFtM.c%p>obhvG8U5|8_@h;R0%)q,N$12rthOm');
define('SECURE_AUTH_SALT', 'ppG vR=Ajk?oatgsd4__IGy(!uM7tu390q@*+#TW@lZ`rSvbZ!m*{V:KmZ#o@}a9');
define('LOGGED_IN_SALT',   '-2R[Elf!{-6!C4#V)pk!S5{0yx@nlQn3#8*a@^],7UR]jXiG47Oc],P@0SD6+xMG');
define('NONCE_SALT',       'SB[T)-4`Xka>n_2p}{DGB|`APXg)]f]d;zd7nTfaJf.DV0l,+ZO[us#gM`TP-/83');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'exam_';

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
