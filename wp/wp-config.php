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
define('DB_NAME', 'troisdev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '485db3606da21c8db47f47f997be3514a8cad30af4ce0866');

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
define('AUTH_KEY',         'KzC `n.nyL[){leB5,p)?._.r(SOnU6nssc4llx$GK<L+;Nv`<ez!!yHzE+qWF?-');
define('SECURE_AUTH_KEY',  'YShV>Lf1B6+fK<Tb@[]IKE:3HSm|wAw,BD[ir5..@ft4O+W*#H4P9L%Qr6rykq)K');
define('LOGGED_IN_KEY',    'lEDE{;cWCXMF4MPKkKm:?K{q:M{Z#sP`bRxRSK*:p9ohAF@NP]Y~TYXc.^fF}S21');
define('NONCE_KEY',        'qkQBVz6g>hwHvx:[;xv <Aut@W!lQaaImfQrW{7!R,9|qqHg Rj>NZmbm~9b=Sia');
define('AUTH_SALT',        't0,mE`[)k=T!q5)jBDleEN+^_R{Q+/( OQ]+&sM)5L+:pW0p`MyE04EL&)UU6?q_');
define('SECURE_AUTH_SALT', '!z/jH*U)$=Fi4km;SEC&:~GC{B1DbT)/ayo(%eDZaB8_T04#@1HSnv?{n,%iOIuO');
define('LOGGED_IN_SALT',   'nIRFVEny7dd/wki4Y7gACme8e=[<e]W4OAbj]ORr{h)%%Ai4ra{z}5GKa%-nvTRi');
define('NONCE_SALT',       'h8,5fiSWo00O|l9MY 7irK]WfAU:Bs^E<[Z8@M0g jSnQkI!:sMrR.CdtbX?bhq8');

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
