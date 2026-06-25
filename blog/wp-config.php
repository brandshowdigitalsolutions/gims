<?php
define( 'WP_CACHE', true );

 // By Speed Optimizer by SiteGround

 // Added by SpeedyCache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'gnwse1tj_wp641' );

/** MySQL database username */
define( 'DB_USER', 'gnwse1tj_wp641' );

/** MySQL database password */
define( 'DB_PASSWORD', '1p@-3S49l6' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'vukanaaaieqpicks0jks5sqdgnyoiaiudvnfin0qsgaghvb3utpqxbdgkhwyjnaf' );
define( 'SECURE_AUTH_KEY',  'qcmcphishqefjqgcn4iympieaz6mxsp8lmbriitrm5kfpbgbsqgsrfjhevnznyan' );
define( 'LOGGED_IN_KEY',    'cd4wmwdvsv3qryg192aocwel72uiyy7fbwvqglvhzjokx4tgszffyc1zcp6klx4l' );
define( 'NONCE_KEY',        'nq586wnkpajjuq0nrjxvlnxtky07qoevtkrdakn7hsbuqi8whrdauv3bcedmqqab' );
define( 'AUTH_SALT',        'bxvjsyapyy6oezdwu48kamwqvxotsq9zildmmtbomowvrs7o6otjft9eleqr3kln' );
define( 'SECURE_AUTH_SALT', 'zwrnnrswjugkvm4zee7pn7stfbuytepoyegapmpoflpwbhxr6qpyj1auvp5ytvfu' );
define( 'LOGGED_IN_SALT',   'j3mp5mpbov1kclgxofwrje1t2nudfvvth20dk8fzhmeu76cf7ccgh0ynwlzxkpca' );
define( 'NONCE_SALT',       'lgrcqfwsaryfbulkba8irk9ffspcumlzp4ifvfykv9ckbkfchrglnorunbdxsm6y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpi6_';

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
