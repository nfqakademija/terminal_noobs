<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function Sign_inAction()
    {
        return $this->render('AppBundle:Home:sign_in.html.twig', array(
            // ...
        ));
    }
    /**
     * @Route("/home")
     */
    public function homeAction()
    {
        return $this->render('AppBundle:Home:home.html.twig', array(
            // ...
        ));
    }

}
