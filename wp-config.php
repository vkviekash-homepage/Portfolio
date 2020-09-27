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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         '{S*%9~IkE@iq#kd1!RWi}Dg]}.!$@S+$9*8qLX+_,jJbd%~bHgA5A{x++Y800l#(' );
define( 'SECURE_AUTH_KEY',  ' +E)gW0{cHd/}j,[E&Znzm6I=YezMO[=r!0M9}N+;Q.)IiLt6{-2# Lut.$Bt4;i' );
define( 'LOGGED_IN_KEY',    'YF47/?LVnsUN&&{#>c/rOlk)Y|(xPH&;.LJv7FrsUa~EU2[$lDd!U7Q1#3fQp/AJ' );
define( 'NONCE_KEY',        '70VJKN/XbzZ%7EdHBb%|zgd-`n^FyFF.9`.s@~9A9-P2xf@4&CMQmJU~v NtS:dz' );
define( 'AUTH_SALT',        'dnlhS8@qG/.VQzJBFS;]<&>13C{*,e{F&0z#w<{5b@FA[wyu-i~+N$T85/0=X4C=' );
define( 'SECURE_AUTH_SALT', 'WgzZV IgA5Ff06Gk.H:~yz,b|Nt}lB!BQF=p3CQgY,.(L;{P|76qn6~vv&?;D4mH' );
define( 'LOGGED_IN_SALT',   '2$Au*axHQYWhf[.5B2t[a[(Y -Mp*F>crwEpwFza};N:ZBA-kb$A^93(g47aN:?Y' );
define( 'NONCE_SALT',       '$W4CL^`{!Q]|!Wb*UT#fic$|N2< 3$37Uz6D@8xz37QTF%9d$HdcFL;Z-jS${MgN' );

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
