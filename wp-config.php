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
/** The name of the database for WordPress */
define('DB_NAME', 'wpxs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'xsloth');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '?dLZsG}N5F=0ncF$PJUhSmXa#~O$n-95$yH=-JNCbQ(36H-ncsPB=J:I*Bg&P4@3');
define('SECURE_AUTH_KEY',  'S{fuSzt!%KG}2#chKuZ(?XD-p.-j>lr5%B!;}+XEIrS{I|c7.K}N0FH1Pi:U=@s,');
define('LOGGED_IN_KEY',    '<(W+]wbySe>!c++1Oa7&4b%jiS<tc/5~0=lU@s5C-e#yT=:VPI{kfU`k!OVCOu/;');
define('NONCE_KEY',        'xCY~l{sR|`YqCm*0ai6w|:W:(w-BKaH]n#>$9wg@%|yzE[@s!)@Nt$D+DY|-6iOO');
define('AUTH_SALT',        'wgu`wC p30E+&@wec>HoXFmd46@*oF~aJSa}H2s{92QQ&AECa%MG5yV2~t#9?@-[');
define('SECURE_AUTH_SALT', 'QsVNN,:BO+;N2Z+-UX~Ll]tH=r sL4goKE xInvw<8efSK5!vuw5{5i#((NS}xo.');
define('LOGGED_IN_SALT',   '&`REy[)+b)y0~-yfq1k44Emo})@I;#v>-M6RSB3RJC+=9[|4R~S9H|D+elGX?>rY');
define('NONCE_SALT',       'i{pAW8CZ^Jo_EOg[E3!CKc[?AV@[R3fB=g@uxBQ+`O{Vng{;Ew+3+Q54U52d%[%a');

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
