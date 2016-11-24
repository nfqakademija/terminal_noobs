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
        $userInfo = [
            [
            /* Admin logins */
                'username' => 'admin',
                'email'    => 'admin@admin.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_ADMIN', 'ROLE_USER']
            ],
            /* Lector logins */
            [
                'username' => 'darkas',
                'email'    => 'darius.kasiulevicius@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_LECTOR', 'ROLE_USER']
            ],
            [
                'username' => 'simser',
                'email'    => 'simonas.serlinskas@nfq.com',
                'password' => 'demo',
                'roles'    => ['ROLE_LECTOR', 'ROLE_USER']
            ],
            [
                'username' => 'darbis',
                'email'    => 'dariusb@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_LECTOR', 'ROLE_USER']
            ],
            [
                'username' => 'linkuk',
                'email'    => '	linas.kukulskis@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_LECTOR', 'ROLE_USER']
            ],
            [
                'username' => 'manurn',
                'email'    => 'mantas.urnieza@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_LECTOR', 'ROLE_USER']
            ],
            /* Mentor logins */
            [
                'username' => 'gievic',
                'email'    => 'giedrius.vickus@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_MENTOR', 'ROLE_USER']
            ],
            [
                'username' => 'podmen',
                'email'    => 'podelis.mentorius@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_MENTOR', 'ROLE_USER']
            ],
            [
                'username' => 'edumen',
                'email'    => 'edukodas.mentorius@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_MENTOR', 'ROLE_USER']
            ],
            /* Student logins */
            /* terminal_noobs */
            [
                'username' => 'mannar',
                'email'    => 'manttassn@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']
            ],
            [
                'username' => 'vikraz',
                'email'    => 'viktorija.razaite@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']
            ],
            [
                'username' => 'matmin',
                'email'    => 'minematas@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']
            ],
            /* podelis */
            [
                'username' => 'danstr',
                'email'    => 'danstr@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']
            ],
            [
                'username' => 'eimmar',
                'email'    => 'eimmar@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']
            ],
            [
                'username' => 'sarvab',
                'email'    => 'sarvab@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
            /* Edukodas */
            [
                'username' => 'genboj',
                'email'    => 'genboj@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
            [
                'username' => 'lukcep',
                'email'    => 'lukcep@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
            [
                'username' => 'dompet',
                'email'    => 'dompet@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
            /* Copy_Paste */
            [
                'username' => 'robnor',
                'email'    => 'robnor@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']
            ],
            [
                'username' => 'gedluk',
                'email'    => 'gedluk@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
            [
                'username' => 'zilnav',
                'email'    => 'zilnav@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
        ];
        $this->loadUsers($userInfo);
    }

    public function loadUsers($userInfo){
        $userManager = $this->container->get('fos_user.user_manager');
        foreach ($userInfo as $info){
            $user = $userManager->createUser();
            $user->setUsername($info['username']);
            $user->setEmail($info['email']);
            $user->setPlainPassword($info['password']);
            $user->setEnabled(true);
            $user->setRoles($info['roles']);
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