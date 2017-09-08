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
define('DB_NAME', 'caldera_learn');

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
define('AUTH_KEY',         '+[v+yTl!DU[RyhykUlrHAgD%riB{tlC:naQrd$MG=%yB70<.M.(WU^=`hKnY!)7d');
define('SECURE_AUTH_KEY',  ';KGpNk87t+`g{vIjF#Ik_L5Lb/)v<k}{}yFSjXiKT&HVvfSVFJcAUK)1F/9~.+K7');
define('LOGGED_IN_KEY',    '1;)=,/Zgzl_&/kxnK~Ek}K!jmW=],>{Yz{M}{8EemdzkB$chS2`@:-bBL+DL*3&5');
define('NONCE_KEY',        'DqM3zlrIn1j?hqKIG2+wCuRU6;_6-/ey$$Q}CW`el3-;^99@^PFOhn;!-imA&{ 3');
define('AUTH_SALT',        'c+}H?u*A`mo(r(5)2aGBj!DO/FW0beKf0vTihY(c2eA]#6b#.gujv%G]<(p=pti7');
define('SECURE_AUTH_SALT', 'w~UV9#YKE<bsm-1-CCZ9g#9/zJx}Lxg]WG Bq!s#AH:8O&e@DCJIl(drsY6O%3+V');
define('LOGGED_IN_SALT',   'E z,VGl,4i|bVQwSv@mgZeJ Xhs!1oP2t12pIY^8Z$2Cew|Mm3]sN1FP27M>3H,+');
define('NONCE_SALT',       'f>etY0)V[z4u-+k(Gk{6kSprB,ieO)#L>a]p)kuwzae3+ eN$[;tub/_S]{z{Q_P');

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
