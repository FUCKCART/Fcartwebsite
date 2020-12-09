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
define( 'DB_NAME', 'fcartwebsite_db' );

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
define( 'AUTH_KEY',         'PL_4-B*d]MdMK8Ykk% .E(MR9W)rV&pYjHm$plsa`V1!AXzlUyBMgp}_Ikaiq$AC' );
define( 'SECURE_AUTH_KEY',  '<?SBSaoy&Yk$*zoB`dHm]PWxS(B(lwW+ARtGPPYf]AXx08l0lF^y;3P29.5/<j51' );
define( 'LOGGED_IN_KEY',    '!q^B/}f*.GtC,YgW{qMx}$/iVFOyxWri;mHwu~XqJZGf0%?$95/iUH^QPk|G>vo+' );
define( 'NONCE_KEY',        'Q4P(j=9LM*(f>_EOIV8P(s>;>2[]/RU:j$FT~^JDBurr`u.6,/q4jEVk3a6rgDoT' );
define( 'AUTH_SALT',        'E=N6>({Gqt7,Zk|iYX(&EBusaao.sLIkA2awOCKU6M1?T w#Eq)$N5Gz8-[5-E;-' );
define( 'SECURE_AUTH_SALT', 'Wp!,,qGpwbmecXZOCtJ`H:NMr{@rq5L{/xRVKP@y|3Ex+G2C9k5kx0EVmRe|6eMN' );
define( 'LOGGED_IN_SALT',   'm(3@Ysh]pTHWgW{eI-wy#DnYiS<xFLM*0Ft9k]RU81=QU@25b!Wv+=p)?q<+o5G[' );
define( 'NONCE_SALT',       'Ipy!(TOTlvCFuh!k a7M&Gpo;24);Z>kR6y$XmMm~(~`%t#+6usZk/j }*-i#Y?5' );

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
