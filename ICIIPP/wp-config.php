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
define( 'DB_NAME', "iciipp_public" );

/** MySQL database username */
define( 'DB_USER', "iciipp" );

/** MySQL database password */
define( 'DB_PASSWORD', "tres3eselamor" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'HDf6GQGr^Yyi[CMU]F==0ObjC;aPms;a?wG<CTS8*9,@{v#9LVaFC9+Xe2$I) e*' );
define( 'SECURE_AUTH_KEY',  '@b#T#_crg=CO<M|enbxxOKFDa96Qd[EuUpc7!fXKUe-N+n@+~8=kvk;30O~kqlE>' );
define( 'LOGGED_IN_KEY',    '[Jl<$J1O$)x{R|07DU_?bCI@>U2z(J./V*8?9-^i[Ddoc.7kX?05m#^eh;~$t_-h' );
define( 'NONCE_KEY',        'j24msFqkPzJn4e)Z+v<i>@0DpfL,*0k|[A4G1vD~m<(+}3al_=@GelQC`,G1hNBZ' );
define( 'AUTH_SALT',        'AR)Z?b*y_U/77_ls>vPKruxXS1wHJQsQbBt}6E8DP-VX8pkk!55W/K!]Ar@U$c H' );
define( 'SECURE_AUTH_SALT', 'W>pa^eo}A`82d^x:h|^^r]m|V4&WlQJ}jn.J!U?CAk1i2p1A N/h*^#X<{,GT-n(' );
define( 'LOGGED_IN_SALT',   'EdNnS?-[9zIctPzpmvge7bH!p4-p|>8F]5Sb^[<4|Z{vFhN&3+cjsrGlT/BFFEL<' );
define( 'NONCE_SALT',       'hvdx|r8ID#$G:i@$Sah_MAJsJQ~O %/iQ5Hz`S9eVCnSsLsD?tR8:1[qQ0;7p`yl' );

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

//define (‘WPLANG’, ‘es_MX’);

define( 'WP_HOME', 'http://localhost/ICIIPP-Public' );
define( 'WP_SITEURL', 'http://localhost/ICIIPP-Public' );

define('WP_MEMORY_LIMIT', '1024M');
