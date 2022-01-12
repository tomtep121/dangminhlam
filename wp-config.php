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
define( 'DB_NAME', 'dangminhlam' );

/** MySQL database username */
define( 'DB_USER', 'dangminhlam' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '@~jvGl@Rmb3 Jw M,kE!6mMw>ZMHQ[uyKQ%-vE}iXWF(Hh<nohJ$9|VlxKc*!Ckk' );
define( 'SECURE_AUTH_KEY',  '[yWdM$[$kfhy( @i2r5@XlZMR!IU!zfsp9$XTuBq-$CbTDR-9EqhIL+_B=.hlK/}' );
define( 'LOGGED_IN_KEY',    '6IbQcKj*3%K{!c+JLS=,;8-&~TBs4I]7z8$[(xS;u|]o)dX6~1XXFF4( `a#3%P|' );
define( 'NONCE_KEY',        ']<+d! !9c.^i:1qCD$k`Kb2#s0f0}tLdw&>5Rjs@!Ly4lyDjgqBP)nAC[OBEvf<<' );
define( 'AUTH_SALT',        'IH034r)~1}MQtQTQFh6<Vk+>P@Q_%nkj9!*2<VepD|PQ>?H}(-ydg^Uf=7lAfEyq' );
define( 'SECURE_AUTH_SALT', '#72&pl i};$f?fq34[biKITwtk!7jJouyj%QoO& j[xT6QOO{Of8YxmSwCUmMwMb' );
define( 'LOGGED_IN_SALT',   '4l<:n`Pu;|=[vC,b,7HAkK)}/B7e&0b<6!%F:9X])0W])Ek%Kef/d7SJ*@!!T.2Z' );
define( 'NONCE_SALT',       ' uk%{;YJ$olS~vyl7>26,|Aw!Kis8/P d/QRc]F$9j12w85NSm27GV|X%_6}g`fB' );

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
