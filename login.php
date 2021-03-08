<?php 
	session_start();
	//Factorisation
	include "header.php";
	//require "header.php";
	require "functions.php";
?>


	<h1>Mon cours PHP</h1>
	<h2>Se connecter</h2>

	<a href="newUser.php">S'inscrire</a>


	<?php
		if( count($_POST)==2 && !empty($_POST["email"]) && !empty($_POST["pwd"]) ){

			//Afficher OK si les identifiants sont bons sinon afficher NOK
			//password_verify
			$email = $_POST["email"];
			$pwd = $_POST["pwd"];

			$connection = connectDB();
			$queryPrepared = $connection->prepare("SELECT * FROM pfh4_user WHERE email=:email");
			$queryPrepared->execute(["email"=>$email]);

			$results = $queryPrepared->fetch();

			if(empty($results)){
				echo '<div style="background-color:#ad5555; color: white; padding: 10px; margin: 10px; ">Identifiants incorrects</div>';
			}else if( password_verify($pwd, $results["pwd"]) ){
				
				$_SESSION["auth"]=true;
				$_SESSION["info"]=$results;
				header("Location: index.php");


			}else{
				echo '<div style="background-color:#ad5555; color: white; padding: 10px; margin: 10px; ">Identifiants incorrects</div>';
			}

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