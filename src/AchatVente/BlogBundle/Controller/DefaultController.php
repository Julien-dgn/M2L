<?php

namespace AchatVente\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AchatVenteBlogBundle:Default:index.html.php');
    }
}
