<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 16.11.25
 * Time: 00.06
 */

namespace DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Assignment;
use AppBundle\Entity\Workshop;

class LoadAssignmentData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{


    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     * @var Workshop $workshop
     */
    public function load(ObjectManager $manager)
    {
        $workshopManager = $this->container->get('doctrine')->getRepository('AppBundle:Workshop');
        $workshops = $workshopManager->findAll();

        foreach ($workshops as $workshop) {
            $create = rand(0, 1);
            if (true) {
                $assignment = new Assignment();
                $assignment->setTitle($workshop->getTitle() . 'assignment.');
                $assignment->setDescription($workshop->getTitle() . ' description.');
                $assignment->setWorkshop($workshop);
                $manager->persist($assignment);
            }
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
        return 6;
    }

    /**
     * Sets the container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}
