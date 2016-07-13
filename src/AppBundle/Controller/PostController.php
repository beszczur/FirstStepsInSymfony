<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class PostController extends Controller
{
    /**
     * @Route("/index", name="myhomepage")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return new Response('<html>TROLOLOLO</html>');
    }
}
