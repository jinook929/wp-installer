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
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// ========================
// Custom Content Directory
// ========================
define('WP_HOME', 'http://your.local.url/'); // your local server route
define('WP_SITEURL', 'http://your.local.url/wp'); // don't forget the /wp!!!
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', WP_HOME . '/wp-content' );

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
define( 'AUTH_KEY',         'AMo{3D3f`X+UzV)Cj(}G({f,4U,LW_8/vdAt8k:Tc97G~%<bowahyPlO3PyTjlrF' );
define( 'SECURE_AUTH_KEY',  ',lBs<&G*3y%.TH{wclpvKKaKg7&?+qjrxC0##g[Gc0K0_k_{/2$!,:[eP,O,kK>@' );
define( 'LOGGED_IN_KEY',    'ZAMCrY{r,A+|]W!ELatDz:Yqp^RZ}A>DN]vE0~;[$wm~7CepHBLw3GaS-o{%pP?,' );
define( 'NONCE_KEY',        'xB`(?5VLDV:FXjy%b&p,bw(cha9(`~=Jd^QV#~&TF=pM(uKr~`b4UkME!AWXs[qQ' );
define( 'AUTH_SALT',        'A(l4AQe6?W2NC9crQ5_(]MK(.oK9xKmYNd*,]]$k-Pm5 I}l|~D@x3U4Y]`0&;8m' );
define( 'SECURE_AUTH_SALT', '4Nwz*}.|QsLn pI){h7HK#9QH_^f7Hi?~(l)Rr9nZyZm_ iqCOME;bnA:u)njD7V' );
define( 'LOGGED_IN_SALT',   'l#WnP3^G&EU2^u#kLBa7Q}RUm:1@Wf(ueeNKb:#@Gpil(Gv9V-~lRb6Z*-Cimch1' );
define( 'NONCE_SALT',       '(b,i)V+hxws$z+E|L_k6<VFyx%oay83[# GD9^k;:Z3nVdk|1QXNw_mzy/Z^2:O{' );

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
