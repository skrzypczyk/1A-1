<?php


function connectDB()
{
	try{

		$connection = new PDO("mysql:host=localhost;dbname=1a1projetphp" ,"root" ,"root");
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	}catch(Exception $e){
		die("Erreur SQL : ". $e->getMessage());
	}

	return $connection;

}