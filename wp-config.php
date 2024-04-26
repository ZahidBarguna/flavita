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
define( 'DB_NAME', 'flavita' );

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
define( 'AUTH_KEY',         'H:4 kxJe6Y:Yn5$tV&p4F+}+rEtz)]Q9~13opbp|1jE3cQiWNC(Lej~fWH*#L1Z{' );
define( 'SECURE_AUTH_KEY',  'cV6f:)-Pd44Tmobmw@eS3=s6N+Wd|Gf(Xic4FRzls314z8V43v&XBit:y-tG]hd5' );
define( 'LOGGED_IN_KEY',    'bBzoEHIEtWC5n.kPI},90S*N4I^*r#S%(:]C{jC]BkO[$4]eFI%DUmS2Ne`8+^Ee' );
define( 'NONCE_KEY',        '2M~CQ2%`6gY+6AN1{wQ ::fiTyB)7SD<RqkT`G+Os9aktXAtiMu+#7[(|N]JFLw^' );
define( 'AUTH_SALT',        'e0OamHN= )dAYPW{$ZIJC7Wv3UNtLs,i9Xr(PlW4R^tKiLu:tzf<7Y]]xFBEP!IH' );
define( 'SECURE_AUTH_SALT', 'XJbicp6n;UOh8b^=O.e{{9MEl=+2mw.=x7Y&wMSF;&]Ap4DiRL|q0E7?(?;%d=|0' );
define( 'LOGGED_IN_SALT',   '=I[R-,0%e-G2]-P$Dfo74o(,nUHDmFVq&/pH{Rk[!de#~$>}yC*t5ye>01H0$eNQ' );
define( 'NONCE_SALT',       'NQC8}}gM2H(+ Wlf@|t;t>8T-d]Vp9<U&U{D0EQFnD9S1|;?J^w3vB5gpqnkls_N' );

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
