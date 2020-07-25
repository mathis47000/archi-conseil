<?php
session_start();
if (!isset($_SESSION['mdp'])) {
	$_SESSION['mdp']=NULL;
}
if (password_verify($_SESSION['mdp'], '$2y$12$RfrxgycjqkUw9wg9XADNUej8pb7tXKwSumrMBBVFEpxT2UyNV/G1.') && $_SESSION['identifiant'] == 'mathis') {
	include 'database.php';
	global $db;
	if (isset($_SESSION['titre']) && isset($_SESSION['description']) && isset($_SESSION['image'])) {
			$q = $db->prepare("INSERT INTO poste(titre,description,image) VALUES(:titre,:description,:image)");
	$q->execute([':titre' => $_SESSION['titre'], ':description' => $_SESSION['description'], ':image' =>$_SESSION['image']]);
	$qq = $db->prepare("SELECT * FROM poste WHERE titre =:titre AND description =:description AND image=:image");
	$qq->execute([':titre' => $_SESSION['titre'], ':description' => $_SESSION['description'], ':image' =>$_SESSION['image']]);
	?>
	<h1>APERÇU</h1>
	<div class="contenu" >
	<?php 
	setlocale(LC_TIME, ""); 
	

	
	while ($poste = $qq->fetch()) {
		?><div><div><img height="400" style="position: relative;" src="<?= "upload/" . $poste['image'] ?>"></div>
		<div style="margin: 30px; margin-left: 0;"><h2><?= $poste['titre'] ?></h2>
		
		<p style="max-width: 400px;"><?= $poste['description'] ?></p>
		
		<span style="font-size: 10px;"><?= strftime('%d %B %Y',strtotime($poste['date'])) ?></span>
		
		

		</div>
 	</div>
 	
 	<?php
 }
     ?> 

     </div>
     <?php
	}else{
		echo "erreur";
	}

session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<title>resultat</title>
</head>
<body>
	<a href="../actu/" style="float: right; margin: 30px;">deconnexion</a>
</body>
</html>
<?php

?>