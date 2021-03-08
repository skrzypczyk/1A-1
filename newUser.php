<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>S'inscrire</title>
	<meta name="description" content="page d'inscription">
</head>
<body>

	<h1>S'inscrire</h1>

	<a href="login.php">Se connecter</a>


	<?php if(isset($_SESSION["listOfErrors"])){ ?>

		<div style="background-color:#ad5555; color: white; padding: 10px; margin: 10px; ">
			<?php

				foreach ($_SESSION["listOfErrors"] as $error) {
					echo "<li>".$error;
				}

				unset($_SESSION["listOfErrors"]);
			?>
		</div>


	<?php } ?>


	<form action="register.php" method="POST">

		<label>
			Prénom : 
			<input type="text" name="firstname" required="required"><br>
		</label>

		<label>
			Nom : 
			<input type="text" name="lastname" required="required"><br>
		</label>

		<label>
			Email : 
			<input type="email" name="email" required="required"><br>
		</label>


		<label>
			Mot de passe : 
			<input type="password" name="pwd" required="required"><br>
		</label>

		<label>
			Confirmation : 
			<input type="password" name="pwdConfirm" required="required"><br>
		</label>

		<input type="submit" value="S'inscrire">


	</form>

</body>
</html>