<?php

session_start(); //Création d'un cookie avec le nom de la session

/*

- Accessible partout
- créé et alimenté par le serveur PHP
- Array
- Commence toujours par $_ et doit être en majuscule

*/

//COOKIES

//echo time();

//setcookie("login", 1);
//setcookie("role", "user");

//echo "Salut ".$_COOKIE["pseudo"];



//SESSION

$_SESSION["email"]="y.skrzypczyk@gmail.com";



?>