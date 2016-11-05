<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TeamController extends Controller
{
    /**
     * @Route("/team/create")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Team:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/team/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Team:list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/team/show")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Team:show.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/team/edit")
     */
    public function editAction()
    {
        return $this->render('AppBundle:Team:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/team/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Team:delete.html.twig', array(
            // ...
        ));
    }

}
