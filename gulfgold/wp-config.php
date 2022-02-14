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
define( 'DB_NAME', 'gulfgoldrefinery' );

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
define( 'AUTH_KEY',         '7f5cBuYZrWueY0FKGknq[hrzc]`G4!J#qt@eS:d_%4IN`._on.KC]NiWq~],nmT_' );
define( 'SECURE_AUTH_KEY',  '@WEA)94|LNCjJe<;nAx/+[_c]:<J({dS&rvvH1U%a]/n <;{ZyNc3=n,ca(,H}pv' );
define( 'LOGGED_IN_KEY',    'JnC*Zl* lj&1jfh}x /*wn6+4%ZrQW,1RH|m2i}p|xQ@L;y?us1H I$gL^eQ~f{#' );
define( 'NONCE_KEY',        '_6!fmC+ni <A)8Cf[/El>i}DnI2v}vbnc`_ Zyl7urVsl8gsQ`N}ibj5?F;daR?`' );
define( 'AUTH_SALT',        'thVoRKnM8VPboNk,Iv_H/>m[zdxfxwu=17ZK!<+c%L,L2M-%cprmTdK;3;J[1z9K' );
define( 'SECURE_AUTH_SALT', 'X,#,vev/f9vZY^LXlA6-M8;5:i;Qg=IVglq^WkiCY%7;B;3OzKc.I=l:rm>z7lv?' );
define( 'LOGGED_IN_SALT',   ':*nv3^La$7*&AC]ZL`Q (%aK/^Mw}slgU9i{whepq,RK?.PFs$2GGBpC]#Or(>9(' );
define( 'NONCE_SALT',       'Z5=tv}8ski^rBf{>YR#m(aF`@:hBqMEBZORb_;3c$5}8pKs-WIQ4j5iqJ?^I^H?Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ggr_';

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
