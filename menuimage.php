<!DOCTYPE html>
<html>
<head>
	<title>ARCHI CONSEIL</title>
	 <?php include 'php/meta.php'?>
</head>
<body>
	

	
	<div>
		<p class="titre"><span style="margin-right: -0.4em">ARCHI</span> <span>CONSEIL</span></p>
	</div>

	<div id="image">
		<script type="text/javascript">	
			setTimeout(mouv,2000);
			function mouv(){
				var un = document.getElementById("imageun");
				var premier = un;
				var suivant = document.getElementById("imagedeux");
				var opac = 1;
				var opac2 = 0;
				var id = setInterval(frame, 40);
				function frame() {
					if (opac <= 0) {
						// clearInterval(id);
						
						if (suivant == document.getElementById("imageun")) {
							premier = suivant
							suivant = document.getElementById("imagedeux");
							opac = 1;
							opac2 = 0;
						}else if (suivant == document.getElementById("imagefin")) {
							premier = suivant;
							suivant = document.getElementById("imageun");
							opac = 1;
							opac2 = 1;
						}else{
							premier = premier.nextSibling;
							suivant = suivant.nextSibling;
							opac = 1;
							opac2 = 0;
						}
					} else {
						
						opac-=0.01;
						opac2+=0.01;
						
						premier.style.opacity = opac;
						suivant.style.opacity = opac2;
					}
				}
			}
		</script>

		<div id="imageun">
			<p>C'est une équipe de dix personnes</p>
			<img class="resimg" src="image/2quipe.jpg">
			
		</div>
		<div id="imagedeux">
			<p>je suis la</p>

			<img class="resimg" src="image/batiments industriel.jpg">
					</div>
		<div id="imagetrois">
			<img class="resimg" src="image/2quipe.jpg">
			<p>je suis la</p>
		</div>
		<div id="imagequatre">
			<img class="resimg" src="image/batiments industriel.jpg">
			<p>je suis la</p>
		</div>
		<div id="imagecinq">
			<img class="resimg" src="image/2quipe.jpg">
			<p>je suis la</p>
		</div>
		<div id="imagesix">
			<img class="resimg" src="image/ehpad-madeleine-edit-46.jpg">
			<p>je suis la</p>
		</div>
		<div id="imagesept">
			<img class="resimg" src="image/2quipe.jpg">
			<p>je suis la</p>
		</div>
		<div id="imagehuit">
			<img class="resimg" src="image/batiments industriel.jpg">
			<p>je suis la</p>
		</div>
		<div id="imagefin">
			<p>C'est une équipe de dix personnes</p>
			<img class="resimg" src="image/2quipe.jpg">
			
		</div>



	</div>
	

	
<footer style="background-color: #4c6e93; bottom: 0; position: fixed;right: 0;left: 0;z-index: 20;" >
	
	
		
		<?php include 'php/menu.php'?>
	
		<p style="font-size: 12px; margin-bottom:0;	" >&copy2020 ARCHI CONSEIL | <a href="mention-légales.php" title="mention légales" >mention légales</a> | Site Web : Mathis Bescond | mathisbescond@outlook.fr | </p>
	</footer>


</body>
</html>