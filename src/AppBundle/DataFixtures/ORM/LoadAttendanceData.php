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

class LoadAttendanceData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{

    private $container;

    /**
     * Sets the container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $workshopRepository = $this->container->get('doctrine')->getRepository('AppBundle:Workshop');
        $teamRepository = $this->container->get('doctrine')->getRepository('AppBundle:Team');
        $academyRepository = $this->container->get('doctrine')->getRepository('AppBundle:Academy');

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 5;
    }
}