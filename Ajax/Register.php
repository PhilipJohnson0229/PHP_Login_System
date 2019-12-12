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

	//multidimensional array where this array contains an object
	$return = [];

	$email = Filter::String($_POST['email']);
	//$email = strtolower($email);

	//make sure the user does not already exist
	//we need to make sure the user doesnt already exist, so we are going to query the database
	$findUser = $con ->prepare("SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1");
	$findUser ->bindParam(':email', $email, PDO::PARAM_STR);
	$findUser ->execute();

	if($findUser -> rowCount() == 1)
	{
		//User exists
		//we need to check if they are able to log in
		$return['error'] = "You already have an account";
		$return['is_logged_in'] = false;
	}
	else
	{
		//creating a has for the password variable
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

		//User does not exist
		$addUser = $con ->prepare("INSERT INTO users(email, password) VALUES(LOWER(:email), :password)");
		$addUser ->bindParam(':email', $email, PDO::PARAM_STR);
		$addUser ->bindParam(':password', $password, PDO::PARAM_STR);
		$addUser ->execute();

		$user_id = $con -> lastInsertId();

		$_SESSION['user_id'] = (int)$user_id;

		$return['redirect'] = '/Dashboaord.php?message=welcome';
		$return['is_logged_in'] = true;
	}
	
	
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