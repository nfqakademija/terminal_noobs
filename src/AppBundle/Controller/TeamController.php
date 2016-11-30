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
        //dump($this->getDoctrine()->getRepository('AppBundle:Team')->findAll());
        return $this->render('AppBundle:Team:create.html.twig', $this->get('app.dummy')->getTeamData());
    }

    /**
     * @Route("/team/list")
     */
    public function listAction()
    {
        //dump($this->getDoctrine()->getRepository('AppBundle:Team')->findAll());
        return $this->render('AppBundle:Team:list.html.twig', $this->get('app.dummy')->getTeamData());
    }

    /**
     * @Route("/team/show/{id}")
     */
    public function showAction($id)
    {
        return $this->render('AppBundle:Team:show.html.twig', array(
            'team' => $this->getDoctrine()->getRepository('AppBundle:Team')->find($id)
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
