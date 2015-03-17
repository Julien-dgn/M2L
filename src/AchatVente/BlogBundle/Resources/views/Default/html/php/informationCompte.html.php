<?php 
	if(!empty($_POST['creer_compte'])) {	// création d'un compte
		if(!empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['age']) && !empty($_POST['hobbie'])){
			$insertBase= $base->prepare('INSERT INTO compte(pseudo, password, email, age, hobbie, en_ligne, status) VALUES (?,?,?,?,?,"non","user")');
			$insertBase->execute(array($_POST['pseudo'], $_POST['password'], $_POST['email'], $_POST['age'], $_POST['hobbie']));
			$creationCompte= "reussie";
			echo '<section style= "text-align:center; color:green;">Creation de compte reussie</section>';
		}
		else{
			echo '<section id= "messageErreur" style= "text-align:center; color:#b70000; background-color: #ff795f;">Tous les champs ne sont pas remplit</section>';
		}
	}

	if(!empty($_POST['deconnexion'])){	// deconnexion
		session_unset();
	}
	else if(!empty($_POST['connexion']) || !empty($creationCompte)){	// vérification de connexion
			
		$requete = $base->prepare('SELECT COUNT(*) FROM compte WHERE pseudo= :pseudo_connexion AND password = :password');
						
							$requete->bindValue(':pseudo_connexion', $_POST['pseudo_connexion'], PDO::PARAM_STR);
							$requete->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
							$requete->execute();
						
							$resultat = $requete->fetch();
							$requete->closeCursor();
		if($resultat[0] == 0){	// message d'erreur si le pseudo ou le mot de passe est faux
			echo '<section id= "messageErreur" style= "text-align:center; color:#b70000; background-color: #ff795f;">Pseudo ou mot de passe invalide</section>';
		}
		else{	// les identifiants sont correcte, on créer la session
			$pseudo = $_POST['pseudo_connexion'];
			$_SESSION['pseudo'] = $pseudo;
		}
	}
	if(!empty($_SESSION['pseudo'])){	// l'utilisateur est connecté
		$requete_select= $base->query('SELECT pseudo, email, age, hobbie FROM compte WHERE pseudo = \''.$_SESSION['pseudo'].'\' ');
		$result= $requete_select->fetch();

			if(!empty($_POST['actionVendre'])){ 	// ajoute un objet en vente
				if(!empty($_POST['nom_produit']) && !empty($_POST['prix_produit']) && !empty($_POST['categorie']) && isset($_FILES['fichier']) && !empty($_POST['detail_produit']) && !empty($_POST['nombre_stock']) && $_POST['nombre_stock'] > 0 && $_POST['prix_produit'] > 0 ){
					$file = basename($_FILES["fichier"]["name"]);
					$vente= $base->prepare('INSERT INTO produit(nom_produit, pseudo_vendeur, detail_produit, image_produit, prix, categorie_produit, stock) VALUES(?,?,?,?,?,?,?)');
					$vente->execute(array($_POST['nom_produit'], $_SESSION['pseudo'], $_POST['detail_produit'], $file, $_POST['prix_produit'], $_POST['categorie'], $_POST['nombre_stock'] ));

					$file = basename($_FILES["fichier"]["name"]);
					move_uploaded_file($_FILES['fichier']['tmp_name'], $file);// télécharge le document
					echo '<section id= "messageErreur" style= "text-align:center; color:green; background-color: #94f545;">Article ajouté avec succes</section>';
				}
				else if(!empty($_POST['nombre_stock']) && $_POST['nombre_stock'] < 1 && !empty($_POST['prix_produit']) && $_POST['prix_produit'] < 1){
					echo '<section id= "messageErreur" style= "text-align:center; color:#b70000; background-color: #ff795f;">Le champs: Quantité est inférieure à 1 ! - - Le champs: Prix est inférieure à 1 !</section>';
				}
				else if(!empty($_POST['nombre_stock']) && $_POST['nombre_stock'] < 1){
					echo '<section id= "messageErreur" style= "text-align:center; color:#b70000; background-color: #ff795f;">Le champs: Quantité est inférieure à 1 !</section>';
				}
				else if(!empty($_POST['prix_produit']) && $_POST['prix_produit'] < 1){
					echo '<section id= "messageErreur" style= "text-align:center; color:#b70000; background-color: #ff795f;">Le champs: Prix est inférieure à 1 !</section>';
				}
				else{
					echo '<section id= "messageErreur" style= "text-align:center; color:#b70000; background-color: #ff795f;">Tous les champs ne sont pas remplis</section>';
				}
			}
		?>
		<section id= "information_compte">
						<br/>Information du compte:
						<div id= "info">
							<div class= "text">Pseudo:</div> <div class= "textInput"><?php echo $result['pseudo']; ?></div> <br/>
							<div class= "text">Email:</div> <div class= "textInput"><?php echo $result['email']; ?></div> <br/>
							<div class= "text">Age:</div> <div class= "textInput"><?php echo $result['age']; ?></div><br/>
							<div class= "text">Hobbie:</div> <div class= "textInput"><?php echo $result['hobbie']; ?></div><br/><br/>
						<form method= "post" action= "">
							<input type= "hidden" name= "pageCompteButton" class= "pageProduitCompteButton" value= "Compte"/>
							<input type= "submit" id= "deconnexion" name= "deconnexion" class= "buttonActionCompte" style= "background-color: red;" value= "Deconnexion"/>
						</form>
						</div>

						<div id= "cadreVendre">
						<form method= "post" action= "" enctype="multipart/form-data">
							<div class= "text">Nom du produit:</div> 
							<div class= "textInput">
								<input type= "text" name= "nom_produit" value= "<?php if(!empty($_POST['nom_produit'])){echo $_POST['nom_produit'];} ?>"/>
							</div>
							<br/>
							<div class= "text">Prix:</div>
							<div class= "textInput">
								<input type= "number" name= "prix_produit" value= "<?php if(!empty($_POST['prix_produit'])){echo $_POST['prix_produit'];}else{ echo '1';} ?>"/>€
							</div>
							<br/>
							<div class= "text">Catégorie:</div>
							<div class= "textInput">
								<select name= "categorie" style= "width:173px">
									<?php 
										if(!empty($_POST['categorie'])){
												?><option id= "<?php echo $_POST['categorie']; ?>"><?php echo $_POST['categorie']; ?></option> <?php

											if($_POST['categorie'] != 'Handball'){
												echo '<option id= "Handball">Handball</option>';
											}
											if($_POST['categorie'] != 'Foot'){
												echo '<option id= "Foot">Foot</option>';
											}
											if($_POST['categorie'] != 'Tennis'){
												echo '<option id= "Tennis">Tennis</option>';
											}
										}// fin grand if
										else{
									?>
											<option id= "Handball">Handball</option>
											<option id= "Foot">Foot</option>
											<option id= "Tennis">Tennis</option>
									<?php }; ?>
								</select>
							</div>
							<div class= "text">Quantité:</div> 
								<div class= "textInput">
									<input type= "number" name= "nombre_stock" value= "<?php if(!empty($_POST['nombre_stock'])){echo $_POST['nombre_stock'];}else{ echo '1';} ?>">
								</div>
							<br/>
							<div class= "text">Image du produit:</div> 
								<div class= "textInput">
									<input type= "file" name= "fichier"/>
								</div>
							<br/><br/><br/><br/>

							Detail du produit: <br/><textarea name= "detail_produit" rows= "3" cols="30" ></textarea>
							<br/>
							<input type= "hidden" name= "pageCompteButton" class= "pageProduitCompteButton" value= "Compte"/>
							<input type= "submit" id= "actionVendre" name= "actionVendre" class= "buttonActionCompte" style= "background-color: green; margin-top:2%" value= "Mettre en vente"/>
						</form>
						</div>
					</section>

					<section id= "action_compte">
						<input type= "button" id= "vendre" name= "vendre" class= "buttonActionCompte" style= "background-color: green;" value= "Mettre en vente"/>
						<br/><br/>
						<input type= "button" name= "historique_achat" class= "buttonActionCompte" style= "background-color: orange;" value= "Historique des achats"/>
						<br/><br/>
						<input type= "button" name= "historique_vente" class= "buttonActionCompte" style= "background-color: DarkOrange;" value= "Historique des ventes"/>
						<br/><br/>
						<input type= "button" name= "modifier_compte" class= "buttonActionCompte" style= "background-color: Teal;" value= "Modifier le compte"/>
						<br/><br/>
						<input type= "button" name= "option_preference" class= "buttonActionCompte" style= "background-color: DarkSlateGray;" value= "Parametre du site"/>
					</section>
<?php	}	//l'utilisateur est déconnecté
		else if(empty($_SESSION['pseudo'])){ ?>
			<section id= "information_compte">
				- Connexion -
					<div id= "info">
						<br/>
						<form method= "post" action= "">
							<div class= "text">Pseudo:</div> <div class= "textInput"><input type= "text" name= "pseudo_connexion" value= "<?php if(!empty($_POST['pseudo_connexion'])){echo $_POST['pseudo_connexion'];} ?>"/></div>
							<br/><br/>
							<div class= "text">Mot de passe:</div> <div class= "textInput"><input type= "password" name= "password"/></div>
							<br/>
							<br/>
							<input type= "hidden" name= "pageCompteButton" class= "pageProduitCompteButton" value= "Compte"/>
							<input type= "submit" id= "connexion" name= "connexion" class= "buttonActionCompte" style= "background-color: green;" value= "Connexion"/>
						</form>
					</div>

					<div id= "cadreVendre"> <!-- cadre créer compte -->
						<form method= "post" action= "">

						<div class= "text">Pseudo:</div>
						<div class= "textInput">
							<input type= "text" name= "pseudo" value= "<?php if(!empty($_POST['pseudo'])){echo $_POST['pseudo'];} ?>"/>
						</div>
						<br/><br/>
						<div class= "text">Email:</div>
						<div class= "textInput">
							<input type= "text" name= "email" value= "<?php if(!empty($_POST['email'])){echo $_POST['email'];} ?>"/>
						</div>
						<br/><br/>
						<div class= "text">Age:</div>
						<div class= "textInput">
							<input type= "text" name= "age" value= "<?php if(!empty($_POST['age'])){echo $_POST['age'];} ?>"/>
						</div>
						<br/><br/>
						<div class= "text">Hobbie:</div>
						<div class= "textInput">
							<input type= "text" name= "hobbie" value= "<?php if(!empty($_POST['hobbie'])){echo $_POST['hobbie'];} ?>"/>
						</div>
						<br/><br/>
						<div class= "text">Mot de passe:</div>
						<div class= "textInput">
							<input type= "password" name= "password" value= "<?php if(!empty($_POST['password'])){echo $_POST['password'];} ?>"/>
						</div>
						
							<input type= "hidden" name= "pageCompteButton" class= "pageProduitCompteButton" value= "Compte"/>
							<br/><br/>
							<input type= "submit" id= "creer_compte" name= "creer_compte" class= "buttonActionCompte" style= "background-color: DodgerBlue;" value= "Créer"/>
						</form> 
					</div>
			</section>

			<section id= "action_compte">
						<input type= "button" id= "vendre" name= "creer_compteCase" class= "buttonActionCompte" style= "background-color: DodgerBlue;" value= "Creer un compte"/>
			</section>
<?php	}