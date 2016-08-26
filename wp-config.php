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
define('DB_NAME', 'lancome');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

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
define('AUTH_KEY',         'A5B3obW#L9PD)~5N)qbV~{`]jhbD#2f~{.B}[J3_X0,Tr3YM?L}*-[Yx 33;j^Rr');
define('SECURE_AUTH_KEY',  '7vMh7JO },#0H^}cai*0arql[f`diPV$U=@qlGvwABk1!y@UGD4o-+VWiB42U:ki');
define('LOGGED_IN_KEY',    '/ZuXdjWH[(X#V<fNDPi(/f*@`CA%N@uvJut:C{wBx{AAbwueVsfPZ|aZ0}|:@v]N');
define('NONCE_KEY',        'Ed|UDS9wg%Z5^D:Qf~6AyYDJ5bP[SsUE@nW!_-np[mlqu(kr=,Uc|YzZg2>^AGE%');
define('AUTH_SALT',        'Fd{:R6Z>%=SwVhaP9{YOr%pe3<d5)X41uP0&:#SYUUA0ZN3>S,w`>k}UfTc>JM$s');
define('SECURE_AUTH_SALT', 'wDI?JA?FOre_r@8#*{QWfQb(HeBj!M{6[MZ[cI8)GmG[[#xrTKzgCTz[X-O4?&?_');
define('LOGGED_IN_SALT',   'I5/cBgq>T1(K0]<gkbF#hwV%~^K5f[sH_vJ+>6[N$F!_?[j-S^L72n@=9&6$0>Ns');
define('NONCE_SALT',       '%>oTbUAD>8(ABjjf<R*@Kb[OM?Zx^L-e]Bjm-@QC9@7S11T7PQwIUlcAWiUE-ot@');

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
