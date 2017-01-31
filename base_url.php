<?php
//=====================================================================//
//           BEGIN HELPER											   //
//=====================================================================//

/**
 * isset( $_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' # port 443 is not always for ssl
 * load balancer fix that has x forwarder protocol set with. add $_SERVER['HTTPS'] -> 'on' value
 */
if (isset( $_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $_SERVER['HTTPS'] = 'on';
}
 
/* GETTING PROTOCOL 
----------------------------------------- */
$protocol = ( isset($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] == 'https' ) ||
            ( isset( $_SERVER['HTTPS']) && ( strtolower( $_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1' ) )
            ? 'https' : 'http';
 
/* GETTING DOCUMENT ROOT USING REALPATH AVOID SYMLINK
----------------------------------------- */
$docroot = function_exists('realpath') ? realpath($_SERVER['DOCUMENT_ROOT']) : $_SERVER['DOCUMENT_ROOT'];
// clean path ( windows directory separator fix )
$docroot = str_replace( array( "\\", "\\\\" ), "/", $docroot );
 
/* GETTING DOCUMENT ROOT USING REALPATH AVOID DIR SYMLINK IF PROVIDE
----------------------------------------- */
$base    = function_exists('realpath') ? realpath(dirname(__FILE__)) : dirname(__FILE__);
$base    = str_replace( array( "\\", "\\\\" ), "/", $base );
 
/* GETTING HOST AS DOMAIN
----------------------------------------- */
$host    = ( isset( $_SERVER['HTTP_HOST'] ) ? $_SERVER['HTTP_HOST'] : isset( $_SERVER['SERVER_NAME'] ) ? $_SERVER['SERVER_NAME'] : false );
/**
 * if no host exits
 *  if server is not support !important
 */
if( ! $host ) :
    header( 'HTTP/1.1 400 Bad Request');
    die('Server Not Supported, HTTP_HOST / SERVER_NAME is not defined!');
endif;
 
//=====================================================================//
//           DEKLARASI PATH											   //
//=====================================================================//

// this is the path after domain will be directory after domain name
$path     = str_replace( $docroot, '', $base );
// remove slashes on start and ending with adding slash on start
$path     = '/'.trim($path, '/');
// real domain base url
$baseurl  = rtrim( $protocol.'://'. $host.$path );

// session_start();
//echo $baseurl;
?>
<?php
//=====================================================================//
//           BEGIN HELPER											   //
//=====================================================================//

/**
 * isset( $_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' # port 443 is not always for ssl
 * load balancer fix that has x forwarder protocol set with. add $_SERVER['HTTPS'] -> 'on' value
 */
if (isset( $_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $_SERVER['HTTPS'] = 'on';
}
 
/* GETTING PROTOCOL 
----------------------------------------- */
$protocol = ( isset($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] == 'https' ) ||
            ( isset( $_SERVER['HTTPS']) && ( strtolower( $_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1' ) )
            ? 'https' : 'http';
 
/* GETTING DOCUMENT ROOT USING REALPATH AVOID SYMLINK
----------------------------------------- */
$docroot = function_exists('realpath') ? realpath($_SERVER['DOCUMENT_ROOT']) : $_SERVER['DOCUMENT_ROOT'];
// clean path ( windows directory separator fix )
$docroot = str_replace( array( "\\", "\\\\" ), "/", $docroot );
 
/* GETTING DOCUMENT ROOT USING REALPATH AVOID DIR SYMLINK IF PROVIDE
----------------------------------------- */
$base    = function_exists('realpath') ? realpath(dirname(__FILE__)) : dirname(__FILE__);
$base    = str_replace( array( "\\", "\\\\" ), "/", $base );
 
/* GETTING HOST AS DOMAIN
----------------------------------------- */
$host    = ( isset( $_SERVER['HTTP_HOST'] ) ? $_SERVER['HTTP_HOST'] : isset( $_SERVER['SERVER_NAME'] ) ? $_SERVER['SERVER_NAME'] : false );
/**
 * if no host exits
 *  if server is not support !important
 */
if( ! $host ) :
    header( 'HTTP/1.1 400 Bad Request');
    die('Server Not Supported, HTTP_HOST / SERVER_NAME is not defined!');
endif;
 
//=====================================================================//
//           DEKLARASI PATH											   //
//=====================================================================//

// this is the path after domain will be directory after domain name
$path     = str_replace( $docroot, '', $base );
// remove slashes on start and ending with adding slash on start
$path     = '/'.trim($path, '/');
// real domain base url
$baseurl  = rtrim( $protocol.'://'. $host.$path );

// session_start();
//echo $baseurl;
?>
