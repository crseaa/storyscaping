<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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

/* This is for Mac users */

define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'storyscaping' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xd!,PO-R`_0zr1mf{NNa<q56gR&A7v IJ7h+@j2>;L!+c,Lm4C!nDU^`SVFcA>U<');
define('SECURE_AUTH_KEY',  'I3@QUUlIYPGA5^}*MK&f]+qUMNg1}I@pvWL-+}v}-`h$*+qdrQ.e|1-2Q+oU>/f_');
define('LOGGED_IN_KEY',    'os6,|IB!<Gzsp@+Wjt^|9Q<VWB6YpW4zb%4$+l{V8IzSE>:W-jZRDwF=>t/h|ptO');
define('NONCE_KEY',        'VndJ/ycnG13;95u=HmSHzTq>/nja%j9:@[v6TbjB.ay!mY*5GM6nF3z[?w*An;R8');
define('AUTH_SALT',        '}m/~X^?.xfH?l^zY;!&w7(HT)/ugukU_RGS.L{dhd{T@AC5U5(T8W;+n]Wk,[Y+0');
define('SECURE_AUTH_SALT', '3%e!slEGpy_y76rJ{4F3y0IY_W-Q|01`-/pJwV$FoIYYrOU?tHvP[zI,RY@uvwkf');
define('LOGGED_IN_SALT',   'a-4<4VkTjw~;+m+{JceT]:^zt x}6ZA53wl5rm8$X|8hRSw4H2(p/bK!z*Y1+Gbb');
define('NONCE_SALT',       'pW;.,NABL$3-!W1LEAtH|#a[:b$+VK~nwF&#Tio-{Z>~xX4dyFkl=L#<d3vyIDUJ');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'storyscapingwp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
