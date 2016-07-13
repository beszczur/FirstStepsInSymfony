<?php

namespace UserBundle\Controller;

use UserBundle\Entity\User2;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

//use UserBundle\Entity\User;

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
    }

    /**
     * @Route("/Register")
     * @Method({"GET", "POST"})
     */

    public function RegisterForm(Request $request)
    {
	$user = new User2();
	$user->setLogin('beata');
	$user->setFirstName('Beatowa');

	$form = $this->createFormBuilder($user)
		->add('login', TextType::class)
		->add('firstName', TextType::class)
		->add('Submit', SubmitType::class)
		->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database
   
            return new Response("You are MASTER");
	    //$this->redirect($this->generateUrl('task_success'));
/*Przekierowanie użytkownika po udanym zgłoszeniu formularza uniemożliwia użytkownikowi, by odświeżył i ponownie przesłał dane.*/
        }

	return $this->render('UserBundle:Post:user_register.html.twig', array(
	'form' => $form->createView(),
            // ...
        ));
    }







}
