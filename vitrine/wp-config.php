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
define('DB_NAME', 'skate');

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
define('AUTH_KEY',         '+Da6hK7W.+N{w=MM*$Fx)d%-;==]+7okFvdY sw2M8Wy;;u%U0JpO.A1d(h)wOaa');
define('SECURE_AUTH_KEY',  'ClUzKo2pHdu^5/|oStI)5h@,@Y-C,fiq|hCxeW9f7e.c{e-Nc#XMbqK /**lrf85');
define('LOGGED_IN_KEY',    'R!v+pw[K5Iw9qG85|X>Nd)k?UFE2)i;_`9JLY2g_<|{d`Tef%f%P@b!}(m9|42`6');
define('NONCE_KEY',        'W([{O 7YiHk<xiw^YDl2n,8.#cl`$]KCs+:9B6`*t{F?1R}:QoC=^o]W^T[[^/k!');
define('AUTH_SALT',        'y1/%a$,;g$3-F2L)Ks.X a=TId$M7c6,}_3&.e}e`eCUb$<S!H!w5) onx/D6kpe');
define('SECURE_AUTH_SALT', 'tHF7fXq@va(0#&b9hGB1ur`(lmX4>EV>47eGT1Z>:5#Cr`*n@XEt&~;1e<vEt=33');
define('LOGGED_IN_SALT',   'S4~xbGmKFoxVNxWO_tR(G7cgawAYDk1l6&9sC-QpgPD=TWnhen5FK(5RUdjNtK*!');
define('NONCE_SALT',       '[7^`93Yg:nsC=I6M<[J5BhjUP K[}XTV6Enl7!w&>;7z_@b5qOCx{KZR0jYz9j:v');

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
//if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/projet-skate/vitrine/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
