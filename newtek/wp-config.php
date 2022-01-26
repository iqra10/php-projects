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
define( 'DB_NAME', 'newtek' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'KlCn%8DV-@N l3ZWD<0#L+J+fHw<Jo#{osriul}mst!Sw;3.H]}t=Y=&W>}%o]^(');
define('SECURE_AUTH_KEY',  'q^B`/wfXY~|4VJL BJVxboW;?6#nJYK-<~h90d!qFojL@(-xQdu)zd ^a{USoGe}');
define('LOGGED_IN_KEY',    'ge-a4O`H,>G]sns+>Mk(10-cv_jQN5-V$z(dnwH]-c%2f^%D4mvZ.uy+`&|Vfqv6');
define('NONCE_KEY',        'y%]DO#Q[xBv2c-HbM52DZ_0++hh|e 6wiib9o`{gaShSE~Mv5~&@b`|M069a<lxT');
define('AUTH_SALT',        ' qKkx2<F77<&CCT&Rda$Z`TSd[Pl&HS33eG+mYDp 1HqZkUVDvjR2^&Kw1$-J9YS');
define('SECURE_AUTH_SALT', '>x-}+]hOBsTMTN`BCXKQM*$ YyrG>zKj+1Y]cRNP&j1t?F?H&6[SybD_:X|00S1-');
define('LOGGED_IN_SALT',   'f|0of3Q7mp@@c(nUS$=:I+mwtc0PmsPypu_r20O,a;6;2{+qbs-n7/v32[FB=%},');
define('NONCE_SALT',       '[ckaV;6T5rYP1b/sW7sjeW++Jj21?p7x_w_y8-@~ZA36%,<&dunQf`Z=Y6s8Ntp1');

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
