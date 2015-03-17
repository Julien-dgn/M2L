<script>
	function slider(){
		var bouttonGauche= document.getElementById("boutton_gauche");
		var bouttonDroite= document.getElementById("boutton_droite");
		var imageUn= document.getElementById("image1");
		var imageDeux= document.getElementById("image2");
		var imageTrois= document.getElementById("image3");
		var etat= 1;

			bouttonDroite.onclick= function(){
				if(etat == 2){
						imageDeux.style.height= "280px";
						imageDeux.style.width= "0px";
						imageTrois.style.height= "280px";
						imageTrois.style.width= "650px";
						etat++;
				}
				if(etat == 1){
						imageUn.style.height= "280px";
						imageUn.style.width= "0px";
						imageDeux.style.height= "280px";
						imageDeux.style.width= "650px";
						etat++;
				}
			} // fin function bouton droit
			bouttonGauche.onclick= function(){

				if(etat == 2){
					imageDeux.style.height= "280px";
					imageDeux.style.width= "0px";
					imageUn.style.width= "650px";
					etat--;
				}
				if(etat == 3){
					imageTrois.style.height= "280px";
					imageTrois.style.width= "0px";
					imageDeux.style.width= "650px";
					etat--;
				}
			}
	}
	slider();
</script>