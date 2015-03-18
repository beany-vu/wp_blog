<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'congtsco_beany_wp');

/** MySQL database username */
define('DB_USER', 'congtsco_beany');

/** MySQL database password */
define('DB_PASSWORD', 'an lon');

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
define('AUTH_KEY',         ',;H?[C@^|6le%=MLTdXGABo2L}sa|P;^ff`dBcA29ANtG+v)ju,$3h*?|.v-K5_Q');
define('SECURE_AUTH_KEY',  'h~(G>-sru27W(zyDnDD3[5d>3/3H`t:zP+<y}v,YqbwQ;#UT{-UKc0cFMqqnn%bh');
define('LOGGED_IN_KEY',    '8Bu)*IR_U(!P+4*h2my]jM@n.L339%+Tp9_[6>ofen<AW}Vc_YQ#{+hOt`$*WT~h');
define('NONCE_KEY',        'TT?J<I*VuP#ulz-gI#[t$!M@$0^1O<G||8xSQPFm,(>0gnYI|MZoZT{wYfTa9y}}');
define('AUTH_SALT',        '*aWk1{fL7 BmQi6?nHp[Q.OG?-!A p9+eRn}&T(Mjp!mrsEd(@V*8l87<L3@e[?+');
define('SECURE_AUTH_SALT', 'x&bhT^2]?w:>4^Pf_|c~&wRC?+m;B1u.4,_f$L9;+xK/c+af)-k+]+mw|xD|OUO_');
define('LOGGED_IN_SALT',   'iX%XJ{HSkG=y<v,b1f6=.=ff#OY$Yfv`8O%]~cq0Ryln2gHPqL[-3+:lqN+*2pB}');
define('NONCE_SALT',       'Fk8i.|:h0(9X.$3),-atD0Pc ^>y?c=E m6C=L4r|zavSAI|6j[h =j:/=zEOh{N');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
