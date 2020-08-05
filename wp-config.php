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
define( 'AUTH_KEY',         '/LTptyF^TPQxPKjxv+t.O=n0u>/h8`G6e5~CD?6_[z=Z{p|oK}KxT1oe79GX$O>m' );
define( 'SECURE_AUTH_KEY',  '>#52q_>I>U]{QsOD+b&5MU<|.H$&Rm2a^|ok#)!X8LlxOzrVh~`)>kYsmmsFnV0A' );
define( 'LOGGED_IN_KEY',    'xzko(]#X.QtDQ8:83iY=8.NcALDxV&</QG;_UA;oxrs%iQ`w1h{ar-]4Kr3tE~a*' );
define( 'NONCE_KEY',        'kwmj0MWpBP6DfC:4F8`Hn#l5mW[Q[ONIzm0%-s)r7+D(Wb fh1KH2mv}s#N|kSWI' );
define( 'AUTH_SALT',        '/6q /&Nh8d-wP2a[ahaKj(,Q3~ON3Tt?)mroD<R2:*L|f/R#RUxUU<i&_j~6$_iB' );
define( 'SECURE_AUTH_SALT', 'tiwz5;V{]fd);!Lg. Pz)O0PGh{MvVsC6Ly)aBB;/u4Whd?&2*%>%-!C:AZ|ll9:' );
define( 'LOGGED_IN_SALT',   'ei)M_()a1XtcpU1DmDKuL()+[T#CSXhE%Sw>LbWUJtzJj #h)TtWh2kW>A4S2RZ/' );
define( 'NONCE_SALT',       ')nebRml:1^g.e!u+_hKT{4)k]D%~Ghp)G%C(,z.wGMIc<I4CW17^ Q@ZI{H^]3VA' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
