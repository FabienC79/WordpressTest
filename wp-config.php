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
define( 'AUTH_KEY',         '+WZ<o?b?.N-Bzh5z/~8x6oIg5g?v5a55Q7Mqk[-GUZWm[ddJ}o1(&K<gfl?m;)mw' );
define( 'SECURE_AUTH_KEY',  'Y%-<N_ZSH!EE(}5sY^eKh=-s;pPe(bD@1|c9~jso$i#fUq<Mca{F)%Ej~qfJ`H$o' );
define( 'LOGGED_IN_KEY',    'u5/Sebp1BRV~mHM@r*f|W#[cE1u_Al+al+IRXZUTuhsrNE+KHPIJ 1=g+H qJa%2' );
define( 'NONCE_KEY',        '(lNud5n/)[<LqjIR=QG^B#(z9t[D@<Is5D9_z{HH` Qiw{G4m@ @EMbVC~81~-ou' );
define( 'AUTH_SALT',        'b,P{&zunn8K[spm0`Prif1)ZBj@Wvq=x.2`2pGS{G$)D8eLTv3W.3/n`~v_xadph' );
define( 'SECURE_AUTH_SALT', '8K{|u8[>{@>p_=Amo@1Sbz%z( D(6;7;.0@1OA T,iRS3G/Ryl^RLf!_XBpFE+E2' );
define( 'LOGGED_IN_SALT',   'Omb?6$lLa2q!^%a`;m2q&.IKubtl^6jXL#yGyg>9Jbbev11UL;vcK(=WL A`rNb/' );
define( 'NONCE_SALT',       '5?6Q&?wh7[XISvVV.b7 1mf/?@dwRT>T0188x26l*Y}=F8A<oSkSA>R6u3]~pfIz' );

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
