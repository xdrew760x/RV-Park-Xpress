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

/**
 * Allow all file uploads eg: SVG
 * Only allow locally
 */
define('ALLOW_UNFILTERED_UPLOADS', false);

/*
 * Compression
 */
define('COMPRESS_SCRIPTS', true);
define('COMPRESS_CSS', true);
define('ENFORCE_GZIP', true);

/**
 * Disable automatic update
 *
 * @link http://codex.wordpress.org/Configuring_Automatic_Background_Updates
 */
define('AUTOMATIC_UPDATER_DISABLED', true);

/**
 * Limit number of revisions saved
 *
 * @link https://codex.wordpress.org/Revisions
 */
define('WP_POST_REVISIONS', 10);

/**
 * Update default mem limit
 *
 * @link http://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP
 */
define('WP_MEMORY_LIMIT', '64M');

/**
 * Disable dashboard file editing
 *
 * @link http://codex.wordpress.org/Hardening_WordPress#Disable_File_Editing
 */
define('DISALLOW_FILE_EDIT', true);

/**
 * WordPress Environment
 *
 * The default usage is:
 * 	development - For local development
 *	production - For live site
 */
define('WP_ENV', 'development');

// Switch MySQL settings based on environment
switch(WP_ENV){
	// Development
	case 'development':
		/** The name of the local database for WordPress */
		define('DB_NAME', '');

		/** MySQL local database username */
		define('DB_USER', '');

		/** MySQL local database password */
		define('DB_PASSWORD', '');
	break;
	// Production
	case 'production':
		/** The name of the live database for WordPress */
		define('DB_NAME', '');

		/** MySQL live database username */
		define('DB_USER', '');

		/** MySQL live database password */
		define('DB_PASSWORD', '');
	break;
}

// ** MySQL settings - You can get this info from your web host ** //
/** MySQL hostname */
//define('DB_HOST', '10.138.183.40');
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8mb4_unicode_ci');

/** Custom Content Directory **/
define('WP_CONTENT_DIR', dirname( __FILE__ ) . '/app');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/app');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'bInNTp`pYz+#B00iR3oJ/LB-l*UIT_]&b-TaTN)O hW)/|^RtnsC`)|_I-P(9W6-');
 define('SECURE_AUTH_KEY',  '?4IX|+d||ANME*BOl,+W/H+Jz |PUPy%/{safg,}1S-Y)br;5<KAFzoZ=|U~.+A^');
 define('LOGGED_IN_KEY',    '=?TKZi4cW.r_E&aKRXhHAL!%E%Jd=lG`]*FW?@+JX;i:gR|>,mJVC[WeQ.-OGKkR');
 define('NONCE_KEY',        '~v0|N)Uh*@aa>,5t=&?/1xJxx=;i%.Js;B+@5L EJ?aZ!~6d|L(1-fBBVM.].udd');
 define('AUTH_SALT',        'i}fu7DyOv<FbNUDqFsDp{q@fVFohL1&&?`1+%i+Hb(s([DB[0s [*u8-,4M=a%+w');
 define('SECURE_AUTH_SALT', '_k+rIeS,RY/ZmF-?uJUG%7#|<k.l<]]vIVgvT^)|B?4o.*j}@/,*vc:t<ji%y]]m');
 define('LOGGED_IN_SALT',   '6iy.aj3~=_FR R2#0B`U^<C3iYd?l3vfua|&=Jd)vm3!p*3N|VN1.+tq<1P`uuW/');
 define('NONCE_SALT',       '1tq]A|n=~ruxfs!1TG7?5v^&Np.u/Ti {$X0i=.BbCGUm+p%wq4!haz4O(oQYV?*');

	 /**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tr_';

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
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
