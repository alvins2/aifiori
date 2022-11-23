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
define( 'DB_NAME', 'aifiori' );

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
define( 'AUTH_KEY',         'r$QLlK#SHS qWsTT@-a@JN^qB;wb 5Z[zGSF?+s*@VXl^0{*2CGlK^:AQ?gJ(js)' );
define( 'SECURE_AUTH_KEY',  'wK8XD>BsF5A)L8;@+RDgp~IWe_g;/V<IP.6qXHy,cx {p$)`2sMo&{7[{FKpZ k$' );
define( 'LOGGED_IN_KEY',    'k#KfhtfT.:KUSs3kdAgK H70Sn0]_55`|Yr-bC8+0aWu`ip)Jy,}r_xc?}Se|mLy' );
define( 'NONCE_KEY',        '96y4xg<lLx(+7gLj(MuR<h}NAO-dKai *52Dri_*im;K=e/Y+[qH8n*Z>,0_c|FQ' );
define( 'AUTH_SALT',        '>.!{&u}g5@>{>C>#3V#caZ%[@UTArry:L+a,%gceA5aWSpI[f}e{$D^.SoGEFHOx' );
define( 'SECURE_AUTH_SALT', '8|d`0XF*XH~-ZrYrAVE_*4]T:Z@0y8e6#^;KiDbM{?}M?2C~HnSrVYq~}6>] (13' );
define( 'LOGGED_IN_SALT',   '9Hkjm:[hSDlj:s2;5>}5Dcwvy/ G?bWc%&t)}Tcd>TnIi8K%<&0]bkgo~e?zlhDv' );
define( 'NONCE_SALT',       '.N07-{nxZ{3v>krzzLw{!F+bot5&RQ1g 20@:R:pY4^9%/Q$q}l!<!713MHSXbH.' );

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
