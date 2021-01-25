<?php 
	//Factorisation
	include "header.php";
	//require "header.php";
?>


	<h1>Mon cours PHP</h1>

	<?php



		/*
			Mon commentaire 
		*/

		//Commentaire sur une ligne

		//echo "Bonjour ";

		$firstname = 1.4;
		$firstname = "yves";

		//echo $firstname;

		/*

		echo "Bonjour ".$firstname."!!!" ;


		$x = 12;
		$y = 4;
		//Afficher le résultat de 3 + 4 donne 7
		echo "le résultat de ".$x." + ".$y." donne ". ($x+$y);


		echo 4+2*3; //10
		echo (4+2)*3; //18


		echo "TEST".1+2;
		echo "TEST1"+2; //ERREUR
		echo "TEST".(1+2); //TEST3



		
		$age = 12;

		if($age >= 200 ){
			echo "Gros menteur";
		}
		elseif($age >= 100 || $age <= 0){
			echo "Menteur";
		}elseif($age == 18){
			echo "Tout juste majeur";
		}elseif($age > 18){
			echo "Majeur";
		}else{
			echo "Mineur";
		}




		$role = "Admin"
		switch ($role) {
			case 'Admin':
				echo "Publier"; // Mettre en ligne
			case 'Editor':
				echo "Modifier";
			case 'Author':
				echo "Ecrire";
			default:
				echo "Commenter";
		}

		
		$civility = "Mr";

		switch ($civility) {
			case 'Mr':
				echo "Monsieur";
				break;
			case 'Mme':
				echo "Madame";
				break;
			default:
				echo "Bonjour";
				break;
		}



		if($civility == 'Mr'){
			echo "Bonjour Monsieur"."Bonjour Madame";

		}else if($civility == 'Mme'){
			echo "Bonjour Madame";
			
		}
		echo "Bonjour";

		

		$majeur = true;

		if($majeur){
			echo "majeur";
		}else{
			echo "mineur";
		}

		// affiche dans le cas ou c'est majeur le mot majeur sinon mineur

		// Instruction (condition)?vrai:faux;

		// ? ---> Alors
		// : ---> Sinon

		if($majeur){echo "majeur";}else{echo "mineur";}

		echo ($majeur == true)?"majeur":"mineur";





		$firstname = null;

		//Condition classique
		if ( $firstname == null){
			echo "L'utilisateur n'a pas renseigné son prénom";
		}else{
			echo $firstname;
		}
		//Condition ternaire
		echo ($firstname != null)?$firstname:"L'utilisateur n'a pas renseigné son prénom";

		//Opérateur Null Coalescent
		echo $firstname ?? "L'utilisateur n'a pas renseigné son prénom";



		$firsntame = null;

		//echo ($firsntame == null)?"Inconnu":$firsntame;
		echo $firsntame??"Inconnu";

		

			
		//Incrémentation et Décrémentation
	


		$a = 0;
		$a++; 
		$a+1; 
		$a=$a+2; 
		--$a; 
		echo $a++; // 2
		$a;
		echo $a; // 3
		echo ++$a; //4 
		echo $a+1; // 5
		$a;
		echo $a=$a+1; //5 
		$a;
		$a+2; 
		$a -= 2; 
		echo $a+1; // 4
		echo $a; // 3


		/*


			Boucles :
				- FOR : ittération connue
				- WHILE : ittération inconnue
				- DO WHILE : au min 1 ittération
				- FOREACH : Parcourir un tableau

		//Afficher les nombres de 0 à 10
		for($cpt=0 ; $cpt <=10 ; ++$cpt){
			echo $cpt;
		}				

		//Afficher les nombres de 0 à 10
		$cpt=0;
		while ($cpt <=10) {
			echo $cpt++;
		}

		$cpt=0;
		do{
			echo $cpt++;
		}while($cpt <=10);

		
		*/

		/*
		$x = 2;
		//Afficher premier ou non premier en fonction de la valeur de $x
		$isFirst = ($x>=2);

		for( $cpt=2 ; $cpt < $x ; $cpt++){

			if($x % $cpt == 0){
				$isFirst = false;
				break;
			}

		}

		echo ($isFirst)?"Premier":"Non premier";
		*/








		/*
		$y = 1000;
		//Afficher les nombres premiers entre 0 et $y
		for($i=0; $i<=$y ; $i++){

			//Afficher premier ou non premier en fonction de la valeur de $x
			$isFirst = ($i>=2);

			for( $cpt=2 ; $cpt < $i ; $cpt++){

				if($i % $cpt == 0){
					$isFirst = false;
					break;
				}

			}

			if ($isFirst){
				echo $i."-";
			}


		}
		*/

		/*
		$z = 10;
		//Afficher les $z premiers nombres premiers
		$start = 2;

		while ($z>0) {

			$isFirst = true;

			for( $cpt=2 ; $cpt < $start ; $cpt++){

				if($start % $cpt == 0){
					$isFirst = false;
					break;
				}
			}

			if($isFirst){
				$z--;
				echo $start."-";
			}
			
			$start++;
		}


		$numberToWin = 4;
		$randNumber = rand(1,6);
		$tentatives=1;

		while ($numberToWin != $randNumber) {
			$randNumber = rand(1,6);
			$tentatives++;
		}
		echo "Il a fallu ".$tentatives." tentative(s) pour trouver ".$numberToWin;

	
		*/



		$numberToWin = 4;
		$tentatives=0;

		//Afficher le nombre de tentative pour tomber sur le bon chiffre
		do{
			$randNumber = rand(1,6);
			$tentatives++;
		}while($randNumber != $numberToWin);



		echo "Il a fallu ".$tentatives." tentative(s) pour trouver ".$numberToWin;

	?>

<?php
	include "footer.php";
?>