	setTimeout(mouv,2000);
	
			function mouv(){
				var footer = document.getElementById("footer");
				var image = document.getElementById("slideshow");
				var conteneur = document.getElementById("conteneurtitre");
				var titre = document.getElementById("titre");
				var opac = 0;
				var pos = 40;
				
				if (window.matchMedia("(max-width: 1400px)").matches) {
					var taille = 4;

				}else{
					var taille = 7;
				}
				
				var id = setInterval(frame, 30);
				function frame() {
					if (opac >= 1) {
						clearInterval(id);
					} else {
						pos-=0.4;
						opac+=0.01;
							if (window.matchMedia("(max-width: 1400px)").matches) {
					taille-=0.01;

				}else{
					taille-=0.04;
				}
						
						conteneur.style.marginTop = pos + "vh";
						titre.style.fontSize = taille + "em";
						if (opac <= 0.85) {footer.style.opacity = opac;}
						
						image.style.opacity = opac;
					}
				}
			}