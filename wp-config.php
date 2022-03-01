<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'OvdC)!06?lxx%C;b8,M69]BIA5{q2O.Y.xD*MM8ar|L$ 9/VZ6:ScA=K]gQz9Esq' );
define( 'SECURE_AUTH_KEY',  'q`bXHG!lw;M><a5Whk%v^cn]|I64c(FV~]h)2U~%sI0-h&CD|]iIOPD7@HDt(QL|' );
define( 'LOGGED_IN_KEY',    '^EKq[={5~lfaFc5g@AfK5mVNwoS-*[npD1a7[B|mMbz5l}vg0[]8%G9^H<TUWQZg' );
define( 'NONCE_KEY',        'tQl/Zd+(BU@}>sd2Ug9y?(WqAL?NPW[8V5P{VOGSW@&{jM7q5=.ErwAn%AZEt1%{' );
define( 'AUTH_SALT',        'K@PPq5erAX9K _+L`jmIIXIR,9D--dmMzI^ #fA$4&RTy:9!|&{[mKBKO~8xBUP?' );
define( 'SECURE_AUTH_SALT', 'oa(7kY/^J@*/{#Y0Qnaf=!wWnuj$zT/]~boi19{]2CXLi#A~@7o~k{2X%7+]7^%@' );
define( 'LOGGED_IN_SALT',   '[^}f^eic1`lV%1Y|kRD[I$9TLSd-O!Vq*cP[f|Ew[)3D1i!@,2KnG:l[eZcwE)w0' );
define( 'NONCE_SALT',       'C*I_={]2S,7=3R_oJr7@K-7LVwc%JG.5.~~bL%Ao1b@,h2v`Fq];!@Ws6/%(Qid5' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
