<?php
# Database Configuration
define( 'DB_NAME', 'wp_yanaskillcrush' );
define( 'DB_USER', 'yanaskillcrush' );
define( 'DB_PASSWORD', 'Pw0KQIsk5gdpvv6zFen3' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_c76bh4';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'FI-uVg]wfwu$o4]a2U:UoJL-M|cFxjU(| ]n!AzqL|a*j*=S-s?E-9;k>!y+n `N');
define('SECURE_AUTH_KEY',  'Szq,i8P(]e)+S!_H,MgNOnWl-,_r>XY1GJKyThs(=R03}3gu4-/SUp!ig~5fOKiw');
define('LOGGED_IN_KEY',    'u/<JVj.y -!]Z>e9$T!1gV-?rI8>/3EBI+&<,|Tbgml]Is}/+?T:@dqoAkVy`FRf');
define('NONCE_KEY',        'f9,$.:oFA_?q&%W[_G.g<,!s[:m[?SBg~{%cI=c(>]~/6mY71il:g?)qcLCy0[MU');
define('AUTH_SALT',        'auiK?)v_Idj:BU1ZjG+^];$bsT^mB{-+[ow><m#{zd)m~-W*Bk+L67p16GDFAtT*');
define('SECURE_AUTH_SALT', 'PST_uF^t!NwWI%]$ed,Z>qE0nM`1B>N@8#,B3.2@zij/<[W2r)FDhWZ#+db>xVJZ');
define('LOGGED_IN_SALT',   '@.j# o,r&Wk]>/GNik!;I|t;qglcjD>~cT(9FH/NHx;h~AZ1p!nn|5&Q=[2=qnK+');
define('NONCE_SALT',       '-l+6W-!88N&w Q(pO<!^(C1c7Ze-iq65#BDa.E,zg[Vkyf0>}@iZ.ltbN-+Fr,]H');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'yanaskillcrush' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '4a5d319d0a52a0b87261deafe04789fdcecd5c57' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '33764' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '104.130.8.237' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

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

$wpe_all_domains=array ( 0 => 'yanaskillcrush.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-33764', );

$wpe_special_ips=array ( 0 => '104.130.8.237', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
