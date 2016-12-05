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
            'users' => $this->getDoctrine()->getRepository('AppBundle:User')->findAll(),
            'workshops' => $this->getDoctrine()->getRepository('AppBundle:Workshop')->findAll(),
            'team' => $this->getDoctrine()->getRepository('AppBundle:Team')->findAll()
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
