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
define('DB_NAME', 'warehouse');

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
define('AUTH_KEY',         'hN_!XT6<Y|m2#Q[cp5/y_?qfhToeL!`M},yjurAyZ+n6& u?<pY+WZ8&>11.%2*w');
define('SECURE_AUTH_KEY',  'k9C9Zy:P{co!]weA+M*JpEWZw/v}X_wlP,rlIV3dcG8GiSRel{^$JE,of9IvVr!0');
define('LOGGED_IN_KEY',    '#[@|hxy G1*b-|.YEcKC,n,*X&}@~L9`#,>3-AU@ovm-dGhUcv~>H=JArK?z:fTE');
define('NONCE_KEY',        'om3.lt1[<W,L5(T7(qt6)D|C<$j2)c0^wxHnnVE4S}`M>+pnP{xxn*WB4Y#}^-Us');
define('AUTH_SALT',        '<ZW~<MN+-tp*B|4gjr2=!$u19kaR6nj0~4H@jjZhzki cszOWgi.|Pp`-U9SfU6m');
define('SECURE_AUTH_SALT', '( z}kCB8uqFkdnb3EzB??kvlMww1k-R-9Nmr}QXW-[Bgh F1obYl57/H.+)0J1&w');
define('LOGGED_IN_SALT',   '; ~i9hxt~^/ckX2aU/,bi}`3c[VZp+!vFb/CsLf6Ng-I,H6~++h3dlZ=rClQhJ%o');
define('NONCE_SALT',       'kh*F^Cz6!3q _a=M:+U@v{<$Gs2U,9t2zQZlw/BI)%X&Z,2I]&[M,?+$%kQr]d3n');

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
