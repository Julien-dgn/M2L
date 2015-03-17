<?php session_start(); ?>
<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>	<!-- header -->
	
	<body>



<?php 
include('connexionBase.html.php');
if(!empty($_POST['modifier'])){

$req= $base->query('SELECT * FROM compte WHERE pseudo = \''.$_SESSION['pseudo'].'\'');
$Select = $req->fetch();



if(empty($_POST['nouveaupseudo'])){
	 
	 $_POST['nouveaupseudo'] = $Select['pseudo'];

	}

if(empty($_POST['ancienmdp'])){
	$_POST['ancienmdp'] = $Select['password'];
}

if(empty($_POST['nouveaumdp'])){
	$_POST['nouveaumdp'] = $Select['password'];
}

if(empty($_POST['renouveaumdp'])){	
	$_POST['renouveaumdp'] = $Select['password'];
}

if(empty($_POST['newemail'])){
	$_POST['newemail'] = $Select['email'];
}

if(empty($_POST['newhobbie'])){
	$_POST['newhobbie'] = $Select['hobbie'];
}



$req = $base->exec('UPDATE compte SET pseudo = \''.$_POST['nouveaupseudo'].'\' ,password = \''.$_POST['nouveaumdp'].'\' ,email= \''.$_POST['newemail'].'\' ,hobbie = \''.$_POST['newhobbie'].'\' WHERE pseudo = \''.$_SESSION['pseudo'].'\'');

$_SESSION['pseudo'] = $_POST['nouveaupseudo'];


}

if(!empty($_POST['modifieravatar'])){

$req= $base->query('SELECT * FROM compte WHERE pseudo = \''.$_SESSION['pseudo'].'\'');
$Select = $req->fetch();

$file = basename($_FILES["newavatar"]["name"]);
$req = $base->exec('UPDATE compte SET avatar = \''.$file.'\' WHERE pseudo = \''.$_SESSION['pseudo'].'\'');
move_uploaded_file($_FILES['newavatar']['tmp_name'], $file);// télécharge le document
}


?><section id="pagemodifier">
	<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_compte_modifier', array(),true); echo $url; ?> " enctype="multipart/form-data">
					Pseudo: <input type= "text" name= "nouveaupseudo"/><br/>
					Ancien mot de passe: <input type= "password" name= "ancienmdp"/><br/>
					Nouveau mot de passe: <input type= "password" name= "nouveaumdp"/><br/>
					Retaper le nouveau mot de passe<input type= "password" name= "renouveaumdp"/><br/>
					Email: <input type= "text" name= "newemail"/><br/>
					Hoobie: <input type= "text" name= "newhobbie"/><br/>
							<input type= "hidden" name= "newnomavatar" value= "avatar1"/><br/>
				<input type= "submit" name= "modifier" value= "modifier"/><br/><br/><br/>
				

				Avatar: <input type= "file" name= "newavatar"/> <br/><br/><br/><input type= "submit" name= "modifieravatar" value= "modifieravatar"/><br/>
  </section>
	</form>
	    </body>

	<?php include('footer.html.php'); ?>	<!-- footer -->
</html>
