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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '511ddf1fbfc68c565f00a02f34e4ba31f71fc41453c358dc' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '0q?`WwHYnKA]<J+qKptp>dw>N]0Em0PXWJ=Rp#t{h5CbVc4JDo %=a!3eKt&yUkE' );
define( 'SECURE_AUTH_KEY',  'l5y#zgXHu:Qs?wK@M}K5H.qKi3N(Y,79v kStrjUj;d;t#%6ZJpk7JEV%Yiy]AD*' );
define( 'LOGGED_IN_KEY',    'pYys-,~cI7hD!-i@HVkmBbIMr|M]e=mK AwQ{<0_~&Z^T,xJ{BHKe8YwQ$ 5wPtH' );
define( 'NONCE_KEY',        '|r8F`f8<Y.Lry(%Xw6`!/hGYQBB lp4dl[!BgyaO=isp`rPippqNSh &n!aiY24x' );
define( 'AUTH_SALT',        'R6s2C(M*6B]FJ{FGs79X]mJP!}QQiQ7;@vVyl F>O(JOaJ{|>Qx^H,=X,i<93@w.' );
define( 'SECURE_AUTH_SALT', 'r0R)aGE{HkzPNU3.LmN=m/5y{~Kv|`30F6270MQ1i@*Ed?41l5xy4 2chha|`kdx' );
define( 'LOGGED_IN_SALT',   '6(`:5JG.6 Fvm8m3+%e*2>^P%NcZ,p&!/93;f1mY,8)iN*BTG6KEjITEgOgDrkCb' );
define( 'NONCE_SALT',       '`(8Nwyquq%f~}rb84g5k,~@gb>+-nj8U7Z_M~@/iwFA6tVRS{.u})bVbe6*IaG1w' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
