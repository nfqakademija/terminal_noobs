<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Attendance;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
        if (!empty($_GET)) {
            $AcademyOne = $_GET['academy1'];
        } else {
            $AcademyOne = 1;
        }
        $academy = $this->getDoctrine()->getRepository('AppBundle:Academy')->findByName('2016 ruduo Kaunas');
        $academies = $this->getDoctrine()->getRepository('AppBundle:Academy')->findAll();
        $workshops = $this->getDoctrine()->getRepository('AppBundle:Workshop')->findByAcademy($academy);
        return $this->render('AppBundle:Attendance:list.html.twig', array(
            'workshops' => $workshops,
            'academyOne' => $AcademyOne,
            'academies' =>$academies
        ));
    }

    /**
     * @var Attendance $attendance
     *
     * @Route("/attendance/update/{userId}/{workshopId}")
     */
    public function updateAction(Request $request, $userId, $workshopId)
    {

//        $userId = $request->query->get('user_id');
//
//        $workshopId = $request->query->get('workshop_id');

//        $em = $this->getDoctrine()->getEntityManager();
//        $workshop = $em->getRepository('AppBundle:Workshop')->find($workshopId);
//        $attendance = $em->getRepository('AppBundle:Attendance')->findOneBy($workshop);
//        $attendance->setPresent(!$attendance->getPresent());
//        $em->persist($attendance);
//        $em->flush();


        return $this->json(array('status' => 'ok', 'user' => $userId, 'workshop' => $workshopId));
    }
}
