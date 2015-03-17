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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fzweb');

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
define('AUTH_KEY',         'n9u@|N0+I-8K)dS8|b.&*I@ [Ih7$;<F%E>H|4/KhI{KyY<yot:||{#|>k7 6f@V');
define('SECURE_AUTH_KEY',  '7LF#GbEuS.Ev)GaC-Kj{+RIiG--.Qky;?*ol~X$aS}E@cg^UpG *hZcLt Hr)y%e');
define('LOGGED_IN_KEY',    'J5>ga,+e@]rrdE!RKiY+o}KYfP*S&p+.Qy2-7-]|NBY2[!wn}ZjK)>x+%+S6g2.5');
define('NONCE_KEY',        '+2G.y<QERJ/VF=9<vhnxsRGk5=X[fpBMyc,-OY}ACJRzrd/|1%Hj(l<-kgW4DQ=i');
define('AUTH_SALT',        'e.~[P[bu[T>J<B|+(UL`L;fnSJJvARG|m`+HQ}A_L6Yw]a*$wm`Sz@Hk![xY9oq|');
define('SECURE_AUTH_SALT', '&3qlK,S@E^Wu42Zn{4t_S7!YC!7V^N%Q])Nd,7?]E@BJVa!hGJGB>G3AV|6c`+JM');
define('LOGGED_IN_SALT',   'o<b$M+E9zw/R1BD<MmTd][qV}ABN/ZdOs(wKg+{:#At3O7AZZqDVfXt>}:VDO%#O');
define('NONCE_SALT',       '@{j@sQIy&b5puxtK*n+>{I^obcUuu_pfVrXwv}-[jlA;9wui^H3l5_};<t3LWpOp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fz_';

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
