<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/user/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:User:list.html.twig', array(
            'users' => $this->getDoctrine()->getRepository('AppBundle:User')->findAll()
        ));
    }
    /**
     * @Route("/user/show")
     */
    public function showAction()
    {
        return $this->render('AppBundle:User:show.html.twig', array(
            'users' => $this->getDoctrine()->getRepository('AppBundle:User')->findAll()
        ));
    }
}
