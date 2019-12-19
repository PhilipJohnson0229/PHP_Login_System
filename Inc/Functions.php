<?php
function ForceLogin()
{
	if(isset($_SESSION['user_id']))
	{
	//the user is allowed here
	}
	else
	{
	//they need to login so we will redirect them
		header("Location: /login.php"); exit;
	}
}

function ForceDashboard()
{
	if(isset($_SESSION['user_id']))
	{
	//the user is allowed here
		header("Location: /Dashboard.php"); exit;
	}
	else
	{
	//they need to login so we will redirect them
		
	}
}
?>