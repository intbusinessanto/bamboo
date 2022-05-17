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
define( 'DB_NAME', 'bamboo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define('AUTH_KEY',         'T0^^RK,:s-l1}V?@}P5-n2{4?g#ENYa-wrU{[,D@>,BA<xl|L0AC2yA$.E-a}i+B');
define('SECURE_AUTH_KEY',  '$25q$@A]+dT1Ix+S!2DpstFT9-;@[`|9du6m56*gAxI>i!&~|$9ty6J.xaT0G*:{');
define('LOGGED_IN_KEY',    'k@L6?P,N@T@c!5r(3d+GDDiB6PXW-vRF#t[xh<TYj@ bfMxU/u`IxyoBvRxlL{YL');
define('NONCE_KEY',        'm7uXc%)-!LWIx?a8Lt^/2Li[3Oln6fi4q]H5qaF20,bd8=L{2px:9[Y[;tw%j7?(');
define('AUTH_SALT',        'j/mimk;NMZ^)[9-0T/i?*sM1`N07[h_yHuxFZE,*j8:5kw7a})+[CjF6nt{o$>O6');
define('SECURE_AUTH_SALT', 'Wn{I(-l.DU0QGC]b%ML/wH?|CR/~&$p3-0R++Pv+i2+8Jk9l%bM_Ny&b@I%Fj^hb');
define('LOGGED_IN_SALT',   'q`P#K zZ0]i)wMp$=9xBTu8Ye8#]+#5|gx;=y:(dy6OL7>1L&$Lm;|4~v7lPCYie');
define('NONCE_SALT',       'LdjhlXe`K?Ir^|2:s60kQqBqh>=x^$=rqcEQS_L.4X0!|aF;)0ko%;A%*O.r4(<l');

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

define('FS_METHOD', 'direct');
