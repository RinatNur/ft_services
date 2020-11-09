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

define( 'CONCATENATE_SCRIPTS', false );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'jheat' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'cip-mysql:3306' );
define( 'WP_HOME', 'http://192.168.99.101:5050/' ); # EXTERNAL IP
define( 'WP_SITEURL', 'http://192.168.99.101:5050/' ); # EXTERNAL IP

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'APKx3/})vhxd1X-@*$Vn]]pj(S-4vII&Wd]o~30Vzn -dV:m|:+i[6+XBO&_?C|n');
define('SECURE_AUTH_KEY',  ',2yLbn!h!Yvq4.cu3-!p8t!SK3hAfR2Z_9g-ZKs<mKmiPPz-VRi6FdQ|flDJ__RF');
define('LOGGED_IN_KEY',    '.;m0=w~+aVU+EotmJj4:MY*|B^y-p8HQRA*^DpG!&l$V@Uxa?AP>uhaeJ`Z{z3`}');
define('NONCE_KEY',        '|B(adzEs+98<yF4?Y||g+l))R8L9=G*MU_WvCEJ<@`~<x1OWw[W@%prYt%|tcaTW');
define('AUTH_SALT',        'yNGwN`)D`mZi]y-?/~*R@m<yTv~QRYq7Vy.V6e!:Fu@v6yoK7Zg/?v5oy1r-+J3-');
define('SECURE_AUTH_SALT', '9VpQ6/su.]OuD)Nwg~_={ICif-Mf{-?Z(%6h1DESLBt[k&LGDfnt144!l|JyFiu{');
define('LOGGED_IN_SALT',   '@Cc~AJk*l7ss[F-OoWW-IK#n(B#mLZ`SHSVdt?oa!`{d]FloTlSTr:))2A99uG 8');
define('NONCE_SALT',       'tt 6|{R-oJVu+CC2+FLv`[Ug0:`U?xP-U(L?d79hqkLv_rPSHo{;^Gc{]*apX)bl');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
