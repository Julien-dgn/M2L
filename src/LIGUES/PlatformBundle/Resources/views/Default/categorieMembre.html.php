<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>		<!-- header -->

	<body>									
		<section id= "categorieMembre">	<!-- CODE -->
			<section id= "titre_emplacement"><br/>
				
					<a href= " <?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre', array(),true); echo $url; ?>">
						<input type= "button" name= "retour" class= "boutton" value= "RETOUR"/>
					</a>
				
				-- PAGE: CATEGORIE D'ARTICLE DES MEMBRES
			</section><br/><br/>

		<a href= " <?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_categorie_foot', array(),true); echo $url; ?>">
			<br/><br/>
			<section id= "categorie_foot"><br/>
				FOOTBALL
			</section>
		</a>
			<br/><br/><section id= "categorie_tennis"><br/>TENNIS</section>
			<br/><br/><section id= "categorie_handball"><br/>HANDBALL</section>
			
			</section>
		</section>
	</body>

	<?php include('footer.html.php'); ?>	<!-- footer -->
</html>