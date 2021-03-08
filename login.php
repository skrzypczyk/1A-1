<?php 
	//Factorisation
	include "header.php";
	//require "header.php";
?>


	<h1>Mon cours PHP</h1>
	<h2>Se connecter</h2>

	<a href="newUser.php">S'inscrire</a>


	<?php
		if( count($_POST)==2 && !empty($_POST["email"]) && !empty($_POST["pwd"]) ){

			//Afficher OK si les identifiants sont bons sinon afficher NOK
			//password_verify

		}

	?>

	<form method="POST">
		<input type="email" name="email" required="required">
		<input type="password" name="pwd" required="required">
		<input type="submit" value="Se connecter">
	</form>


<?php
	include "footer.php";
?>