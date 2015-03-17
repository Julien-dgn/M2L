<?php

namespace BTS2\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BTS2\BlogBundle\Entity\Article;
use BTS2\BlogBundle\Entity\Image;
use BTS2\BlogBundle\Form\ArticleType;
use BTS2\BlogBundle\Form\ImageType;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogBundle:Default:index.html.twig', array());
    }
    public function voirAction($id)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getMAnager();
        $repo = $em->getRepository("BlogBundle:Article");
        $article = $repo->find($id);


    	
    	return $this->render('BlogBundle:Default:voir.html.twig', array('article'=>$article));
    }
    public function ajouterAction(Request $request)
    {
        $article = new Article();
        $form = $this->get('form.factory')->create(new ArticleType(),$article);
        $form->handleRequest($request);
        if($form->isValid()){
            $doctrine = $this->getDoctrine();
            $em = $doctrine->getManager();
            $em->persist($article);
            $em->flush();
            return $this->redirect($this->generateUrl('BTS2_blog_vue',array('id'=>$article->getId())));

        }

    	return $this->render('BlogBundle:Default:ajouter.html.twig', array('form'=>$form->createView()));
    }
    public function listAction(){
            $doctrine = $this->getDoctrine();
            $em = $doctrine->getManager();
            $repo = $em->getRepository("BlogBundle:Article");
            $articleList = $repo->findAll();

            return $this->render('BlogBundle:Default:list.html.twig', array('articleList'=>$articleList));

    }

    public function editAction($id, Request $request){
            $doctrine = $this->getDoctrine();
            $em = $doctrine->getManager();
            $repo = $em->getRepository("BlogBundle:Article");
            $article = $repo->find($id);
             $form = $this->get('form.factory')->create(new ArticleType(),$article);
            $form->handleRequest($request);
            if($form->isValid()){
                $doctrine = $this->getDoctrine();
                $em = $doctrine->getManager();
                $em->persist($article);
                $em->flush();
                return $this->redirect($this->generateUrl('BTS2_blog_vue',array('id'=>$article->getId())));

            }
            return $this->render('BlogBundle:Default:edit.html.twig', array('form' =>$form->createView()));

    }

}
