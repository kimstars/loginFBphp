<?php
session_start();
require_once('vendor/autoload.php');

$FBObject = new \Facebook\Facebook([
	'app_id' => '321511853784921',
	'app_secret' => '2d13e040d688a123e7fad9aa066f85b5',
	'default_graph_version' => 'v18.0'
]);

$handler = $FBObject -> getRedirectLoginHelper();
?>