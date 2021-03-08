<?php 
	session_start();
	//Factorisation
	include "header.php";
	//require "header.php";
?>


	<h1>Mon cours PHP</h1>


	<?php if(isset($_SESSION["auth"]) && $_SESSION["auth"]){?>

		<h2>Bonjour <?php echo $_SESSION["info"]["firstname"] ?></h2>
		<a href="logout.php">Se déconnecter</a>

	<?php }else{ ?>
		
		<a href="newUser.php">S'inscrire</a>
		<a href="login.php">Se connecter</a>


	<?php } ?>




<?php
	include "footer.php";
?>