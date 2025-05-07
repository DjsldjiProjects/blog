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
define('DB_NAME', 'ethbits_blog');

/** MySQL database username */
define('DB_USER', 'ethbits_blog');

/** MySQL database password */
//define('DB_PASSWORD', 'J8s48ft8TQwfW9ju');
define('DB_PASSWORD', 'hdSWeh-G$!P3z+#H');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '%K 65{hri%:^dv3T1s5Xko@QO-[o]r#%XR oO4TyKz9THl+t&.`l}b0CV!$E=]jG');
define('SECURE_AUTH_KEY',  '0Ec-D39&}QUjvXs8`j*|h2vf}Gc q/b%YA#yy6^8w2#0Tz-S$*lvpI$)^o:k9D/s');
define('LOGGED_IN_KEY',    '[^o+CU.2~lX9*K~}.LkW0Gh.~+(f2z*D$7={-_n;aR9S8wjW9debF#MO.lSEF;$8');
define('NONCE_KEY',        'ekssABAebxrSI>,;31@I/9 $bE0NE6TIh_X7P^ 4,0yfd1KB0v$6^5bdgvSjE*aX');
define('AUTH_SALT',        '5o9Dw0Lo|4jpI1$c^7DES]!+Ow z8ms_TN^s$jMJetd+u*d3(:Hd9,1[_8Go8ifI');
define('SECURE_AUTH_SALT', '|KuU{1cZ6,2x!F/UVyzT}SHioY`J<(,jAw]Pg(3vF}eyQFIbPo@uZ`SYE>XD+b78');
define('LOGGED_IN_SALT',   'PAHukPa@|H.+u8}0XD1v8Kp8yfm%A0I9n2vvt0Gz[EGZ}ZG+Ya:jo4.$M=C=+ hB');
define('NONCE_SALT',       'L>ehh_cG$pm!Cf^,D[u>p5MlW,n[<xA!au<qL)%d=b@!+zj9<U#2u}2,y3Z:R4 d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
