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
define('DB_NAME', 'webDevShelly');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '+cQlF0OXH0<^`{V[z@MrA4NV!<66bB;SbHi9iW2`fe?M~;7f<#e+s[kcR{Osr5m!');
define('SECURE_AUTH_KEY',  ']u-$=FOMW2[dFtAk7(8RT(WeXz?jIIIj-ar}l|pP,Higu7jsHE5LxRPUjM91qK6@');
define('LOGGED_IN_KEY',    '!Uj6a,sxt?PM~si7f<?slfSkH8:#OFb9<@T$k2#!sz)zF E}wyZq#b6o(EfvGf[<');
define('NONCE_KEY',        'YS8m<{x&iOh<It7-bHRh>P;d}E20~9jcCnbDg*%Rl/2`d5.t*X3+CqROq)bd&~{l');
define('AUTH_SALT',        '0U!BzG/6$_?(Fx]EAvHFH=iXHTbK26B7c^t]<2wW+{@5H!x<yOzJ,B[g-T75][Sr');
define('SECURE_AUTH_SALT', 'mp]sKZ}0k}&0,U2gdjI2VAzhZ3uyj/zh`=o(lik=?`4n{p7sB[@AA)w?Z5iXQkbF');
define('LOGGED_IN_SALT',   '/p~O8q7dYc:E*H%_y/<^7:D6hAJ9IufWz|84yC=@Dvl3YTQ{!X7siK](.,%k_y)b');
define('NONCE_SALT',       '5y63n){t^f]2$S0v~!1}8(<{8lmVD{nxJ J36O@a%lz1{8}|SwPhL^uYti/4?+VC');

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
