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
define( 'DB_NAME', 'wp_blog' );

/** Database username */
define( 'DB_USER', 'wp_bloguser' );

/** Database password */
define( 'DB_PASSWORD', 'your_strong_password' );

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
define( 'AUTH_KEY',         '/`FdD-[$pKA3eWv| fH_1J+t;+DL<FQBn;*-zdG@i>f.Uzs0B:td#[DCj&QsfWcj' );
define( 'SECURE_AUTH_KEY',  'tLBxEEjM:1i.g @#WM4MJI<Q f4=!doUgl;`b{K!_$j[oK.!;t76~t$)TP=`6G|X' );
define( 'LOGGED_IN_KEY',    'gdxsRa.VwPe<2!M./!%2sfDrgd;*RrLA>>=7PD E47N{o!/T/V8[cx{^Y;|-@R1S' );
define( 'NONCE_KEY',        '^oU]op//SmW6a(:mj3k$gX!`RPG_~$9g7v[G:iB*uAhOgBzY}$nIZ.dqR*/1Z%wM' );
define( 'AUTH_SALT',        'TU/=7v{D_oU%4}!K`u_SaNf|R%]NI(+}Y~C^f6XZpo+^X1FSH|n:EZ,_[&asR_8V' );
define( 'SECURE_AUTH_SALT', 'nW3QzhPB[dIzh^|a_Mgc@L`Clj!j$QLC0]Zvn-eE*g|^@<@Kc,?MWSQ_jiC2O@K:' );
define( 'LOGGED_IN_SALT',   '^5:V_~n?2ImBI_oSjRWN2S&r[,u?I6,QFR3-o6*ExP|m1>1 rhlYWU=5su4X,*2)' );
define( 'NONCE_SALT',       'LmTA=+C.}kc( Z}{<mZL2-jbTMkpjB@.t2(,V!^X+ /T2LzFE1*g#*J*-~_].}m]' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
