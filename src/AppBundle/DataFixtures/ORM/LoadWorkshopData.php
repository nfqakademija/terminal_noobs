<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 16.11.6
 * Time: 23.28
 */

namespace DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Workshop;

class LoadWorkshopData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $workshop = new Workshop();

        $workshop
            ->setId(1)
            ->setTitle("Design patterns")
            ->setDescription("Description of the design pattern workshop")
            ->setLector($this->getReference('lector_simonas'));

        $manager->persist($workshop);

        $workshop = new Workshop();

        $workshop
            ->setId(2)
            ->setTitle("Introduction to symfony")
            ->setDescription("Description of the introduction workshop")
            ->setLector($this->getReference('lector_simonas'));
        $manager->persist($workshop);

        $workshop
            ->setId(3)
        ->setTitle("Design")
        ->setDescription("Description of the introduction workshop")
        ->setLector($this->getReference('lector_darius'));
        $manager->persist($workshop);

        $manager->flush();


    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 2;
    }
}