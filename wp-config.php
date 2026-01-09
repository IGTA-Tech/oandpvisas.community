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
// define( 'DB_NAME', 'u302207191_HqslY' );
define( 'DB_NAME', 'wordpress_oandpvisas' );

/** Database username */
// define( 'DB_USER', 'u302207191_6N8Io' );
define( 'DB_USER', 'root' );

/** Database password */
// define( 'DB_PASSWORD', 'k4pujNVZtc' );
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'w&V-IYyy9==YF|:NiUd$M+3yuJReagO%sLQej~-QF0*6h_@U|-Q?mx?rALfC-@p;' );
define( 'SECURE_AUTH_KEY',   'ImuLWg<TtM3UIP;aw(G_/b_~k.+:FqHyuz}]P[u09xa1Pd:>:C8{C>Y=iJCR*f>[' );
define( 'LOGGED_IN_KEY',     'pHw+l`jARE%[SWqG dPVx=6B1(}Em;6xe]FNm2,TvEZT`4BZ3I^lYx|u*%IE%nwX' );
define( 'NONCE_KEY',         'EVnw)=[>f~g[!%2HI=nFB;)6(H$ jrs+Q-je:XqyN3fmJ+a?<`ZY5&_$]A2?[92*' );
define( 'AUTH_SALT',         '#F%{vZtbc<Dm.eXm^U-82LUfcyMvlyK84B8S3!:Hd<;,BNG20-Mmp&}x+a{l;sK-' );
define( 'SECURE_AUTH_SALT',  'e1w5e5r(#abhPiA1I%1ia1cvUDUZ4fY #$@Rp3{-r{:Z{r5/+)YL,@IY)x)NlN-Y' );
define( 'LOGGED_IN_SALT',    '~*~5r.oshQ~-?rt.[z<tiEg|`(xahcIC#8|5QoXj(HbhpZqEhB;zYp>4on=oCeT+' );
define( 'NONCE_SALT',        'TuJ}!QCtIh%[=c%P%mF$WQ5K:@h$g8yCfdb)oj,dPc|de{~=xyqk*M(1DY`X0Jxi' );
define( 'WP_CACHE_KEY_SALT', 'sa?z1/w45<t[`q:wO2pN*IBi,vp/RR?L]E1IL<d7]l%<hsYeO~L:%O*X?Q&0hzt6' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '9301099a4b7e26a557733fe55b769c6c' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
