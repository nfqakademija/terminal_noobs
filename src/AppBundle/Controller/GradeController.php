<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GradeController extends Controller
{
    /**
     * @Route("/grade/update/")
     */
    public function updateAction(Request $request)
    {
        // just setup a fresh $task object (remove the dummy data)
        $grade = new Grade();

        $form = $this->createFormBuilder($grade)
            ->add('assignment_id', TextType::class)
            ->add('grade', TextType::class)
            ->add('student_id', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Update grade'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();


            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $grade = $em->getRepository('AppBundle:Grade')->find();
            $em->persist($task);
            $em->flush();

            return $this->redirectToRoute('task_success');

            return $this->render('AppBundle:Grade:update.html.twig', array(// ...
            ));
        }
    }
}
