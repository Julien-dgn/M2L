<html>
	<?php
		// head -- title
		include('head/head.html.php');
		// menue
		include('menue/menue.html.php');
	?>

	<body>
		<div id= "page">

			<section id= "banniere">
				<br/>MAISON DES LIGUES<br/><br/>
				ACHAT - VENTE
			</section>

			<section id= "slider">
				<br/>
					<!-- slider -->
					<section id= "bordure_slider">
						<img id= "image1" src= "http://localhost/Symfony/web/bundles/image_projet/image_de_fond_football.png" style= "width:650px"/>
						<img id= "image2" src= "http://localhost/Symfony/web/bundles/image_projet/bollon_foot.png" style= "width:0px"/>
						<img id= "image3" src= "http://localhost/Symfony/web/bundles/image_projet/image_de_fond_football.png" style= "width:0px"/>
					</section>
					<!-- flèche "<" + ">" -->
					<input type= "button" name= "boutton_gauche" id= "boutton_gauche" value= "<"/>
					<input type= "button" name= "boutton_droite" id= "boutton_droite" value= ">"/>
			</section>
		</div>
	</body>


	<?php include('footer/footer.html.php'); ?>
</html>