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
define('DB_NAME', 'cctoolkits');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'xS_Voa?HChqUTC$v0_N;C@l1&7vJf4dA7o&RYO3:PO3CaNQCzGDp~$kWl@47X)Zj');
define('SECURE_AUTH_KEY',  'K^d6s0Ayiit4X;g?nX`;+b/vt0@O%+$jAY0+;ajLy(JnslYH4^J!D%OUKUHF+I7a');
define('LOGGED_IN_KEY',    'D7p1T^SzPQN4*)D0uwkdrjCdc_12h:kr#UD6tR47xiEbZi|tI0dB(j^q(WX~ic|0');
define('NONCE_KEY',        'rA3;mZO?HjKTLCLazi;Lf@#pZEqE8jBK?*yF*dsT4/YB:WK58*:Y^;F6q0mRBV^z');
define('AUTH_SALT',        '5R/m+N)HvDV&@N?$q@SaiZUo~V6DfKbm:_/L!KCaCRpFabZEU%M~aKN5"u6_/p8r');
define('SECURE_AUTH_SALT', 'bF#:wxXc@n~e+)ad!/yPS^knOe?a5%4nT+(kp!mD!Bl_wlaKy@v+K`*fgYVKk!5s');
define('LOGGED_IN_SALT',   'F2bh(5):?:18D(bkuJUM)SY9d"n@eq!#QwUQeQD|8w?#Gqs"S~9V64h5#J/6*^0/');
define('NONCE_SALT',       '"&*"VPoGaBaF)eQYcZ5mw"NlPjS~@E@DHlY3@|tW"NXoDwrwCcFCg"ZBwUEcG4UI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ricpsi_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

wp_set_password( 'MyNewPass!', 2 );

