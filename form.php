<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>S'inscrire</title>
	<meta name="description" content="page d'inscription">
</head>
<body>

	<h1>S'inscrire</h1>

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