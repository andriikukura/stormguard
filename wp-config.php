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
define('DB_NAME', 'stormguard');

/** MySQL database username */
define('DB_USER', 'stormguard');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         '! l]R&MlQW|=PiY0@yy~]$co1IRM!V!)KQj^%66,A nswGN,fEv4yw:nN_DK,s]F');
define('SECURE_AUTH_KEY',  '[hHpHUq+!x=i2Z84W*sofh?u6=`@4MDdnld?bNp4FA^/l+iZ*UKDJ/z:;GflPaS&');
define('LOGGED_IN_KEY',    'Pb,ae}+s[Pie*,mRVY0+5^-yNZTT@(9G|^j%.oS9)$D*;|?i__d` 0]}b&M;Omne');
define('NONCE_KEY',        '|9zkNO9#JbPG9}%Poru[$HVgw[Adw&80<J]rv|hBs0q~U> jFw5eQ#$ng7M2iJD&');
define('AUTH_SALT',        'N(wg{xeXj=Y=gQT#P}FsC^BSY/]X$Y~26:EdLI|Q9x$~M6_oz&Qa;4LKSkyX])od');
define('SECURE_AUTH_SALT', 'I&.#_Q^rT|-6!`}QAub~/s22O&@V;jWq(cTKxw,sG+mvI;BP0i^)h()(3QX2lI6P');
define('LOGGED_IN_SALT',   'L;CvHcS0w^,%3T6a9@T=6MT1SL?c0uvK$-J{q+90i<JZ7* c4MHAhIUYRH<$6(Kh');
define('NONCE_SALT',       'fh*l1lCJdtq1^.8~oLFaaZGeYgi_f{%b$~*JTUyG3Se=w|WDm_qPum)TwH^lQ D@');

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
