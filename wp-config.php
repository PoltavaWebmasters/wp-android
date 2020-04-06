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
define('DB_NAME', 'wp_android');

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
define('AUTH_KEY',         'R8|A2BDsj6kDCc~tWq)-ncsl8T5XdfE){5H{mjI$VIV %]1,HO^I8[ND-@/ZV%Ow');
define('SECURE_AUTH_KEY',  ':+~[XegA(}`=:*m&X+erx0A5E{l&/49p D]mbh@g@%6a -_]/6u-eSuRs7jOgF-g');
define('LOGGED_IN_KEY',    'a&~.c5^4Y?&+H6v-u8^SFF.n5+]!dtqEw*09xXy)FTTMbY`X>V]^2<:,q,fUi2[D');
define('NONCE_KEY',        'jU83`%u,X|,1@culk,x^HW@U|Bo>C7f9;>]7bv5v)11 ~5z7CSVB@_tt-hOV< Y!');
define('AUTH_SALT',        'mM3EWB1bf`:8PZ^r;iBHJJDPu*/TCA&%Fz!26mF&sHmIm-<w$N|4)wsm_ *bGjBT');
define('SECURE_AUTH_SALT', 'H-(@M%[]*j{r*}O5?UK 4VxBvk|>JN0+6D`FVLaX8~}/v2m+>&)w+lc&_nq[3MY-');
define('LOGGED_IN_SALT',   '0C6ek1uy2kU;CMeVjyRG..R4m*^=lo!&m^NKOVV|,wN#i{~Xq`_[;7gcZTi?O-iL');
define('NONCE_SALT',       '+unns<Oz(;xkr?BAii0aXi|,`iaks7 `:WgRl9(7PlR?3F=q{?+M`~qUGV*v=+.n');

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
