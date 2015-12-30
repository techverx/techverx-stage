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
define('DB_NAME', 'staging_techverx');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'T3chVerxDb2015!');

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
define('AUTH_KEY',         'r?]-.{KSUFR!0P+9Tw~h~5V6a<_yr78p2st-+sb7]TU!/h0?rc$%^gqm+F-JfvnR');
define('SECURE_AUTH_KEY',  'Ku3 ; }I*J[yU4p7m I:o5TE-0*uu|_ .-%x8P2x*HY+0H6uR8[HmINq1V|XUAnm');
define('LOGGED_IN_KEY',    'Q> RaUFre83%qZmFAORRA+0Y#|cTCg^(dC9r3#^ti>+%ANK|`hWaTIi=0Xr2uXJe');
define('NONCE_KEY',        '4+&KRJ[<$iIluE}G+zY$AD1^2U# %wNIA;+*J0O<28>0z`2o{vLfc3n6rmricx}g');
define('AUTH_SALT',        'T15v7K$^yxYft3FYi.:#r_8PYf!JeL[c$X#*z:JyB$yC!]W=jqmUKbis}FwWaOjb');
define('SECURE_AUTH_SALT', 'elZPMdXE_ZuvT1xJ3hg.kKa!R D+Z&&#;>ZGqy|0:ctL]d>U-e%ksnidJ|,:rx`8');
define('LOGGED_IN_SALT',   '<[5f# ;nV-ELe|A[l!P&DL$w-~805CP^X+U6fb.h&+u#FZJxQ;?ep%E09rO!)7d%');
define('NONCE_SALT',       'U[V@Bmc8`.Q6`4`[Twa,9h[%/?V0J|3h [A/MV+@ qC5(+>d3G!<92ztv9K+Pb{n');

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
