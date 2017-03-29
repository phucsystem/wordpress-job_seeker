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
define('DB_NAME', 'job_Seeker');

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
define('AUTH_KEY',         '{%jR{QDL]jj.)^B*6Rw8:$5L-7YXL.Anf?REG~r}$QMK_Gm/dEe0Iu& Ko#bh=F4');
define('SECURE_AUTH_KEY',  '$scp#L0[]pPZmJ<tc1r,.P3#~_&2rS).t?HkP0edDeBAGb@BMdk3<1uMYfEW9t0=');
define('LOGGED_IN_KEY',    'Ckul!Ic yQy~Y_P(~;7iZ(_;3WZI]o@9u4BD0XOo78 Q.k]|yd)Hk`JC_y-suPG9');
define('NONCE_KEY',        '`06C[.mz0?-~M:<b!9!=jrl-wykK?1U`oO<Nb[<q1|^h%hLBA| 5H/H29i76Ope?');
define('AUTH_SALT',        'pz96VZW:S0,+&8}[j[8TC*$0kr6TN @1%e^X#eQqu)M.e!A%Q>1lWO}FnG;.q0Q.');
define('SECURE_AUTH_SALT', 'h?:$Pz;]/>RW!=*::+0B0p[39yvaXe_/?NSl<:}?I$RK!(Sb$A3Z?X?o_VgjP B-');
define('LOGGED_IN_SALT',   '<rd[i%Ii0l%>+$c?g<jRWGxo!G-{i8RVq5keaem.UJ:-cgUIWGbuJ5`h^VCQl xH');
define('NONCE_SALT',       'YWrp}mR|^(O2HT3p#:iv 5vwN(pGWSCL/|L1;X)(N3{A0NE4}|h?JMo[zEax/qci');

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
