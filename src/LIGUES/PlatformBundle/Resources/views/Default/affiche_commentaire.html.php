<?php 
		include('connexionBase.html.php');

		$commentaire= $base->query('SELECT pseudo, message, id FROM reponse_article WHERE id_article= \''.$_POST[$numeroID].'\' ');

		while($affiche_commentaire= $commentaire->fetch()){
			?><br/>
		<section id= "case_commentaire">
			<br/>
			<section id= "info_message">
				<br/><?php echo'['.$affiche_commentaire['pseudo'].']';?>
				<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_voir_article_commentaire', array(),true); echo $url; ?>">
							<br/><br/><br/><br/><br/>
							Message:
								<input type= "submit" name= "editer" class= "boutton" value= "Editer"/>
								<input type= "submit" name= "supprimer" class= "boutton" value= "Supprimer"/>
								<input type= "hidden" name= "id" class= "boutton" value= "<?php echo $affiche_commentaire['id']; ?>"/>
								
							</form>
			</section>
			<textarea id= "text_com" rows= "15" cols="120" name= "commentaire" readonly="readonly"><?php echo $affiche_commentaire['message'];?></textarea>
			
		</section>
		<?php
		}

?>