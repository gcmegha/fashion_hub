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
define( 'DB_NAME', 'fashion_hub' );

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
define( 'AUTH_KEY',         '6m3 ?VISFP+gM:u!YIW%pXo*LpO3gcdGV%/Coen~X]yFevL_)W=apctD2<Ciz$6B' );
define( 'SECURE_AUTH_KEY',  ',m*)>r>[<oKPUM1sV *XP(7u?Un)C GSM*nn7EsbvL D-8@1]qez)~!ow<nSUhh{' );
define( 'LOGGED_IN_KEY',    'g0q8D,tUY~1svXUNBWIdx2`kKW ahYdm/0YXBNB3OBiyXdkIUvfoc Hqtu)9CK@N' );
define( 'NONCE_KEY',        '?`=Y]Hyvm~u9lP#r}7=ODTOF{;H3Mz+yP?_CC2doxT >!Z@2Tl^)MGAKKkq,w5,n' );
define( 'AUTH_SALT',        '%Yq$S[pWtb- px/|i}fJ4Y/7MaWvVZ`hy.,eBb2u5%{s$g<iu{qx@1?]a+Eebl%7' );
define( 'SECURE_AUTH_SALT', 'u@-)?JM+,.xAhL@?~AT,[L8WMi41HH0OPu;d~mU;Z]Er]jq6U&{l2$%zv_^|C-Jx' );
define( 'LOGGED_IN_SALT',   'HS{7}cgapPYqKHc5]3t:D8G8JIcs+WZ+AG0u!NqQx@kJ*(ghK.LvYAR<SVIM%d8v' );
define( 'NONCE_SALT',       '}gl1!21IoToePc9C)Elk^<eRV!U>`_n}.Zjakf-o:}Ja.Hd.BNE8aD{Zj2[M|RrK' );

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
