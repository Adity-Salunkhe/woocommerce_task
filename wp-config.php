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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Interns_task' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'wtpBaI2`0PXxrF:(Kwoz.Em}njzXJgTDJ2U`h{=}L5}1 i>gk[?x^4O&1|CFM$2>' );
define( 'SECURE_AUTH_KEY',  '|l!Mq!)sZ86Km}_s1V[g7#KGUkVH<i,&FM0z&J1AmAV:o3PwJ,mc}BB5@+QQ1qoS' );
define( 'LOGGED_IN_KEY',    'E#i`6M0ZwKs*&UtndWoE<r1ro@6XNo0uC<m$Bne*vM7Jp3BN+Tpn1/xR+uv,&P3`' );
define( 'NONCE_KEY',        'w$Rnt4j~S(Bh2bObGMGL4IGb.W4^n8L+]cgM7=ZsaL2u(Uq3z0owVVWaLiwE|I@$' );
define( 'AUTH_SALT',        '-#h yq:w]u<b3Syd>6Ti(TB2kC$ZQos7HM: =&U[EBfKX r?wTk*8 oK<W27=Z7{' );
define( 'SECURE_AUTH_SALT', 'zK63Lw-`v:-=a=Q,}H;@<si_[Z^7*,c]_YC[Y13!X4q,%AJvOAwk<i,(=/ekx@h3' );
define( 'LOGGED_IN_SALT',   'Z@.Bsl}mZgx``^&)6*8AQQr4&1Fw3979GS%_GiSIK ~8s80mrp;R;Skbg*nGo`nN' );
define( 'NONCE_SALT',       'M|K0^SotxiR&kWfvEC0s+!S+C6d$q*`Y88K$@$P_Bl3XCi-/sbfA?]yx^Poi>:w-' );

/**#@-*/

/**
 * WordPress database table prefix.
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
