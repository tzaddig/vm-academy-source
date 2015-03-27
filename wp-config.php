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
define('DB_NAME', 'vm-academy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Sah2Vphxieg]$Cu{N6iMkt [DQe{.U<`kYp|xT6E|~+n W2* [G+m@,^8a?8MbTY');
define('SECURE_AUTH_KEY',  'V;5{ch$S[!:S[9@zRn:kh9eH(:-]-9YhGKiDYlT!|Vq7DkRWC{+d(9qk4-0c;c:r');
define('LOGGED_IN_KEY',    ']aYer}SFLLe2N_#P>blAuId]*W&[cuq@divwa+^?jn8*j}bXcqM:O)F`5AcdB2e0');
define('NONCE_KEY',        'ogt-r>+t)M<#-|AFdcr.P9DA|ki@?>> >aH7%b~<H<WJC5h%`NL?~`6}{#Y.K03|');
define('AUTH_SALT',        'xM~,]BJVrBd3m`Rvo^_2=@W0CxLy;^#-FdUjh0eaR-r=#&@w>O)%lpvG|3t,LH{s');
define('SECURE_AUTH_SALT', 'Pzfi{S~ar$?vHAQGU|[^|Cq#J|tD]Wv[Hg*w&3#%& T.V!f^8AveUI>Xso]r9]AI');
define('LOGGED_IN_SALT',   '(F4kU;22R-]; 0wZp(kX4|b;I%w+so~X|)xOPcI?|qw!xCf@{b:g-LqOMiE?WnxX');
define('NONCE_SALT',       'FrJQI9C2n@hDLq15U}k|s2n9gCCIH>VFS=+ccKyrr!`ED%Z+RxRk@@LFDEjlcr)q');

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
