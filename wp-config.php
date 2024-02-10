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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'Wtr92^%=tVr|xLWzA6C1cw[iP;SAL<IjLl-D}k_?#e:7ru#N@[9r1jTgM@/Dr>JO' );
define( 'SECURE_AUTH_KEY',  'MeL~gd%f-25LGPE#W~ty#]pQp==su9KEX%Sl^884=&rE00fkO~~,)ip2OLA.n8{T' );
define( 'LOGGED_IN_KEY',    '(xWX FkJ]tHQC2=%(1 ].4Ye%#a2-Pag?QGH5%N#)6iA#{/+KE-oE^}&`sKGp^<>' );
define( 'NONCE_KEY',        'kW:omck!iBoK2Vs1JFnd5Db7[6.732#qTmLSi?1VclH9si#`{uPEnN3eI?XSusY$' );
define( 'AUTH_SALT',        'H=+nrc4Z/w=;hc*$OVih>uq%*c>xU3tb{-U*4vt@NVF`AZvT^VYtIRRs8Yt?_Gc-' );
define( 'SECURE_AUTH_SALT', 'FsM)os.8)@49]u,ja5Dhc*?Uf&>OuT$<!F&gQ$2G.uJ~9.QxzsY}wi=CcBsR<Aoq' );
define( 'LOGGED_IN_SALT',   'orjr,LYJ6LBcCI9t[&&gp[kspvFMs|!$sAv6W.;`u}V2wEaj~0L(goZJsQ__-G{(' );
define( 'NONCE_SALT',       ']^$r5q^M-tXgS#]>e7u];TckW]vFyP_sXM32{fh3vyT)rt?<~8`rI<e2@Y#%LSB&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
