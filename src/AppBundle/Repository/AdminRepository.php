<?php
/**
 * Created by PhpStorm.
 * User: matas
 * Date: 16.11.19
 * Time: 14.23
 */

namespace AppBundle\Repository;


class AdminRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param $academy
     */
    public function getAverageAttendanceForAcademy($academy, $lecture){

        /**
         * Query in SQL "SELECT * FROM attendances LEFT JOIN workshops ON attendances.workshop_id = workshops.id WHERE workshops.academy_id = 2"
         */

        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder()
            ->select('av')
            ->avg('a.present', 'av')
            ->from('AppBundle:Attendance', 'a')
            ->leftJoin('a.workshop', 'w')
            ->where('w.academy = :academy and w.id = :lecture')
            ->orderBy('a.student')
            ->setParameters(['academy' => $academy, 'lecture' => $lecture]);


        /*->createQuery('
        SELECT a
        FROM AppBundle:Attendance a
        LEFT JOIN AppBundle:Workshop w
        ON a.workshop = w
    ');*/

        $result = $qb->getQuery()->getResult();
        return $result;
    }

}