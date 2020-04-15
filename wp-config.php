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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'O^AyGc;PIT.9FW=c$7+E9yU4oR>5//a4`V1)~.>q3}U8Uzz,A^2VFKl!3Y~.+c,}' );
define( 'SECURE_AUTH_KEY',  'q$s.F~k6.Gh4%;V5;FS&}PSzrD&z/b:V[U,0Xj[PYQf.(ONKd(U)tusAXtJw/xIE' );
define( 'LOGGED_IN_KEY',    '#E&jX{,#>5WiBjy/q<XklO4[e+DG01B(fow8#ziD!E9]f;^|_DgI9T=dqV1 tU?[' );
define( 'NONCE_KEY',        'jU{}AX xK(DAj&~!dJ.7g[1&NLH[|7HdTfn:_ysA{9eAaW<j6f^@#!EdV+3Y?TIP' );
define( 'AUTH_SALT',        'jmT_s)qCW6O%s#~l`zYY]p7FAxB=L>ipZ^0+!Ooeg ^,rLcvM&95(@HVFydb>xF#' );
define( 'SECURE_AUTH_SALT', ')n9H~PS6E=iDx#cYyX-|*huu5b20HOY9{b(5c`aP4u~l.xr`#?*Ve<NJ<7`>2r:g' );
define( 'LOGGED_IN_SALT',   'V>~cle.?X=@eIpf*]O`&Dkl-lA{[t.>J4:79,1G9~a-C{Oup 3c$@i/Emm)pD#Li' );
define( 'NONCE_SALT',       '|Z$x9lt!_i9#LJ;ra)-c7tN6}]l#7vx0H%Sn @4M;~uVH[S<,:7wGUH<eX]]#LOW' );

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
