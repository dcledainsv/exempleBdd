<h2>Recherche</h2>
	<form method="post" action="index.php">
		<input type="text" name="titre" placeholder="Titre du film">
		<input type="text" name="anneeFilm" placeholder="Année du film">

		<input type="submit" name="submRecherche" value="Rechercher">
	</form>

	<?php
		if (isset($_POST['submRecherche']))
		{
			if(!empty($_POST['titre']) || !empty($_POST['anneeFilm']))
			{
				$requete = 'SELECT titre FROM film WHERE titre="' . $_POST['titre'] .'"';

				$bdd = new PDO("mysql:dbname=bddtest;host=127.0.0.1", "root", ""); 

				$req = $bdd->query($requete);

				while ($message = $req->fetch())
				{
					echo $message["titre"];
				}
			}
			else // If empty is void
			{
				echo "Veuillez renseigner les champs";
			}
		}
?>