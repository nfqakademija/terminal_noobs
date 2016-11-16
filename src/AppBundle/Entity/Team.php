<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\User as User;

/**
 * Team
 *
 * @ORM\Table(name="teams")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TeamRepository")
 */
class Team
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=55, unique=false)
     */
    private $title;

    /**
     * @ORM\ManyToMany(targetEntity="User")
     * @ORM\JoinTable(name="teams_users",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="team_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $students;

    /**
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="mentor_id", referencedColumnName="id")
     */
    private $mentor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->students = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Team
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Add student
     *
     * @param \AppBundle\Entity\User $student
     *
     * @return Team
     */
    public function addStudent(\AppBundle\Entity\User $student)
    {
        $this->students[] = $student;

        return $this;
    }

    /**
     * Remove student
     *
     * @param \AppBundle\Entity\User $student
     */
    public function removeStudent(\AppBundle\Entity\User $student)
    {
        $this->students->removeElement($student);
    }

    /**
     * Get students
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Set mentor
     *
     * @param \AppBundle\Entity\User $mentor
     *
     * @return Team
     */
    public function setMentor(\AppBundle\Entity\User $mentor = null)
    {
        $this->mentor = $mentor;

        return $this;
    }

    /**
     * Get mentor
     *
     * @return \AppBundle\Entity\User
     */
    public function getMentor()
    {
        return $this->mentor;
    }
}
