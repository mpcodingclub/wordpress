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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'lVBd_$N-lk:R>O.$O<?}EqWw;){#/;f17iIH/N?%F{y{vdU:?VZ9.9z(I<bpj1#w' );
define( 'SECURE_AUTH_KEY',  'pRQF5AH>0}hm]|3]LSV~s6/Gl;!a.&:um&KIlb.8rWR^2 ^A;KI99Tc8VSMZyq4h' );
define( 'LOGGED_IN_KEY',    '6RZh%R[LVCL&c9%15(K]ACm%e(Y1hD~qF)}=H1UiZoB1m+7d^DC<aqy,/4C4xbxV' );
define( 'NONCE_KEY',        ';M-wxX4tcWy3 7=O9t|[+56Mn6Z*1laD$!GhntK5jDqQF{JMDfJS5-t8L3.(nHBE' );
define( 'AUTH_SALT',        'aJG_7v*EN5EfaON-}C|0vbE3nQ`PL}vIBPGGostq@A=:J4jc`4 ~p~nKnDISE2R ' );
define( 'SECURE_AUTH_SALT', 'K5fJ>@#^j`ajfLdp+1FHJ{C90X%aWC`CI7l,eg&]K^LMw^o&?]T^>T,A|=Vxcg_%' );
define( 'LOGGED_IN_SALT',   '3q(GU8$/c?}yUF?TPeav!gywIi)hGu[5#R,+5*C@<Xc/+4)@T_dtBo1@qsK>$WhE' );
define( 'NONCE_SALT',       '>V|ND.Vrtem%6XS.D9Mg~mO5rbbfFTV}KXj3XkrnnI| ;/6]I=P$Z0SE)OyH,a6v' );

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
