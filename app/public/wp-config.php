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
define( 'AUTH_KEY',          'Y+dHcy*xe:.9)YbzrHCT{V<hj2WOVCQA}N@Y}Ac1e{.(>K.@98OhW,YdU7xE_]N`' );
define( 'SECURE_AUTH_KEY',   'W^tiM5%OAHoYvx`hPD56s&C${DV].[G5RrXlI@gbr@WAAdaY-)wWWZ4swB?hg]OR' );
define( 'LOGGED_IN_KEY',     '9z(B8X$iM6aiVu:4uxG~ALZ}5,nxX@Ae]<gK=6QkV6kkCw2F76::$DOgAU;*lIFN' );
define( 'NONCE_KEY',         '|Z+A6Od,Hn@w-D(CBBCrmcATmi:~u6p]1Yaj?{9ki!A{cr,`VH~3O[je6IDfvJ.#' );
define( 'AUTH_SALT',         '`oC-g=8(oA*8rIFkc.{+*fEx):m@2TVn#E:^2N^`FG``%_{Ex3YDFy^3Z?w-yPj0' );
define( 'SECURE_AUTH_SALT',  '._&v-h}jNxmq{onkH:j,kPz$<f2DVB%mu:;DOIZ8+[9_C2F+g=0hSA]pexaggbh>' );
define( 'LOGGED_IN_SALT',    'Edz{Sf4Utul:-;G{[rmRV8/iLTYuQt</?5,f.tk]ao&*lIg=|=vzCPE`QCo]ELW8' );
define( 'NONCE_SALT',        '?,>OlqG(6,(R3E|bKb=N)/5eg#(2l3MOU@}]I)CT9pt> :s8Ut9Xvn.KvgGHxp,h' );
define( 'WP_CACHE_KEY_SALT', 'Z1S-dDOd@PK&}olie}-pee[%t:Ig*0)agt|z45f-8YyG~Vl+SmlG&n|/yB4~%p|i' );


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
