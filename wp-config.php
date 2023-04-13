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
define( 'DB_NAME', 'apurva_db' );

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
define( 'AUTH_KEY',         'IkF/8rulgj $z][-dYL)sL|@yLRXUISG@0LKr=n~a)1&wW11_3(-O#(R&ou~U6IN' );
define( 'SECURE_AUTH_KEY',  'O]O]y#CzBgKk:w7Cs1~M.R$I8AZ.xtbV`gt9*?=zAzZYH|6DnGKz6G}9GTPA+GB,' );
define( 'LOGGED_IN_KEY',    'FU(;aL0[&I+iDy7DL#fo3x ZLkm?1F$?W~E,H,%z,R_19?jZgOpwkgUy`<0C9/F>' );
define( 'NONCE_KEY',        'l+F|Oak8sw,{0F|-$B5Y8uQ4DE)-z7)3!<$ ,PpcvKb3I.SGz:|qcRq8q><]nRk,' );
define( 'AUTH_SALT',        'I)]KrFPm8asd=f;]eF{N1$b1h`okDQ&k1d7+lS111{yS|~v-2kg(/.Reilt8[#39' );
define( 'SECURE_AUTH_SALT', 'K=CA 1:h6PUs)VyZ4#(@,oc6KNggZ{&?o3shYmlvj1f9rGlsB0d1@Jr+fT(}Od5e' );
define( 'LOGGED_IN_SALT',   '7oA@R<C(*]l9Y^zf&/h[KwA$&fXJ6XZne[8yS f-AS@ku:S$A~`^+RZtxP?$w^Hb' );
define( 'NONCE_SALT',       '!si1BUnp~ t~eJ 5=W=OF&9wI#bMQEoDXE7{4oH68,X+u/Zb<4x}(F9 WvuZkR>Y' );

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
