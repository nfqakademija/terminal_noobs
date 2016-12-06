<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class StudentController extends Controller
{
    /**
     * @Route("/student/home", name="student_home")
     */
    public function homeAction()
    {
        return $this->render('AppBundle:Student:home.html.twig', array(
            // ...
        ));
    }

}
