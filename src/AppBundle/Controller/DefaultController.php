<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Posts');
        $posts = $repo->findAll();

        return $this->render('default/index.html.twig',array(
                "posts" => $posts 
            ));
    }

    /**
     * Prueba de la plantilla
     * 
     * @Route("/prueba")
     */
    public function pruebaAction(Request $request) 
    {
        return $this->render('prueba/test.html.twig');
    }
}
