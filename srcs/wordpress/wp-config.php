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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'jheat' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'cip-mysql:3306' );
define( 'WP_HOME', 'http://192.168.99.102:5050/' ); # EXTERNAL IP
define( 'WP_SITEURL', 'http://192.168.99.102:5050/' ); # EXTERNAL IP

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
define('AUTH_KEY',         'V&NdS_vnln@+kPA|,vvS%13bX*1ft%H`dzQ2XS+krOA^Kk2;VPRZC?:vE$kup(ic');
define('SECURE_AUTH_KEY',  'yA!^KK7_uTUl(DL00Q6;lXzhSf:1OpK_#R{-Y=~^*?r,0*Y~g7%d6(juQpMPTffm');
define('LOGGED_IN_KEY',    '?ugXNQ|xq=305bXn</b<:ZT073e{opp^VX7TxE9oMTS$d;;-S~JeaD|usa*2Vqqr');
define('NONCE_KEY',        'vK1X{}/$.]A|$LSLj3g>~aM)`7l6qqRICe_:o/QgcV}X26-MFUo]j;8)#d,UNE0|');
define('AUTH_SALT',        'b;74/|Hx~V(ZW/8ZOGT3`T@;iQ$FkHVZ!*uP9_9g-+_W-98B;MR #n@iLMB7wN]Z');
define('SECURE_AUTH_SALT', 'Uw~hrrO`~5OTIoBC81+!g_6=6V}x1^cl1%[HQAZV,_7dU{TrBwALDOCfmh+/ YG,');
define('LOGGED_IN_SALT',   'RB=!0?&}c`/3t+?g0jVy5k<!:xd[-fGW(Hs9!|~%|-=MNOG$hum1j+0M-[!@Ig=|');
define('NONCE_SALT',       ',&y;sN,WTTX2+@WOL ^qQk*OAv1r-vegp=]-itctm.kLh+<#:<ubI8h+uqG_E_bV');

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
