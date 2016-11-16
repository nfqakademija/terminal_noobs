<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Workshop;
use \AppBundle\Entity\User;

/**
 * Attendance
 *
 * @ORM\Table(name="attendances")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AttendanceRepository")
 */
class Attendance
{
    /**
     * @ORM\ManyToOne(targetEntity="Workshop", inversedBy="attendance")
     * @ORM\Id
     * @ORM\JoinColumn(name="workshop_id", referencedColumnName="id")
     */
    private $workshop;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\Id
     * @ORM\JoinColumn(name="student_id", referencedColumnName="id")
     */
    private $student;

    /**
     * @var bool
     *
     * @ORM\Column(name="present", type="boolean")
     */
    private $present;



    /**
     * Set present
     *
     * @param boolean $present
     *
     * @return Attendance
     */
    public function setPresent($present)
    {
        $this->present = $present;

        return $this;
    }

    /**
     * Get present
     *
     * @return boolean
     */
    public function getPresent()
    {
        return $this->present;
    }

    /**
     * Set workshop
     *
     * @param \AppBundle\Entity\Workshop $workshop
     *
     * @return Attendance
     */
    public function setWorkshop(\AppBundle\Entity\Workshop $workshop)
    {
        $this->workshop = $workshop;

        return $this;
    }

    /**
     * Get workshop
     *
     * @return \AppBundle\Entity\Workshop
     */
    public function getWorkshop()
    {
        return $this->workshop;
    }

    /**
     * Set student
     *
     * @param \AppBundle\Entity\User $student
     *
     * @return Attendance
     */
    public function setStudent(\AppBundle\Entity\User $student)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \AppBundle\Entity\User
     */
    public function getStudent()
    {
        return $this->student;
    }
}
