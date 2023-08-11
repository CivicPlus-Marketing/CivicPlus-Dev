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
define( 'DB_NAME', 'civicplusdev' );

/** Database username */
//define( 'DB_USER', 'civicplusdev' );
define( 'DB_USER', 'root' );

/** Database password */
//define( 'DB_PASSWORD', 'qh78iKmoTvpysJg');
define( 'DB_PASSWORD', '');

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',          'BFAm ^v*>;g7)pjz`uzHIymr?FI--!_Ek*.$hI&[4b~mxXds_*x3In+}Xwn|891&' );
define( 'SECURE_AUTH_KEY',   'zY<q=%0ea6`9-a+qn]/)hBL/>jb*<P!<a_Nvv>?StE^WtSdDYl**0^UiY:}>-[C;' );
define( 'LOGGED_IN_KEY',     'Zz1a?`>vs$xO;P*Y^z*M0-7/G.zZuO`F[g,7Vr;@*qjGNlx^>$k0]WXaPB4*G7IA' );
define( 'NONCE_KEY',         'D,[{m/XDC*B4KbO}V_]V@nk0=WCcIKq&AfwJA:`2>r6}h#pcOwRtN!#_Zch8!1qX' );
define( 'AUTH_SALT',         'Uk)Y0Ee$00t.1Ut~Y-{>o!?_UTSf3PA5rd{iGvHxLRnSz2.QKrM$t4w&lV~-lKQN' );
define( 'SECURE_AUTH_SALT',  '*n90$[~{ic[zEH[`*ol]:Ot[8zB3;t*)5O@bk&H@p4-e~5vk<I^/F^W1Z 6}qUT{' );
define( 'LOGGED_IN_SALT',    'T?Y*JNn`c|ixAS `tKFe490v?j]1IW*UTW+.$AEBNYL`d)*x~lJmC;Dto;6e#*wr' );
define( 'NONCE_SALT',        'V8c9:%4Z^t[zQbO2-xF%xzaH;-r9g`5R$g_P5&K4NM79wB$c7NWWE?2H xEi {jk' );
define( 'WP_CACHE_KEY_SALT', 'lr^>JXVaCRIw/8%h6]DsC1]D>T|~XtD7A`K%FjX6s]t#j]1oK[`9/iXAZ--U6A<b' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_SITEURL', 'http://localhost/civicplus/');
define('WP_HOME', 'http://localhost/civicplus/');

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
