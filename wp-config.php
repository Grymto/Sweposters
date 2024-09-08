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
define( 'DB_NAME', 'Sweposters' );

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
define( 'AUTH_KEY',         '7W4PATdpRQLXRW<3;.yFj99GrzsFwW:zaP.,#G,]:9e/JZvjP:q#1N~l|1b*re#F' );
define( 'SECURE_AUTH_KEY',  'aflk9a!0B/11^7-4YLmkxW1pO9aW@AZ^qec>&M7C)1PEq%R=(TdUX>PyW,E~<[N(' );
define( 'LOGGED_IN_KEY',    '6N0DzK96Io{a1^5>:c+}T@+8:@Y4}lNx}`;N$vz&EK/:FSv>p3)Img8_)]1#1MB)' );
define( 'NONCE_KEY',        'Vx?J/E;F@wjTV<)]%PFEYZd8ZmA;0`dG-;UZ[$5>AwCAKyS?!tP|aKscaf2z7@>s' );
define( 'AUTH_SALT',        'ee*>$vV[ibCi:R2w;I332{1l:Ht|5@3s+]04$id|Bu5yFKi]FQ_~~PaZHJ55)dQl' );
define( 'SECURE_AUTH_SALT', '58R)h%fed_-|jgx=`gz1g:.0?pT$QMqqD:|`).s$BjIomlv!gi6<.C6?8CjBa{i8' );
define( 'LOGGED_IN_SALT',   '/w?el)z][oiR$ZK4/BO).H_ML].r|*6Z5]OpO/xI3S6rsl_;N>Wi:f*IEcNHV7:p' );
define( 'NONCE_SALT',       's^G?)hd4)EVi_/wl&oIEr#$g;;@mM.?=8[t;Oxw*4+6+t]~v77]1/b4T3?0u(S2B' );

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
