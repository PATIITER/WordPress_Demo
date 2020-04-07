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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpess' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0s#HV3d3=x0~B{[{?dgw:z~#Q,9CD_-?rvUAbeL^}2Mg,^n%kr+GAHxC Kkx.J,z' );
define( 'SECURE_AUTH_KEY',  'bFWgoijsE|,^7U7v]}-$ 23*x;hEs{4~0*ou?*qaj;[G]lwbQ$&GHWWE:q]MYdDf' );
define( 'LOGGED_IN_KEY',    '  Vpud]JBZ;?aQ:<yw>r<tBGW(]X6^m7tC/8T#A^`Pe=1?bL]`l: J+LMTE`_5dX' );
define( 'NONCE_KEY',        'Sn*jT)+o5ojCyj!Yex5GBs`Ayd64P4$37qY4=Eeq23?7|y+R>M8<VxLAil^zC/ep' );
define( 'AUTH_SALT',        'bRc@K CcUy?Cl=a:#s7ojs%sOEXXGf._DDdHq*^T[qqkRj|.o-BkgJgU)^NlvvG-' );
define( 'SECURE_AUTH_SALT', 'aO&,*zU;_*p@6!k*WTK)}p|+eJ@2y5^LpSa1`HB{:>s.$*nMt3dh2rUN%mAOH{R!' );
define( 'LOGGED_IN_SALT',   'sNDr{@:EUO=q|;g)NainxJ-/-@yIwkD}# @6wa-KC9f9b4JK9RDWsN!M3Ks{-=N4' );
define( 'NONCE_SALT',       'm:3w+vLP`fyCd+aPTCY2*HpuwVqY3C|?&=s/!mN_;gQY)k2c%+o8}dqM<d!^SDQ9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
