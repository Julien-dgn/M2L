<script>
	function actionButtonPageCompte(){
		var _bouttonVente= document.getElementById("vendre");
		var _cadreVente= document.getElementById("cadreVendre");
		var _afficher= true;

			_bouttonVente.onclick= function(){
				if(_afficher == true){
					_cadreVente.style.height= "260px";
					_afficher= false;
				}
				else if(_afficher == false) {
					_cadreVente.style.height= "0px";
					_afficher= true;
				}
			}
	}
	actionButtonPageCompte();
</script>