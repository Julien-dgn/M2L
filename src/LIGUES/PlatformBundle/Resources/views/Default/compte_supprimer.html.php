<?php session_start(); ?>
<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>	<!-- header -->
	
	<body>



<?php 
	include('connexionBase.html.php');

	$req = $base->exec('UPDATE compte SET compte_actif = "desactif" WHERE pseudo = \''.$_SESSION['pseudo'].'\'');

	echo 'votre compte a bien été supprimer';


	session_unset();
	session_destroy();
				
?>

