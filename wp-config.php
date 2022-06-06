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
define( 'DB_NAME', 'crowdfund' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         '1[&W5jI[0+XU{o`]i,)0q}RIKHc3Hx6+lz$z[#MXeNBU&.F(x<RV~Cjim4l0W@X9' );
define( 'SECURE_AUTH_KEY',  'DDoKp^vcO8N2O:Eajz2!6Zt0quqUs$y_ =gE_xI gaz.z*]Uj*N(l;ej7crPy_,6' );
define( 'LOGGED_IN_KEY',    'U)(M[%:>t5$o=Pij4fIDOBee7*R@^U$KDA<@ 6yM$K_.FD`EL:ke!~5DJuNwjie:' );
define( 'NONCE_KEY',        '?W#LUt&CurRWdh^!D*9}j654192=A_*1dtJ<=_,&rKcA:LCc5c8IaEr1Q+z|tw+:' );
define( 'AUTH_SALT',        'e2t$`/ sqW+gOLAD$#1eP#UnPPHR50oWf%O%+xV,xuO?3VrRy&K-lq0`* Ahi(YP' );
define( 'SECURE_AUTH_SALT', 'q,mC7Dy{<!hdsgT](oUG! ?:l}8 %w7f2K} sk!;wC9h,F`t(,A`-TtHB$ZMC_Ay' );
define( 'LOGGED_IN_SALT',   'A?I7Ix*8Q>3chFwru-fHt)3}~st;Mz1 EMT~&rS|n?WykPGax<^*p$R%hg=}lq;w' );
define( 'NONCE_SALT',       '9VI8ZdEVbiF#gJQ4um4ZcuboY2m(odvgI1rkD<tOhD5AzO(IKt4Vf~Ry-iOHF(tY' );

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
