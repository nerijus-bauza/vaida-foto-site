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
define( 'DB_NAME', 'vaidafotosite_db' );

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
define( 'AUTH_KEY',         '*C312`LFcxK)3Vxt=wg~bklK^9ORW.i<qt47k5}1mVW$>ZlXCZ (z8g4vm34M/ I' );
define( 'SECURE_AUTH_KEY',  'lEdBSm@s:lr_UuFtNR |5hg3U-V C|WN@uTXh9&Mh(-_CL`roUQA~kB>LwQXJU6%' );
define( 'LOGGED_IN_KEY',    'y,r%A?NE,`?O5T& c}zj}{>e3@)l;~uX^;)@U})qVl,IH:< hlcgz_6zNt@M2}Tr' );
define( 'NONCE_KEY',        'ITLZ: Sqyo5Rrwsece,!llZ^HWzJqz/ML?<q:5Jg^TjI+v/Ii*Wq&Y??*i9Kf8xr' );
define( 'AUTH_SALT',        'BnZ:93!EFsR:=%8O?gv WB3wB{mI63xB^ImQ=w7C|2lE`,!Tm`HL]JeMwV1rdoK9' );
define( 'SECURE_AUTH_SALT', '$kQb;&f>vDiokvQ>0bUI*S`,dNdc`/|0so7|5:kB:hLRw 7qv+Se8^[C9o*IA@?z' );
define( 'LOGGED_IN_SALT',   'wN@~0=C<bMIrmrmi,]Eny_AbPxN*|%6y$z~}Bpv}7#L/kZ0y7A{+?6lm@3,S$:Yb' );
define( 'NONCE_SALT',       'k=ckr+*/0D}3%9CSr=H%=%P&V9z)J}4$8/}z9C,.ji6K#9?Y  _EN=*%]g~[&xz.' );

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
