<?php
session_start();
if (!isset($_SESSION['mdp'])) {
	$_SESSION['mdp']=NULL;
}
if (password_verify($_SESSION['mdp'], '$2y$12$RfrxgycjqkUw9wg9XADNUej8pb7tXKwSumrMBBVFEpxT2UyNV/G1.') && $_SESSION['identifiant'] == 'mathis') {


?>







<!DOCTYPE html>
<html>
<head>

     <title>UPLOAD TEXT</title>
<?php
include '../php/metaprojet.php';
include '../php/menu2insert.php';
?>
<div class="space"></div>
<h1>UPLOAD DU TEXT</h1>
<hr>
<a href="../actu/" style="float: right;">deconnexion</a>
	<form method="post">
		<input type="text" name="titre" id="titre" placeholder="Titre"><br>
		<textarea name="description" id="description" placeholder="Description"></textarea><br>
		<input type="submit" name="formsend" id="formsend" value="enregistrer"><br>

	</form>

	<?php
	$titre = isset($_POST['titre']) ? $_POST['titre'] : NULL;
	$description = isset($_POST['description']) ? $_POST['description'] : NULL;

	$_SESSION['titre'] = $titre;
	$_SESSION['description'] = $description;
	if (!empty($_SESSION['titre']) && !empty($_SESSION['description'])) {
		echo "<br>" . "Textes enregistrés" . "<br>";
	}


	?>
	
	<br><a href="upload.php">suivant</a>
	<?php

}
?>
<hr>
</html>