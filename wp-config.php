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
define( 'DB_NAME', 'lqd' );

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
define( 'AUTH_KEY',         '^!H1BqIT|IR*d3d-2t[cd[@!~?6W>qDQv+7;t*Y&NA^],dgGv.]Uk))h>]X?gDjV' );
define( 'SECURE_AUTH_KEY',  'PU*QT.eOJN~jXQX89+qb3q_KO~GZAhl|h)Hq@8~I/7iub0.5dELGeD;M&r6_Afp=' );
define( 'LOGGED_IN_KEY',    '!;CYY,lft=?vcN,xUT|6ykXW+@&%(UNax:KC2p}g x:q_gMks .X)5f{*6]Ny`@%' );
define( 'NONCE_KEY',        '9*~2HK$P|e?N;uoj.$?4D=JG[T)d^;RT94nT8I)_{cD&EsN,$t62d9RaV(OD:Dyi' );
define( 'AUTH_SALT',        'W^u;?S5>[#}x%8_(SS&zt&3;#9QveA#(8eQ6H#)pTM|FaU9[$[y^3.LgH12q)|WJ' );
define( 'SECURE_AUTH_SALT', 'uul[4K(`G_r+Y!o>*Un-p1W*,1/7.H>3!^S2MUt.Sm9c%A{Y[Ep6f?cl`VeF~T_H' );
define( 'LOGGED_IN_SALT',   'N0_%EwfT[@3s >r~#R?2E/2tg}sfkNdslSrU<6I0;W|IWzxA-G=|yY8Od@KL4%kW' );
define( 'NONCE_SALT',       'B#:[>2MDjd~hRi[]0U$!jm(IqEWw1>16Y)-W,{dRo29G2 pr0H_E+Jk_V{1Fa/<1' );

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
