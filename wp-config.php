<?php
if ( file_exists( dirname( __FILE__ ) . '/gd-config.php' ) ) {
	require_once( dirname( __FILE__ ) . '/gd-config.php' );
	define( 'FS_METHOD', 'direct' );
	define( 'FS_CHMOD_DIR', ( 0705 & ~ umask() ) );
	define( 'FS_CHMOD_FILE', ( 0604 & ~ umask() ) );
}
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
define('DB_NAME', "o52h42063200341");

/** MySQL database username */
define('DB_USER', "o52h42063200341");

/** MySQL database password */
define('DB_PASSWORD', "Lo_0cK*Ry}fN");

/** MySQL hostname */
define('DB_HOST', "o52h42063200341.db.42063200.42b.hostedresource.net:3306");

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
define('AUTH_KEY',         '4mEgct.l!oRFGy>5i9zb65RY3 STWTzOhXeK5566MTFF.JEUv.@(B`#W+MdsTb}!');
define('SECURE_AUTH_KEY',  'xSXhSo?(mqJN:y/@W,amOy!L~Ni8Z`q_.P:j(ry7L}Sa;!;[U!#V-]*.nC!1N>`L');
define('LOGGED_IN_KEY',    'n|W<$.0?[^D-4hf{s@I(|6(jLCm>G-+pM !. 8.w94*P0bdi{g6TYO|,?43qTDoC');
define('NONCE_KEY',        ';7<roQ38|25zfr4l=x}>e[:}qlDg$nl?TC` (~}BU#!D7A#_Nl$uA{vi|<<f&a8,');
define('AUTH_SALT',        '5nz>C<SNWQu8GbwK3!_%n0*L:z!F:2158l$7oUZvedp|U!]5f#*B}7#F1@hQprn-');
define('SECURE_AUTH_SALT', '[2Wwx%S(hUsV@*<iWu<)(C1t@>*,61VV~+?D/ q}0eO[8AI`8t/j5=wh/(t06I[0');
define('LOGGED_IN_SALT',   'cJ43j0VKqTtMO?eZW7Mp9)C<lAIqQb|oY!Fy&<.-7 ;:]^_ph3O3H,45-L$:Fnp+');
define('NONCE_SALT',       'R$LYv/3[sSb*XShB2-h-IOT67U[BH_;}S94D,`[K)x;a2<d3qg.,-f0Xh?tvv719');

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
