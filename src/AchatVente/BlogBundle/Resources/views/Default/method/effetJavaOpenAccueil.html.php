<script>
	function effetJavaBanniere(){
		var _banniere= document.getElementById("banniere");
			_banniere.style.height= "100px";
	}
	function effetJavaSliderBodure(){
		var _slider= document.getElementById("bordure_slider");
			_slider.style.border= "4px solid gray";
	}
	function effetJavaSliderLargeur(){
		var _slider= document.getElementById("bordure_slider");
			_slider.style.width= "650px";

	}
	function effetJavaSliderHauteur(){
		var _slider= document.getElementById("bordure_slider");
			_slider.style.height= "280px";
	}
	function effetJavaSliderBoutton(){
		var _sliderBoutonGauche= document.getElementById("boutton_gauche");
			_sliderBoutonDroit= document.getElementById("boutton_droite");

			_sliderBoutonGauche.style.display= "inline";
			_sliderBoutonDroit.style.display= "inline";
	}
	setTimeout(effetJavaBanniere, 900);
	setTimeout(effetJavaSliderBodure, 700);
	setTimeout(effetJavaSliderLargeur, 800);
	setTimeout(effetJavaSliderBoutton, 2100);
	setTimeout(effetJavaSliderHauteur, 2300);
</script>