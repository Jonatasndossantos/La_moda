<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lojatint' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K>~&X<y,%v>Ns]8]&yo<i0UU<FxU`->lix1a5qm5;Ll}fGwEWA!wk^hMoS=XhH^=' );
define( 'SECURE_AUTH_KEY',  'iR`WK#S){f6b}CGY>9)6nv~LN8j9`{x9}]xAUF}m!&Sj8LneOFfMW8U6~XIM.W:N' );
define( 'LOGGED_IN_KEY',    '2#9ksg)U#l@Vx:mp@b-Y.y2gF#=XkU(UcCi9L(0j}w;I3,t3Qu8Nv*QKqi2>U=I|' );
define( 'NONCE_KEY',        ')LsJ7XGHNy:%SujSjMOjBiFu1ds`;~Ks^e#T2z,1uGe|!)!mvkNh#ccFW:sN+mm0' );
define( 'AUTH_SALT',        '&(6JPhA(PFgrJbU=W6Jac8S5^Oo/?[9.Y6yRlB*>6/:h ]-Z2~*7Z@}uJFa>[0fA' );
define( 'SECURE_AUTH_SALT', 'RI26;%qoOu];ELYt0TisvgJM{jD6@i3/(M2,.:c#5wew,hCwnOT/=dzKV:rvEe9h' );
define( 'LOGGED_IN_SALT',   '%|q#Di;7P%+_1?7XZBh6F  {f}DI2R 5<*N*p^h@<cNp`OKy>y$O)~;i@@J*+vzn' );
define( 'NONCE_SALT',       'ZI/|7gd;$:`4-Ej>1Cv>o`2^$E;SfNH6T~VkX>i8$W3wJVK#>t02ZEEGn]*,?7$-' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
