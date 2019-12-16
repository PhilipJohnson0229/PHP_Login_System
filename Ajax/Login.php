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
	$password = $_POST['password'];
	//$email = strtolower($email);

	//make sure the user does not already exist
	//we need to make sure the user doesnt already exist, so we are going to query the database
	$findUser = $con ->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
	$findUser ->bindParam(':email', $email, PDO::PARAM_STR);
	$findUser ->execute();

	if($findUser -> rowCount() == 1)
	{
		//User exists
		//we need to check if they are able to log in
		//this line will create an array
		$User = $findUser->fetch(PDO::FETCH_ASSOC);

		//casting
		$user_id = (int) $User['user_id'];
		$hash = $User['password'];

		//verify the password
		if(password_verify($password, $hash))
		{
			//user is signed in
			$return['redirect'] = '/Login_system/php_login_system/Dashboard.php?message=welcome';

			//Session is basically a cookie file that is stored on a server instead of a browser
			//a session is not turned on by default and they need to be instantiated
			$_SESSION['user_id'] = $user_id;
		}
		else
		{
			$return['error'] = "invalid email/password combo";
		}

		$return['error'] = "You already have an account";
		//$return['is_logged_in'] = false;
	}
	else
	{
		$return['error'] = "You do not have an account.  <a href = '/Register.php'>Create one now?</a>";
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