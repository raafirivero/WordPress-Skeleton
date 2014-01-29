<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'o47ZcREI[Te U RFvTbC8558l!n/H|af1Izf=+#K!+7@!BR~0EQwJd,#%:e=}_m<');
define('SECURE_AUTH_KEY',  'L0vfhC^D]}+G]0P ItJ_dcs$fu`pQH^*|yE($?V2&T`+72uE:+MnPF?L1OVx8^1}');
define('LOGGED_IN_KEY',    'WA0.r1I([#xn-]SJCAR^2#@.62n>(jm%uR;,8Owp};</; h|wgZzUEyq-{UITOl%');
define('NONCE_KEY',        'E)6{G1Y? D!=MJ}7L+ZASvdaaq 0 ;yu/q-F7U?1I5von;^I$rK|cYP?f#z8Z>~I');
define('AUTH_SALT',        'aAwnC*:-$(#Oe?5agoWX4q@=$x-!7W&sh`x64),ke>k5wLNLSgq;|xPud-R0giu`');
define('SECURE_AUTH_SALT', 'y.91j(.};Y^a](V&0[%2G`3|u@4MdLd(jla.|1xS[]+4AZz64M7?wBoA+;?/$+lD');
define('LOGGED_IN_SALT',   '(?=A[%8}N0*x|cdf0tozlI[qr!y3!jcO{|+ib_sr(s{zSQCGS WG}RBM7A{wqMS#');
define('NONCE_SALT',       '+lO k`LhtQ@|5S~F%N/JphC7p/5On CpFrN7+Au.H[CS<0$v^kRKPP|!+Uxkr&bB');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';


// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
