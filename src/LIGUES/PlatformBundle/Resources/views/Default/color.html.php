<style>
	
	/* couleur de l'arrière plan */
	html{
	background-color: #373737;
	}


	/* header */

	#header{
	height:145px;
	width: 83%;
	margin-left: 10%;
	text-align: center;
	}

	/* section passer du site au forum */

	#site_forum{
	height:65px;
	width:325px;
	border-bottom:1px solid white;
	margin-left: 37.53%;
	}

	#site{
	-webkit-transition-property:background-image, color;
	height:65px;
	width:161px;
	border-right: 1px solid white;
	border-top-left-radius: 5px;
	background-image: -webkit-linear-gradient(right top, gray 0%, black 100%);
	float: left;
	}

	#site:hover{
	background-image: -webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	}

	#forum{
	-webkit-transition-property:background-image, color;
	height:65px;
	width:161px;
	border-left: 1px solid white;
	background-image: url(http://localhost/Symfony/web/bundles/image_projet/texture_menue.jpg);
	border-top-right-radius: 5px;
	float: left;
	color: black;
	}

	#forum:hover{
	background-image: -webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	}

	/* menue */

	#menue{
	height:80px;
	width:1299px;
	background-image: url(http://localhost/Symfony/web/bundles/image_projet/texture_menue.jpg);
	border-radius: 3px;
	}

	#accueil{
	-webkit-transition-property:background-image, color;
	transition-duration: 0.5s;
	height:80px;
	width:230px;
	float: left;
	border-right: 1px solid white;
	color: black;
	}

	#accueil:hover{
	background-image: -webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	color: white;
	}

	#espace_membre{
	-webkit-transition-property:background-image, color;
	transition-duration: 0.5s;
	height:80px;
	width:230px;
	float: left;
	border-right: 1px solid white;
	color: black;
	}

	#espace_membre:hover{
	background-image: -webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	color: white;
	}

	#compte{
	-webkit-transition-property:background-image, color;
	transition-duration: 0.5s;
	height:80px;
	width:220px;
	float: left;
	border-right: 1px solid white;
	color: black;
	}

	#compte:hover{
	background-image: -webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	color: white;
	}

	#support_aide{
	-webkit-transition-property:background-image, color;
	transition-duration: 0.5s;
	height:80px;
	width:230px;
	float: left;
	color: black;
	}

	#support_aide:hover{
	background-image: -webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	color: white;
	}

	/* Footer */

	#footer{
	height:50px;
	width:83%;
	background-image: url(http://localhost/Symfony/web/bundles/image_projet/texture_menue.jpg);
	margin-left:10%;
	border-radius:3px;
	color:black;
	float: left;
	}

	#editeur_signature{
	text-align:center;
	}

	/* titre de l'emplacement de page */

	#titre_emplacement{
	height:65px;
	width:76.8%;
	background-image: url(http://localhost/Symfony/web/bundles/image_projet/texture_menue.jpg);
	border-radius:15px;
	margin-left:11.5%;
	color:Chocolate;
	text-align: center;
	}

	#titre_emplacement_bas{
	height:65px;
	width:76%;
	background-image: url(http://localhost/Symfony/web/bundles/image_projet/texture_menue.jpg);
	border-radius:15px;
	margin-left:11.5%;
	color:Chocolate;
	float: left;
	margin-top: 0.9%;
	}

	/* couleur lien + soulignement des liens désactivé */

	a:link{
	color:white;
	text-decoration:none; 
	} 

	a:visited{
	color:white;
	}

	#pageAccueil{
	height:600px;
	width:83%;
	margin-left:10%;
	background-image: -webkit-linear-gradient(right top, #d2d2d2 0%, #a5a5a5 100%);
	text-align: center;
	color:white;
	border-radius:3px;
	}

	/* Page espace-membre*/

	#pageEspace_membre{
	height:600px;
	width:83%;
	margin-left:11%;
	text-align: center;
	color:white;
	border-radius:3px;
	}

	#espace_membre_news{
	-webkit-transition-property:background-image, width;
	transition-duration: 1s;
	height:100px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #d2d2d2 0%, #434248 100%);
	border-radius:5px;
	margin-left:11.5%;
	border:1px solid white;
	}

	#espace_membre_news:hover{
	background-image:-webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	width:1050px;
	}

	#espace_membre_categorie{
	-webkit-transition-property:background-image, width;
	transition-duration: 1s;
	height:100px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #d2d2d2 0%, #434248 100%);
	border-radius:5px;
	margin-left:11.5%;
	border:1px solid white;
	}

	#espace_membre_categorie:hover{
	background-image:-webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	width:1050px;
	}

	#espace_membre_aide_question{
	-webkit-transition-property:background-image, width;
	transition-duration: 1s;
	height:100px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #d2d2d2 0%, #434248 100%);
	border-radius:5px;
	margin-left:11.5%;
	border:1px solid white;
	}

	#espace_membre_aide_question:hover{
	background-image:-webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	width:1050px;
	}

	/* categorieMembre */

	#categorieMembre{
	height:600px;
	width:83%;
	margin-left:11%;
	text-align: center;
	color:white;
	border-radius:3px;
	}

	#categorie_foot{
	-webkit-transition-property:background-image, width;
	transition-duration: 1s;
	height:100px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #d2d2d2 0%, #434248 100%);
	border-radius:5px;
	margin-left:11.5%;
	border:1px solid white;
	}

	#categorie_foot:hover{
	background-image:-webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	width:1050px;
	}

	#categorie_tennis{
	-webkit-transition-property:background-image, width;
	transition-duration: 1s;
	height:100px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #d2d2d2 0%, #434248 100%);
	border-radius:5px;
	margin-left:11.5%;
	border:1px solid white;
	}

	#categorie_tennis:hover{
	background-image:-webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	width:1050px;
	}

	#categorie_handball{
	-webkit-transition-property:background-image, width;
	transition-duration: 1s;
	height:100px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #d2d2d2 0%, #434248 100%);
	border-radius:5px;
	margin-left:11.5%;
	border:1px solid white;
	}

	#categorie_handball:hover{
	background-image:-webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	width:1050px;
	}



	/* categorie foot */

	#color_yellow{ 		/* l'id en vrai est: color_black */
	margin-left: 1%;
	color:black;
	float: left;
	width: 200px;
	}

	#color_yellow2{
	margin-left: 1%;
	color:yellow;
	float: left;
	width: 110px;
	}

	#case_select{
	height:70px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #d2d2d2 0%, #434248 100%);
	border-radius:5px;
	margin-left:11.5%;
	}

	#espace_titre{
	float: left;
	margin-left: 20%;
	}

	#espace_titre2{
	float: left;
	margin-left: 10%;
	}

	/* Page ajouter article formulaire*/

	#Page_ajouter_article{
	height:600px;
	width:83%;
	margin-left:11%;
	text-align: center;
	color:white;
	border-radius:30px;
	}

	#formulaire_article{
	height:400px;
	width:500px;
	background-image: -webkit-linear-gradient(right top, #d2d2d2 0%, #a5a5a5 100%);
	border-radius:5px;
	margin-left: 31%;
	}

	#titre_article{
	height: 30px;
	width:500px;
	}

	#titre_article_text{
	text-align: left;
	height: 0px;
	margin-left: 10px;
	}

	#categorie_article{
	height: 30px;
	width:500px;
	text-align: left;
	margin-left: 10px;
	}

	#message_ajout_forum{
	margin-left:10%;
	}

	#ajout_article_valider{
	margin-left: 42%;
	}

	/* Page ajouter article */

	#Page_ajouter_article2{
	height:300;
	width:76.8%;
	margin-left:10%;
	background-image: -webkit-linear-gradient(right top, #d2d2d2 0%, #a5a5a5 100%);
	text-align: center;
	color:white;
	border-radius:30px;
	}

	/* Page Compte */

	#pageCompte{
	height:600px;
	width:1300px;
	margin-left:10%;
	background-image: -webkit-linear-gradient(right top, #d2d2d2 0%, #a5a5a5 100%);
	text-align: center;
	color:white;
	border-radius:3px;
	}

	#pseudo{
	margin-left: 26%;
	float: left;
	}

	#password{
	margin-left: 10%;
	float: left;
	}

	/* class */

	.boutton{
	-webkit-transition-property:background-image;
	cursor:pointer;
	clear: both;
	background-image: -webkit-linear-gradient(right top, #0c4259 0%, #6ac2e7 100%);
	color: white;
	border-radius: 15px;
	}

	.boutton:hover{
	background-image: -webkit-linear-gradient(right top, #0e7e9a 0%, #4fd1f2 100%);
	}

	.select{
	background-image: -webkit-linear-gradient(right top, #0e7e9a 0%, #4fd1f2 100%);
	color: white;
	}

	.boutton_arrondie{
	-webkit-transition-property:background-color;
	cursor:pointer;
	border-radius: 10px;
	background-color:gray;
	color:white;
	}

	.boutton_arrondie:hover{
	background-color:DodgerBlue;
	}

	.boutton_actif{
	-webkit-transition-property:background-color;
	cursor: pointer;
	border-radius: 10px;
	background-color:DeepSkyBlue;
	color:white;
	}

	.boutton_actif:hover{
	background-color:DodgerBlue;
	}

	.bouton_valider_repondre{
	-webkit-transition-property:background-image;
	cursor: pointer;
	background-image: -webkit-linear-gradient(right top, #007f2d 0%, #91d5a9 100%);
	color: white;
	border-radius: 15px;
	}

	.bouton_valider_repondre:hover{
	background-image: -webkit-linear-gradient(right top, #10b44a 0%, #36dd71 100%);
	}

	.bouton_lien_repondre{
	-webkit-transition-property:background-image;
	cursor:pointer;
	background-image: -webkit-linear-gradient(right top, #0c4259 0%, #6ac2e7 100%);
	color: white;
	border-radius: 15px;
	}

	.bouton_lien_repondre:hover{
	background-image: -webkit-linear-gradient(right top, #0e7e9a 0%, #4fd1f2 100%);
	}


	/* Etat */

	#error{
	height: 20px;
	width: 1300px;
	color:red;
	background-color:Maroon;
	border:5px solid black;
	}

	#valide{
	height: 20px;
	width: 1300px;
	color:green;
	background-color:DarkGreen;
	}

	#changement{
	height: 20px;
	width: 1300px;
	color:Gold;
	background-color:DarkOrange;
	}

	/* grand carré */

	#formulaireCompte{
	height:600px;
	width:1300px;
	margin-left:16%;
	background-image: -webkit-linear-gradient(right top, #d2d2d2 0%, #a5a5a5 100%);
	text-align: center;
	color:white;
	border-radius:3px;
	}

	#tableau_formulaire_inscription{
	height:150px;
	width:700px;
	margin-left:23%;
	}

	#alignement{
	margin-left:25%;
	}

	#pseudo_formulaire{
	height: 30px;
	width: 360px;
	}

	#password_formulaire{
	height: 30px;
	width: 360px;
	}

	#email_formulaire{
	height: 30px;
	width: 360px;
	}

	#age_formulaire{
	height: 30px;
	width: 360px;
	}

	#hobbie_formulaire{
	height: 30px;
	width: 360px;
	}

	/* petit carré */

	#pseudo_formulaire_alignement{
	text-align: left;
	height: 0px;
	}

	#password_formulaire_alignement{
	text-align: left;
	height: 0px;
	}

	#email_formulaire_alignement{
	text-align: left;
	height: 0px;
	}

	#age_formulaire_alignement{
	text-align: left;
	height: 0px;
	}

	#hobbie_formulaire_alignement{
	text-align: left;
	height: 0px;
	}

	/* message -- commentaire */

	#info_message{
	height:152px;
	width:200px;
	background-image: url(http://localhost/Symfony/web/bundles/image_projet/texture_gris.jpg);
	float: left;
	border-radius: 7px;
	margin-right: 10px;
	border-top:1px solid white;
	border-left:1px solid white;
	}

	#text_article{
	background-image: url(http://localhost/Symfony/web/bundles/image_projet/texture_gris.jpg);
	color: black;
	float: left;
	}

	#repondre_article{
	height:120px;
	width:865px;
	margin-left:16%;
	background-image: -webkit-linear-gradient(right top, #d2d2d2 0%, #a5a5a5 100%);
	border-radius: 7px;
	margin-right: 10px;
	float: left;
	border-top:1 solid gray;
	margin-top: 15px;
	color:Chocolate;
	}

	#pseudo_repondre_article{
	width: 200px;
	height: 117px;
	float: left;
	}

	#bouton_repondre_article{
	float: left;
	}

	#text_com{
	background-image: url(http://localhost/Symfony/web/bundles/image_projet/texture_gris.jpg);
	color: white;
	float: left;
	}

	#case_commentaire{
	width: 1200px;
	height: 250px;
	float: left;
	}

	#page_supprimer_modifier{
	margin-left: 20%;
	height: 400px;
	width: 1000px;
	background-color: gray;
	text-align: center;
	border-radius: 20%;
	color: white;
	}

	#message{
	height:50px;
	width:900px;
	border-radius: 10px;
	color: chocolate;
	margin-left: 5%;
	background-image: url(http://localhost/Symfony/web/bundles/image_projet/texture_menue.jpg);
	}

	img{
	height:60px;
	width:60px;
	}

	#imgcompte{
	height:200px;
	width:200px;
	}

		#logo{
	-webkit-transition-property:background-image, color;
	transition-duration: 0.5s;
	height:80px;
	width:154px;
	float : top;
	float: left;
	border-right: 1px solid white;
	color: black;
	}

	#pagemodifier{
	height:600px;
	width:1300px;
	margin-left:10%;
	background-image: -webkit-linear-gradient(right top, #d2d2d2 0%, #a5a5a5 100%);
	
	color:white;
	border-radius:3px;
	}

	#messagerie{
	-webkit-transition-property:background-image, color;
	transition-duration: 0.5s;
	height:80px;
	width:230px;
	float: left;
	border-right: 1px solid white;
	color: black;
	}

	#logo:hover{
	background-image: -webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	color: white;
	}

	#messagerie:hover{
	background-image: -webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	color: white;
	}

	#

</style>