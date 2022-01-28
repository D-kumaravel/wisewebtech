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
define( 'DB_NAME', 'kumar' );

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
define( 'AUTH_KEY',         'Xh`Kjt3){%prWlY5&>uDYUbX^XF}Vsh-i%dR&},yR!%.!b dGwVOj~!5d^B]*`e#' );
define( 'SECURE_AUTH_KEY',  'nio ;jn4ye>eu:~t7EYatiTv.0t7Of5[0gQfqVI3;mHYk/Ko?WfUmwJ=4u;1+#Bk' );
define( 'LOGGED_IN_KEY',    '6B8,0g<g_=:wbSEac}:!oav<LSA(+Qp{}f(J:#y.8_|u]vqPg2;-tioa]r`s0-G,' );
define( 'NONCE_KEY',        'Ud#cR(,O&}*yCXbqWsQ./7{Pbg3:Yd+F=|o_Xh 1.! hx4(V<-;c;q4lk1i(BS5K' );
define( 'AUTH_SALT',        'IyJ*[bbHg6J5b1z%F{xA}-% 2|oknZ;TP*%x08u3@x:~h8H~Dr%;`|Qk#2=1TZMv' );
define( 'SECURE_AUTH_SALT', 'an.@SoDP-1Zsk9O:10~uH2GjUzG0zH[P#6?!&9F Xe_.M/bds4d&;C$X]ogZ1|]3' );
define( 'LOGGED_IN_SALT',   '$gwA!1IUU&9odB`dt~/0B^._FjqNzM5PE0Cz EH{P4y-f__e=l[CpwEF-}6yGkt^' );
define( 'NONCE_SALT',       'GLhmLMebcFnb),[x|H[fIw-X&Z7#4Y5/pVYa Q#;3gK6#{HOg3kF}Lk@oY3oAH3y' );

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
