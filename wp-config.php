<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'zahidportfolio' );

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
define( 'AUTH_KEY',         'nl*{Bi+pfhg1.xg-#L&b-aRe`|g=>}anwuJ c8)Gs:&n`g<2sN]v-rs0Sd}*$=J[' );
define( 'SECURE_AUTH_KEY',  '^:3FyEdNTGB|Y>x4.):*G/#o6J|JDCrme[z93 CmD-G:N6vDLYy1#~!*R)%-MHIc' );
define( 'LOGGED_IN_KEY',    '}L6>!)FK(<_YTIkgU<v9$m#Xvk[y#k:wHID`o~VkuE>BfT9vo|F*1V1lsOhtULdp' );
define( 'NONCE_KEY',        '[vA#GNH>LOSjM~V+Yo<xEH#AS+SM.q TnU+Y]e}?8&52BWzI$m8}_&Y?{=rx?Jj_' );
define( 'AUTH_SALT',        '*OF5u>;1f=tAcT-P~6c)@DOma=5D,ql>XRQj_I!tCR?dq74djx&fVG$Dr`7]1-Uq' );
define( 'SECURE_AUTH_SALT', ');FsH(Cn#;m(7vb|(8d)r_~@io+A4x d.Bm]0FshsbA{e3Qg`$8|3c[3W7E#+,YC' );
define( 'LOGGED_IN_SALT',   ']J[+7dZHw?81yN^w7H?a]^EX,y>~K.8M~]DlgIGY>-Zn|QG2ch~_Jkkh5>uSxig4' );
define( 'NONCE_SALT',       'DnX!8<mex2ktbFn,L05lR@n-f>+WwNP2$?AsmeCb#$5[G8u |=l^>Z?<(!^~G<Ix' );

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
