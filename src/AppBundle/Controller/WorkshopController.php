<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class WorkshopController extends Controller
{
    /**
     * @Route("/workshop/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Workshop:list.html.twig', array(
            'workshops' => $this->getDoctrine()->getRepository('AppBundle:Workshop')->findAll()
        ));
    }

    /**
     * @Route("/workshop/table")
     */
    public function tableAction()
    {
        return $this->render('AppBundle:Workshop:table.html.twig', array(
            'grades' => [
                'workshops' => ['Symfony introduction', 'MySQL', 'Dizainas', 'GitHub'],
                'teams' => [
                    [
                        'name' => 'terminal_noobs',
                        'members' => [
                            [
                                'name' => 'Mantas Narkevicius',
                                'grades' => [10, 9, 8, 10]
                            ],
                            [
                                'name' => 'Viktorija Razaite',
                                'grades' => [10, 9, 8, 10]
                            ],
                            [
                                'name' => 'Matas Minelga',
                                'grades' => [10, 9, 8, 10]
                            ]
                        ]
                    ],
                    [
                        'name' => 'other_team',
                        'members' => [
                            [
                                'name' => 'Petras Petraitis',
                                'grades' => [10, 9, 8, 10]
                            ],
                            [
                                'name' => 'Jonas Jonaitis',
                                'grades' => [10, 9, 8, 10]
                            ],
                            [
                                'name' => 'Justas Justaitis',
                                'grades' => [10, 9, 8, 10]
                            ]
                        ]
                    ]
                ]
            ]
        ));
    }

    /**
     * @Route("/workshop/attendance")
     */
    public function attendanceAction()
    {
        return $this->render('AppBundle:Workshop:attendance.html.twig', array(
            'teams' => [
                'workshops' => ['Symfony introduction', 'MySQL', 'Dizainas', 'GitHub'],
                'teams' => [
                    [
                        'name' => 'terminal_noobs',
                        'members' => [
                            [
                                'name' => 'Mantas Narkevicius',
                                'grades' => [10, 9, 8, 10]
                            ],
                            [
                                'name' => 'Viktorija Razaite',
                                'grades' => [10, 9, 8, 10]
                            ],
                            [
                                'name' => 'Matas Minelga',
                                'grades' => [10, 9, 8, 10]
                            ]
                        ]
                    ],
                    [
                        'name' => 'other_team',
                        'members' => [
                            [
                                'name' => 'Petras Petraitis',
                                'grades' => [10, 9, 8, 10]
                            ],
                            [
                                'name' => 'Jonas Jonaitis',
                                'grades' => [10, 9, 8, 10]
                            ],
                            [
                                'name' => 'Justas Justaitis',
                                'grades' => [10, 9, 8, 10]
                            ]
                        ]
                    ]
                ]
            ]
        ));
    }

    /**
     * @Route("/workshop/show/{id}")
     */
    public function showAction($id)
    {
        return $this->render('AppBundle:Workshop:show.html.twig', array(
            'workshop' => $this->getDoctrine()->getRepository('AppBundle:Workshop')->find($id)
        ));
    }

    /**
     * @Route("/workshop/create")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Workshop:create.html.twig', array(// ...
        ));
    }

    /**
     * @Route("/workshop/update")
     */
    public function updateAction()
    {
        return $this->render('AppBundle:Workshop:update.html.twig', array(// ...
        ));
    }

    /**
     * @Route("/workshop/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Workshop:delete.html.twig', array(// ...
        ));
    }

}
