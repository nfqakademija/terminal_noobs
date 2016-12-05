<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AttendanceController extends Controller
{
    /**
     * @Route("listAction")
     */
    public function editAction()
    {
        return $this->render('AppBundle:Attendance:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/attendance/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Attendance:list.html.twig', array(
            'attendaces' => $this->getDoctrine()->getRepository('AppBundle:Attendance')->findAll()
        ));
    }

    /**
     * @Route("/show")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Attendance:show.html.twig', array(
            // ...
        ));
    }

}
