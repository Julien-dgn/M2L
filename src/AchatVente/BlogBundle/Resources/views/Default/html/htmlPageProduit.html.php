<html>
	<?php
		// head -- title
		include('head/head.html.php');

		// menue
		include('menue/menue.html.php');
		include('php/rechercheProduit.html.php');
	?>

	<body>
		<div id= "page">
			<section id= "banniere">
			</section>

			<section id= "zone_recherche">
				<br/>
				
				<div id= "titre_recherche">RECHERCHE:</div>
				<div id= "formulaire_recherche">
					<br/>
					<div class= "text">Nom:</div>
					<div class= "textInput">
						<input type= "text" name= "nom_produit" style= "width:100px"/>
					</div>
					<br/>
					<div class= "text">Type de produit:</div>
					<div class= "textInput">
						<input type= "text" name= "type_produit" style= "width:100px"/>
					</div>
					<br/>
					<div class= "text">Prix:</div>
					<div class= "textInput">
						<input type= "text" name= "prix_produit" style= "width:100px"/>
					</div>
					<br/>
					<input type= "submit" name= "boutton_recherche" class= "buttonActionCompte" style= "background-color: Teal; margin-top: 5%;" value= "Rechercher"/>
				</div>
			</section>

		<?php while($resultat= $recherche->fetch()){ ?>
			<section id= "liste_produit">
				<img src= "http://localhost/Symfony/web/<?php echo$resultat['image_produit']; ?>" style= "height:129px; width: 150px; border-radius:7px; border:2px solid gray; float:left;"/>
				
				<div id= "prix_produit"><?php echo $resultat['prix'].'€'; ?>
					<input type= "submit" name= "acheter_produit" class= "buttonActionCompte" style= "background-color: green; float: right;" value= "Ajouter au panier" />
				</div>
				<textarea name= "description_produit" rows= "5" cols= "45" readonly= "readonly" style= "background-color: #dfdfdf; font-family: Tahoma;"><?php echo $resultat['detail_produit'];?></textarea>
				<br/>
				<div id= "nom_produit"><?php echo $resultat['nom_produit']; ?></div>
			</section>
		<?php } ?>
		</div>
	</body>


	<?php include('footer/footer.html.php'); ?>
</html>