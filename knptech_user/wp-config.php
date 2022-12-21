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

$_SERVER['HTTPS'] = $_SERVER['HTTP_X_FORWARDED_PROTO'];

if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'){

$_SERVER['HTTPS'] = 'on';
$_SERVER['SERVER_PORT'] = 443;
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'knptech_db' );

/** MySQL database username */
define( 'DB_USER', 'knptech_userdb' );

/** MySQL database password */ 
define( 'DB_PASSWORD', 'EDghh45#Eo545Ds#' );
 
/** MySQL hostname */
define( 'DB_HOST', '92.205.25.47' );

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
define( 'AUTH_KEY',         'mgBIa[j;~47qT.k#/>AalM$CA2#[VZixf|(gpqd>pNxK52f&9+bOJQ3xpSG@45nI' );
define( 'SECURE_AUTH_KEY',  'Pr/{7l`<4|%R:[_t`N[F=@^k)H0>SjR&9@TOJ[]:=;JDpc;{ceVgz9Lu;[C*(hBa' );
define( 'LOGGED_IN_KEY',    '_.{EPA@,A-EXn4/Ck=^)Bt>8g$&f)t}CM/15bd6x_7.h5Y*/uy(d-YVr6vV]DOw0' );
define( 'NONCE_KEY',        'fFl32SW]I4G7^Msyc =hVj5Sl5g2e}m7~Jg5ajUo. N&FO_1//a}&2 m8IB,gPaf' );
define( 'AUTH_SALT',        'Y?0ndRDK1DGjt$x[##Jy}WfE&5]+6/JL}/IhR6:Qp[Hj{Ck[KZ/X4xAOYw>3ze=I' );
define( 'SECURE_AUTH_SALT', 'zIf$ZVzCmyIxKIMP 5GFOCyUT24![nbgnw9PKtn}!#>;jjj&{U>jM*Dx[<`,uVFx' );
define( 'LOGGED_IN_SALT',   'N,SA]7oiG40lsK{7]y|s0$Z.Y_OGTu8WWA/!15[Xv7H4t*,eKnw]B~Ui`]T{%b-&' );
define( 'NONCE_SALT',       'BxIB,48#MW(>;fhfZ}x!_<X0aYY8GVJo2Go9v+X]arAS</#QzwekwN6qSOU,|W);' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);
