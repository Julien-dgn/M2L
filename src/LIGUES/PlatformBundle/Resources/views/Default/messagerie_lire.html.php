<?php session_start(); ?>
<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>	<!-- header -->
	
	<body>
    <?php
		include('connexionBase.html.php');
		$req= $base->query('SELECT * FROM messagerie WHERE destinataire = \''.$_SESSION['pseudo'].'\'');  //insert dans la base de donné
		while($affiche_contenue = $req->fetch()){ ?>
			<section id= "case_commentaire">
			<br/><br/><br/><br/>
			<section id= "info_message">
				<?php echo'['.$affiche_contenue['expediteur'].']';?>
				<br/><br/><?php echo'['.$affiche_contenue['contenue'].']';?>
				<input type="checkbox" name="cocher"/>
				<?php
		
		}								
	
 ?>

		
	    </body>
	</section>
	</section>
		<br/><input type="submit" name="supprimerMessage" value="supprimer"/>
	<?php include('footer.html.php'); ?>	<!-- footer -->
</html>