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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gojotech' );

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
define( 'AUTH_KEY',         'VKt96EX4~!v9Nm/23Hfd-nL/I2qT~BL.X3%R<y$l6k1*vZjvFmA;X*@,<;?Kk?Ux' );
define( 'SECURE_AUTH_KEY',  '6@9FVhYn7Im}`!;?[.RmxP^U;:U5R/>%FGK!4Hf*`}JBwO6Ij/WV.25gb}bQEZ{3' );
define( 'LOGGED_IN_KEY',    '2to(|)W(:?,`>1j|%Ty8,Bn^`wa?kIF.kq9@Vq,Hd,{Nb!|B*9Tk=urP)ZtmM(/?' );
define( 'NONCE_KEY',        'K{Rmg??_db;|tbJV!b!=KVP2}P#ds5goEFs/Zfx7@PwiQU{W0SZON5U5)+{):[a6' );
define( 'AUTH_SALT',        'ek/kHUAOGR:GY5Qnm#&IS-oOKx$C#|bajh+:>sQQ0Ua_z_a!8LzR&Ux.RDXgLJTD' );
define( 'SECURE_AUTH_SALT', '~[~B@4F1<d9!{2s9H^Oqs8UR@x[U_N1LL0Bq:bzE]Ww.My/JA6_E?4R|=#iB&/nS' );
define( 'LOGGED_IN_SALT',   '.9-b,xVDb$r.4rrF}x+}^FdQHp&C/>#0Iad9m-QL@4/H`/A^hAY-Nw-@#D8@YN//' );
define( 'NONCE_SALT',       'eyC>u&KPAfvd>El$Yj.{gh)~2ST#/eDl!s8hN+x{?+Q;B7RM349E`tsc<V2+]0j>' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
