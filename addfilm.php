<h2>Ajouter un film</h2>
	<form method="post" action="index.php">
		<input type="text" name="addFilm" placeholder="Titre du film">
		<input type="text" name="addYearFilm" placeholder="Année du film">

		<input type="submit" name="submAdd" value="Ajouter">
	</form>

	<?php 
		if (isset($_POST['submAdd']))
		{
			if(!empty($_POST['addFilm']) && !empty($_POST['addYearFilm']))
			{
				$requete = 'INSERT INTO film (titre, annee) VALUES ("' . $_POST['addFilm'] . '","' . $_POST['addYearFilm'] . '")';

				$bdd = new PDO("mysql:dbname=bddtest;host=127.0.0.1", "root", "");

				$req = $bdd->prepare($requete);

				$req = $bdd->exec($requete);

				echo "Votre film a correctement été ajouté";
			}
			else
			{
				echo "Veuillez renseigner les champs";
			}

		}
	?>
