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
     *  Shows an specific blog entry
     * 
     * @Route(
     *  "/articulo/{id}/{slug}",
     *  name="show_articulo",
     *  requirements={
     *         "id": "\d+"
     *     }
     * 
     * )
     */ 
    public function showAction($id,$slug)
    {
        $repo = $this->getDoctrine()->getRepository("AppBundle:Posts");

        $post = $repo->find($id);

        return $this->render('default/article.html.twig',array("post"=>$post));
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
