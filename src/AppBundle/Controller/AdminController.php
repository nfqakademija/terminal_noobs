<?php
/**
 * Created by PhpStorm.
 * User: matas
 * Date: 16.11.19
 * Time: 13.48
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{

    /**
     * @Route("/administrator/overview", name="admin_home")
     */
    public function overviewAction()
    {
        return $this->render(
            'AppBundle:Admin:overview.html.twig',
            $this->get('app.dummy')->getGradeData()
        );
    }

    /**
     * @Route("/administrator/attendanceOverview")
     */
    public function attendanceOerviewAction()
    {
        return $this->render(
            'AppBundle:Admin:attendanceOverview.html.twig',
        [
            'teams' =>$this->get('app.dummy')->getAttendanceDataTest(),
            'attendance' => $this->get('app.dummy')->getAttendanceDataTest()
        ]
        );
    }
    /**
     * @Route("/administrator/gradesOverview")
     */
    public function gradesOverviewAction()
    {
        return $this->render(
            'AppBundle:Admin:overview.html.twig',
            $this->get('app.dummy')->getGradeData()
        );
    }/**
 * @Route("/administrator/academyCompare")
 */
    public function academyCompareAction()
    {
        $teams = $this->getDoctrine()->getRepository('AppBundle:Team')->findAll();
        $grades = $this->getDoctrine()->getRepository('AppBundle:Grade')->findAll();
        $academies = $this->getDoctrine()->getRepository('AppBundle:Academy')->findAll();
        $attendances = $this->getDoctrine()->getRepository('AppBundle:Attendance')->findAll();

        if (!empty($_GET)) {
            $AcademyOne = $_GET['academy1'];
            $AcademyTwo = $_GET['academy2'];
        }
        else {
            $AcademyOne = 1;
            $AcademyTwo = 2;
        }

        return $this->render(
            'AppBundle:Admin:academyCompare.html.twig',
            [
                'teams' =>$teams,
                'grades' => $grades,
                'academies'=>$academies,
                'attendance' => $attendances,
                'academyOneId' =>$AcademyOne,
                'academyTwoId' =>$AcademyTwo
            ]);
    }
}

