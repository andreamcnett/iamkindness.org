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
define('DB_NAME', 'dev_wp_iamkind');

/** MySQL database username */
define('DB_USER', 'dev_wp_iamkind');

/** MySQL database password */
define('DB_PASSWORD', 'zEB3zxZqE3X7eZvw');

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
define('AUTH_KEY',         'Uv`s_VoFf~v13)-]pfl{60JV+Km?]hL]}bG.wv!]vJ^0lLo@hUz*}QoCpW*pej^+');
define('SECURE_AUTH_KEY',  'mSyV;U35q,bK*tI-&o+0^+Ztkp^SloaU0Tg]{,2V|%,7ZoMz^ OCh4G,h3Y0QMEK');
define('LOGGED_IN_KEY',    'vA-H!Hyu`dP~1-!^bv|d%pK8DEG<l+n__{9r~`nP-7L)xeUo7mz|*1hOi9huUr?b');
define('NONCE_KEY',        'ymib6RBjScC)<&)JzWv3rnS^?B+3|TFMu;K-;D_K@8sf>F=&L6%c[xHsVYb*AM+ ');
define('AUTH_SALT',        '7tK0iy1U;lu%j|bc`lUI;p=?Dz[G3fo//SK#x)~dvD c?B}%{t!7)*Abk,a $`|U');
define('SECURE_AUTH_SALT', ':?;`(O[&{L,5kr#+Xxoc|ng1CfUmnDkr|(@@)8Y+]gl-10GE<JPWRiS:(/rssiv;');
define('LOGGED_IN_SALT',   '*-2*WK?@$NK-Z|[e5,Hdk6,!@w}#<M<&`!BmKS%+RN1Gj++:p-{UK#yYZR@E>drB');
define('NONCE_SALT',       'aQONICu^< &`$-NAz+wF?W_A dSn2Il(Hs5F1o_%.-l<}I_eapt}_mrBh*wre9KN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '2v_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

