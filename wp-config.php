<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'O-V~9]$w|%[p_&-zg%1!7lv%j*G$+7h6S`=#,z$lVo(qbL3meJdYCy?g&TF)?~N;' );
define( 'SECURE_AUTH_KEY',  '#LbBc*]^s]Wbbg<(`USDA#=Q5Z3 caaS|*?<vC<nL}&O4}+tl-B0x`J+6_dYIzrv' );
define( 'LOGGED_IN_KEY',    'Z+a+FNcvF@=k1oF>Y6i1(@IX(J=pDiwmE+sJhsa~Wjg]GGYq+qao$R;ITKGL&^`r' );
define( 'NONCE_KEY',        'Yltc/5DSc5f<P!TX0sG)`.z19HlOY9o,ptQB5l(=E],EuPM^wM vdf6$YjXrr7C9' );
define( 'AUTH_SALT',        'KbC@e/Uv`/UaU2*10UzbOG~!B*Uz)[^=g*nW$LUW.GXqCABo`1Xr{GW,:^?knk{F' );
define( 'SECURE_AUTH_SALT', 'iJ.=}#$x!Ik[M[vd]#B/13NP7b5sh3eaQii:vL)[wj]{|>Z#B akbsWQV>[*|<At' );
define( 'LOGGED_IN_SALT',   'T*j^9P_[a~YE0!g~92n$fpL{MuR }&?M:BfjV `3;;=rQ#U5wBD4a*iF[y/6T%=R' );
define( 'NONCE_SALT',       'T&#F&Kh[4a:UDSRc=_/vX>yFqZ#FL< ,b*Wul3-v}jnZj=Ag-FsX#gS=C$.gcl8j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_MEMORY_LIMIT', '1G');
define('WP_MAX_MEMORY_LIMIT', '1G'); // For admin tasks


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
