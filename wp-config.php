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
define('DB_NAME', 'db_shoe');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(+gU4 =h+Dq;<~!`N}DFn2v3r8Lo%*mOb_W?X=WLHcvZ?`KGiSH K+k5T7*6HSN=');
define('SECURE_AUTH_KEY',  'OYR3=B#Rv|2jbS3G GtVgx8^5oWhrRl4O|p/`hcBTPa%jXo#1M_G~AQ 3]sdLEsY');
define('LOGGED_IN_KEY',    'A6G9:Ot%K85{EXe:MMdAX~X(D}B5d@;<_|zSGyse2/r&.r`ZuV2[D%^A<H2J*sxp');
define('NONCE_KEY',        'H+LMM/3p&qBJ%b>%djgzt}HmjdA2 Yn vwrlTbAEb;NO42711z_+=!x!)#&lD{AR');
define('AUTH_SALT',        'V #BNFD(( CP6.-}}506ETNjx=Qup[AO[y%F0+u+]+n=(W<Ru)Xw[1Rh=5n~1U)/');
define('SECURE_AUTH_SALT', 'e/DLv2ELyi@1S]0p0.T)$WW/r&:~Jh,%%I Wf$Ni|LhmA+Z,kd$&Ed4Q<P G|LGA');
define('LOGGED_IN_SALT',   'PJ<z<{}JRt~xbh2qghGamWv(rddPUECi0.g{>xpo0LAz0rf]+sYBqj^r~+WDwmBz');
define('NONCE_SALT',       '(nZ!gGGRG2?/?[{@m!sk$DFsqaOKL~7455p6&tn@]5S@jDvaz5[Es24^bbW>0q9d');

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
