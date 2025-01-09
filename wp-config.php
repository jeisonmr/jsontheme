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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '(oHTTvuRYhts(US8jD?>wfQU1)*H|2C,65qxJc_g=*pOoD`:.EG:-<Jn>?x33(*r' );
define( 'SECURE_AUTH_KEY',   'ja ePw4d.T~Neu|qA[I~FcIDmDtb N=bJqdwr#),/yfFHaz6iW?4`l*a|RlVZaV3' );
define( 'LOGGED_IN_KEY',     '<k0^WkupK8flJ+V=_*C|QIeJhQ&N{*9?Q#EN^J}ZgP=Ea3{u{ :2@8:+fTijix;c' );
define( 'NONCE_KEY',         '9w6+5]zi30,?Qn]hn]z%8X(nq30`h]E#{dVmKUK=L<!T3nT{]lU.P@:f8)Q]XbQ{' );
define( 'AUTH_SALT',         'dn~RnXUZLF9K6AMt4.?rg !jX.<Zs`UEil~F_,,)FwvNx(Vd2&XUD97]]R6zJbe$' );
define( 'SECURE_AUTH_SALT',  '05 6V<)Tn;C-.J*H6AzOYE+$0|b4}4}L@l1<U?{@1aRBdtT^J%H/c47=5rKplP@)' );
define( 'LOGGED_IN_SALT',    'BY:YAg:%!v9XIu8-uV!xr[mID=$?CELrKviJ{GPq;tL.YedeRhAT|cVHAH,JrRWu' );
define( 'NONCE_SALT',        'd%bnOugGv)v,Qz7,4MoBO2+bh<t!B9bgJ574>@,[GFzf<$ajzwaP5&VzvoklxR(:' );
define( 'WP_CACHE_KEY_SALT', 'B=R*~z3ffS{ 46iV{3<JZ]KIID5trqvA$(N.)t~R=w(+:$EER;.<Ei}o&3Ef:Q4T' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
