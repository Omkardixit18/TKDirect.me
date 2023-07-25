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
define( 'DB_NAME', 'hindusanskriti' );

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
define( 'AUTH_KEY',         ' llO5z{R+bW?(6&@:QEfR3qU|?:%8=3U/#NIrz,*-?-NJGEQh.E=(>;ycx5;$z^.' );
define( 'SECURE_AUTH_KEY',  '*8-^LC9uE{_GVn;G&}(I+(5Lfb!XbC]dU|SMn?vjdf%K65kUR1$lMKU_nf@(U!0O' );
define( 'LOGGED_IN_KEY',    'bSkva4>u{}YN&u+1}?vLF_ t}N|_Y~T)OabNUWZzeD12j=VW$] 42?CBnUz;g_`U' );
define( 'NONCE_KEY',        '{oOudGIiO@n!gzy|qp9&~=X~FURC@j!DAv`AAD>sSv%v00}dK&1[_5xrkPdXAGfO' );
define( 'AUTH_SALT',        'AV)$lWDGd(QRWxmz{6i Z7DaoTnW/rmuLr|ya/pMf_CllXB}vNL^treGQ6BNnMNV' );
define( 'SECURE_AUTH_SALT', '$T{qm>Ow2ejXtux%1c~(5cjf,}$)]!kH<<1,MkjXE_|1{EL6yWJi@xn*&QMqFan/' );
define( 'LOGGED_IN_SALT',   'y#:8g[n(.EC(<JaxG{ENy=/)mg}kHaP&w}53Iy>W5;2#Pe5=raEs$Fh9m8gP26{E' );
define( 'NONCE_SALT',       'V):,}j3d8tQZx)Yg=.^txotQ4cqBvp=PT!ZcVt`-;&x0n}Qs+nzr.lyhr_Q4USy~' );

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
