<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GradeController extends Controller
{
    /**
     * @Route("/grade/update/{teamId}/{workshop}/{grade}")
     */
    public function updateTeamAction(Request $request, $teamId, $workshopId, $newGrade)
    {
        $em = $this->getDoctrine()->getManager();
        $grades = $em->getRepository('AppBundle:Grade')->find();
        //$grade->setGrade($newGrade);
        $em->flush();
    }

    /**
     * @Route("/grade/update/{gradeId}/{newGrade}")
     */
    public function updateAction( $gradeId, $newGrade)
    {
        $em = $this->getDoctrine()->getManager();
        $grade = $em->getRepository('AppBundle:Grade')->find($gradeId);
        $grade->setGrade($newGrade);
        $em->flush();

        return $this->json(array('status' => 'ok', 'user' => $gradeId, 'newGrade' => $newGrade));
    }
}
