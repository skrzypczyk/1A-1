<?php
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


	//Prénom : min:2 max:50


	//Nom : min:2 max:100


	//Email : vérification du format 


	//mot de passe : Min 1 majuscule/chiffre/minuscule, min de 8


	//mot de passe de confirmation = mot de passe
	if( $_POST["pwd"] != $_POST["pwdConfirm"]){
		echo "Mot de passe de confirmation NOK";
	}



} else {
	die("Tentative de hack");
}


