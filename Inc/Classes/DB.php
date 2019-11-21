<?php
/*
this is a php SINGLETON class so we set it once
 */
if(!defined('_CONFIG_'))
{
	exit('you do not have a config file set up');
}

class DB
{
	//so protected means this variable cannot be edited outside of this class and static means we can call it from anywhere
	//to call this variable we would use self::
	protected static $con;
	private function __construct()
	{
		try
		{
			self::$con = new PDO('mysql:charset=utf8mb4;host=localhost;port=3306;dbname=login_course', 'johnsonp6405','Newlife123!');
			self::$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$con -> setAttribute(PDO::ATTR_PERSISTENT, false );
		}
		catch(PDOException $e)
		{
			echo "Could not connect to the darn database" ;
			exit;
		}
	}

	public static function getConnection()
	{
		if(!self::$con)
		{

			new DB();
		}
		return self::$con;
	}
}
?>