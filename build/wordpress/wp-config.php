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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'E<o</7ILaUw+Mm/d.p+qY] /d9i2>2y|!7f?oWN#V/Ps=L6CbbpGR|a[q0#S;a8@');
define('SECURE_AUTH_KEY',  'i jX!p+`ZyF2{}j qYU=+1e3z].r2)|})T~VV_MKu`[qcC$s fi.Q?u>Ke/6*Q;z');
define('LOGGED_IN_KEY',    'z~pgw)5k?lpB)LKNaXyJ%A,b 8rMn00vUMU!E5~(UP:f`?W32|R(Mdv|V.LulE)h');
define('NONCE_KEY',        'r#f~xZE![pUDmZXj0XZDsXz_VhE-%Jf$,X,]r}|yql&p^Lv-AL-w78E-<D]2B|1J');
define('AUTH_SALT',        'tR1n~J`G]D=s;nieK_x7~je#tM+_|1~qZMFx;.LU#!?%sBZl&&)(lRWBvayIN#0X');
define('SECURE_AUTH_SALT', ',op/m,g1N<:v1V]OU>p#kabmJ$eV_JYMwKPq]vG4p%h T[j^f}dw-lHn/HC[#TrM');
define('LOGGED_IN_SALT',   '5Xjo{,]SEk$M,oss;B-.heeS`=S-8{i!N=Mil;i|xF!5ef6z*N4_INBouv6i-VTI');
define('NONCE_SALT',       '09#V@:UH{`^e0dEwllK8[yt|MOhoUiM19G<4B6;W2[V^hHO)/SbGm0<N[`^#i;!N');

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
