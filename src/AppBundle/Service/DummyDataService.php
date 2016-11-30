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
                    'getLector' => ['getName' => 'Simonas Serlinskas'],
                    'getDetailDescription' => 'A framework streamlines application development by automating many of the patterns employed for
                    a given purpose. A framework also adds structure to the code, prompting the developer to write better, more readable, and more
                    maintainable code. Ultimately, a framework makes programming easier, since it packages complex operations into simple statements.'
                ],
                [
                    'getId' => '2',
                    'getTitle' => 'MySQL',
                    'getDescription' => 'Lorem inpum',
                    'getLector' => ['getName' => 'Linas Kukulskis'],
                    'getDetailDescription' => 'A database is a separate application that stores a collection of data. Each database has one or more
                    distinct APIs for creating, accessing, managing, searching and replicating the data it holds.'
                ],
                [
                    'getId' => '3',
                    'getTitle' => 'Dizainas',
                    'getDescription' => 'Lorem inpum',
                    'getLector' => ['getName' => 'Darius Bisikirskas'],
                    'getDetailDescription' => 'pateikti optimalius vizualinės komunikacijos problemos sprendimo būdus tiek komercinėje, tiek nekomercinėje
                    srityje. Sprendimo būdai ir rezultatai tiesiogiai priklauso nuo kliento suformuluojamos užduoties. Komunikavimui paprastai naudojami
                    statiniai elementai – žodžiai (tipografija), vaizdai ir kiti grafiniai elementai (vizualinė medžiaga).'
                ],
                [
                    'getId' => '4',
                    'getTitle' => 'GitHub',
                    'getDescription' => 'Lorem inpum',
                    'getLector' => ['getName' => 'Darius Kasiulevicius'],
                    'getDetailDescription' => 'GitHub is a code hosting platform for version control and collaboration. It lets you and others work together on projects from anywhere.'
                ]
            ]

        );
    }
    /**
     * get academies data
     *
     * @return array
     */
    public function getAcademyData()
    {
        return array(
            'academies'=>[
                [
                    'name' => '2016 Rudens semestras, Kaunas',
                    'id' => '1'

                ],
                [
                    'name' => '2016 Rudens semestras, Vilnius',
                    'id' => '2'

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
                                'grades' => [10, 9, 8, 10, 7, 8]
                            ],
                            [
                                'name' => 'Viktorija Razaite',
                                'grades' => [10, 9, 8, 10, 6, 9]
                            ],
                            [
                                'name' => 'Matas Minelga',
                                'grades' => [10, 9, 8, 10, 2, 1]
                            ]
                        ]
                    ],
                    [
                        'name' => 'other_team',
                        'members' => [
                            [
                                'name' => 'Petras Petraitis',
                                'grades' => [1, 3, 10, 9, 8, 10]
                            ],
                            [
                                'name' => 'Jonas Jonaitis',
                                'grades' => [10, 9, 2, 4, 8, 5]
                            ],
                            [
                                'name' => 'Justas Justaitis',
                                'grades' => [10, 9, 8, 4, 7, 10]
                            ]
                        ]
                    ],
                    [
                        'name' => 'terminal_pros',
                        'members' => [
                            [
                                'name' => 'John Pro',
                                'grades' => [1, 2, 2, 9, 8, 10]
                            ],
                            [
                                'name' => 'Sam Win',
                                'grades' => [10, 5, 4, 4, 8, 10]
                            ],
                            [
                                'name' => 'Jim Crush',
                                'grades' => [3, 2, 5, 9, 8, 10]
                            ]
                        ]
                    ],
                    [
                        'name' => 'code_bugs',
                        'members' => [
                            [
                                'name' => 'Carl Bee',
                                'grades' => [6, 6, 6, 9, 8, 5]
                            ],
                            [
                                'name' => 'Adam Ant',
                                'grades' => [6, 6, 6, 9, 8, 10]
                            ],
                            [
                                'name' => 'Rick Roll',
                                'grades' => [7, 7, 8, 9, 8, 10]
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
    /**
     * Get attendance data
     *
     * @return array
     */
    public function getAttendanceDataTest()
    {
        return array(
            'teams' => [
                [
                    'name' => 'terminal_noobs',
                    'academy'=> 1,
                    'members' => [
                        [
                            'name' => 'Mantas Narkevicius',
                            'attendances' => [
                                    [
                                        'attended' => true,
                                        'workshopId'=>1
                                    ],
                                    [
                                        'attended' => false,
                                        'workshopId'=>2
                                    ],
                                [
                                    'attended' => false,
                                    'workshopId'=>3
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>4
                                ],

                            ]
                        ],
                        [
                            'name' => 'Viktorija Razaite',
                            'attendances' => [
                                [
                                    'attended' => true,
                                    'workshopId'=>1
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>2
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>3
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>4
                                ],

                            ]
                        ],
                        [
                            'name' => 'Matas Minelga',
                            'attendances' => [
                                [
                                    'attended' => true,
                                    'workshopId'=>1
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>2
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>3
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>4
                                ],

                            ]
                        ]
                    ]
                ],
                [
                    'name' => 'other_team',
                    'academy'=> 1,
                    'members' => [
                        [
                            'name' => 'Petras Petraitis',
                            'attendances' => [
                                [
                                    'attended' => true,
                                    'workshopId'=>1
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>2
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>3
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>4
                                ],

                            ]
                        ],
                        [
                            'name' => 'Jonas Jonaitis',
                            'attendances' => [
                                [
                                    'attended' => false,
                                    'workshopId'=>1
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>2
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>3
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>4
                                ],

                            ]
                        ],
                        [
                            'name' => 'Justas Justaitis',
                            'attendances' => [
                                [
                                    'attended' => true,
                                    'workshopId'=>1
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>2
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>3
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>4
                                ],

                            ]
                        ]
                    ]
                ],
                [
                    'name' => 'terminal_pros',
                    'academy'=> 1,
                    'members' => [
                        [
                            'name' => 'John Pro',
                            'attendances' => [
                                [
                                    'attended' => true,
                                    'workshopId'=>1
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>2
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>3
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>4
                                ],

                            ]
                        ],
                        [
                            'name' => 'Sam Win',
                            'attendances' => [
                                [
                                    'attended' => true,
                                    'workshopId'=>1
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>2
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>3
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>4
                                ],

                            ]
                        ],
                        [
                            'name' => 'Jim Crush',
                            'attendances' => [
                                [
                                    'attended' => true,
                                    'workshopId'=>1
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>2
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>3
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>4
                                ],

                            ]                        ]
                    ]
                ],
                [
                    'name' => 'code_bugs',
                    'academy'=> 1,
                    'members' => [
                        [
                            'name' => 'Carl Bee',
                            'attendances' => [
                                [
                                    'attended' => false,
                                    'workshopId'=>1
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>2
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>3
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>4
                                ],

                            ]                        ],
                        [
                            'name' => 'Adam Ant',
                            'attendances' => [
                                [
                                    'attended' => false,
                                    'workshopId'=>1
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>2
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>3
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>4
                                ],

                            ]                        ],
                        [
                            'name' => 'Rick Roll',
                            'attendances' => [
                                [
                                    'attended' => false,
                                    'workshopId'=>1
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>2
                                ],
                                [
                                    'attended' => false,
                                    'workshopId'=>3
                                ],
                                [
                                    'attended' => true,
                                    'workshopId'=>4
                                ],

                            ]                        ]
                    ]
                ]
            ]

        );
    }
}