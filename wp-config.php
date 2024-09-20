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
define( 'DB_NAME', 'wp_atita' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '.6emEWQ_Gr!W]JvP' );

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
define( 'AUTH_KEY',         ' o$~?Y@@i3g>eND2IGfITQb|F_fE5%|H(`zs,cC,=kQo+n9. u6-svxI5;rg7L9Q' );
define( 'SECURE_AUTH_KEY',  'S%Uf>SgAiWiphj4krl(V[Oj!K=Z$2IGu]0UyaY,6Y9#~-[jN+eH31axp*u~ta[%[' );
define( 'LOGGED_IN_KEY',    'mg*0`A32j?~{(l0Ak%KRsM9Y|tRQEpNWX-NfvC.Pfb`lvvn~LO$L6u8B$a:wYeH~' );
define( 'NONCE_KEY',        'CS8FDR6Gevr_uA4_NOdj BgAb2-nXVKFka|z:2A6Og9$^tHGmAe1=iLwB7lR%Ck~' );
define( 'AUTH_SALT',        '.*tPY1ST<V!3AfaZ+c@[oEk[c_~4NfOo.5yQ-.H1s{>YN/[^[/9 5-i&Zcx=a6eT' );
define( 'SECURE_AUTH_SALT', 'xXGGzUqa5~vk#WOV27ZP_gv5ZRcLQX IuFp}w><Xv,P/V;W|I=h}D^g{(m]9Yrg<' );
define( 'LOGGED_IN_SALT',   'ml@.8(H0[NrL{uM)%+5L9y$sRI5nbO08b%t>-f+ZAVAkGJf=X;Fi`#S/*A*Infu6' );
define( 'NONCE_SALT',       '_rL6T6r&OS{WMkgK-}lbfAX 3FHK#!T20G`?U_*?m}mwq~^]!=OFJjeQ^$LRyLe1' );

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
