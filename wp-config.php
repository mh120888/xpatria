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
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'd2agp98k');

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
define('AUTH_KEY',         'P$g?_XP?^ C5AtH=<^b:]PxBolP)^A+)uEUGd}eJh&f:KEce@.cX0Kj[iYjH<WB=');
define('SECURE_AUTH_KEY',  '5)nDXMM&Z}M#8UQi;c%U<xfhtpw-Px|gk1C?]zq#47M]a}+$^MpdS!JE@Hb;3oRZ');
define('LOGGED_IN_KEY',    'yj_+v<7<7C8wx{hADC}!+9N@!sb[n+,?!.=O}PvK0-k?$Ik/!1z}!(tr^+_4rUAp');
define('NONCE_KEY',        'T&WyC|JkY|D|QcfXp6~9#@Q$B^}m,->bLLd`^|D=d8XzhFHGhXM,X-+Lhe;#c4IY');
define('AUTH_SALT',        '1_-Ln:!+V.o0c=CKr&T@#%z~d_}Bo-<?L!I^Bg|&b_.|X4 <8p)0|1~_sGvQz*K_');
define('SECURE_AUTH_SALT', '(Gbj>SPZt<%Hv.uG10tgChs>Bh!PrgGq$Y]0WJ3<ff|:~U}M5.tYEPW<7?hDp]G[');
define('LOGGED_IN_SALT',   'Op14CyAiFoZzlOY~*K8GO%f(jkDRV|``jGgtc&A]5-$Mn-v>0RXal|R c3N^Gp}[');
define('NONCE_SALT',       '))oap8fRedb@h?J#q4v8z911|9Bj+I/S[w@sPOo<_LSq(].BAQO$D^k{plMW)L|q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xpatrialifecoaching_';

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
