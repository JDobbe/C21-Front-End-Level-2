<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mBC&(||y`E33Z!>,fU[p+My[.pQ@^4eg<PXd,pg7wN6ny3CauQ`PK3i4S9I*}@#e' );
define( 'SECURE_AUTH_KEY',  '#)=;)Cxrh&mYUWS}-jK.*CunZ-sb;O(xJhap*2;P(HLk;D+qhY&)8,9d~/q+;pFp' );
define( 'LOGGED_IN_KEY',    'lM7L+(#aTP8:WcVlSgX^YvWc3myUWe$S@Q0/Gm2vn|PzAO{x+^xFS&rdTeS+  3a' );
define( 'NONCE_KEY',        'I=cb) >#|`b-Mw$JKUXA2`V,:6i1d%?F#CAl$}Z2Y/G` DHynR*&5tvtH]~+,k14' );
define( 'AUTH_SALT',        '~UkRb:(;IH!{g8CEJ2%]C6-{A<<.`ro`:+--l+hnvM&n!uHpI{8qP{C_YgK#DW8&' );
define( 'SECURE_AUTH_SALT', '#NxBEfpuD|`$#NIQ2%QjBUw6#:wBFU#T5KcfJ%`x&8z3KI+dChJp@ +wRJdxMN+t' );
define( 'LOGGED_IN_SALT',   'g!t${Q)mT Mn&:1PIYH|n*VPI_hDi}8<+}S/Sx|#7fh~G?]X(o<9jXbpi?JwFOX(' );
define( 'NONCE_SALT',       '=y#:QROTyz_(j>ced)l8`%D7A?#?TKt(>~p@JQ[BzGFZ!(dm`itok`~zTjafY9_E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsite1_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
