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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'JoeDUZ2527' );

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
define( 'AUTH_KEY',         '>S-tuqnYh_4GzDsFC-YXTU[lJaaA8.gR9!2PQ]h$nk1cE|^8@$i>(9nY8^Kvwhho' );
define( 'SECURE_AUTH_KEY',  '9?>W4~vc$j9=/J1e<=0&sBg>HeMk}L}/b}M@:*dp^h!!7BT;v//Z1?kw}5&3O7$e' );
define( 'LOGGED_IN_KEY',    'L$ba&$%=[MV-<6 knu/d8)j}%#ck=a=!d^Q~q!5Xr73#Y.;H3pUI?=<a}rjg6}u6' );
define( 'NONCE_KEY',        '9Y+1=7C9/,?cpwN,VxlnRu(&N~haS[a|N|aIybzQ[l/[aC3?V;KB)f#b98F 8@mx' );
define( 'AUTH_SALT',        'j&ajK[CLZFqJN%geH}Cc<(vtJ/VFJs<N%{KNUaU!ZXMe=FZ2xn-ivNY4tBJR]9Oc' );
define( 'SECURE_AUTH_SALT', 'V@HorHF@-QQ}xS7*JaB%$Q{.l zyft[5`:vlesEV{SUpW-$Y}lDN{v:JUJ nQx2|' );
define( 'LOGGED_IN_SALT',   'PLjJ<`*l_~c^{gDxvxUfG;SbW$0:^J6~AxH4{(g+sWK*1mJh!VIl%!K96&C22qta' );
define( 'NONCE_SALT',       '/o{e29oV$=mAH/=*[<}1g*U>X[MWGrfDYjs&n;vro; wL*%|j5K[|J>zv~59G)a8' );

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
