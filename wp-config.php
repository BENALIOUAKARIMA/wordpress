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
define( 'AUTH_KEY',         'OYJ]~/_=6uiHj,FYw9ywWUlgNnF83IX_F;kO:?D1;w:i8LOwb%YY&.Vvnn _r_`]' );
define( 'SECURE_AUTH_KEY',  'w&7u:`zOamqbs|~&|*jabN,qj(Vn^jCG!cLSS`AoQ1K@fz ukm2Znmwy)r+r!JvV' );
define( 'LOGGED_IN_KEY',    '@VTrv1NV]!kByD/PWBklat0Q7hzdGCd`Mb*VMxe:VBnk:1]/Ig)N+t*)+4H>nuU>' );
define( 'NONCE_KEY',        '}5hm2Y5YLZhi+BK9(KRUJ:{v=IGO`JLU/5QTVDvly[`z4aSM.42<]O67?`rITZs`' );
define( 'AUTH_SALT',        '+BfN@3S; vKlSa3VcJ@p`-B[R6hbI8f@_x~`#SdI ]F;h8Td#:b$:|F/-#L+~gxT' );
define( 'SECURE_AUTH_SALT', 'WT!#GnE7uZKEu K8r;!06`QAO|@v,HHKN+KjfKFED2I]E-SFw_.{gT5]qCRM:E$~' );
define( 'LOGGED_IN_SALT',   ';e1Va{!*58tSx[(7wT,FfjB5iR/%a9KhLqI9[&4>XZTX^zDJaT8z1L`N`zm,Do^B' );
define( 'NONCE_SALT',       'R?wc9E4AT5cl >WFXLd[N/(,-jrvl]O)ReWW&B?u<]msl7Jc4,Yio9{acl.cM$W#' );

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
