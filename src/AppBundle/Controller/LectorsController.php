<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LectorsController extends Controller
{
    /**
     * @Route("/lectors/create")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Lectors:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/lector/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Lectors:list.html.twig', array(
            'lectors' => $this->getDoctrine()->getRepository('AppBundle:Lectors')->findAll()
        ));
    }

}
