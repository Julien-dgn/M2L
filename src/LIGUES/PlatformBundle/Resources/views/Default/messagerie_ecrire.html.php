<?php session_start(); ?>
<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>	<!-- header -->
	
	<body>
	<?php if(!empty($_POST['envoyer'])){
		include('connexionBase.html.php');
		$req = $base->prepare('INSERT INTO messagerie(expediteur, destinataire, contenue, visionner) VALUES (?,?,?,"non")');  //insert dans la base de donné
										$req->execute(array($_SESSION['pseudo'], $_POST['destinataire'], $_POST['nouveaumessage']));  //prend les variables $_POST comme paramètres
										$req->closeCursor();
	
} ?>

		<section id="pagemodifier">
	<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_messagerie_ecrire', array(),true); echo $url; ?> " enctype="multipart/form-data"> 
	<input type="text" name= "destinataire"/>
	<input type="textarea" name= "nouveaumessage"/>
	<input type= "submit" name= "envoyer" value= "envoyer"/><br/><br/><br/>
	    </body>
	</section>

	<?php include('footer.html.php'); ?>	<!-- footer -->
</html>