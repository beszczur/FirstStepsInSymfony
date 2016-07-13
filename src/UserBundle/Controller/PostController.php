<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class PostController extends Controller
{
    /**
     * @Route("/UserIndex")
     * @Method("GET")
     */
    public function UserIndexAction()
    {
        return $this->render('UserBundle:Post:user_index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/UserIndex")
     * @Method("POST")
     */
    public function UserIndexActionPost(Request $request)
    {
	//return new Response("Trollololo");	
	if($request->request->get('login')=='123')
        	return new Response ("Gratki!");
	else
		return new Response ("Nie gratki");
/*$this->render('UserBundle:Post:user_index.html.twig', array(
            // ...
        ));*/
    }



}
