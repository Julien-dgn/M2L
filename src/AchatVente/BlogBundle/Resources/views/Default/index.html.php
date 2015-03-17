<?php

	class AchatVente{

		//Charge le html
			function HtmlPageAccueil(){
				if(empty($_POST['pageProduitButton']) && empty($_POST['pageCompteButton']) && empty($_POST['pagePanierButton'])){
					include('html/htmlPageAccueil.html.php');
				}	
			}
			function HtmlPageProduit(){
				if(!empty($_POST['pageProduitButton'])){
					include('php/connexion_Base/connexionBase.html.php');
					include('html/htmlPageProduit.html.php');
				}
			}
			function HtmlPageCompte(){
				if(!empty($_POST['pageCompteButton'])){
					include('php/connexion_session/session_start.html.php');
					include('php/connexion_Base/connexionBase.html.php');
					include('html/htmlPageCompte.html.php');
				}
			}
			function HtmlPagePanier(){
				if(!empty($_POST['pagePanierButton'])){
					include('html/htmlPagePanier.html.php');
				}
			}
		//Charge le css
			function CssPageAccueil(){
				include('css/cssPageAccueil.html.php');
			}
		//Charge les méthodes
			function EffectOpen(){
				//effet d'ouverture d'une page
				include('method/effetJavaOpen.html.php');
			}
			function EffectOpenElementAccueil(){
				if(empty($_POST['pageProduitButton']) && empty($_POST['pageCompteButton']) && empty($_POST['pagePanierButton'])){
					//effet d'ouverture de tous les éléments de la page accueil
					include('method/effetJavaOpenAccueil.html.php');
				}	
			}
			function SliderAccueil(){
				//change l'image du slider
				include('method/sliderJava.html.php');
			}
			function ActionButtonCompte(){
				if(!empty($_POST['pageCompteButton'])){
					//ouvre un champs d'action
					include('method/actionButtonCompteJava.html.php');
				}
			}
			function EffectOpenElementCompte(){
				if(!empty($_POST['pageCompteButton'])){
					//effet d'ouverture de tous les éléments de la page compte
					include('method/effetJavaOpenCompte.html.php');
				}
			}
	}


$cssAccueil= new AchatVente();	// Créer un objet AchatVente

$cssAccueil->HtmlPageAccueil();	// Charge la page acceuil
$cssAccueil->HtmlPageProduit(); // Charge la page produit
$cssAccueil->HtmlPageCompte();	// Charge la page compte
$cssAccueil->HtmlPagePanier();	// Charge la page panier
$cssAccueil->CssPageAccueil();	// Charge le css de la page acceuil
$cssAccueil->EffectOpen();	// Charge l'animation d'ouverture d'une page
$cssAccueil->EffectOpenElementAccueil(); // Charge les animations de la page d'accueil
$cssAccueil->SliderAccueil();	// Charge la fonction de changement d'image
$cssAccueil->ActionButtonCompte();	// Charge la fonction d'action des bouttons
$cssAccueil->EffectOpenElementCompte(); // Charge l'animation de la page compte
?>