<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'egdart');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rickydee1988');

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
define('AUTH_KEY',         'R3RN0wN+=NuC%vbyb72Yiw7_=RT,YD*}P v6Ex~/n#q$oT:^%a$s~CH]zI?)U/l!');
define('SECURE_AUTH_KEY',  'Uls#x:z3Fw#uU{1xsQgY!:[ !O2V3J;DWGpK=If?>`:.`T8W;3MB0,!&*A<GJZ_H');
define('LOGGED_IN_KEY',    ',fYRAVVlfr[5xoHDnFDn-wF)ia_Qy8jX,a(xI5_gEW6=Oc]3:7=>|5/=Ar2![-q(');
define('NONCE_KEY',        '[u|`<6EQud)nEwG+/Tnp9?Azo5,)>>X2(0}Z9^!D^u/|hQbP~M~E[iK[{0i*y.E5');
define('AUTH_SALT',        'vEh_qt;I<.;hd9^BH`;kigwCQGR<h~wmhIr;fPDot,q2%WF*^=YfLDii#FRU0an^');
define('SECURE_AUTH_SALT', 'h&m+-iEK3#LXeo=vQ+(e+j71}wP7x=u&JzJ$9`e2J9CQf;o+aph#-xihmo~v9?0z');
define('LOGGED_IN_SALT',   'M0#6uEHTemm>qK<$f-:PN+0ybD*j:=;ocBwJUB,rLaa.{^^G+Xk/X~?]&I9s:su-');
define('NONCE_SALT',       'IvO7nzf;$.JXr9b6j8ny+jJyzUR)qrf-b.=@a;u6<g<vfs!1)zE)E}bY.|},@#ku');

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
