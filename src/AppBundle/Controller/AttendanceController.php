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
     * @Route("/workshop/attendance/{id}")
     */
    public function showAction($id)
    {
        $workshop = $this->getDoctrine()->getRepository('AppBundle:Workshop')->find($id);
        $attendances = $this->getDoctrine()->getRepository('AppBundle:Attendance')->findByWorkshop($workshop);

        return $this->render('AppBundle:Attendance:show.html.twig', array(
            'workshop' => $workshop,
            'attendances' => $attendances
        ));
    }


    /**
     * @Route("/attendance/list")
     */
    public function listAction()
    {
        $academy = $this->getDoctrine()->getRepository('AppBundle:Academy')->findByName('2016 ruduo Kaunas');
        $workshops = $this->getDoctrine()->getRepository('AppBundle:Workshop')->findByAcademy($academy);
        return $this->render('AppBundle:Attendance:list.html.twig', array(
            'workshops' => $workshops
        ));
    }
}
