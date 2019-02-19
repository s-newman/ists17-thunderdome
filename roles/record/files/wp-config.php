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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'qv;0CMD-nB0`AoDia4O@7CBtVEiT]kCPTn7#![U>w1G0Ual3Jxvc%d<6hX8q~0AF');
define('SECURE_AUTH_KEY',  'Ydgscl%,mcDfy,4h82pF%+>lsB!>z?9~aDJj5r4ww@5^_V9q>;f;06rmI|b;uNBK');
define('LOGGED_IN_KEY',    '>67e-,F3E9gN{{`@QHd)xn2)a<JR.G},F@/y+mz|8vkpGhy2Xe;Stx7G?>nM05un');
define('NONCE_KEY',        '6$0Cf.|[*VVLKN$~KleC~.R!^|!_AwYF[bC1f,.yNy+&_U[BT^CZv,z~=^abXBY_');
define('AUTH_SALT',        'rc`tC.UEd#CKZA*ulL9z%su>60Eul~PH4 z&3VJ2yEPz)p4FEb+Y~Bx+;z@3$57e');
define('SECURE_AUTH_SALT', 'xq`ioa^?Sjn*r1P[%nX1mNn]l` qUmmhf1MB)z,GC/0LgMJZCW9NM~R:=KK_WVMx');
define('LOGGED_IN_SALT',   'ft`.}iC(aQJ2~7ZL67&B(ss|<418%aKcRG:x]?~~h9Q t bvEO2sM6m82{R%I/r0');
define('NONCE_SALT',       'HunK0)k#y3S0S{}-=Sl4$Z+En}zCK>2)9{e`.-`=s9L;{T/v[]GUP&BsJ]HuYGXk');

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
