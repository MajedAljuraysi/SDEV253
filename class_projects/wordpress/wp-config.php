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
define( 'DB_NAME', 'sdev253' );

/** MySQL database username */
define( 'DB_USER', 'sdev253user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'Ken<z[m@j%WQ,nB&5.w>r&]++9uY3jT$P>^/`>ch15Ue%|w64J=5N?xBGSzg-U&4' );
define( 'SECURE_AUTH_KEY',  '8eB3(,Q2IG*0h_Pv,KAL(LOpA;R4GCA[D<$O($|G$?Estpt=N}aNd3s8Iz6%G]V$' );
define( 'LOGGED_IN_KEY',    ',L|rfDf#fE),T% FNj/.ZtLlsK5VO5%^mSA?6U`I!2nQ9d{zzRwAa_d/$%K.R@I(' );
define( 'NONCE_KEY',        'H{:Ov. BM!?7-7RfQt=X6Je 4B7*a3Mb@5_P%vjJym2dG>|Zq;-ac~SFVmm3(wy*' );
define( 'AUTH_SALT',        ',D}>e0A[-V%>L{1}xbFh8M{%RG- +vu<O7]R)i[e<+SbZ35L_MyTDnwLS0kU8@,R' );
define( 'SECURE_AUTH_SALT', '[+TGk/8;2L+U4%|j9R*I~3z_E(`!#?lH3.(FYC<N0zwvn&OKMycy$13PARV&:?9@' );
define( 'LOGGED_IN_SALT',   'EZ4[Q(GStU%T*$A<GCff|Z$qTvlM,Sqw|^N|EowP.m]-)er*}v6N2iS>vS,hVNI1' );
define( 'NONCE_SALT',       '@S>L!Co~E&|H=e1W;ETGsC[f:ILR2S0.{za<`9z>Rz%E~5qf][[kVZj&q$]SyA(r' );

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
