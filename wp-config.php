<?php
/**
 * The base configuration for WordPress
 *
 * @package WordPress
 */

// ** Database settings - Using Docker environment variables ** //
define( 'DB_NAME', $_ENV['WORDPRESS_DB_NAME'] );
define( 'DB_USER', $_ENV['WORDPRESS_DB_USER'] );
define( 'DB_PASSWORD', $_ENV['WORDPRESS_DB_PASSWORD'] );
define( 'DB_HOST', 'db' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

/**
 * Authentication unique keys and salts.
 * Gerado automaticamente do serviço WordPress.org
 */
define('AUTH_KEY',         '#6*,R]GD3J6.ptg3Lc4Bb7Q{<d7$S9|H7a<Ie!IjP7Su*BT7a<&!x|q,&Wd?-D:S');
define('SECURE_AUTH_KEY',  'Y=jbm4K^}6Gy;mMZQX,Syo9:}6zCJFIE$ib[lV{6]%2e9a9g-$+l+bGdt3i|A}8.');
define('LOGGED_IN_KEY',    'g`,m6q`lD,iZ7G$PO]!(s4$[ffB6hp;Q,Gv^w)1XcT$G+5IxF$6M[/_~+N}|X9wl');
define('NONCE_KEY',        'kyc WN4p/Y=HCr:hd>|IA4c|s>:Z*-3LT]hgu7:WJ^D2vx[k,3R*)_XdK81+2rgw');
define('AUTH_SALT',        'BJ),r!J7c2YQ88+-s#|tJ0eO4q`;!KXq]c+D;7y^rk|Jz[KJiVY+d,fY%|tad.x/');
define('SECURE_AUTH_SALT', '4GX6P:(}g)EL=S?R{~5B`5!|8f3q6`@<B=lP|iWr72|MV=u}qD+67Ug6A[2xB:n|');
define('LOGGED_IN_SALT',   'r=wZj6L&K5gZ}Soz>N[%P2f*p)&tS-R-1z<}+E6W.M$>sz:qj7IYfL{vj2L_A5{J');
define('NONCE_SALT',       '3pe^p5J(G>qDI0|DaB@8=n+K|1g8-u2&m8,M1D|4zpT3xxj`YmF6RoL{4Y+d:uQ+');

/**
 * WordPress database table prefix.
 */
$table_prefix = 'wp_';

/**
 * WordPress Debugging Mode
 */
define( 'WP_DEBUG', false );

/**
 * Configurações adicionais para ambiente Docker
 */

define('FS_METHOD', 'direct');

// Desabilitar editor de arquivos
define('DISALLOW_FILE_EDIT', true);

// Forçar HTTPS no admin (descomente se estiver usando HTTPS)
// define('FORCE_SSL_ADMIN', true);

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';