<?php

namespace LIGUES\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function forumAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:forum.html.php');
    }

      public function compteAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:compte.html.php');
    }

    public function formulaire_inscriptionAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:formulaireCompte.html.php');
    }

    public function espace_membreAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:espaceMembre.html.php');
    }

    public function espace_membre_categorieAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:categorieMembre.html.php');
    }

    public function categorie_footAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:categorie_foot.html.php');
    }

    public function ajouter_article_formulaireAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:ajouter_article_formulaire.html.php');
    }

    public function ajouter_articleAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:ajouter_article.html.php');
    }

    public function voir_articleAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:voir_article.html.php');
    }

    public function newsAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:news.html.php');
    }

    public function supprimer_modifierAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:supprimer_modifier.html.php');
    }

    public function supprimer_modifier_commentaireAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:supprimer_modifier_commentaire.html.php');
    }

    public function compte_supprimerAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:compte_supprimer.html.php');
    }

    public function compte_modifierAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:compte_modifier.html.php');
    }

    public function messagerieAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:messagerie.html.php');
    }

     public function messagerie_ecrireAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:messagerie_ecrire.html.php');
    }

     public function messagerie_lireAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:messagerie_lire.html.php');
    }
}
