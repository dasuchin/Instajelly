<?php
/**
 *	This file sets up enviroment variables such as directory paths
 */

/**
 * Setting error reporting
 */
ini_set('display_errors','On');
error_reporting(E_ALL ^ E_DEPRECATED);

/**
 * Defining constants
 */
define('DIR',$_SERVER['DOCUMENT_ROOT'].'/');
define('PRODUCT_NAME','Instajelly');
define('URL','instajelly.com');
define('ERROR_EMAIL','info@instajelly.com');
define('SESSION_NAME', 'instajelly_');

/**
 * setup params var
 */
ini_set('magic_quotes_sybase',0);
$params = array_merge($_GET,$_POST);
$_GET = $_POST = array();

if(!empty($_FILES)) {
	
	$params['uploads'] = $_FILES;
	
}

// set default for _urlrequest (set in htaccess)
$params['_urlrequest'] = !empty($params['_urlrequest'])?$params['_urlrequest']:'';

?>
