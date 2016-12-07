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
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadWorkshopData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface $container
     */
    private $container;
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $workshopInfo = [
            [
                'title'  => 'Design patterns',
                'lector' => 'simser',
                'description' => 'Description of the design pattern workshop',
                'academy' => '2016 ruduo Kaunas'
            ],
            [
                'title'  => 'Introduction to symfony',
                'lector' => 'simser',
                'description' => 'Description of the symfony introduction workshop',
                'academy' => '2016 ruduo Kaunas'
            ],
            [
                'title'  => 'Design',
                'lector' => 'simser',
                'description' => 'Description of the design workshop',
                'academy' => '2016 ruduo Kaunas'
            ],
            [
                'title'  => 'Other lecture',
                'lector' => 'simser',
                'description' => 'Some Description',
                'academy' => '2016 ruduo Kaunas'
            ],
            [
                'title'  => 'Design patterns',
                'lector' => 'simser',
                'description' => 'Description of the design pattern workshop',
                'academy' => '2016 ruduo Vilnius'
            ],
            [
                'title'  => 'Introduction to symfony',
                'lector' => 'simser',
                'description' => 'Description of the symfony introduction workshop',
                'academy' => '2016 ruduo Vilnius'
            ],
            [
                'title'  => 'Design',
                'lector' => 'simser',
                'description' => 'Description of the design workshop',
                'academy' => '2016 ruduo Vilnius'
            ],
            [
                'title'  => 'Other lecture',
                'lector' => 'simser',
                'description' => 'Some Description',
                'academy' => '2016 ruduo Vilnius'
            ],
        ];

        foreach ($workshopInfo as $info) {
            $workshop = new Workshop();
            $workshop->setTitle($info['title']);
            $workshop->setDescription($info['description']);
            $workshop->setAcademy(
                $this->container->get('doctrine')->getRepository('AppBundle:Academy')->findOneByName($info['academy'])
            );
            $workshop->setLector($this->container->get('fos_user.user_manager')->findUserByUsername($info['lector']));
            $manager->persist($workshop);
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
        return 4;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}
