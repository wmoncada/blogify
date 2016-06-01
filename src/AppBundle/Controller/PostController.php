<?php 
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Post\CreatePost;

class PostController extends Controller
{
	/**
	 * @Route("/post/create",name="post_create")
	 */
	 public function createAction()
	 {
	 	 $form = $this->createForm(CreatePost::class);
	 } 
}