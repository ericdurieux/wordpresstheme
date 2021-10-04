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
define( 'DB_NAME', 'wordpressTheme' );

/** MySQL database username */
define( 'DB_USER', 'ownerTheme' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cBh-/P9OVF8TbzlF' );

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
define( 'AUTH_KEY',         'yOIbUUF(<:O#h!_(REuLT8DXR!&E|+@Sh}6 UjvAhh$3>9&i:LZ+Y4g/z]w6~ww|' );
define( 'SECURE_AUTH_KEY',  'yBgyuOiq>&&bc6FDB8dqK3Uh/fm_P^$72NyCRjw`C*6HRhl6Rn7||9*KJ{MTV!{E' );
define( 'LOGGED_IN_KEY',    'njps,1Y HP[`3C|%d_gXv2CxH^(A4!3_]g 76e^mD&t:PK,}C$!uX89)hUxUk4 /' );
define( 'NONCE_KEY',        '(ns#SM8ONp-2V[I J?`^;hVlh`TR7r*]0.p?dk.-__Z=$H9=%*sBGQM// (G2XcF' );
define( 'AUTH_SALT',        'W61^L6HAP}wMNNnIx@-~8HM=+p#p>g_ {Pt6qhs]AS..m m/c=;!0Wj.novnqt=*' );
define( 'SECURE_AUTH_SALT', 'ff-v-I3)KD7-d>wqR)q>Na68ScD4in &1PP`;A!)uN#R#xkW /_17w@=N3<,kh2W' );
define( 'LOGGED_IN_SALT',   'eKugCXq3H1Ot[d+;_BA6#V#{Gn1Kb9:OL-ualXq9E[9vDtt`jY[Ng|]?TmWX^7D>' );
define( 'NONCE_SALT',       'EB;raE>5m8{1@7=%yl;D>6bKW0FRh,M0:+F<.[Kp-Wm6Ms%d+mshnZw%;/FZD9Qu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp123_';

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
