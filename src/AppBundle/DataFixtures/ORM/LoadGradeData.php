<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 16.11.25
 * Time: 00.06
 */

namespace DataFixtures\ORM;

use AppBundle\Entity\Grade;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadGradeData extends AbstractFixture implements  OrderedFixtureInterface,ContainerAwareInterface
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
        $assignmentRepository = $this->container->get('doctrine')->getRepository('AppBundle:Assignment');

        $assignments = $assignmentRepository->findAll();
        foreach ($assignments as $assignment) {
            $academy = $assignment->getWorkshop()->getAcademy();
            $teams = $this->container->get('doctrine')->getRepository('AppBundle:Team')->findByAcademy($academy);
            foreach ($teams as $team) {
                $students = $team->getStudents();
                foreach ($students as $student) {
                    $grade = new Grade();
                    $grade->setGrade(rand(5, 10));
                    $grade->setStudent($student);
                    $grade->setAssignment($assignment);
                    $manager->persist($grade);
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
        return 7;
    }
}
