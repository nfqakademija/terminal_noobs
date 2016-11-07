<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 16.11.7
 * Time: 14.39
 */

namespace DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;
use AppBundle\Entity\Team;

class LoadTeamData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $team = new Team();
        $team->setName("Terminal_noobs")->setMembers([
            0 => $this->getReference("student_mantas"),
            1 => $this->getReference("student_viktorija"),
            2 => $this->getReference("student_matas")
        ]);
        $team->setMentor($this->getReference('mentor_giedrius'));
        $manager->persist($team);
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 3;
    }
}