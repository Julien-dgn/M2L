<?php include('connexion_start.html.php'); ?>
<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>		<!-- header -->

	<body>									
		<section id= "categorieMembre">		<!-- CODE -->
			<?php
				include('connexionBase.html.php');


			// initialisation variable	
				$tour= 0;
				$nbTour= $_POST['nbResultat'];
				$end= 0;
				// variable pour la génération du nom

				$nomArticle= 'voir_article';
				$numeroID= 0;
				$id= 'id';

				while($tour != $nbTour && $end != 1){
					
					$tour++;
					$numeroID++;
					$name=	$nomArticle.$numeroID;

					if(!empty($_POST[$name])){

						$numeroID= $id.$numeroID;
						$req= $base->query('SELECT titre_article, categorie_article, message, pseudo FROM article WHERE id = \''.$_POST[$numeroID].'\' ORDER BY id DESC');
						$recherche= $req->fetch();

					//on vérifie si on à ajouter un commentaire -- si c'est le cas on l'ajoute
						include('ajout_commentaire.html.php');

				?><section id= "titre_emplacement"><br/> 
					<?php if(!empty($_POST['retour_news'])){ // boutton retour vers les news
						?>
						<a href= " <?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_news', array(),true); echo $url; ?>">
							<input type= "button" name= "retour" class= "bouton_lien_repondre" value= "RETOUR"/>
						</a>
						-- <?php echo 'CATEGORIE: '.$recherche['categorie_article'];?> -- TITRE: <?php echo$recherche['titre_article']; ?>
						<?php } ?>
					
					<?php if(empty($_POST['retour_news'])){ // boutton retour vers les articles catégories article
						?>
						<a href= " <?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_categorie_foot', array(),true); echo $url; ?>">
							<input type= "button" name= "retour" class= "bouton_lien_repondre" value= "RETOUR"/>
						</a>
						-- <?php echo 'CATEGORIE: '.$recherche['categorie_article']?> -- TITRE: <?php echo$recherche['titre_article'] ?>
						<?php } ?>
				</section><br/>
						<!-- cadre info + boutton supprimer modifier -->
						<section id= "info_message"><br/>
							<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_voir_article_supprimer_modifier', array(),true); echo $url; ?>">
							<?php echo'['.$recherche['pseudo'].']';?><br/><br/><br/><br/><br/><br/>
							Message:
								<input type= "submit" name= "editer" class= "boutton" value= "Editer"/>
								<input type= "submit" name= "supprimer" class= "boutton" value= "Supprimer"/>
								<input type= "hidden" name= "id" class= "boutton" value= "<?php echo $_POST[$numeroID]; ?>"/>
								
							</form>
						</section>

						<textarea id= "text_article" rows= "30" cols="120" name= "message_article" readonly="readonly"><?php echo $recherche['message'];?></textarea>
					<br/>

						<section id= "titre_emplacement_bas">
							<br/>REPONSE:
						</section>

						<?php 
						// on affiche tous les commentaire
							include('affiche_commentaire.html.php');
						?>
						<section id= "repondre_article">
						<?php if(!empty($_SESSION['pseudo'])){ ?>
					<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_voir_article', array(),true); echo $url; ?>">
							<section id= "pseudo_repondre_article"><br/><?php echo '['.$_SESSION['pseudo'].']'; ?></section>
							<textarea name= "commentaire_article" rows= "5" cols="92"></textarea><br/><br/>
							<section id= "bouton_repondre_article">
								<input type= "submit" name= "bouton_repondre" class= "bouton_valider_repondre" value= "REPONDRE"/>	
									<input type= "submit" name= "bouton_repondre_lien" class= "bouton_lien_repondre" value= "ACTUALISER LA PAGE"/>
							</section>
							
							<input type= "hidden" name= "nbResultat" value= "<?php echo $_POST['nbResultat']; ?>"/>
							<input type= "hidden" name= "<?php echo $name; ?>" value= "<?php echo $_POST[$numeroID]; ?>"/>
							<input type= "hidden" name= "<?php echo $numeroID; ?>" value= "<?php echo $_POST[$numeroID]; ?>"/>
					</form>

					<?php 

						  } // fin de condition si la personne est connecté

						  //la personne n'est pas connecté, on affiche un boutton de connexion
						  else{

						  	?><br/>CONNECTEZ-VOUS POUR ENVOYER DES MESSAGES<br/><br/>
						  	<a href= "<?php $url = $this->get('router')->generate('ligues_platform_forum_compte', array(),true); echo $url; ?>">
						  		<input type= "button" name= "lien_connexion" class= "bouton_valider_repondre" value= "CONNEXION"/>
						  	</a>
						  	<?php
						  }
					?>
 						</section>
				
				

						<?php	
						$end= 1;
					} // FIN IF
					
				}	// FIN WHILE

			?>
		</section>
	</body>

	<?php include('footer.html.php'); ?>	<!-- footer -->
	
</html>