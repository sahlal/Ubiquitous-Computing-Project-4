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
define('DB_NAME', 'greenhouse');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         '|,Okc@iiVbq`4j& hX1u;7lkWj/bG{j9)n[`!!|TA}I?%$rp}:x+5q^:[OmQj@A=');
define('SECURE_AUTH_KEY',  ',4|$9?8q/e:)k0Sb[2z)Qf0=RRhvuy&_tr[__7EPTGj+6c|!FIOqSZ} Jm[hAX+8');
define('LOGGED_IN_KEY',    'K:VqRZ1C*_(,Xg|m0%)VVvAZy=<gjE1Y3rDae(R9Wkd_7bkv!r@O4-S|!2yziMCU');
define('NONCE_KEY',        't=s2D4VGe%`1&l9+?8hC{~!i3&]`)5b6YjcD&9X1Q~{H6aYu4o,.#ZH>>NkPSaDr');
define('AUTH_SALT',        'X$SE?||&Z]E.!Ws2nW#ja;k]=,(P0`h~~ef&,>kg.0{x`bWcx+9PycN:qrJ0mq4|');
define('SECURE_AUTH_SALT', 'H0$s1],xgChUM2a#tC1r.kcLW(1`i5 {mbd-q8(?72.y(A!0u}].(ExW<q?9%ijj');
define('LOGGED_IN_SALT',   'O>4Np^p+~th-$TgV!*kbmm^!}d&h<y]`wzOj.HwGCw3qBzV2T3>bV+>8OrBYPvBy');
define('NONCE_SALT',       '_vl*UTRq8@=x89+@b+E%?~3Lp[o067-;j:b~f__`<6jg^L>?Xmvf-C`1l+s$:y~D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
