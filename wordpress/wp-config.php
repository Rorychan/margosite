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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'art' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j1Mku)QKsM&=JeM|H/v)$0lgp!;#ry`*Tdvoz[KH~%x5[O`KW$D/4qEC#,8jddu)' );
define( 'SECURE_AUTH_KEY',  ' e2goEC:c) ~#IXKecXr}SE6[xTr&ET^EgX1LM~WYar^n$X!?<:YI./8vi+NoVH?' );
define( 'LOGGED_IN_KEY',    'XT-Y0Z[C9Fl@L:EScsTh3%0#FBF~R+JNc`J$3:^L=]yOs!-; p3<X]z0hbJ_ae|S' );
define( 'NONCE_KEY',        'exmjY-Ap<}Bf+eU7AN,ie<&du3PK`71o,{>1&Ko;YFnk*Jy<*uU-vEhg*EU}BRUK' );
define( 'AUTH_SALT',        'l &6Uq9P`>0H7cS}Iw!d+Xey4(A t{#z,!9SZ6K2,WN-bTc_y45YJV<]ZMx8e2;j' );
define( 'SECURE_AUTH_SALT', '(YGe JKC80o~gnSXzv9Fr#oJP.)jww8+qaud.+:hDRuh3co]beN=%7++l+[2ESPO' );
define( 'LOGGED_IN_SALT',   'z/K7v?YLWYM{>u0#+eyBQh(vcl!knLWAvB@VX1-3B<x|!8m`&&;>8ckp79V8vf.>' );
define( 'NONCE_SALT',       '?XD_[Q8^,[+_r`S~NrJm,;=`}foC|x%5mcL-a|;re%zJ/? TajmsCa+rf!N/v QB' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
