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
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadTeamData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $userManager = $this->container->get('fos_user.user_manager');

        $teamInfo = [
            [
                'title' => 'terminal_noobs',
                'mentor' => 'gievic',
                'members' => ['mannar', 'matmin', 'vikraz'],
                'academy' => '2016'
            ],
            [
                'title' => 'podelis',
                'mentor' => 'podmen',
                'members' => ['danstr', 'eimmar', 'sarvab'],
                'academy' => '2016'
            ],
            [
                'title' => 'Edukodas',
                'mentor' => 'edumen',
                'members' => ['genboj', 'lukcep', 'dompet'],
                'academy' => '2016'
            ],
            [
                'title' => 'Copy_Paste',
                'mentor' => 'copmen',
                'members' => ['robnor', 'gedluk', 'zilnav'],
                'academy' => '2016'
            ]
        ];

        foreach($teamInfo as $info) {
            $team = new Team();
            $team->setTitle($info['title']);
            $team->setMentor($this->container->get('fos_user.user_manager')->findUserByUsername($info['mentor']));
            $students = [];
            foreach ($info['members'] as $member){
                $students[] = $this->container->get('fos_user.user_manager')->findUserByUsername($member);
            }
            $team->setStudents($students);
            $manager->persist($team);
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
        return 3;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}