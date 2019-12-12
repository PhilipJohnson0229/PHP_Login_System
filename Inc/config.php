<?php
//if the constant _CONFIG_ is not defined, do not load this file
if(!defined('_CONFIG_'))
{
	exit('you do not have a config file set up');
}

error_reporting(-1);
ini_set('display_errors', 'On');

include_once("CLasses/DB.php");
include_once("CLasses/Filter.php");

$con = DB::getConnection();
?>