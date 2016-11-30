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
     * @ORM\ManyToOne(targetEntity="Academy")
     * @ORM\JoinColumn(name="academy_id", referencedColumnName="id")
     */
    private $academy;

    /**
     * Team constructor.
     */
    public function __construct()
    {
        $this->students = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param mixed $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }

    /**
     * @return mixed
     */
    public function getMentor()
    {
        return $this->mentor;
    }

    /**
     * @param mixed $mentor
     */
    public function setMentor($mentor)
    {
        $this->mentor = $mentor;
    }

    /**
     * @return mixed
     */
    public function getAcademy()
    {
        return $this->academy;
    }

    /**
     * @param mixed $academy
     */
    public function setAcademy($academy)
    {
        $this->academy = $academy;
    }

}
