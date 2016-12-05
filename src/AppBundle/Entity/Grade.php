<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grades
 *
 * @ORM\Table(name="grades")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GradeRepository")
 */
class Grade
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="student_id", referencedColumnName="id")
     */
    private $student;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Assignment", inversedBy="grades")
     * @ORM\JoinColumn(name="assignment_id", referencedColumnName="id")
     */
    private $assignment;

    /**
     *
     * @var int;
     *
     * @ORM\Column(name="grade", type="integer", nullable=true)
     */
    private $grade;

    /**
     * @ORM\Column(name="createDate", type="datetime", nullable=true)
     */
    private $createDate;

    /**
     * @ORM\Column(name="updateDate", type="datetime", nullable=true)
     */
    private $updateDate;


    /**
     * Set grade
     *
     * @param integer $grade
     *
     * @return Grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set student
     *
     * @param \AppBundle\Entity\User $student
     *
     * @return Grade
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

    /**
     * Set assignment
     *
     * @param \AppBundle\Entity\Assignment $assignment
     *
     * @return Grade
     */
    public function setAssignment(\AppBundle\Entity\Assignment $assignment)
    {
        $this->assignment = $assignment;

        return $this;
    }

    /**
     * Get assignment
     *
     * @return \AppBundle\Entity\Assignment
     */
    public function getAssignment()
    {
        return $this->assignment;
    }
}
