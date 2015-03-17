<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>		<!-- header -->

	<body>									
		<section id= "formulaireCompte">	<!-- CODE -->

			<?php 
				if(!empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['age']) && !empty($_POST['hobbie'])){
					include('connexionBase.html.php');

							$req= $base->prepare('SELECT COUNT(*) FROM compte WHERE pseudo = :pseudo');
							$req->bindValue(':pseudo',$_POST['pseudo'],PDO::PARAM_STR);
							$req->execute();
							$resultat = $req->fetch();

								if($resultat[0] == 1){ 
				 					?> <br/><br/> <section id= "error"><b>PSEUDO EXISTANT</b></section> <?php
				 				}
				 				else{
				 					$req2 = $base->prepare('SELECT COUNT(*) FROM compte WHERE email = :email');
									$req2->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
									$req2->execute();
									$resultat2 = $req2->fetch();

									if($resultat2[0] == 1){ 
				 					?> <br/><br/> <section id= "error"><b>EMAIL EXISTANT</b></section> <?php
				 					}
				 					else{
				 						?> <script> alert('FELICITATION VOTRE COMPTE A ETE CREER AVEC SUCCES'); </script><?php

				 						$insert= $base->prepare('INSERT INTO compte(pseudo, password, email, age, hobbie, en_ligne, status) VALUES (?,?,?,?,?,?,"user")');  //insert dans la base de donné
										$insert->execute(array($_POST['pseudo'], $_POST['password'], $_POST['email'], $_POST['age'], $_POST['hobbie'], 'non'));  //prend les variables $_POST comme paramètres
										$insert->closeCursor();
									}
				 				}

				}


			?>

			<section id= "tableau_formulaire_inscription">
				<br/><br/>RENSEIGNEZ  TOUS LES  CHAMPS POUR  S'INSCRIRE <br/><br/><br/><br/><br/><br/>
			
			<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_compte_formulaire', array(),true); echo $url; ?>">
				<section id= "alignement">
					<section id= "pseudo_formulaire">
						<section id= "pseudo_formulaire_alignement">PSEUDO:</section> <input type= "text" name= "pseudo" required />
					</section>
					<section id= "password_formulaire">
						<section id= "password_formulaire_alignement">PASSWORD:</section>  <input type= "password" name= "password" required />
					</section>
					<section id= "email_formulaire">
						<section id= "email_formulaire_alignement">EMAIL:</section> <input type= "text" name= "email" required />
					</section>
					<section id= "age_formulaire">
						<section id= "age_formulaire_alignement">AGE:</section> <input type= "text" name= "age" required />
					</section>
					<section id= "hobbie_formulaire">
						<section id= "hobbie_formulaire_alignement">HOBBIE:</section> <input type= "text" name= "hobbie" required />
					</section>
				
				</section> <!-- Fin section aligenment -->

				<br/><br/><br/>
					<input type= "submit" name= "inscription" value= "Inscription" class= "boutton"/>
			</form><?php
					if(!empty($_POST['inscription']) && empty($_POST['pseudo']) || !empty($_POST['inscription']) && empty($_POST['password']) || !empty($_POST['inscription']) 
						&& empty($_POST['email']) || !empty($_POST['inscription']) && empty($_POST['age']) || !empty($_POST['inscription']) && empty($_POST['hobbie'])){
							?> <script> alert('Tous les champs ne sont pas renseigné !'); </script> <?php

						}
				?>
			</section> <!-- Fin section tableau -->
				
		</section>
	</body>

	<?php include('footer.html.php'); ?>	<!-- footer -->
</html>