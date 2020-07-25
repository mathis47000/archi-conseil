<?php
session_start();

	include 'database.php';
	global $db;

	?>
	<a href="../actu/" style="position: absolute;right: 10px;top: 10px;">deconnexion</a>
	<h1>SUPPRIMER UN ARTICLE</h1>
	<div class="space"></div>
	<div class="contenu" >
	<?php 
	setlocale(LC_TIME, ""); 
	

	$q = $db->query("SELECT * FROM poste ORDER BY poste.date DESC");
	while ($poste = $q->fetch()) {
		?><div><div><img height="200" style="position: relative;margin: 20px;margin-left: 0;" src="<?= "upload/" . $poste['image'] ?>"></div>
		<div style="margin: 30px; margin-left: 0;"><h2><?= $poste['titre'] ?></h2>
		
		<p style="max-width: 200px;"><?= $poste['description'] ?></p>
		
		<span style="font-size: 10px;"><?= strftime('%d %B %Y',strtotime($poste['date'])) ?></span>
		
		

		</div>
 	</div>
 	
 	<?php
 }
     ?> 

     </div>
     <?php

session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<title>SUPPRIMER</title>
</head>
<body>
	

</body>
</html>