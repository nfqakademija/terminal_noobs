<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 16.11.25
 * Time: 00.43
 */

namespace DataFixtures\ORM;



use AppBundle\Entity\Academy;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAcademyData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $academyInfo = [
            [
                'name' => '2016 ruduo',
                'city' => 'Kaunas'
            ],
            [
                'name' => '2016 ruduo',
                'city' => 'Vilnius'
            ],
            [
                'name' => '2016 ruduo',
                'city' => 'Siauliai'
            ]
        ];

        foreach($academyInfo as $info){
            $academy = new Academy();
            $academy->setName($info['name']);
            $academy->setCity($info['city']);
            $manager->persist($academy);
        }
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}