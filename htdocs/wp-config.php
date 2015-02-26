<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
// Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
  include( dirname( __FILE__ ) . '/wp-config-local.php' );
} else {
	define('DB_NAME', 'staging');
    define('DB_USER', 'settings');
    define('DB_PASSWORD', 'go');
    define('DB_HOST', 'here');
    
    // Overwrites the database to save keep edeting the DB
    define('WP_HOME', '');
    define('WP_SITEURL', '');
  
    /**
    * For developers: WordPress debugging mode.
    *
    * Change this to true to enable the display of notices during development.
    * It is strongly recommended that plugin and theme developers use WP_DEBUG
    * in their development environments.
    */
   define('WP_DEBUG', false);
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MQs{j}vk,r4xPe`o5~2T>.d^@QPvLd#VBiWz]:2d|h1]L%x)eoo(K)LDrfvkJBro');
define('SECURE_AUTH_KEY',  'J6yqa.8}zdq)Fn0.d} GPAgaOzKO:g9L)_@6`Wn^E~g;Qj}c$I45gJ<6sC0gV}`*');
define('LOGGED_IN_KEY',    'B&+$|SE,Km`|Lx}rQjX7iY9wy3jS>3hHmTGCrg-`.R{8OOtocy]j:QgCY(Eo^|yO');
define('NONCE_KEY',        'HdRVDPx#8cnt!&.vSPc67)DZJap8}#@&j]CWU,yy9$>w]YvW8d|H)]i:~k4yJY-R');
define('AUTH_SALT',        'O%wpKf#t26q;22*P;rz[4^w>(e$JGmq<gk5{(t1a4i6(FT6nO|!~W%+;,j$?d$x#');
define('SECURE_AUTH_SALT', '-/%A/hnx)MEE+eRP+Svi?gW{X>?5[3VqDhrthTCgv=#D|(pV^srA #C,Y6SP.([I');
define('LOGGED_IN_SALT',   ':0,+xtru2q[HBn&!_qUq-dZN#X?3+A^!2?jQN&7UDR$wjM>V)a_04:`xq}Ypy?~o');
define('NONCE_SALT',       'rf7qomr6s)b|.WY07G0!T.R_T(YquPNhVuG6NFaH60QU@6d0mJY%wL083,H]{#VV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
