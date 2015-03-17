<?php include('connexion_start.html.php'); ?>
<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>		<!-- header -->

	<body>							
		<section id= "titre_emplacement"><!-- CODE -->
					<br/>
					<?php 
						if(!empty($_POST['editer'])){	// option modifier séléctionné

								?><a href= " <?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_news', array(),true); echo $url; ?>">
									<input type= "button" name= "retour" class= "bouton_lien_repondre" value= "RETOUR"/> -- EDITER VOTRE MESSAGE
								</a><?php
						}
						else if(!empty($_POST['supprimer'])){	// option supprimer séléctionné
							?><a href= " <?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_news', array(),true); echo $url; ?>">
									<input type= "button" name= "retour" class= "bouton_lien_repondre" value= "RETOUR"/> -- SUPPRIMER LE MESSAGE
								</a><?php
						}
					?>
			</section>		
				<br/><br/><br/>
			<section id= "page_supprimer_modifier">		
				<br/><br/>
				<?php 
					if(!empty($_POST['supprimer'])){
						include('supprimer_commentaire.html.php');
					}
					if(!empty($_POST['editer'])){
						include('connexionBase.html.php');  // connexion base de donnée

						if(!empty($_POST['boutton_editer']) && !empty($_SESSION['pseudo']) && !empty($_POST['pseudo']) && $_SESSION['pseudo'] == $_POST['pseudo']){

							// modifie le message
							$message_article= $_POST['message_article'];
							$update= $base->prepare('UPDATE reponse_article SET message = :message_article WHERE id = \''.$_POST['id'].'\' ');
							$update->execute(array('message_article' => $message_article));
							echo 'MESSAGE EDITE';
						}
						else{
							$req= $base->query('SELECT message, pseudo FROM reponse_article WHERE id= \''.$_POST['id'].'\' ');
							$recherche= $req->fetch();
							if(!empty($_POST['boutton_editer']) && empty($_SESSION['pseudo']) || 
								!empty($_POST['boutton_editer']) && $recherche['pseudo'] != $_SESSION['pseudo']){
								?><script> alert('Vous ne pouvez pas modifier ce message')</script><?php
							}
							?>
							<section id= "message">
								<br/>MESSAGE:
							</section>
						<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_voir_article_commentaire', array(),true); echo $url; ?>"> 
							<textarea rows= "10" cols="120" name= "message_article"> <?php echo $recherche['message']; ?></textarea>
							<br/><br/><br/><br/>
							<input type= "submit" name= "boutton_editer" class= "bouton_valider_repondre" value= "Editer"/>

							<!-- bouton invisible -->
							<input type= "hidden" name= "editer" value= "<?php echo $_POST['editer'];?>"/>
							<input type= "hidden" name= "id" value= "<?php echo $_POST['id'];?>"/>
							<input type= "hidden" name= "pseudo" value= "<?php echo $recherche['pseudo'];?>"/>
						</form>
					<?php 
						} // fin else
					} // fin if ?>
		</section>

	</body>

	<?php include('footer.html.php'); ?>	<!-- footer -->
</html>