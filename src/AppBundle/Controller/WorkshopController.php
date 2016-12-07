<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class WorkshopController extends Controller
{
    /**
     * @Route("/workshop/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Workshop:list.html.twig', array(
            'workshops' => $this->getDoctrine()->getRepository('AppBundle:Workshop')->findAll()
        ));
    }

    /**
     * @Route("/workshop/table")
     */
    public function tableAction()
    {
        $workshops = $this->getDoctrine()->getRepository('AppBundle:Workshop')->findAll();
        $assignments = $this->getDoctrine()->getRepository('AppBundle:Assignment')->findAll();
        $teams = $this->getDoctrine()->getRepository('AppBundle:Team')->findAll();
        return $this->render('AppBundle:Workshop:table.html.twig', array (
            'workshops' => $workshops,
            'teams' => $teams,
            'assignments' => $assignments,
        ));
    }

    /**
     * @Route("/workshop/attendance")
     */
    public function attendanceAction()
    {
        return $this->render('AppBundle:Workshop:attendance.html.twig', $this->get('AppBundle:Attendance')->get());
    }

    /**
     * @Route("/workshop/show/{id}")
     */
    public function showAction($id)
    {
        return $this->render('AppBundle:Workshop:show.html.twig', array(
            'workshop' => $this->getDoctrine()->getRepository('AppBundle:Workshop')->find($id)
        ));
    }

    /**
     * @Route("/workshop/create")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Workshop:create.html.twig', array(// ...
        ));
    }

    /**
     * @Route("/workshop/update")
     */
    public function updateAction()
    {
        return $this->render('AppBundle:Workshop:update.html.twig', array(// ...
        ));
    }

    /**
     * @Route("/workshop/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Workshop:delete.html.twig', array(// ...
        ));
    }

}
