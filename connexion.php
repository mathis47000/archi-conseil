<?php
session_start();
?>







<!DOCTYPE html>
<html>
<head>

	<title>CONNEXION</title>
	<?php
	include 'php/meta.php';

	?>
	<div class="space"></div>
	<h1>CONNEXION</h1>
	<hr>
	<div class="space"></div>

	<div class="contenu">
		<form method="post">
			<input type="text" name="identifiant" id="identifiant" placeholder="identifiant"><br><br>
			<input type="password" name="mdp" id="mdp" placeholder="mot de passe"><br><br>
			<input type="submit" name="formsend" id="formsend" value="connexion"><br><br>
		</form>
	</div>
	<?php
	if (isset($_POST['formsend'])) {
		extract($_POST);

		$options = ['cost' => 12,];
	// $mdph = password_hash($mdp, PASSWORD_BCRYPT, $options);

		if (password_verify($mdp, '$2y$12$RfrxgycjqkUw9wg9XADNUej8pb7tXKwSumrMBBVFEpxT2UyNV/G1.') && $identifiant == 'mathis' && !empty($identifiant) && !empty($mdp)) {
			$_SESSION['identifiant'] = $identifiant;
			$_SESSION['mdp'] = $mdp;

			?>
			<div class="space"></div>
			<div class="contenu">

				<?php

				echo "Bonjour " . $_SESSION['identifiant'] . "<br><br>";


				?> </div><div class="contenu">

				<a href='database/insert.php'>publier une nouvelle actualité</a>
			</div><br><div class="contenu">
				<a href='database/sup.php'>supprimer une actualité</a>
				</div>
				<?php
			}else{

				echo "<div class='contenu' style='color:red;'>erreur de mot de passe ou d'identifiant</div>";
				session_destroy();
			}
		}
		?>
	</div>

</head>
</html>