<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projeto_eca_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         '-NjH*-Wls<AjYI>#KBE4~ ]S{W<;`1DC*}^)*.d_1dAtq8TE(0zA;qPp=~)lze|+' );
define( 'SECURE_AUTH_KEY',  '.TWpg*/O2|? ~Wn P@PhZ|w&b#nM1W?$S?w[o`gE6qQ7R~,QVa]f}f|;vO4g)u}L' );
define( 'LOGGED_IN_KEY',    'sN<@-J.:*Jx!rhrQd}3k%N2}q^64:^Ml,*(8gj4dfP`J1vm5}}l0(}pU@(T(MG.)' );
define( 'NONCE_KEY',        '.Zr2<5-tA+Qb1}]sO*w?kgu9V1Gzd)lt}1c1]&Nw^K25KSG-!DVlAS}P>w(.kn37' );
define( 'AUTH_SALT',        '1$f$XGxyavo(W%/L{!HKymT,kouy@,kxA|y|VX8qn!O:{5~[kCn=:-5`-Qy^7w:{' );
define( 'SECURE_AUTH_SALT', ',bdr|/(6;B~n4wMnVw]SH>x*QX)OSN^Z~#{<r>:;)I1I@dl4;~~I<N41Hp9<^L`L' );
define( 'LOGGED_IN_SALT',   '^ZgkSC7p|64&8,88%Eky:1s2fJ`Ker4)H#T-G @p]`7C/{_sS|dEfn~%:z6zC_if' );
define( 'NONCE_SALT',       'eci^7Q1i&~{n%p^3/#2(z!ZS3d);Pk~C*rd2cxI&u j-y Z$Te`1*OD2l;h0iO&-' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define('UPLOADS', 'wp-content/uploads');
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
