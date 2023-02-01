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
define( 'DB_NAME', 'crispyfindb' );

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
define( 'AUTH_KEY',         '][7ywGMa_Bm<Wk?&j*Dd@Mw>LN&(xZ1wt-; >gP0]@WJ+3ziq2>UsVzrtyitxI6G' );
define( 'SECURE_AUTH_KEY',  '+Ps)G<l;aum/0&Ov{ZO QTsW9y4P4Fa16(RJ7VUWVS7q(#sMqeW+$Dsx$S:LL05?' );
define( 'LOGGED_IN_KEY',    '7f:w)fpc%06TBNQt|Fh]W&L<w=0gw0JUJhzOlho~mJ#7lN|gd1M ;}+R,DH^Yy<M' );
define( 'NONCE_KEY',        '<K;NJAkR7*=!P9=/K(uiEv~UPAA7I,}ZrrCg.[gQ6^vq8#ue+<n~l:rEVh0I79i=' );
define( 'AUTH_SALT',        '^coxVW6vyY4R9Bn~`%zb7~lc5m@qZX?{noCQ-SKvd%R~[jy<tq3Y[<D3<q]!5X*s' );
define( 'SECURE_AUTH_SALT', 'SU&*Y>cH@R[X&Q-@J;byfzOb2(d>x%LcyRXaNj-kO;Oa^ts.F]>S5=*k/0] g3l0' );
define( 'LOGGED_IN_SALT',   ']A5CU-:>7:|Ywl3f2kr>i:<uS<|fk]hhQPy[`,x)hif* ClO8-?[Evm7pj5QFZ(v' );
define( 'NONCE_SALT',       'RaQ(}_+2|4#Blr;I^IE=/Lf5gT);]}Xo^`$LHv`)R[2>e[:YDoc.fp)m6rx.:RL1' );

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
