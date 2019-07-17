<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pluginever' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '.i[4&)wX/FIcVYQ`]E#vGxmp@,apl;G& O@}5Jdi/I|Hhzd?AMMGbrS|RDpU/+,b' );
define( 'SECURE_AUTH_KEY',   '*j=SbP+_Il7]|(7A}pz.y 1LY/aG2}53q7DoiKK=;e15=7RpN1iHW^6]oVR6v#oM' );
define( 'LOGGED_IN_KEY',     '?|dmLOX}&b!s]`ommA ~--MWf7R6FC)W?,+JOY#KDW,F;9e jodc&Y@mPFHBIk&t' );
define( 'NONCE_KEY',         '?!z=&fgkXz*XgB[5W#T}vR$jnX6sZow/8kxE{x*FI=6u;!X>,X6jIAG`=Y9*Ike{' );
define( 'AUTH_SALT',         'EH6w[|(@TkXRG;K}>ox/eM#@P4E|>V:(:0UL|.u5702P!R+w#eSAT6`+g$J}Jou(' );
define( 'SECURE_AUTH_SALT',  '*-7U0ghqlL*`ND&|EXxqaVEUdqXo8`#~eP~q^s`k3-=Q rP3lC@?)/JH}V/?D-H6' );
define( 'LOGGED_IN_SALT',    'C hJ[q{-aum}&Z!$&<KOt,e6Jv,94s`%/$XlDt}k1 4O15Mg+OVi:Q3kq/p&u3Rz' );
define( 'NONCE_SALT',        'UDTG[}FNK@.2.2_FsT1[BZ0UAWG2Zs9L_*$X~y@#]Gqqe.pAYCvp7j/M=@IkotR-' );
define( 'WP_CACHE_KEY_SALT', '=En,{4+dn_`@WrNt9FzkX9`U?T1,oRtLH)pln*A6Kz@X?tGkd` Ez~*LK:GO%>.v' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );
define( 'JETPACK_DEV_DEBUG', true );
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(pluginever.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
