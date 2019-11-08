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
define( 'DB_NAME', 'adminbbdd' );

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
define( 'AUTH_KEY',         'IRtfU39[rom+c5AK-|X-#X:q7lqGE?v2gYZqxIZ$U>%{uQei)Xep|<7zK>4$x.6R' );
define( 'SECURE_AUTH_KEY',  '9T3~z8-]0Q*<LHJp9j|Cy lx6NGg%I:)z:fnd18/z4hN*Q <sBIFWt}e?CAY#a|s' );
define( 'LOGGED_IN_KEY',    '0wp,G6U;!My9v*.}U$Q;84~;vz,=~iXW2]asS],`CIbe0/]q2CpYnE tQdF<g6rm' );
define( 'NONCE_KEY',        'fCmTfc1mI*%noTEuqI0WB<<:gDI*$j&q=W~qQq3Vl=vBiL^xuIX mP]t:7pV$9/i' );
define( 'AUTH_SALT',        'K#gMAae)S2o[wA[1rIR5Ubq{7 ?*-t!PqYVb_=j] *SfJyH]A,|(cD4@e^>8{/=h' );
define( 'SECURE_AUTH_SALT', 'K0b9U~lNd_ck6|Jij))?-T~#,_/ M]/fm<iL+GQzw##4TEL4v*O_>3?jK>)VM9^5' );
define( 'LOGGED_IN_SALT',   'J*xUWw%+=mnDl:MXga!&<NE>J:+gar].H#mp63I3hy*iZ;!oZ$l^6u$T7Nqyl|H#' );
define( 'NONCE_SALT',       'Z, WaCJ/8A5/+O97Oy!TwjW}Dz1b0AJVJ&97n#1ih*(&,ur{{H5]s4%E_+K6=S_~' );

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
