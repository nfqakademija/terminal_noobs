<?php
/**
 * Created by PhpStorm.
 * User: matas
 * Date: 16.10.31
 * Time: 19.34
 */

namespace NFQ\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $shoes = $this->get("app.shoes");
        return $this->render('NFQDemoBundle:Home:index.html.twig', [
            'shoes' => $shoes->getShoesList()
        ]);

    }
    /**
     * @Route("/list", name="shoes_list")
     */
    public function listAction()
    {
        $shoes = $this->get("app.shoes");
        return $this->render('NFQDemoBundle:Home:list.html.twig', [
            'shoes' => $shoes->getShoesList()
        ]);
    }
}