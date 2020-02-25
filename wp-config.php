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
define( 'DB_NAME', 'dbweba' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')i<.$-fG-D!m{yWLKcvzoQ(fT;xza#fbt>0&3/-?#_x^ofmih$AFxv:UInj}EsC9' );
define( 'SECURE_AUTH_KEY',  'h1o!}EiC~Cc!5dC#.g=B$gm}%lr?5qy{D5p4CD+_40%4`v}{1)4BYg,MTR+c@g;5' );
define( 'LOGGED_IN_KEY',    '0W#vy;jKvuo*/QsHaT8=@T@2e8__N2y6M[A#iHz&n,3`^}$lb<Gekz|OfPs|f2zI' );
define( 'NONCE_KEY',        ')Y)KZ2`&S%g_>&~xw$vRX?sXx|eP+K,fxGWgx3X^B6@<]FN^?5ve7}Lp,WzEK.}e' );
define( 'AUTH_SALT',        '_XSC3Oy!L/<TDP}>[&G2#=(BkQrv`(Su7wE`+}u-+q+!ud}Nt 4xR udG|:jsGs`' );
define( 'SECURE_AUTH_SALT', 'rGPpsP;4P@0o]CbnU$(s><sQA1lpi;GzlnP~QioG_Z~Fzj(/S`v&o*N%^G#,5.~G' );
define( 'LOGGED_IN_SALT',   'j;}crIQ(`!3>C?%W6scaMy,6H3$;aQW@M^(-mR06J&j6:i[p8^_X3W|HOn/EGm,9' );
define( 'NONCE_SALT',       '^B4+1Ix2637+f><Y|:.65CJ_3e]>As!N GIN;zR]4^U5+qi!G23FH=v1B7Rn`BDk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
