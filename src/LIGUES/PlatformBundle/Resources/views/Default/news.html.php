<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>		<!-- header -->

	<body>									
		<section id= "categorieMembre">		<!-- CODE -->
			<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_ajouter_article_formulaire', array(),true); echo $url; ?>">
					<section id= "titre_emplacement">
						<br/>
						<a href= " <?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre', array(),true); echo $url; ?>">
						<input type= "button" name= "retour" class= "bouton_lien_repondre" value= "RETOUR"/>
						</a>
						NEWS -- LISTE DES 5 DERNIERS ARTICLES POSTE
					</section>
					<br/>
			</form>
			<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_voir_article', array(),true); echo $url; ?>">
					<section id= "affiche_article_foot">
						<?php
						include('connexionBase.html.php');
						//initialisation des variables
						$nombreLimit1= 0;
						$nombreLimitV= ', ';
						$nombreLimit2= 4;
						$requete= 'SELECT id, titre_article, categorie_article, message FROM article WHERE categorie_article = "FOOTBALL" OR categorie_article= "TENNIS" OR categorie_article= "HANDBALL" LIMIT 5;';

						//condition 
						if(!empty($_POST['boutton_page']) && $_POST['boutton_page'] == 1){
							$nombreLimit1 =0;
						}
						else if(!empty($_POST['boutton3_page'])){
							$nombreLimit1= $_POST['boutton3_page']*4-4;
						}
						else if(!empty($_POST['boutton2_page'])){
							$nombreLimit1= $_POST['boutton2_page']*4-4;
						}
						else if(!empty($_POST['boutton_page'])){
							$nombreLimit1= $_POST['boutton_page']*4-4;
						}

						$touteRequete= $requete.$nombreLimit1.$nombreLimitV.$nombreLimit2;
						$req= $base->query($touteRequete); // requête sql SELECT

						$nomInput =0;
						$numeroID=0;
						$nbResultat=0;
						while($recherche= $req->fetch()){
							$numeroID++;
							$nomInput++;
							$nbResultat++;
							echo '<section id= "case_select"><br/>'.'<section id= "espace_titre">TITRE: '.'</section>'.'<section id= "color_yellow">'.$recherche['titre_article'].'</section>'.
							'<section id= "espace_titre2">'.' CATEGORIE: '.'</section>'.'<section id= "color_yellow2">'.$recherche['categorie_article'].'</section>';
							?> <input type= "submit" name= "voir_article<?php echo$nomInput; ?>" class= "bouton_lien_repondre" value= "VOIR">
							   <input type= "hidden" name= "id<?php echo $numeroID?>" value= "<?php echo $recherche['id']; ?>"/>
							   <input type= "hidden" name= "retour_news" value= "valeur"/>
							</section><br/><br/>
							<?php
						}
						?>
						
						<section id= "titre_emplacement_bas">
							<br/>NOMBRE DE RESULTAT: <select name= "nbResultat" class= "select"><option id= "<?php echo $nbResultat; ?>"><?php echo $nbResultat; ?></option></select>
			</form>	
						</section>
					</section>
			
		</section>
	</body>

	<?php include('footer.html.php'); ?>	<!-- footer -->
</html>