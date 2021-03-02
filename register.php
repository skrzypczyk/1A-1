<?php

require "functions.php";

/*

Vérifier les champs - les données
Si OK -> insertion en BDD et redirection que la page de connexion
Si NOK -> on redirige vers la page d'inscription avec les msg d'erreurs

*/

//Array ( [firstname] => Yves [lastname] => Skrzypczyk [email] => y.skrzypczyk@gmail.com [pwd] => fds [pwdConfirm] => gfds )
//print_r($_POST);


// FAILLE XSS
// Vérifier qu'il y a 5 valeurs et que les champs obligatoires ne soient pas vides
if ( count($_POST) == 5 
	&& !empty($_POST["firstname"])
	&& !empty($_POST["lastname"])
	&& !empty($_POST["email"])
	&& !empty($_POST["pwd"])
	&& !empty($_POST["pwdConfirm"])
) {

	/* Nettoyage */

	$firstname = ucwords(mb_strtolower(trim($_POST["firstname"])));
	$lastname = mb_strtoupper(trim($_POST["lastname"]));
	$email = mb_strtolower(trim($_POST["email"]));
	$pwd = $_POST["pwd"];
	$pwdConfirm = $_POST["pwdConfirm"];


	$listOfErrors = [];


	//Prénom : min:2 max:50
	if( strlen($firstname)<2 || strlen($firstname)>50 ) {
		$listOfErrors[] = "Votre prénom doit faire entre 2 et 50 caractères";
	}


	//Nom : min:2 max:100
	if( strlen($lastname)<2 || strlen($lastname)>100 ) {
		$listOfErrors[] =  "Votre nom doit faire entre 2 et 100 caractères";
	}


	//Email : vérification du format 
	if( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
		$listOfErrors[] =  "Votre email n'est pas correcte";

	}


	//mot de passe : Min 1 majuscule/chiffre/minuscule, min de 8
	// regex : #[a-z]# , #[A-Z]#, #[0-9]#
	if( strlen($pwd)<8
		|| !preg_match("#[a-z]#", $pwd)
		|| !preg_match("#[A-Z]#", $pwd)
		|| !preg_match("#[0-9]#", $pwd)
	 ) {

		$listOfErrors[] =  "Votre mot de passe doit faire au min 8 caractères dont 1 minuscule, 1 majuscule et 1 chiffre";

	}



	//mot de passe de confirmation = mot de passe
	if( $pwd != $pwdConfirm){
		$listOfErrors[] =  "Mot de passe de confirmation NOK";
	}


	//Si $listOfErrors est vide le formulaire est OK
	if( empty($listOfErrors) ){
		//Enregistrer en bdd l'utilisateur
		$connection = connectDB();
		//Insertion de 'utilisateur en bdd'


		$queryPrepared =  $connection->prepare("INSERT INTO pfh4_user (firstname, lastname, email, pwd) VALUES ( :firstname , :lastname , :email , :pwd );");


		$pwd = password_hash($pwd, PASSWORD_DEFAULT);

		$queryPrepared->execute( ["firstname"=>$firstname, "lastname"=>$lastname, "email"=>$email, "pwd"=>$pwd] );


	}
	//Sinon il y a eu des erreurs
	else{
		//Afficher les erreurs sur la page form.php

	}



} else {
	die("Tentative de hack");
}


