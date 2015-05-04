<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


//adding this temporarilly for local update
define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');


define('WP_ENV', 'development');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=Iuu.|VqidM.`5SSwmz0l.Qs&+]E7t;+-~W#2QoF]:DS6TzwCY9C+{Q#_A1FUtd+');
define('SECURE_AUTH_KEY',  '~,k-=jtyk{5~NKT#L9pT!KO-$__,6>Q&tqo$2*|@sfV!JCq@w=J6Vvyd85pgN5JG');
define('LOGGED_IN_KEY',    'XQEA-ok`%v}bI|`[7sz6EseKhXU5~!Prkmbsu?V/0XxLyIZs~{gz(:m|bHE3,D%U');
define('NONCE_KEY',        'c|;aO.L0H8%#63R+N;kZ>_N9n!%wZkY]?_m5<~p,Z$)14d.ay~WmudInFGZ^.4Fv');
define('AUTH_SALT',        'MFIg]afMW EPHgp< nt8KQ1T/]@CelSWU{{G|16!@b(}k</+F>jaqx>5EM/)+8#D');
define('SECURE_AUTH_SALT', '6|=E_|Ba|O-0|`PS b=W)Uq72.5-$Nq4#331]3m}skmygz!{vx`,VYJUj{ogLC[j');
define('LOGGED_IN_SALT',   'lpj&bU92(Y5l$_P 1:(NH__$UNyL*@<&l?k#JP~Jk|EM@/q e4Sp%|E3vJjv)Hwu');
define('NONCE_SALT',       '+zEWYWT%oO|C4PD;;],P<)-|.-yOmDVzkYp9YYF{@%@tl|M6_+i]IY}kPpPwh|34');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
