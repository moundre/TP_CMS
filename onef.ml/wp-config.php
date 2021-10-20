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
define( 'DB_NAME', 'onef' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3-0O+(o3nQjy|})^P 5X8{th{1=EYMd KHa}=t5Tz?R7Excd?esz4c.N%1jLIC7c' );
define( 'SECURE_AUTH_KEY',  '{J%Sie}HA>MLA3x&U_# K%u96T!} zWQ{=c}.c^#K`dRc&y (JO:S:B]iUQL)>u)' );
define( 'LOGGED_IN_KEY',    ']#@:&}&zpj,|*xi7J)?I&5*y(1/^HZI,(hcjo3{@T4#o8UF:6M:*_|]gMZrY{L1?' );
define( 'NONCE_KEY',        'L`#P;qT%5/aG`GVAY1%SgvW~JwWFNU(|]#q7BAT&=0LWXZm9XqQTj}A!uE`_?GpT' );
define( 'AUTH_SALT',        '|ed&hS+aSpH9w*p%Ev2FY(<0.dL]1#NK:U42H(ewFbL}78$!)CBWT5s=}/jb$!#e' );
define( 'SECURE_AUTH_SALT', '%ck-5zlDv>IfT?q!.k~7OpP_]Y7^ob;.&(Wj@:$!_vmNsH7wE3OJXpD2p>4o1Mj*' );
define( 'LOGGED_IN_SALT',   '&OmU-<e|JhC|xq5R 7SOM=fnY}9&t@YAfLDyo@3J0]GUF)?zsvSJ!_zhb;PH&B)S' );
define( 'NONCE_SALT',       '-5>h]AGM+~_<m!wQmOUYAwkX2@pKj_$-6xvIdm)CI%uZIzasS1Woh>cWzlPxH^(x' );

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
