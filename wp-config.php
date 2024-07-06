<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mammoth-strategy' );

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
define( 'AUTH_KEY',         '&8d8k]DR}?g@2:U=)(]i)eerQc>x{Ll;(8nYLJ!Rky5_2e$rIuib@m8g>L]=,%VG' );
define( 'SECURE_AUTH_KEY',  '=Ld>-0@.v{#~<l+^HinC66yh4%ssw`+Ige 8FY1]^IoL61g2WN2qVdgt:]dR<9A]' );
define( 'LOGGED_IN_KEY',    'v8.I<|0^T^D[r=<6]+,N^QU8C8k1!48F ${#DF1^)jpm)WnZ75i-3Qry !a (M5$' );
define( 'NONCE_KEY',        'KTg);mZ1h)M+:%S@)E.NucAi(Jv<?H3|&HFiXDah5wN,xJ@42B6uJO),m#SuN+*$' );
define( 'AUTH_SALT',        ',*IKGFP Li96jRqxj;@Tdq?]!aXQSILz=~6IQIZ=EH_zjCngY7Am5TDw7v%s.%3(' );
define( 'SECURE_AUTH_SALT', 'QBK3p0]3.nr_}|aJDH!<XIs R}y4h:m|a^1lFgCsQgnFA,jn-YLdR934TQyp|:H=' );
define( 'LOGGED_IN_SALT',   ';__gC&}>N`AN0c~G]RSuZ:(PQHZU@,9n2R[r(8eZmN6.$:lo#`m27_[DmjZ[A<P<' );
define( 'NONCE_SALT',       ';8FVva83L)H~3j,i:^5>wwP@z8/[rO?hA{8:|@lA]@<%k@?/Wqkg;9Wap((#{,`M' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
