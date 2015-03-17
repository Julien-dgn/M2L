
		<header id= "header">							<!-- Header -->
			<section id= "site_forum">					<!-- Lien qui permet de passer du site au forum -->
				

				

				<a href="">
					<section id= "site">
						<br/>SITE
					</section>
				</a>

				<a href="">
				<section id= "forum">
					<br/>FORUM
				</section>
				</a>
				
			</section>

			<section id= "menue">						<!-- Menu -->
				<a href= " <?php $url = $this->get('router')->generate('ligues_platform_forum', array(),true); echo $url; ?> " >
					<section id= "accueil">
						<br/>ACCUEIL
					</section>
				</a>

				
					<a href=" <?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre', array(),true); echo $url; ?>">
						<section id= "espace_membre">
							<br/>ESPACE MEMBRE
						</section>
					</a>
				
				<a href=" <?php $url = $this->get('router')->generate('ligues_platform_forum_compte', array(),true); echo $url ?> ">
					<section id= "compte">
						<br/><?php if(!empty($_SESSION['pseudo'])){echo $_SESSION['pseudo'];} else{ echo 'COMPTE'; }?>
					</section>
				</a>

				<a href=" <?php $url = $this->get('router')->generate('ligues_platform_forum_compte', array(),true); echo $url ?> ">
					<section id= "logo">
						<?php 
							if(!empty($_SESSION['pseudo'])){
							include('connexionBase.html.php');
							$req =$base->query('SELECT * FROM compte WHERE pseudo = \''.$_SESSION['pseudo'].'\'');
							$Select = $req->fetch(); ?> 
							<img src= "http://localhost/Symfony/web/<?php echo$Select['avatar'];?>"/> <?php } ?>
					</section>
				</a>

				<a href=" http://localhost/Symfony/web/app_dev.php/MaisonDesLigues-forum-messagerie ">
				<section id= "messagerie">	<br/>
						 MESSAGERIE 
				</section> 

				<a href="">
					<section id= "support_aide">
						<br/>SUPPORT/BUG
					</section>
				</a>
			</section>
		</header> <br/>