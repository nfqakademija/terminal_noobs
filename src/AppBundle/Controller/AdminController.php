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
     * @Route("/administrator/overview")
     */
    public function overviewAction()
    {
        return $this->render('AppBundle:Admin:overview.html.twig', array(
            // ...
        ));
    }
}