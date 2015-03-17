<?php

	if(!empty($_POST['bouton_repondre']) && !empty($_POST['commentaire_article'])){
	
		include('connexionBase.html.php');

			$categorie_article= $recherche['categorie_article'];
						
			$req= $base->prepare('INSERT INTO reponse_article(id_article, pseudo, categorie_aticle_reponse, message) VALUES(?,?,?,?)');
			$req->execute(array($_POST[$numeroID], $_SESSION['pseudo'], $categorie_article, $_POST['commentaire_article']));

	}

?>