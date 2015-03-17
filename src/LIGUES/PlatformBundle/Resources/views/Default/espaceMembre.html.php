<html>
<?php session_start(); ?>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>		<!-- header -->

	<body>									
		<section id= "pageEspace_membre">	<!-- CODE -->
			<section id= "titre_emplacement"><br/>PAGE: ESPACE MEMBRE</section><br/><br/>

			<br/><br/>
			<a href= "<?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_news', array(),true); echo $url; ?>">
				<section id= "espace_membre_news"><br/>NEWS</section>
			</a>
			<br/><br/>

			<a href= " <?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_categorie_membre', array(),true); echo $url; ?>">
				<section id= "espace_membre_categorie"><br/>
					CATEGORIE D'ARTICLE DES MEMBRES
				</section>
			</a>
			<br/><br/>
			
			<a href= "">
				<section id= "espace_membre_aide_question">
					<br/>AIDE/QUESTION
				</section>
			</a>
		</section>
	</body>

	<?php include('footer.html.php'); ?>	<!-- footer -->
</html>
