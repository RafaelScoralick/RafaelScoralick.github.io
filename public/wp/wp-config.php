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
define('DB_NAME', 'turbodb');

/** MySQL database username */
define('DB_USER', 'turbodb');

/** MySQL database password */
define('DB_PASSWORD', 'gtgt88865089');

/** MySQL hostname */
define('DB_HOST', 'mysql796.umbler.com');

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
 
define('AUTH_KEY',         '`y.BoubX^g8wi^EE>+]<0~=k{9g*adj:}C=/}Ykg D.*y(zBWD!<m=b}1t[QRs>/');
define('SECURE_AUTH_KEY',  'fQ8C^u4c@Bd7`Hn_313Uv/5*Zk+G{O.JS?e|>TwiH.-h,-{+m@ES(lZBm$#O1aY;');
define('LOGGED_IN_KEY',    'u:NHu9t%WgiUc+gnppFf1 +aZdO~7lyylR)dlBgcI|~VtKqiG-awm}q3;) 6!7ex');
define('NONCE_KEY',        'mW2On<&Qd(l%_}`GL3<R^l21mh)tW.3kWf@+WX$(=pR-7]DRG2Jz4J8wP>N6?RR:');
define('AUTH_SALT',        '+p<Ug2A5b*SBIQgHjUFbXb0;O(qp#i.x)hFN+e]&CY2Jg#QgByKz-[gl;UonSc`a');
define('SECURE_AUTH_SALT', 'c$;&l&UFa}Xcn4Y#6HrNuY876DeX&d|]4,CG6+`[VR1cH$yrs8gjcI-M{SPJYRL@');
define('LOGGED_IN_SALT',   'XB+F._*6|,!bax:(~;4EZ>cj|ywM({W9uBd9d]d@-n|-<oWt5/MF6x++fp:@V,Wi');
define('NONCE_SALT',       'RK&n5l=bKS|Ly|O0+i9fo&&5D>}s+rS{U=qaJr=Ef-#yaO~cUZh$wA?}DM7r3koI');

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
