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
define( 'DB_NAME', 'familydomainencyclopedia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '{Woa^Xcex]T}6=b <$-*`Lz~%aTBK9rPA$My#wX</hoxlAk1{N_.V:6iWG2_o(Q:' );
define( 'SECURE_AUTH_KEY',  'EK)jP&(TeoO)K|Cm.)BCA=WxrEvc@Slw_fo%fhoAK4LsNHy5C=*J7S;]AKB~NMui' );
define( 'LOGGED_IN_KEY',    '{0 [*+5G6{~U+&`7!!80H$Y[<xJ(qsF7;x,pS*|FoB~N,zh*c=&9Q57F`ZGg|EeH' );
define( 'NONCE_KEY',        'rA^}7w xi)#s29OVbe9UEubx@D4W6^fd?6KDmK5lBTf/S_0#PQuWPLo^vdW^wZgh' );
define( 'AUTH_SALT',        ':I%ZE=~@01*Lp;_MHa~?e.,^X#of~&Pd6X^JY`:-$T~yOvr=Gl%u:c- *(06An,K' );
define( 'SECURE_AUTH_SALT', 'M7Oa~ba?k8.br5SLu!OT*k-^>.B?Qe]6$=6QL?:#[FMi4~}3yo5YF|A@5~dT9Gyn' );
define( 'LOGGED_IN_SALT',   ')t6a]!P &+% !h<fU )F-)d7O=ay bT}Qv}-ID-AAaGl=4K)TO>O?hyj[A*(k{%6' );
define( 'NONCE_SALT',       'o$.GVK[5fsHL&,:4vr{;-X9V0$d:U_x#{aTw)3A.YXAlR+<H$>i#kkM?O+%9LRG:' );

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
