<?php
#define('WP_SITEURL','http://' . $_SERVER['HTTP_HOST'] . '/');
#define('WP_HOME','http://' . $_SERVER['HTTP_HOST'] . '/');
#define('WP_CACHE_KEY_SALT', 'chenchenia.padoru');
#define('WP_CACHE', true);
include '.env.php';
$table_prefix  = 'wp_';
/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

//Begin Really Simple SSL Load balancing fix
$server_opts = array("HTTP_CLOUDFRONT_FORWARDED_PROTO" => "https", "HTTP_CF_VISITOR"=>"https", "HTTP_X_FORWARDED_PROTO"=>"https", "HTTP_X_FORWARDED_SSL"=>"on", "HTTP_X_PROTO"=>"SSL", "HTTP_X_FORWARDED_SSL"=>"1");
foreach( $server_opts as $option => $value ) {
 if ((isset($_ENV["HTTPS"]) && ( "on" == $_ENV["HTTPS"] )) || (isset( $_SERVER[ $option ] ) && ( strpos( $_SERVER[ $option ], $value ) !== false )) ) {
   $_SERVER[ "HTTPS" ] = "on";
     break;
      }
      }
//      //END Really Simple SSL
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
