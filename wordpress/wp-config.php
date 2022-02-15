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
define( 'AUTH_KEY',         'P8I;-n|=hR7z|e--!t`}( aVt-]G]2Ljmb#<>S5sKWm.>XV:)ZfQSq|8r2sg=Zpu' );
define( 'SECURE_AUTH_KEY',  'OQl+TjQ6*mC;bG7w4Z:S5O8}%A*t#zGtDmkTLYe:b9<o/Ta3qDYJnw+!:9u]@_UO' );
define( 'LOGGED_IN_KEY',    '[je$%:Dc|i={a9qVx2TLq!(||2S-upl[PF^Ne5A%arZjwql23CT_F&6-QkJ&)3o*' );
define( 'NONCE_KEY',        'U0vSC$ G75gnRV?8:PqD0]tlS6k&uJ(NgiJlijcvgpf0RV3MZkOEKXP&ae}<Yy$_' );
define( 'AUTH_SALT',        'm>Hg:sJ-(9W53;)9as&mQHSh5J_x@a3E4BOrJ<<kl$eSVZi]{KfEuDxtEK6J[OmW' );
define( 'SECURE_AUTH_SALT', '6 zT#J@D[76D96,;01HZ.UIL>Pd-j>9b]+))&vH^&M{EHT(`#W+SOfs}l#Ir3*Np' );
define( 'LOGGED_IN_SALT',   '!HOt^.IB{yd=(r;gE%Em`1i5R{s,IzWBzqzZ9b47;s&(%0_+=Afkx5d${f.Q)IeG' );
define( 'NONCE_SALT',       'aNA$XX9,|&@6t$BcC1.8u?noC}g&rjh}93o6nEYXE*HT[<u cH(%GqS]tLogU@{B' );

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
