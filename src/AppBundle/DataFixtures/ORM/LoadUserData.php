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
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
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

        /*
         * Admin login
         */
        $user = $userManager->createUser();
        $user->setUsername('admin');
        $user->setEmail('admin@admin.com');
        $user->setPlainPassword('password');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_ADMIN'));
        $userManager->updateUser($user, true);
        /*
         * Setting up lector logins
         */



        $user = $userManager->createUser();
        $user->setUsername('darkas');
        $user->setEmail('darius.kasiulevicius@nfq.lt');
        $user->setPlainPassword('password');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_USER'));
        $userManager->updateUser($user, true);

        $user = $userManager->createUser();
        $user->setUsername('simser');
        $user->setEmail('simonas.serlinskas@nfq.com');
        $user->setPlainPassword('password');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_USER'));
        $userManager->updateUser($user, true);

        $user = $userManager->createUser();
        $user->setUsername('darbis');
        $user->setEmail('dariusb@nfq.lt');
        $user->setPlainPassword('password');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_USER'));
        $userManager->updateUser($user, true);



        /*
         * Setting up mentors
         */

        $userInfo = [
            [
                'username' => 'gievic',
                'email'    => 'giedrius.vickus@nfq.lt',
                'password' => 'demo'
            ],
            [
                'username' => 'manurn',
                'email'    => 'mantas.urnieza@nfq.lt',
                'password' => 'demo'
            ]
        ];

        foreach ($userInfo as $info){
                $user = $userManager->createUser();
                $user->setUsername($info['username']);
                $user->setEmail($info['email']);
                $user->setPlainPassword($info['password']);
                $user->setEnabled(true);
                $user->setRoles(array('ROLE_USER'));
                $userManager->updateUser($user, true);
        }

        /*
         * Setting up students
         */

        $userInfo = [
            [
                'username' => 'mannar',
                'email'    => 'manttassn@gmail.com',
                'password' => 'demo'
            ],
            [
                'username' => 'vikraz',
                'email'    => 'viktorija.razaite@gmail.com',
                'password' => 'demo'
            ],
            [
                'username' => 'matmin',
                'email'    => 'minematas@gmail.com',
                'password' => 'demo'
            ]
        ];

        foreach ($userInfo as $info){
                $user = $userManager->createUser();
                $user->setUsername($info['username']);
                $user->setEmail($info['email']);
                $user->setPlainPassword($info['password']);
                $user->setEnabled(true);
                $user->setRoles(array('ROLE_USER'));
                $userManager->updateUser($user, true);
        }

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