<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LectorsController extends Controller
{
    /**
     * @Route("/lectorsmentors")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Lectors:create.html.twig', array(
            'users' => $this->getDoctrine()->getRepository('AppBundle:User')->findAll(),
            'workshops' => $this->getDoctrine()->getRepository('AppBundle:Workshop')->findAll(),
            'teams' => $this->getDoctrine()->getRepository('AppBundle:Team')->findAll()
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

    /**
     * @Route("/lector/home", name="lector_home")
     */
    public function homeAction(){

        if (!$this->get('security.authorization_checker')->isGranted('ROLE_LECTOR')) {
            throw $this->createAccessDeniedException();
        }

        $user = $this->get('security.token_storage')->getToken()->getUser();

        return $this->render('AppBundle:Lectors:home.html.twig', array(
            'workshops' => $this->getDoctrine()->getRepository('AppBundle:Workshop')->findByLector($user)
        ));
    }
}
