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

     <title>UPLOAD IMAGE</title>
<?php
include '../php/metaprojet.php';
include '../php/menu2insert.php';
?>
<div class="space"></div>
<h1>UPLOAD DE L'IMAGE</h1>
<hr>
<a href="../actu/" style="float: right;">deconnexion</a>
<a href="insert.php">< annuler</a>
<div class="space2"></div>
<h3>AJOUTER UNE IMAGE</h3>
<div class="space2"></div>
     <form method="POST" action="upload.php" enctype="multipart/form-data">
     <!-- On limite le fichier à 10mo -->
     <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
     Fichier : <input type="file" name="avatar" accept=".jpg, .jpeg, .png, .gif">
     <input type="submit" name="envoyer" value="Envoyer le fichier">
</form>
<script>
  function deux(){

   var div = document.getElementById("photo");
    var nodelist = div.getElementsByClassName("photoactive");
  
  var txt = "";
  var i;
  for (i = 0; i < nodelist.length; i++) {
    txt = txt + nodelist[i].innerText;
  }

  window.location.href = "upload.php?txt=" + txt;
}
</script>



<?php
     

$avatar = isset($_FILES['avatar']) ? $_FILES['avatar'] : NULL;
     $dossier = 'upload/';
     $fichier = basename($avatar['name']);
     $image = $avatar['tmp_name']; 
     $taille_maxi = 10000000;
     $taille = filesize($avatar['tmp_name']);
     $extensions = array('.png', '.gif', '.jpg', '.jpeg');
     $extension = strrchr($avatar['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($avatar['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
         echo "Photo ajoutée";
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Le fichier est trop gros...';
     }
}
else
{
     echo $erreur;
}






$adresse="upload/"; //Adresse du dossier sans oublier le / à la fin.
$dossier=Opendir($adresse); //Ouverture du dossier.

$i=0;
?>
<div class="space"></div>
<h3>APERÇU :</h3>
<div class="space2"></div>
<?php
     $titre = isset($_SESSION['titre']) ? $_SESSION['titre'] : "vide";
     $description = isset($_SESSION['description']) ? $_SESSION['description'] : "vide";
     $image = isset($_SESSION['image']) ? $_SESSION['image'] : "vide";
echo "Titre : " . $titre;echo "<br>";echo "<br>";
?><p style="word-wrap: break-word;">Description : <?= $description ?></p><br><?php


   echo "Image choisi : ";
if (!empty($_GET["txt"])) {
     ?>
<img class="equipe" src="<?= $adresse.$_GET["txt"] ?>" > 
<?php
$_SESSION['image'] = $_GET["txt"];
}else{
     echo"vide";
}




?>
<!-- affichage des photos -->
<div class="space"></div>







<h3>CHOISISSEZ UNE IMAGE :</h3>




<div class="contenu" id="photo">
     <?php
while ($Fichier = readdir($dossier)) //On affiche les fichiers les uns après les autres.
{
   if ($i>1) {
        ?>
        <div class="image">

             <a style="font-size: 0.01px;" class="centrage" onclick="
             this.classList.toggle('photoactive');deux();" title="<?= $Fichier . ' : ' . filesize($adresse.$Fichier) . ' octets' ?>">
             <?= $Fichier ?>
        </a>
        <img class="equipe" src="<?= $adresse.$Fichier ?>" >

   </div>


   <?php
}

$i++;
}
?>
</div>
<?php
closedir($dossier);
 
     


?>






<form action="publier.php">
<input type="submit" name="publier" style="float: right;" value="Publier">
</form>





<div class="space"></div>
<?php
}
?>
<hr>
</html>



