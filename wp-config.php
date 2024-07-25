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
define( 'AUTH_KEY',         'zVLWYSNtsLjrr[x8,lXvrLz7C=$7PO]3tl}jx6oi-?z;zRz/~JA0]<#=(:x/TW}s' );
define( 'SECURE_AUTH_KEY',  '{W]97ACn[VL/@l_.HHv&894Q&)< ~EE(AY+6r2~+0Y6068O*/d=y~HBFCI ^fE!#' );
define( 'LOGGED_IN_KEY',    'F&rqsygDTJiM&zXfh`J_pf^V/wI$8X-ulj!U:ofu?n6=xF+A,h.gXP/}LNV+;Ffo' );
define( 'NONCE_KEY',        'u;,x6Z2>S9M0|J#L>!{KSts^L`$UDc/Fd:hTio$L0qqa>61B=zZqDaKqUDDEcVwa' );
define( 'AUTH_SALT',        'AqLntC5O3M_E5`6f!fwOtQC~xe3rL/+&6V-A6jta;K4_$G{r~<zvf67u?< @po&1' );
define( 'SECURE_AUTH_SALT', '%[R&.#4OffM@VS4.ViAw>Xg}OzJWsmsm.LQ3|v+)u`!)7riG8.ZAR-1]FY8ru$`^' );
define( 'LOGGED_IN_SALT',   '~8c.aY4kE>;tTkU8|? C vsGr+6Td-2y.Nd;OEsizL.6*EDIIeA7HAz`:&/QjX +' );
define( 'NONCE_SALT',       'e<K=<N[JZ:m|^r[OQp.os@XODZiPdv]$P(enw@zTqgdPk0=ka&dRunn?ziA*KFpR' );

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
