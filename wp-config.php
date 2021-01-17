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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'TestWordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '.T6YQBb`SADl:Sbh+_,TDqe@3Q1@|Ys]bH0@6J~&3[zo(%+p+yt2 =Jz%Yz2nJID' );
define( 'SECURE_AUTH_KEY',  'C9@w(&YSY;FsNvHd/CK:~<Uc &^p`7Q_-,+)i=78U|C!D<h9fftyMQ&jz8$o!=*}' );
define( 'LOGGED_IN_KEY',    '6a{x*~C1?_}yhUs50}g)V>hV56AlWa-4AH7.z~+h_,Tvz%PHi&%7A*#pST(CI#iF' );
define( 'NONCE_KEY',        '|O.5(kBSn1Lc;af2%}y=Nkm2hOrP*/t_Tw!Mu5}?Mg!nHEd?(@@o67AhT-4;k(]S' );
define( 'AUTH_SALT',        'SZ,3N@./?;K.i|r#T9SIHl5~UJc<+Os,%a(>Bf]00yPH(({cbJ1ZNdfpSigCC0{]' );
define( 'SECURE_AUTH_SALT', 'KcYln.T*jEfc#t(Y5iF.Kj}*&]5sb$Ovoa)T61xn=?-x/Io0l)`V]4myxqZH;H|l' );
define( 'LOGGED_IN_SALT',   '/UzX&e`Yv%4lkA*Mrm.EoL6L/5+uExr^lt>1c^@OP@H$N-ONK5Wi4JgGU$(2a@fi' );
define( 'NONCE_SALT',       '0cS@E?!1F5}%Lk1?n:;}aHw>d0hz89(:WdPs^d:woqxN!=]ntz&sF4RIQED#u9ph' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

define('FS_METHOD', 'direct');
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
