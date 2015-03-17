<html>
<?php session_start(); ?>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>	<!-- header -->
	
	<body>

			<section id= "pageCompte">
		<?php

			if(!empty($_POST['deconnexion'])){
					session_unset();
					session_destroy();
				?>
					
					<br/><br/><br/><br/><section id= "changement">VOUS ETES DECONNECTE !</section><br/><br/><br/>
						Cliquer sur le lien pour retourner à l'identification: <a href= "<?php $url = $this->get('router')->generate('ligues_platform_forum_compte', array(),true); echo $url; ?>">
									<input type= "button" name= "lien_deconnexion" value= "Identification" class= "boutton"/>
								</a> <?php
			

				}
			else if(!empty($_SESSION['pseudo'])){
				
						$req= $base->query('SELECT avatar FROM compte WHERE pseudo = \''.$_SESSION['pseudo'].'\'');
						$Select = $req->fetch(); ?>
						<img id="imgcompte" src="http://localhost/Symfony/web/<?php echo$Select['avatar'];?>"/>

			<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_compte_modifier', array(),true); echo $url; ?>">
				<br/><br/><br/><input type= "submit" name= "modif" value= "Modifier son compte" class= "boutton"/></form>
			<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_compte_supprimer', array(),true); echo $url; ?>">
				<br/><br/><br/><input type= "submit" name= "suprrimer" value= "Supprimer son compte" class= "boutton"/></form>
		 <form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_compte', array(),true); echo $url; ?>">
				<br/><br/><br/><input type= "submit" name= "deconnexion" value= "se deconnecter" class= "boutton"/>
				
			</form> <?php

				
			}
			else if(empty($_SESSION['pseudo']) AND !empty($_POST['pseudo']) AND !empty($_POST['password']))	// Si l'utilisateur à rempli tous les champs on vérifie ce qu'il à saisit
					{
							include('connexionBase.html.php');
							$requete = $base->prepare('SELECT COUNT(*) FROM compte WHERE pseudo= :pseudo AND password = :password');
						
							$requete->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
							$requete->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
							$requete->execute();
						
							$resultat = $requete->fetch();
							$requete->closeCursor();


							if($resultat[0] == 0)
							{
								?> <br/><br/><br/><section id= "error"><b>PSEUDO OU MOT DE PASSE INVALIDE !</b></section><br/><br/>
								<a href= "<?php $url = $this->get('router')->generate('ligues_platform_forum_compte', array(),true); echo $url; ?>">
									<input type= "button" name= "lien_deconnexion" value= "RETOUR" class= "boutton"/>
								</a> <?php
							}

							else
							{
								$pseudo = $_POST['pseudo'];
								$_SESSION['pseudo'] = $pseudo;
								?> <br/><br/><br/><section id= "valide"><b>VOUS ETES CONNECTE !</b></section>
								<br/><br/>Cliquer sur le lien pour accéder à votre compte:<br/><br/> <a href= "<?php $url = $this->get('router')->generate('ligues_platform_forum_compte', array(),true); echo $url; ?>">
									<input type= "button" name= "lien_deconnexion" value= "compte" class= "boutton"/>
								</a> <?php
							}
					}
					
					else { 
						$url = $this->get('router')->generate('ligues_platform_forum_compte', array(),true); 
						
							?>	<br/><br/><br/>CONNEXION:<br/><br/><br/><br/><br/><br/><br/> <!-- connexion -->
							<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_compte', array(),true); echo $url; ?>">
								<section id= "pseudo">
									PSEUDO: <input type= "text" name= "pseudo"/>
								</section>
								<section id= "password">
									MOT DE PASSE: <input type= "password" name= "password"/>
								</section>
								<section id= "validerConnexion">
									<br/><br/><br/><br/><br/><input type= "submit" name= "validerConnexion" class= "boutton" value= "connexion"/>
								</section>
								<section>
									<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
									Pas de compte ? 
								<a href= "<?php $url = $this->get('router')->generate('ligues_platform_forum_compte_formulaire', array(),true); echo $url ?>"> 
									<input type= "button" name= "lien" class= "bouton_valider_repondre" value= "CREER UN COMPTE"/>
								</a>
								</section>
							</form>

				<?php  	
					if(!empty($_POST['validerConnexion']) && empty($_POST['pseudo']) && empty($_POST['password'])) // Si pseudo et password sont vide
					{
								?><script> alert('Tout les champs sont vide !')</script> <?php	
									
					}
					if(empty($_POST['pseudo']) && !empty($_POST['password']) || !empty($_POST['pseudo']) && empty($_POST['password'])){
						?><script> alert('Champ pseudo ou mot de passe vide !')</script> <?php	
					}
				} ?>
			</section>
	</body>

	<?php include('footer.html.php'); ?><!-- footer -->
</html>
