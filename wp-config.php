<?php
# Database Configuration
define( 'DB_NAME', 'wp_betty' );
define( 'DB_USER', 'betty' );
define( 'DB_PASSWORD', 'jPoR9S8qY5NJVWWCFA7c' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'bS,cTe9=AL8fJfPt9!p-tCUA?,vPDE+IIeutB7J!6`3+l1Xw|,MP.k+:i2U4iCPx');
define('SECURE_AUTH_KEY',  '.#ncE}MdgsS;7W!+VJf~+XN9X|4Hyg06~j2AI]|k](RZ3/3mUP++Ff6qDQE|C%1H');
define('LOGGED_IN_KEY',    'GB=bukeQ~UJy(u7:nOl05k4)i]S(>GxFfw-5vkrul3a]Nx^Py&<T|b9ACw-yRo>x');
define('NONCE_KEY',        '0-]y8q&),>x~H|xCT?Ac-v`t6s+h>|taD;#X1RnQ_{5>p*]J[^MPfsKhM:RhR&Z`');
define('AUTH_SALT',        'lIj*|X^_7[m.L>sbWX.1.)q#c*LxXFx2|Mfw>=ZFUoz}+$nPkSm)(ZJJw|-@D_ZU');
define('SECURE_AUTH_SALT', 'C:j8A$ (vGSY|MTGc?Cq3|mSpE]K&GIr}L:74cAF/jM[*&5r<jKXk#ZB#@_B#|:N');
define('LOGGED_IN_SALT',   'hn-F2^$9aZIN#qq?27fH7Yk_]U-7%q.rO_a3(]#[E~8)1-{h~29cc=VI}^xRjSID');
define('NONCE_SALT',       'VhAm%5rgz*Q}X&OUV//x~lwU~>^..%p|d?=5.?pfGu&s.;yqXV}:`]a[9^Vv^T6 ');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'betty' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '398c9ce4c6d5824516247fd3a3ee511de0004c5c' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '41918' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '45.33.3.24' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'searchingforbetty.com', 1 => 'betty.wpengine.com', 2 => 'www.betty.wpengine.com', 3 => 'www.searchingforbetty.com', );

$wpe_varnish_servers=array ( 0 => 'pod-41918', );

$wpe_special_ips=array ( 0 => '45.33.3.24', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

define( 'WP_SITEURL', 'http://searchingforbetty.com' );

define( 'WP_HOME', 'http://searchingforbetty.com' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
