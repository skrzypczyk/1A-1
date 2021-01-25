<?php
	include "header.php";
?>

<?php

/*

	$student = ["Simon", "FIOCRE", 22];

	print_r($student); //Afficher en brut le contenu du tableau - DEBUG

	//afficher la phrase "Simon a 22 ans!"
	echo $student[0]." a ".$student[2]." ans!";

	//Ajouter une note : 18 en dernière valeur du tableau
	$student[] = 18;

	print_r($student); //Afficher en brut le contenu du tableau - DEBUG

	echo "<br>";





	$student = [
					"firstname"=>"Pierre", 
					"lastname"=>"Marie", 
					"age"=>19
				];



	//Afficher la phrase "Prénom Nom a 19 ans"
	print_r($student); //Afficher en brut le contenu du tableau - DEBUG

	echo $student["firstname"]." ".$student["lastname"]." a ".$student["age"]." ans";


	$student["cc"] = 18;

	print_r($student);

	echo "<br><br><br>";

	//2D
	$class = [
					["Simon", "FIOCRE", 22],
					["Alexandre", "LELONG", 21],
					["Bilel", "SAIGH", 18]
				];


	//Profondeur : 7D			
	$myArray = [[],[[],[[[[],[[]]]],[]]]];


	//4D
	$filiere = [
					"classe 1"=>[
						0=>["Simon", "FIOCRE", 22],
						1=>["Alexandre", "LELONG", 21],
						2=>["Bilel", "SAIGH", 18]
					],




					"classe 2"=>[
						0=>["Simon", "FIOCRE", 22],
						1=>["Alexandre", "LELONG", 21],
						2=>["Bilel", "SAIGH", 18]
					],
					
					"classe 3"=>[
						0=>[
							"firstname"=>[0=>"Simon",1=>"Pierre"], 
							"lastname"=>"FIOCRE",
							"age"=>22
						],
						1=>[
							0=>"Alexandre", 
							1=>"LELONG", 
							2=>21],
						2=>[
							0=>"Bilel", 
							1=>"SAIGH", 
							2=>18]
					],


				];

	echo "<pre>";
	print_r($filiere);
	echo "</pre>";

	//afficher Pierre Fiocre a 22 ans

	echo $filiere["classe 3"][0]["firstname"][1]
			." "
			.$filiere["classe 3"][0]["lastname"]
			." a "
			.$filiere["classe 3"][0]["age"]
			." ans";

		*/


	$firstnames = ["Renaud", "Simon", "Dorian", "Milan" ];

	echo "<ul>";
	foreach ($firstnames as $value) {
		echo "<li>".$value."</li>";
	}
	echo "</ul>";



?>

<ul>
	<li>Renaud</li>
	<li>Simon</li>
	<li>Dorian</li>
</ul>


<?php

	$pokemons = [
					"Feu"=>["Salamèche", "feunard", "wisticrame", "dracofeu"],
					"Eau"=>["carapuce", "kaiminus", "magicarpe"],
					"Terre"=>["racaillou", "onyx"]
				];


	foreach ($pokemons as $type => $list) {
		/*
			1er itération $key = "Feu"
			et $value = ["Salamèche", "feunard", "wisticrame"]
		*/
		echo "<h2>Pokémon de type ".$type."</h2>";
		echo "<ul>";
		foreach ($list as $pokemon) {
			echo "<li>".$pokemon."</li>";
		}
		echo "</ul>";


	}

?>


<?php
	include "footer.php";
?>




