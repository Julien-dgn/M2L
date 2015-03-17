<?php session_start(); ?>
<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>	<!-- header -->
	
	<body>

		<a href=" <?php $url = $this->get('router')->generate('ligues_platform_forum_messagerie_ecrire', array(),true); echo $url ?> ">
					<section id= "ecriremessage">
						<?php include('connexionBase.html.php'); ?>
						Ecrire un message 
						</a><br/><br/><br/>

						<a href=" <?php $url = $this->get('router')->generate('ligues_platform_forum_messagerie_lire', array(),true); echo $url ?> ">
					<section id= "liremessage">
						<?php include('connexionBase.html.php'); ?>
						lire les messages
						</a>

	    </body>

	<?php include('footer.html.php'); ?>	<!-- footer -->
</html>