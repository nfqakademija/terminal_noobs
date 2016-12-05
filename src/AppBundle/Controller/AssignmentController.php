<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AssignmentController extends Controller
{

    /**
     * @Route("/assignment/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Assignment:list.html.twig', array(
            'assignments' => $this->getDoctrine()->getRepository('AppBundle:Assignment')->findAll()
        ));
    }

    /**
     * @Route("/assignment/acreate")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Assignment:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/ssignment/show")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Assignment:show.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/assignment/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Assignment:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/update")
     */
    public function updateAction()
    {
        return $this->render('AppBundle:Assignment:update.html.twig', array(
            // ...
        ));
    }

}
