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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jlm_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'vsO-Ce;e&mE(:-AP=u(HFTqCwKST )UwoRVWKZIm_S C2< Ey8yk>jiEP$hW2c#G');
define('SECURE_AUTH_KEY',  '3[wf:iy/e.8B|%,TF`&/Bb*HtqK$5{-z0LV<B/2e&8,+tRW|t!3~n_/Bfo!&A0(`');
define('LOGGED_IN_KEY',    'hOSb5xT40?6DQ.C2Y[F*&JKIc(fbL&.Kl0Z+i2R^oZ|,=HS0q9`bDQ1W1jO@&08_');
define('NONCE_KEY',        '$j45Ul/[x~Z5Q+cSJ^*5LaXnT-nOp`n!8~by{b8rCH5~$xtSlS<H:UGT#uI+`Nd_');
define('AUTH_SALT',        '^=.-nm(a(t^)-wC`=hPKISA491OA4Zjo#aA$+*-_[uIoKX7LYH/xU]~<S9M?|@n;');
define('SECURE_AUTH_SALT', 'rKeBM?eVHWA&9hlZ^DEOmlzD%BCZ.xhT4bs#:i[ytCf+Ynfy%pe$QP&$KKvD-VPK');
define('LOGGED_IN_SALT',   'n_HW2&OTa9m_LNug/DKP+MS+BQLmk5cx*7gVX:b3]O)*fovCJkEXIL8@MYJ1sQw*');
define('NONCE_SALT',       'F+,V)MIQ=;6`2C/*u3H9$l64lPR&n: 7V5/05&cK}+Vu/Un8GM&QnH68m7$?fdgq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
