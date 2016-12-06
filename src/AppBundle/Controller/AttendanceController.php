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
    public function listAction($id)
    {
        $workshop = $this->getDoctrine()->getRepository('AppBundle:Workshop')->find($id);
        $attendances = $this->getDoctrine()->getRepository('AppBundle:Attendance')->findByWorkshop($workshop);

        return $this->render('AppBundle:Attendance:show.html.twig', array(
            'workshop' => $workshop,
            'attendances' => $attendances
        ));
    }
}
