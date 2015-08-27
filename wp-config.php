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
define('DB_NAME', 'dwwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1l0vep@1n');

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
define('AUTH_KEY',         'z1lF2$[Uq0}!fZ|N_*gy[VDEln>[P+SIwH-#N(:3OkaCfrCO+v+5g>~>.>fI!f$l');
define('SECURE_AUTH_KEY',  '8B^I+N?Dv|a|&l|uvDruRr-ui%%QI+2f2J ~W+iup3ep;@1{{Hb[|+dV%<[aisk9');
define('LOGGED_IN_KEY',    '`~8oMdKWNG>[nwh+Av!OUSJ~*u#u=8vdncio6:N~MI<=6PRn#vi(K]b(*F~ PzJG');
define('NONCE_KEY',        'j7d:x;T/Pp!CWY%A%(y%|+j8d--(JRaW#AV~wv=.jmpZxJuwH:`#6v3Fvl_/WsvY');
define('AUTH_SALT',        'ru-+=Z-vh_W?=~Z|+|!Ral.{)$O+Dr:+Lga;hTPN>/[7XM&W??=o4A18R8wu?llb');
define('SECURE_AUTH_SALT', 'bP-v=Q^Rg?` YP{c=.$Z-Z~iw&NWz9.,8xxIr!buR 76*Po$=YNHrn<(*ZJ[;;0q');
define('LOGGED_IN_SALT',   '+_mYF:YIGdQ(i,V.cV+h/! {A1Hgq?ReEFrWy@ue#@Bjki9x~gP&,.{C-$pn2v{{');
define('NONCE_SALT',       'Enz4OOho+<yz^qLZV|[egE.*6U|ET[pFQfae!$ix+m/-m^c+4 Yl~[SUE#ih4S9=');

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
