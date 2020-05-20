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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '|@b-9SQb6]Q5PDJ[ZcY1xuP1MO_d37{D=n0wkK1#P#z8OKt:@r/dKlbr#c8reEXa' );
define( 'SECURE_AUTH_KEY',  '!//ptI]W3cxTKo*}aY,QHa+y<L*,3ekw8nLiso;v3>.h6,|(Fd$>OQ(g?j<Sr9a>' );
define( 'LOGGED_IN_KEY',    'N](&F6V(sK)eZ7}gN6nt#3m.uRm*5s5?mB,-iSXA6>^ZK}_DNTnC19{aiWe*ccYp' );
define( 'NONCE_KEY',        'NfDL7RSx(|=!?7A$j+lr$6T-m}dP~^O<}N^M%/_M.&g>pcO+l}z#8O{;R+G_)82q' );
define( 'AUTH_SALT',        'NrVv2!v)Dc>2`|OS*>pFy-Dc-/]e&B:{)U5V8&}kkNn,#&6yx/A3+k:r>b@Hg_9(' );
define( 'SECURE_AUTH_SALT', 'No;GdS4&s}q5YBw:21+oA-y<#CA1Q7ky[&@>!y7)bIl(>(<,[V}o^e/ybb`vD{s3' );
define( 'LOGGED_IN_SALT',   'WX[W$x0q:RKY|7TJ0>Ja#>lgrwAa$-e440{EiwE8tBv@9V@@Q?E [Q4V42Zyt}]s' );
define( 'NONCE_SALT',       '3.>2.9%q7.@8[o3Z8-oB8RpL sJOn+74E$g_;9!F;6};dSd^&5KyzNq;?/Py5yrl' );

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
