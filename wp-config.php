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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saasup' );

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
define( 'AUTH_KEY',         '2R.zns&}#S/#5Eo[a!GD0cvm?`wm5RiECS7DB*H}y#]XH)i^);(@Il5NXTY*,Z8]' );
define( 'SECURE_AUTH_KEY',  'U,H#CUM]|!VM^@_pQfB7[@kJ6;S+QWFm_lPv9Q}]>l~0+Bg(<z(cz50jj0#n6@JX' );
define( 'LOGGED_IN_KEY',    'ch9IPuW;-]#gH+iS!,*:HQ$H>(uBqUXNYzkNZb+YxU[yW?-iMIerNt?SOfZRw,m/' );
define( 'NONCE_KEY',        '1>v[ldLi D;h2TSHKCU;=1zu[O]Ly}xjQLxq:TmN/%g}eaMZ~(e]kjXqG}:Y)P-G' );
define( 'AUTH_SALT',        'DpgbyQ1NVf(f(Te!Fx;=~ [KdYQ&TT]y9=CS)9*l#tqv6dPMi#o%,%,YoBG;hDqL' );
define( 'SECURE_AUTH_SALT', ']r(tF*xT71sedjWStgpp[1PGJ?oS>m7D1p:edB+.S%Rs{H]7!w<nX-haw],Z2S6g' );
define( 'LOGGED_IN_SALT',   'SzVzQnw_&2#::bS=!y(dlCh2Cr+EtA%WS(:@)fQUby?|bWVMRUc@MAB!%hP:,SEX' );
define( 'NONCE_SALT',       '^nGQw2-2)65Vw!vzNrK/jHd+2j f:r<& d+WuYV^DR1jIO/pFo?vURlm/bvgto`A' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
