<!--

Un formulaire HTML d'inscription avec les champs :
- Email
- Mot de passe
- Confirmation du mot de passe
- nom
- prenom
- age
- pays sous forme de liste avec les valeurs (France, Pologne, Allemagne, Togo)
- un bouton pour valider le formulaire

-->



<form>

	<label>
		email :
		<input type="email" name="email" placeholder="Email"><br>
	</label>


	<label for="mypassword">Mot de passe :</label>
	
	<input type="password" name="pwd" placeholder="Mot de passe" id="mypassword"><br>



	<input type="password" name="pwdConfirm" placeholder="confirmation"><br>

	<input type="text" name="firstname" placeholder="Votre prénom"><br>

	<input type="text" name="lastname" placeholder="Votre nom"><br>

	<input type="number" name="age" placeholder="Votre age"  min="9" max="100"><br>

	<select name="country">
		<option value="fr">France</option>
		<option value="pl">Pologone</option>
		<option value="de">Allemagne</option>
		<option value="tg">Togo</option>
	</select>
	<br>

	<label>
		<input type="checkbox" name="cgu">J'accèpte les CGU<br>
	</label>

	<input type="submit" value="S'inscrire">
</form>