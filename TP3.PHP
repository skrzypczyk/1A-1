<?php  


$lastname="   skRZéYpCZyk ";
cleanLastname($lastname);



function cleanLastname(&$name){

	//   "   skRZYpCZyk " => "skRZYpCZyk"
	$name = trim($name);
	$name = mb_strtoupper($name);

}


//SKRZYPCZYK
echo $lastname;




$firstname="   yvES pIErre";


function cleanFirstname(){
	global $firstname;

	$firstname = ucwords(mb_strtolower(trim($firstname)));


}


cleanFirstname();

//Yves Pierre
echo $firstname;


?>