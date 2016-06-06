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
define('DB_NAME', 'eureka_wordpress');

/** MySQL database username */
define('DB_USER', 'eureka_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'eureka');

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
define('AUTH_KEY',         ')*O}v([7pt^g)yegGKXpZ`nj pGT(TDI-HkxbWpGmMr^k=#BWx8UX@m~gw&r|d}|');
define('SECURE_AUTH_KEY',  '4xB?Eye;Z.=OfmSx@{|8G!#Ny*1y}vMbeLz&fa6/)oH%$;2@:qPeHnT[suL$-Zu9');
define('LOGGED_IN_KEY',    '~Ss2$f5rRCzg)RW{YgYd]r0[^YkAEt~.VwO)W_>WAsh+0`od}b&;0`n>dGN0qG-)');
define('NONCE_KEY',        '-dL|&1H Bo ^cX-Q/BE]I06k-kNMl;TZ8>U1qfrA `Nn,l1%W|pn_W=)c+i=x=gj');
define('AUTH_SALT',        'J>}7SroO# ;bm>k+;/9u%3n1zu?AFPx7AC>^L1V*Aq&KwX+n$4u3JXHVo<_vi%%N');
define('SECURE_AUTH_SALT', 'lMG:NVx;kclrs6@IPTOx5i%xY1#}<_?.08u)vFYdok$-jEhiLXd|DROK*PvPbaf@');
define('LOGGED_IN_SALT',   'seA/UOqkW7---lHt-t|lO>HCtwyulaE1)}G^GYKU+:=7&8Y7SizHm>rwnohpLtoQ');
define('NONCE_SALT',       '-| N*?ckn2qOxpCljd@f ?se7@PKF|-F%KTe?GWt5ASqzvsM2S?^^)IT^-x PrjG');

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
