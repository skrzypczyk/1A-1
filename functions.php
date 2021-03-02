<?php

require "conf.inc.php";

function connectDB()
{

	try{

		$connection = new PDO(DBDRIVER.":host=".DBHOST.";dbname=".DBNAME , DBUSER, DBPWD);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	}catch(Exception $e){
		die("Erreur SQL : ". $e->getMessage());
	}

	return $connection;

}