<?php include('connexion_start.html.php'); ?>
<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>		<!-- header -->

	<body>

		<section id= "titre_emplacement"><br/>PAGE: AJOUTER UN ARTICLE -- CATEGORIE D'ARTICLE:
							<select name= "article_foot" class= "select">
								<option id= "<?php echo $_POST['categorie_article']; ?>"><?php echo $_POST['categorie_article']; ?></option>
							</select>
		</section>
		<br/><br/><br/>
		
		<section id= "Page_ajouter_article2"> <!-- CODE -->
			<?php 
				include('connexionBase.html.php');

				if(!empty($_POST['titre_article']) && !empty($_POST['categorie_article']) && !empty($_POST['message']) ){	// si tous les champs sont remplis
					$requete= $base->prepare('SELECT COUNT(*) FROM article WHERE titre_article= :titre_article');

					$requete->bindValue(':titre_article', $_POST['titre_article'], PDO::PARAM_STR);
					$requete->execute();
					$resultat = $requete->fetch();

					if($resultat[0] == 0){																					// s'il n'y à aucun nom d'article déjà créé
						$req= $base->prepare('INSERT INTO article(titre_article, categorie_article, message, pseudo) VALUES(?,?,?,?)');
						$req->execute(array($_POST['titre_article'], $_POST['categorie_article'], $_POST['message'], $_SESSION['pseudo']));

						?> <br/><br/><br/><section id= "valide"><b>ARTICLE CREE AVEC SUCCES !</b></section>
						<br/>
						<a href= "<?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_categorie_membre', array(),true); echo $url; ?>">
						<input type= "button" name= "redirection" class= "boutton" value= "accéder à l'article"/>
						</a>
						<?php
					}
					else{
						?><form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_ajouter_article_formulaire', array(),true); echo $url; ?>">
							<section id= "titre_emplacement"><br/>PAGE: AJOUTER UN ARTICLE -- CATEGORIE D'ARTICLE:
							<select name= "article_foot" class= "select"><option id= "<?php echo $_POST['categorie_article']; ?>"><?php echo $_POST['categorie_article']; ?></option></select></section>

							<br/><br/><br/><section id= "error"><b>LE NOM D'ARTICLE EXISTE DEJA !</b></section>

							<br/><br/><br/><input type= "submit" name= "retour_donne_article" class= "boutton" value= "RETOUR"/>
						  </form>
						<?php
					}
				}
				else{
					?><form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_ajouter_article_formulaire', array(),true); echo $url; ?>">

							<br/><br/><br/><section id= "error"><b>VOUS N'AVEZ PAS REMPLIS TOUS LES CHAMPS!</b></section>

							<br/><br/><br/><input type= "submit" name= "retour_donne_article" class= "boutton" value= "RETOUR"/>
						  </form>
						<?php
				}

			?>
		</section>
	</body>

	<?php include('footer.html.php'); ?>	<!-- footer -->
</html>