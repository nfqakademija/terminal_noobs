<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 16.11.7
 * Time: 00.22
 */

namespace DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setName('Ramunas Norvaisas');
        $manager->persist($user);
        $this->setReference('lector_ramunas', $user);

        $user = new User();
        $user->setName('Darius Bisikirskis');
        $manager->persist($user);
        $this->setReference('lector_darius', $user);

        $user = new User();
        $user->setName('Simonas Serlinskas');
        $manager->persist($user);
        $this->setReference('lector_simonas', $user);

        $user = new User();
        $user->setName('Mantas Kaveckas');
        $manager->persist($user);
        $this->setReference('lector_mantas', $user);

        $user = new User();
        $user->setName('Mantas Narkevicius');
        $manager->persist($user);
        $this->setReference('student_mantas', $user);

        $user = new User();
        $user->setName('Viktorija Razaite');
        $manager->persist($user);
        $this->setReference('student_viktorija', $user);

        $user = new User();
        $user->setName('Matas Minelga');
        $manager->persist($user);
        $this->setReference('student_matas', $user);

        $user = new User();
        $user->setName('Giedrius Vickus');
        $manager->persist($user);
        $this->setReference('mentor_giedrius', $user);

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