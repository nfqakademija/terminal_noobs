<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 16.11.25
 * Time: 00.06
 */

namespace DataFixtures\ORM;

use AppBundle\Entity\Attendance;
use AppBundle\Entity\Workshop;
use AppBundle\Entity\Team;
use AppBundle\Entity\User;
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

        $workshops = $workshopRepository->findAll();

        foreach ($workshops as $workshop) {
            $academy = $workshop->getAcademy();
            $teams = $teamRepository->findByAcademy($academy);
            //$teams = $teamRepository->findAll();
            foreach($teams as $team) {
                $students = $team->getStudents();
                foreach ($students as $student) {
                    $attendance = new Attendance();
                    $attendance->setWorkshop($workshop);
                    $attendance->setStudent($student);
                    $present = rand(0, 1);

                    if ($present == 0)
                    {
                        $attendance->setPresent(false);
                    } else {
                        $attendance->setPresent(true);
                    }
                    $manager->persist($attendance);
                }
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
        return 5;
    }
}
