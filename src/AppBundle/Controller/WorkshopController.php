<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class WorkshopController extends Controller
{
    /**
     * @Route("/workshop/list")
     * @Route("/workshop/")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Workshop:list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/workshop/show")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Workshop:show.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/workshop/create")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Workshop:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/worksop/update")
     */
    public function updateAction()
    {
        return $this->render('AppBundle:Workshop:update.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/workshop/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Workshop:delete.html.twig', array(
            // ...
        ));
    }

}
