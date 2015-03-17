<script>
	function effetJavaBanniere(){
		var _banniere= document.getElementById("banniere");
			_banniere.style.height= "100px";
	}
	function infoCompteAction(){
		var _infoAction= document.getElementById("information_compte");
			_infoAction.style.height= "505px";
	}
	function infoCase(){
		var _infoCase= document.getElementById("info");
			_infoCase.style.height= "135px";
	}
	function action_compte(){ 
		var _actionCompte= document.getElementById("action_compte");
			_actionCompte.style.height= "420px";
	}
	function messageErreur(){
		var _erreur= document.getElementById("messageErreur");
			_erreur.style.height= "20px";
	}

	setTimeout(effetJavaBanniere, 900);
	setTimeout(infoCompteAction, 700);
	setTimeout(infoCase, 800);
	setTimeout(action_compte, 2100);
	setTimeout(messageErreur, 720);
</script>