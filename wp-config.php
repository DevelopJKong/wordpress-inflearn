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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'baku BpZGS!o%8NIL!P~}8m_.8RZ}Jui*<`0%:{o#Z]B{SFZr${~Oh;<(f0S22_*' );
define( 'SECURE_AUTH_KEY',  'GLD[?F>+tcN,Nd6/$}$Eha-n|aG(V)V`+MI=LmtU%iRv*]f@N}MvC0Z*?k,+iu8v' );
define( 'LOGGED_IN_KEY',    ' .3E09b>:ew`j;hElOo562$v%[yFh,nwJN YfD7cj;WFb{Yj5EI&Bb=Ar0Eo:=DB' );
define( 'NONCE_KEY',        'AK&y&S6,v;<KEliP3GnY,jS?P3>Np s&CB%fc5742)[?!k~$MiPu!nK$Q@IO+/kP' );
define( 'AUTH_SALT',        '|_jmJ)xdi!A-gBXboC#:];xgC^*pOv)N/2]{hFE+hI1pOBS:)$DaUtQYd3$T^cO8' );
define( 'SECURE_AUTH_SALT', 'X)E3C=Zw{~JD& _j^bTB&Py%~b1Xj|F^CrbNm>9.8`Jsq{wE@Do`tjAUV|e,Mup|' );
define( 'LOGGED_IN_SALT',   ']$VS_F-]OxEGnyieyv+De.=h0Q]yOJK5cxY!Oi?VK[qx-:]?2}@VMO^dt:Ga~pa3' );
define( 'NONCE_SALT',       'wQA0m~INdDxW.nP}az|Lx[/zC4k[||DXF>x(bZso5>Eg7m(bd3 FB(OQ)tnDO7i$' );

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
