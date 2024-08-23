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
define( 'DB_NAME', 'my_website' );

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
define( 'AUTH_KEY',         '] e:ABzf30L^FTI~iPhYj[$<|:5~qpQ+D6ZH]SZ$vQ8d]N.(G}JmE{hdv_w*<]W,' );
define( 'SECURE_AUTH_KEY',  ']qY?3EKD$-lIW/P-OpC;:OlwOzU0)h!}.~^{V>U!H,F9E-q8zk<gDv8(^Cs(]~?a' );
define( 'LOGGED_IN_KEY',    'la3W/[+#QB+IjE>#1b{9L8MfRdU zo2;;9vw2)NC%EHh1#iihsFD-=W=tvX2>7Pk' );
define( 'NONCE_KEY',        'OAsbJ9h!f2*Su@*y<B/*(-OnBM9Vsyonbnx6N5XS<I)ITR3(74]+h_kugYzSi~Ot' );
define( 'AUTH_SALT',        '?ktM>7}YKkSy9Os&MJF!=oeML#YmtoF/-OMh3N1m`?W.C@raS;HonA:meUKEeGU`' );
define( 'SECURE_AUTH_SALT', 'yGr<<:l|ujy.oAAy#bVwn?I}=`E9xzr$|sK$ezCH~~kU$EB.7l5dq^N|kI((|N3Z' );
define( 'LOGGED_IN_SALT',   '$tFR.1l*$:A*3z/Iq!>.Aax:v&u[b^Ce+!kiN=?N8Q41%P)L#W>^t<4Tv!6zN>-C' );
define( 'NONCE_SALT',       'b!G+){Z}JqPL]A2VS&`rj-%kdZ|A{8a:v-n|JMgi#{.E5T6RK#6,@S,`8M21j));' );

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
