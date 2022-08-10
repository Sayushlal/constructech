<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'constructech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         't4-tni1PJp%NVKR}t]bTbAf^7Ei*?e=ouToY@aRZH1o*8@^-Iq~lY@fM*$-9OQFf' );
define( 'SECURE_AUTH_KEY',  'r9NiTQaiz{}Ni}Lh7V-TB9YjT8kf{eoBWRXKy@ I}9;xI!I0G#nM(_7h9A/t5v#m' );
define( 'LOGGED_IN_KEY',    ',c$6$WA_kpin90Gijta_5{3df[ACm6|s7 2N|$qX15F/)~K?b@E&y_5%U_>,w76@' );
define( 'NONCE_KEY',        '<A7tqJ:PIkI$XY|g3;R0Fu%Aj~p^TxFyFbn8hp]?AQY:<n<G0%,4|tuG}SI`Wk)y' );
define( 'AUTH_SALT',        ';C1_&#>jyx|ZU_ti61,s?r*^V8CXIx#Qx_F^76jdmspA{>I)a`SZA_H,#Atmr0F>' );
define( 'SECURE_AUTH_SALT', 'H[by/op$]{w2<q,`g7Wl_J. lwnyV&WkB EZ4zs;pRsG^YeHF!<;6^NXIk1};5|Y' );
define( 'LOGGED_IN_SALT',   'M.YDn%?RYp5|?m&(DFsXYPYd3x]sTYF9+ X}HWV?:n?$BcDHrm8W9~_$E3oueU^m' );
define( 'NONCE_SALT',       '.SUB&bzn!; w4cL;UVA|:^-fjP}:rA5maH{*5P`z7gQTVIwuZ33$Da<M1lMFzx`:' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
