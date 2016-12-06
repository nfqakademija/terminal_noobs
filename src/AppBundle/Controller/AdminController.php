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
        return $this->render('AppBundle:Admin:overview.html.twig',

            $this->get('app.dummy')->getGradeData()
    );
    }

    /**
     * @Route("/administrator/attendanceOverview")
     */
    public function attendanceOerviewAction()
    {
        return $this->render('AppBundle:Admin:attendanceOverview.html.twig',
        [
            'teams' =>$this->get('app.dummy')->getAttendanceDataTest(),
            'attendance' => $this->get('app.dummy')->getAttendanceDataTest()
        ]);
    }
    /**
     * @Route("/administrator/gradesOverview")
     */
    public function gradesOverviewAction()
    {
        return $this->render('AppBundle:Admin:overview.html.twig',

            $this->get('app.dummy')->getGradeData()
        );
    }/**
 * @Route("/administrator/academyCompare")
 */
    public function academyCompareAction()
    {

        return $this->render('AppBundle:Admin:academyCompare.html.twig',
        [
            'teams' =>$this->get('app.dummy')->getAttendanceDataTest(),
            'grades' => $this->get('app.dummy')->getGradeData(),
            'academies'=>$this->get('app.dummy')->getAcademyData(),
            'attendance' => $this->get('app.dummy')->getAttendanceDataTest()
        ]);
    }
}