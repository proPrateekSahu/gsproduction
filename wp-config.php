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
define( 'DB_NAME', 'gsproduction_db' );

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
define( 'AUTH_KEY',         'fl_N5sW7kJOKBb;I=<N.?/sv-<uR#BIyqJIF2W?oC>*fiGM,F^5Uvb/}G~t<>I`U' );
define( 'SECURE_AUTH_KEY',  'V?FBewdVp70T<y.[,MkG8SmHH!EK 73CMS]KPA`32_,QC}?i)l+{T-:2R-.E$YJ8' );
define( 'LOGGED_IN_KEY',    '?p^Iq-n?8*is6w^jmG ?b.E5k;e15-e[hnN}|UxJo,%A848tPoX[j5I]Z<=Z0Q%<' );
define( 'NONCE_KEY',        'C[C2{@=.)3 eM~DDu#_bnC[m#./zdepF)pQNW+qQX!I$:mxF?fe;z7QSqkkEb>98' );
define( 'AUTH_SALT',        '0.YVb|0,nPB)Zti/E.??+x+Y~|6D;$bec{tSfhG|&y0ydo ,QAjpsIkYG knA1-_' );
define( 'SECURE_AUTH_SALT', 'p$+~aYLh/X!#,ysJZF/$u7}{V>36wf|`_,7mJtI)A_vgyi!o%p[iX5i?J&[wg_)-' );
define( 'LOGGED_IN_SALT',   'Hiy!rGE]1/Ke+uiNVA0s`~KY@4.ao>H0BimGX4&Bpi1DYjR*p{eM12Vvf6F<v$CD' );
define( 'NONCE_SALT',       '~ d2{5?<@YHzhwI5aS-N/}1{`HnX mIqg!o]~olA}@^MZEHz/[D*C-i8r][)Wo_L' );

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
