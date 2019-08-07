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
define( 'DB_NAME', 'cybernations' );

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
define( 'AUTH_KEY',         'Y?z8,Lzud;WO&~JkA^=dJ4m+@*U{Tb5>i X8 |6z5Fd8_.}3vw==~*KbidDXl#p_' );
define( 'SECURE_AUTH_KEY',  '{:Tl=q{|8npY;]E,N(Pd;jy0q93ILZB/v(TtWsJ7cpX0V~,dag04VldKo$0^S7yn' );
define( 'LOGGED_IN_KEY',    'U/(B>aLky{!<{Sy Csg+4c1.>g.J6:?CM6sj!z%>;nyxij@rb.U/(2CZ9UZTbQru' );
define( 'NONCE_KEY',        'mpXE%QtP+O7[52FY)vj/14=;cSZPIa.K$X0),$YsMcOI^@3mRX@Gu[ClM=h=e6V/' );
define( 'AUTH_SALT',        '2e5/<g(ndcOB%HI aEr *zd~H%,9t9l,_`sTgdOw8%JHSWTqAeoWNz1y$klI]_;C' );
define( 'SECURE_AUTH_SALT', 'XW0waKxB%1V0l6*Vm}]-psthK/.=^Va*EPN}fBCi[ZQ6] h6,;jFO*IBo+I~@o#+' );
define( 'LOGGED_IN_SALT',   'h9$E Ie-u(vj8ULS&DI4L=-8==ZaGui`R*[+dU_E;M3F C=ubTwB-)xr)hCi~?<&' );
define( 'NONCE_SALT',       'mi]]+8H*CBUBHj+|O3)m^LPV~}~r4XVj]m!|!IKym)B%V?dD)G2O5y#CUMz)Q@?T' );

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
