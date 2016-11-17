<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;

class DummyDataService
{
    /**
     * @var EntityManager
     */
    private $em;

    public function __construct($em)
    {
        $this->em = $em;
    }

    /**
     * Get workshop data
     *
     * @return array
     */
    public function getWorkshopData(){
        return array(
            'workshops' => [
                [
                    'getId' => '1',
                    'getTitle' => 'Symfony introduction',
                    'getDescription' => 'Lorem inpum',
                    'getLector' => ['getName' => 'Simonas Serlinskas']
                ],
                [
                    'getId' => '2',
                    'getTitle' => 'MySQL',
                    'getDescription' => 'Lorem inpum',
                    'getLector' => ['getName' => 'Linas Kukulskis']
                ],
                [
                    'getId' => '3',
                    'getTitle' => 'Dizainas',
                    'getDescription' => 'Lorem inpum',
                    'getLector' => ['getName' => 'Darius Bisikirskas']
                ],
                [
                    'getId' => '4',
                    'getTitle' => 'GitHub',
                    'getDescription' => 'Lorem inpum',
                    'getLector' => ['getName' => 'Darius Kasiulevicius']
                ]
            ]

        );
    }

    /**
     * Get grade data
     *
     * @return array
     */
    public function getGradeData(){
        return array(
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
                                'grades' => [10, 9, 8, 5]
                            ],
                            [
                                'name' => 'Justas Justaitis',
                                'grades' => [10, 9, 8, 10]
                            ]
                        ]
                    ],
                    [
                        'name' => 'terminal_pros',
                        'members' => [
                            [
                                'name' => 'John Pro',
                                'grades' => [10, 9, 8, 10]
                            ],
                            [
                                'name' => 'Sam Win',
                                'grades' => [10, 5, 8, 10]
                            ],
                            [
                                'name' => 'Jim Crush',
                                'grades' => [10, 9, 8, 10]
                            ]
                        ]
                    ],
                    [
                        'name' => 'code_bugs',
                        'members' => [
                            [
                                'name' => 'Carl Bee',
                                'grades' => [10, 9, 8, 5]
                            ],
                            [
                                'name' => 'Adam Ant',
                                'grades' => [10, 9, 8, 10]
                            ],
                            [
                                'name' => 'Rick Roll',
                                'grades' => [10, 9, 8, 10]
                            ]
                        ]
                    ]
                ]
            ]
        );
    }

    /**
     * Get attendance data
     *
     * @return array
     */
    public function getAttendanceData()
    {
        return array(
            'teams' => [
                [
                    'name' => 'terminal_noobs',
                    'members' => [
                        [
                            'name' => 'Mantas Narkevicius',
                            'attendances' => [true, true, true, true]
                        ],
                        [
                            'name' => 'Viktorija Razaite',
                            'attendances' => [true, true, true, true]
                        ],
                        [
                            'name' => 'Matas Minelga',
                            'attendances' => [true, true, true, true]
                        ]
                    ]
                ],
                [
                    'name' => 'other_team',
                    'members' => [
                        [
                            'name' => 'Petras Petraitis',
                            'attendances' => [true, true, true, true]
                        ],
                        [
                            'name' => 'Jonas Jonaitis',
                            'attendances' => [true, true, true, true]
                        ],
                        [
                            'name' => 'Justas Justaitis',
                            'attendances' => [true, true, true, true]
                        ]
                    ]
                ],
                [
                    'name' => 'terminal_pros',
                    'members' => [
                        [
                            'name' => 'John Pro',
                            'attendances' => [true, true, true, true]
                        ],
                        [
                            'name' => 'Sam Win',
                            'attendances' => [true, true, true, true]
                        ],
                        [
                            'name' => 'Jim Crush',
                            'attendances' => [true, true, true, true]
                        ]
                    ]
                ],
                [
                    'name' => 'code_bugs',
                    'members' => [
                        [
                            'name' => 'Carl Bee',
                            'attendances' => [true, true, true, true]
                        ],
                        [
                            'name' => 'Adam Ant',
                            'attendances' => [true, true, true, true]
                        ],
                        [
                            'name' => 'Rick Roll',
                            'attendances' => [true, true, true, true]
                        ]
                    ]
                ]
            ]

        );
    }
}