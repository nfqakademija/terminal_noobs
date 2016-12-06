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
            'teams' => $this->getDoctrine()->getRepository('AppBundle:Team')->findAll(),
            'users' => $this->getDoctrine()->getRepository('AppBundle:User')->findAll()
        ));
    }

    /**
     * @Route("/team/list")
     */
    public function listAction()
    {
        //dump($this->getDoctrine()->getRepository('AppBundle:Team')->findAll());
        return $this->render('AppBundle:Team:list.html.twig', array (
            'teams' => $this->getDoctrine()->getRepository('AppBundle:Team')->findAll()
        ));
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
     * @Route("/team/edit/{id}")
     */
    public function editAction($id)
    {
        return $this->render('AppBundle:Team:edit.html.twig', array(
            'team' => $this->getDoctrine()->getRepository('AppBundle:Team')->find($id)
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
