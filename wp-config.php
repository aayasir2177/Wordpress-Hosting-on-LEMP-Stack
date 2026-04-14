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
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'yasir' );

/** Database password */
define( 'DB_PASSWORD', 'mpjiWeLWftPC' );

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

define('AUTH_KEY',         '7qL%p3(gkml:1?pX&@| =D1~$|s0@;r_&d`5NR|88Ts.[ukdm|l{V!E)b-?T!v|t');
define('SECURE_AUTH_KEY',  '<k={{n }7T6s++d%OgDVvnU,4}ZC7YbcDB;&TWA[]7gJAY/Ah4/P=(HoV!+lF$W%');
define('LOGGED_IN_KEY',    'a]%CgPz!wu;Li.z&.uE+bpU|MPe,j|{In U?O~,a 37A2enrDiH+hq5FTo,V:b`K');
define('NONCE_KEY',        'i82P{g8v{(Vrw|.4IFuubsBa=Z3pvK<S>zjQRl-|3yB[9#,qJ3&*0,w(UOy?n qv');
define('AUTH_SALT',        'nPUv!]|5Oy#4LLu5,<w|& /|T]8jVe-QX|43|`Mh,%g:NJ|gTM<G5cKxsF+<-+&O');
define('SECURE_AUTH_SALT', '%pod4)PGOx?Abp<-XX^o8`(7.O+vkD#Bb;?17HI9^{D#X-C[FnB{s*+%J`>zF6h9');
define('LOGGED_IN_SALT',   'qa0ABz5rPpsS[a0&?_?wrcBBY_lt)=S--j5WGoslO}A~gS*};e[c]{2T&}P6Z)tR');
define('NONCE_SALT',       '(CT =E53[W.Npe|2qEpwOh].]N;wDQ;Gj*!cWp-2H=_ApJ2m{:(+TIdu^Yj3Q! ]');

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
