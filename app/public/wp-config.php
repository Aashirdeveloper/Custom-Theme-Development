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
define( 'AUTH_KEY',          'a^.e_(p<}D,##WdY#zdE}.-+{%pDXmF5%V[L#;vSJb+sP(n=,U^_5AeD,Tyk#$-N' );
define( 'SECURE_AUTH_KEY',   '/`:VXE/!I8{pjwofR_TvSV7|:cf{4R8CH_.3,)x~Hxgq>Wk-S~e|bf-FNYw4CgFD' );
define( 'LOGGED_IN_KEY',     'mLi]lg(66b%35%8@3v^Ud0V=YB5-owJ)xsOc:Etond;)U+ASO?^jpv^44H .=sOF' );
define( 'NONCE_KEY',         '^6AS[&GGRP2KG3z|.6q; z[nxV>d[DsLH{c2PyUN)3dCh)4Ku$VaL=Jc4U48WOjW' );
define( 'AUTH_SALT',         '!EsS+j%rWOMoc{z~tb+5{X&3<kJFe8yAt?f:$P,$?trX7ze0K&63PD^2<7tATzXu' );
define( 'SECURE_AUTH_SALT',  'o{7g21MmO?q{6T<?K^}.)0e7K}?(1-^3uC)OEI}VJo1X``;E0rjR=}Cgh4]6bk6#' );
define( 'LOGGED_IN_SALT',    '=_^~}F?<XXSj~_ky16;LGvGraxB@9%K-4C5~J,^fRp5`D5xuT!fN6T+:Aeh@E8Mf' );
define( 'NONCE_SALT',        'fI;]SDR^n5xFAotK,g~}u{7wRRNfqtA4J<5Tiw&))oseW-eg(paV o6_eiuEx=-v' );
define( 'WP_CACHE_KEY_SALT', '4.Mp.5,4?B6fWO}WYXGseJgA.E0B%ZqXbdM:PGVm /~;/$TYzoE6A>[BR}AkMU6I' );


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
