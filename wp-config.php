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
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         '>/;m{r+7Z1L(y-)!_?Dn];u0fxPeGXfQ?31pp<U+g[W_$7k`V+P%t}c/([Rt6#-t' );
define( 'SECURE_AUTH_KEY',  'VuKf9pwAw+]8qPRtPTfF<p6bfJp_q|.Ct>}iy8 D ho6W9?RhDy9Z6lAyq6qS=aX' );
define( 'LOGGED_IN_KEY',    'GWi~~8DC4v&]o5iX84=~K(7r7UK*1oj8@cud:VXvR`,GbQW^]UY/CT]7,$vqAf+y' );
define( 'NONCE_KEY',        'W`2+Xv`L[C_ER4>U$ XvYrpMB;oLlKLa1(0<2k:y`9$7l&dPj5Xr|.s/0Qpzf:!,' );
define( 'AUTH_SALT',        'r.,L>E~7TnYsuHb3.Cr;kmGDIUb 6O9O&cnj_,VCAdMSg4`k.0VmwQ-jgALt4bM=' );
define( 'SECURE_AUTH_SALT', 'y68sB;q]~QsO~,+#YW3V4sLHgNTQ#VUlL.(x5}/Id^?>0gn+[_);ce,G/Zc,ou%I' );
define( 'LOGGED_IN_SALT',   '[rT9S{bv&Z+o7FX-[V:3gD-[:3k?Xj.A//vt}IvC6K?tQA0.dE5JAV1=*p$M1Rx}' );
define( 'NONCE_SALT',       'scNuW:.~H}o(>NiL,zl=u&EpE GULmhD!QT<hD %n3^vT[wDvW`kvSd+21>Ohwb!' );

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
