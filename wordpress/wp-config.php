<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'gros_buveur');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eWX_yn[Y=m5gD}?<? @MMU~8d,Ju2GyN))NqUTDBwMLn|?Y$W>c<bvhDVJ@%YJFv');
define('SECURE_AUTH_KEY',  'teN`44Dfhaq=]+f{h3:&Idht)V([)Ysc} ?@s?Vqk-pg-Y_R5R*p3ur0uq~-f@l,');
define('LOGGED_IN_KEY',    '9^;8|6F(Oi!a8+_QK`4sXr=_xt(6o{x]Tk@Ba- }txcT@5iP*Mm9c_SG9heN(|)}');
define('NONCE_KEY',        'bs+ W-%D/WoTmpta>9=ixc-t{k$u}y]J{zf>)+$aym]VFYT0(3]?-I2Z1w[T-Dd!');
define('AUTH_SALT',        ',J$ ;,ljU)s_|u4zE26CW_=BmisM=E:!Z8mVYjYH$bI$Nn-=/j_2.pm!bC7VI{{2');
define('SECURE_AUTH_SALT', 'UZ+p;ymO4220*<,!qxBLef+j~{u[_[ai~Z,1+-u2|uT0|s$iP<|0{}~*VaAB6J.f');
define('LOGGED_IN_SALT',   '!f|}Kb+%z,LKdE-D+^zg0hR![>+YPWeGU8]_XI,KAT+~RDYn[oDvnDuQd3F2[BEn');
define('NONCE_SALT',       ' dDFeMNqwnuAH,L&IK-/DqTv@FQ|U4E)*h=n3GsdtOQMG3sGHVF}}lc4H#60*FCH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'biere_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
