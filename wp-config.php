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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(5J,]-{1<2tFGcV58(QG#ZbS:PD xc47-OvjlbZz@;N0|ERkgSgKdtXy-o8d<:7d' );
define( 'SECURE_AUTH_KEY',  ' SDX*0C(FECS;wzV mBsKvqzYeJ(ta:1Q>f(WWR.%y;+#u&|y^G*1bq1$IFesCJk' );
define( 'LOGGED_IN_KEY',    '1Ee7isy*OXbnG]5EcTC..dS~c/&SX]_zkCoiLos.UCVg`RKZ#e1es8:wRP>Bccn-' );
define( 'NONCE_KEY',        '70IK%f(KSWL?%<e P^l-m>{u%FQ$x@i^M@?g>NWRDhf<S/S$xJ|D:80:IZKR</|*' );
define( 'AUTH_SALT',        'T@XwXR.M~B>;RtP{QS5L7jMml*@#UySM7kOz4ostEg~ss?Sw9yf^#OpqFWMuA`<9' );
define( 'SECURE_AUTH_SALT', '_$TI1-Wh&/l{f2nS@A`_aq[o`LxeiO+[9dU,?F`UNfHX4F,?c&IbnCYp|:BhgD@N' );
define( 'LOGGED_IN_SALT',   'Ah2YO{4K+Od@8>)K!?FfQ+Bb*N3b34|!/Ii,;l]_=cgDPfA$,D~QKq6G$qvyV;xQ' );
define( 'NONCE_SALT',       'r0mq$rgtpOJ1O!QC_IugJPt|tAZcBh43P-y`ui2 MpkQ#c4+Cb7.1oyD8>r&Y)@L' );

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
