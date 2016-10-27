<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $lectors = $this->get('app.lectors');

        return $this->render('AppBundle:Home:index.html.twig', [
            'lectors' => $lectors->getList()
        ]);
    }

    /**
     * @Route("/list", name="posts_list")
     */
    public function listAction()
    {
        $lectors = $this->get('app.lectors');

        return $this->render('AppBundle:Home:list.html.twig', [
            'lectors' => $lectors->getList()
        ]);
    }

    /**
     * @Route("/lector/new", name="lector_new")
     */
    public function newAction()
    {
        return $this->render('AppBundle:Lectors:new.html.twig', [
        ]);
    }

    private function getService()
    {
        return $this->get('app.example');
    }
}
