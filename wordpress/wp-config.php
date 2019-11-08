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
define( 'DB_NAME', 'wordpressnew' );

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
define( 'AUTH_KEY',         'r5P+-DtPrcT69[w6#D+~F6q*O/C@5K4AK#>tj8ULL5C[v=x[)MNzUK1B@P*`ytDP' );
define( 'SECURE_AUTH_KEY',  ' lcHt*RTu9n]E)==yYpykgv*XRzeoq/=dh:d*G-`=M;yq*oSlQacJQ3[uj*{vU[^' );
define( 'LOGGED_IN_KEY',    'qIQl.a7|Z*7@*e8gN!eJ>~.9pOJ}F._N63%o6$hV7d;5,C1+h/p0/GHkiRk~flqX' );
define( 'NONCE_KEY',        'nj^bJ%XAXD>D;(Sw.h^e1q)N_);_*4@m-wwJdAa5i5`m/r=$Fk^M2sN!p~#~?f~x' );
define( 'AUTH_SALT',        'E%6GnC&8~a-3-dVTULa&w,@%5MWO#)Wmw6R?<Uv;o(>T2Uo|+_ZH~wg*fj#6J9G`' );
define( 'SECURE_AUTH_SALT', 'Ccm,!tm OlfD!E~!3llp%>a]T|Tw/THd-SQ.RfYQ~c/b94pd#J~mSUjbe3s/:,FC' );
define( 'LOGGED_IN_SALT',   ']i$Pq Kz3gQeA3brr{dU]0{FOtw{5R*{]iTYt9ho#MKm}BLE`k|xWZ#C^i&%P`Pp' );
define( 'NONCE_SALT',       '77O{4*lxLk#^3:{IASRdG@B|8@7(>h8gvU.gkjye/Qdu&fF1ppXxO7G*G.t#2r4y' );

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
