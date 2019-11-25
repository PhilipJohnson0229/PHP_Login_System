<?php
//Allow this element to exist
define('_CONFIG_', true);

//Require this file to run the code below
// the /../ syntax moves this url up a folder because Inc is not a folder that exists inside of this files root directory
require_once "../Inc/config.php"; 

//ensures that the page is being ajaxed or at least the content being displayed
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//this will return json format
	header("Content-Type: application/json");

	//multidimensional array where this array contains an object
	$return = [];

	//make sure the user does not already exist
	
	//make sure the user CAN be added and IS added

	//return the proper info back to javascript

	$return['redirect'] = '/Login_system/php_login_system/index.php';
	$return['name'] = 'Philip Johnson';
	//json pretty print will allow us to view the output in a nice organized format
	echo json_encode($return, JSON_PRETTY_PRINT); exit;
}
else
{
	//we need to kill this page if it isnt being ajaxed, users should not be able to view this page by typing URL
	exit("Test");
}

?>