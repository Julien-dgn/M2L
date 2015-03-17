<?php
	include('connexionBase.html.php');  // connexion base de donnée

	if(!empty($_POST['boutton_supprimer']) && !empty($_SESSION['pseudo']) && !empty($_POST['pseudo']) && $_SESSION['pseudo'] == $_POST['pseudo']){
								$base->exec('UPDATE reponse_article SET message = "--Message supprimé--" WHERE id = \''.$_POST['id'].'\' ');
								echo 'Message supprimé';
							}
	else{
			$req= $base->query('SELECT message, pseudo FROM article WHERE id= \''.$_POST['id'].'\' ');
							$recherche= $req->fetch();
							if(!empty($_POST['boutton_supprimer']) && empty($_SESSION['pseudo']) || 
								!empty($_POST['boutton_supprimer']) && $recherche['pseudo'] != $_SESSION['pseudo']){
								?><script> alert('Vous ne pouvez pas supprimer ce message')</script><?php
							}
			?>
		<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_voir_article_commentaire', array(),true); echo $url; ?>">
			Voulez-vous vraiment supprimer ce message ? <br/><br/><br/>
			<input type= "submit" name= "boutton_supprimer" class= "bouton_valider_repondre" value= "Supprimer"/>
			<input type= "hidden" name= "pseudo" value= "<?php echo $recherche['pseudo'];?>"/>
			<input type= "hidden" name= "supprimer" value= "supprimer"/>
			<input type= "hidden" name= "id" value= "<?php echo $_POST['id'];?>"/>
		</form>
			<?php
		}
?>