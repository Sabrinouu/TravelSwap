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
define( 'DB_NAME', 'mabaseamoi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         '+z>}8+r3^LAfDcX@FV!aex@=Vo*xiJNI#Ku&6!drI/JKoq;8d[HvV4|:K c4T;P4' );
define( 'SECURE_AUTH_KEY',  'u9h<qZw7iE<7O-!0W MJ:1aBk1E!<-yi<E4+J5?t?@L<[}ZLGmQ<R-;.43NxXS7S' );
define( 'LOGGED_IN_KEY',    '34%hU]I`2S9GlsmuVu!nETuU&YpC+MKv[q?=0_6rO(@RbHpSQ?iJuEwF8fZmvQdS' );
define( 'NONCE_KEY',        '>qG}1<AI)O[3y|]%4Q(K#hy^cIg*]KxN-:#A2tKX>C^Y]{mWT!Ir:[-D}cLk/|x[' );
define( 'AUTH_SALT',        'W+asZi&YKgDkYAvS;_*CeWGIU$V9o@/ bKR!;pW=yX[)?&C%~Lci%;|IySGB;zU`' );
define( 'SECURE_AUTH_SALT', 'u-z4T|65vVg`*_mp~/Cd3?(fe}V-$R9w|neD>h1bFaXu!% L!ra%D9V{Q()+F[K,' );
define( 'LOGGED_IN_SALT',   '@SIWFZw&R>8o]rYW;d8%/y!R5?~5eU43qXug1yP]3Tjc)-5{k`JW[T]M:#rY,gk#' );
define( 'NONCE_SALT',       ';qi/Z)4Nk]C,=if1GZjV;$?.@,%^phL=CEC.&V/ZTn)m<+clk{=(slAMuO$&%-6,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'prefix_';

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
