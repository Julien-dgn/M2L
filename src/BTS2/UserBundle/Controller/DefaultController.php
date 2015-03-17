<?php

namespace BTS2\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BTS2UserBundle:Default:index.html.twig', array('name' => $name));
    }
}
