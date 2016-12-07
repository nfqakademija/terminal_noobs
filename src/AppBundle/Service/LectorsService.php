<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;

class LectorsService
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
     * Get lectors list
     *
     * @return array
     */
    public function getList()
    {
        return [
            [
                'id' => 1,
                'name' => 'Simonas Šerlinskas',
                'active' => true
            ],
            [
                'id' => 2,
                'name' => 'Mantas Kaveckas',
                'active' => true
            ],
            [
                'id' => 3,
                'name' => 'Linas Kukulskis',
                'active' => false
            ],
            [
                'id' => 4,
                'name' => 'Ramunas Norvaisas',
                'active' => true
            ],
        ];
    }
}
