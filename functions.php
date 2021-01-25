<?php

function helloWorld(){

	echo "Salut";

}


//helloWorld();
/*
$lastname = "SKRZYPCZYK";


function helloYou($firstname = ""){
	global $lastname;
	echo "Bonjour ".$firstname." ".$lastname;

	$lastname = "Toto";
}


//Bonjour Yves
helloYou("Yves");

//Bonjour Keissy
helloYou("Keissy");

//Bonjour
helloYou();


echo $lastname;



$name = "toto";

//& permet de récupérer l'adresse mémoire et non simplement la valeur
function test(&$name){
	//global $name;
	$name = "titi";
}


test($name);

echo $name; //titi




function isPrime($number) {

	for( $cpt=2 ; $cpt < $number ; $cpt++){

		if($number % $cpt == 0){
			return false;
		}
	}

	return true;
}




$start = 2;
$max = 100;


while ( $max > 0) {
	
	if( isPrime($start) ){
		echo $start." est un nombre premier<br>";
		$max-- ;
	}else{
		echo $start." n'est pas un nombre premier<br>";
	}

	$start++;
}

*/


$toto = 2;
$titi = &$toto;
$titi = 3;

echo $toto; //3






