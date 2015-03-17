<?php

namespace LIGUES\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class pageController extends Controller
{
	public function supprimer_modifier_commentaireAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:supprimer_modifier_commentaire.html.php');
    }
}

?>