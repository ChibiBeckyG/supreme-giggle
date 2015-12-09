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
define('DB_NAME', 'WP');

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
define('AUTH_KEY',         'xjlXjt.z4| |j^]9-&}FEwsqkeml?.CQ!R|umd#E+$[t+i@.#zNfp4eHL6#xXa^r');
define('SECURE_AUTH_KEY',  '>LAKobG<CIxRy,SL@l!tV&RpTd*fmNBR^KI^`B%[:^?a^k])h*e0;*?f_S~_g~hn');
define('LOGGED_IN_KEY',    ')~(mbs_F^p+OroVZD}4*Mj6([IuB88WHf.Vj12y MOsG6y[g|*.H9Z6+sIG{j~!H');
define('NONCE_KEY',        'y|nnBT{/e1QI^Ed{qY62revGsd~7-_`Hs<M9sU7g4GmBG9zS8-=Q?gOR9:T>gFt0');
define('AUTH_SALT',        'oUpZ3ln^]z5 !5$.V^(@7pW%E~Y$Z`-Kfw F }-]fzQndOIk$3oDksYY|>y!?g#E');
define('SECURE_AUTH_SALT', 'GazUG>ZY|)Pm`(:`yjD,-DE[,|d_i`+-2.e{sK?MX-$L:xR/Y y3OtVs:6LX#Pe}');
define('LOGGED_IN_SALT',   'bn+#[E=<g><h>l05BMp[a!;&2RN&!P (SGvK-xLO|2(8thosHzS-hE,U{$rk{KHw');
define('NONCE_SALT',       '+owjyVF3!`%:qm!CgJOwLltj/VDM;U#C-^/xb[|E34h$^*E1GlCQGE8(_7%wKsX/');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
