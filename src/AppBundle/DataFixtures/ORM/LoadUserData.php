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
                'name'     => 'admin',
                'username' => 'admin',
                'email'    => 'admin@admin.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_ADMIN', 'ROLE_USER']
            ],
            /* Lector logins */
            [
                'name'     => 'Darius Kasiulevicius',
                'username' => 'darkas',
                'email'    => 'darius.kasiulevicius@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_LECTOR', 'ROLE_USER']
            ],
            [
                'name'     => 'Simonas Serlinskas',
                'username' => 'simser',
                'email'    => 'simonas.serlinskas@nfq.com',
                'password' => 'demo',
                'roles'    => ['ROLE_LECTOR', 'ROLE_USER']
            ],
            [
                'name'     => 'Darius',
                'username' => 'darbis',
                'email'    => 'dariusb@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_LECTOR', 'ROLE_USER']
            ],
            [
                'name'     => 'Linas',
                'username' => 'linkuk',
                'email'    => 'linas.kukulskis@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_LECTOR', 'ROLE_USER']
            ],
            [
                'name'     => 'Mantas',
                'username' => 'manurn',
                'email'    => 'mantas.urnieza@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_LECTOR', 'ROLE_USER']
            ],
            /* Mentor logins */
            [
                'name'     => 'Giedrius',
                'username' => 'gievic',
                'email'    => 'giedrius.vickus@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_MENTOR', 'ROLE_USER']
            ],
            [
                'name'     => 'Podelis',
                'username' => 'podmen',
                'email'    => 'podelis.mentorius@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_MENTOR', 'ROLE_USER']
            ],
            [
                'name'     => 'Edukodas',
                'username' => 'edumen',
                'email'    => 'edukodas.mentorius@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_MENTOR', 'ROLE_USER']
            ],
            [
                'name'     => 'Wilno',
                'username' => 'wilno',
                'email'    => 'wilno.mentorius@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_MENTOR', 'ROLE_USER']
            ],
            [
                'name'     => 'WilnoTwo',
                'username' => 'wilnot',
                'email'    => 'wilnot.mentorius@nfq.lt',
                'password' => 'demo',
                'roles'    => ['ROLE_MENTOR', 'ROLE_USER']
            ],
            /* Student logins */
            /* terminal_noobs */
            [
                'name'     => 'Mantas Narkevicius',
                'username' => 'mannar',
                'email'    => 'manttassn@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']
            ],
            [
                'name'     => 'Viktorija Razaite',
                'username' => 'vikraz',
                'email'    => 'viktorija.razaite@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']
            ],
            [
                'name'     => 'Matas Minelga',
                'username' => 'matmin',
                'email'    => 'minematas@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']
            ],
            /* podelis */
            [
                'name'     => 'Dan',
                'username' => 'danstr',
                'email'    => 'danstr@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']
            ],
            [
                'name'     => 'Eim',
                'username' => 'eimmar',
                'email'    => 'eimmar@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']
            ],
            [
                'name'     => 'Sar',
                'username' => 'sarvab',
                'email'    => 'sarvab@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
            /* Edukodas */
            [
                'name'     => 'Gen',
                'username' => 'genboj',
                'email'    => 'genboj@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
            [
                'name'     => 'Luk',
                'username' => 'lukcep',
                'email'    => 'lukcep@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
            [
                'name'     => 'Dom',
                'username' => 'dompet',
                'email'    => 'dompet@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
            /* Copy_Paste */
            [
                'name'     => 'Rob',
                'username' => 'robnor',
                'email'    => 'robnor@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']
            ],
            [
                'name'     => 'Ged',
                'username' => 'gedluk',
                'email'    => 'gedluk@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
            [
                'name'     => 'Zil',
                'username' => 'zilnav',
                'email'    => 'zilnav@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
            /*wilNo*/
            [
                'name'     => 'Wil',
                'username' => 'sumguy',
                'email'    => 'sumguy@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']
            ],
            [
                'name'     => 'No',
                'username' => 'nono',
                'email'    => 'nono@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
            [
                'name'     => 'Kum',
                'username' => 'kumkum',
                'email'    => 'kumkum@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
            /*wilNoT*/
            [
                'name'     => 'Wilt',
                'username' => 'sumguyt',
                'email'    => 'sumguyt@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']
            ],
            [
                'name'     => 'Not',
                'username' => 'nonot',
                'email'    => 'nonot@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ],
            [
                'name'     => 'Kumt',
                'username' => 'kumkumt',
                'email'    => 'kumkumt@gmail.com',
                'password' => 'demo',
                'roles'    => ['ROLE_STUDENT', 'ROLE_USER']

            ]
        ];
        $this->loadUsers($userInfo);
    }

    public function loadUsers($userInfo)
    {
        $userManager = $this->container->get('fos_user.user_manager');
        foreach ($userInfo as $info) {
            $user = $userManager->createUser();
            $user->setName($info['name']);
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
        return 2;
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
