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
define('DB_NAME', 'dhruvikn_pumas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J*-46F_2.|Lk4!ubx3}yGaU{?-:&bW]C5[SC#aO|6^Q-L<-h(?8[3;MhZ)uGAy3;');
define('SECURE_AUTH_KEY',  ':Maf|c`KSKNj({PZ2.Cyok)|wW2z$7MDuE(%Ee:s{%/rZ&|4r{aMDA8[#%w0>A96');
define('LOGGED_IN_KEY',    '<}a-c+w8g0a}=!N+.iA<9/lSf47N+:tB*b{9uXzbC-G@O5X0+>~e%|1U}rt<,xHi');
define('NONCE_KEY',        '`4<tn25T7VlZc5UefvdZY*+JYy[(NE#U+xiIY5> ,S}XW8IKfX<nE>XIT@[oG-S8');
define('AUTH_SALT',        'D5HcEibp|isb.44~;aN?#oh/]*&*<*fNtv_T}%M+;85vV+hB93qG]-wK^K/I|X9K');
define('SECURE_AUTH_SALT', 'i,;hNKVc`p.`O~t%v_~Z;iJ`VjM$/l9lGOVhxvq@6P26Fdx*<nJRDo~jQ]AKxy*s');
define('LOGGED_IN_SALT',   'i*Ss@o1?SJ%$,UTnr*O_2aL%b30J~9}eCbXFoI:`x0-n|%%A03Ae)%}i#M/6Vc;L');
define('NONCE_SALT',       'GtOJNVkDMV(ozy{]$H8[=6d^:k&u~oO0}a7`S5FHXJ`k%2e;?A$$8MxJTW_K8LC!');

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
