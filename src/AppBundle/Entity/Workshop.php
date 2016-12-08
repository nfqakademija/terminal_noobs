<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Academy;

/**
 * Workshop
 *
 * @ORM\Table(name="workshops")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WorkshopRepository")
 */
class Workshop
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
     * @ORM\Column(name="title", type="string", length=55)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="lector_id", referencedColumnName="id", nullable=true)
     */
    private $lector;



    /**
     * @ORM\OneToMany(targetEntity="Attendance", mappedBy="workshop")
     */
    private $attendance;

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

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Academy", inversedBy="workshops")
     * @ORM\JoinColumn(name="academy_id", referencedColumnName="id")
     */
    private $academy;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->attendance = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Workshop
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
     * Set description
     *
     * @param string $description
     *
     * @return Workshop
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set lector
     *
     * @param \AppBundle\Entity\User $lector
     *
     * @return Workshop
     */
    public function setLector(\AppBundle\Entity\User $lector)
    {
        $this->lector = $lector;

        return $this;
    }

    /**
     * Get lector
     *
     * @return \AppBundle\Entity\User
     */
    public function getLector()
    {
        return $this->lector;
    }

    /**
     * Add attendance
     *
     * @param \AppBundle\Entity\Attendance $attendance
     *
     * @return Workshop
     */
    public function addAttendance(\AppBundle\Entity\Attendance $attendance)
    {
        $this->attendance[] = $attendance;

        return $this;
    }

    /**
     * Remove attendance
     *
     * @param \AppBundle\Entity\Attendance $attendance
     */
    public function removeAttendance(\AppBundle\Entity\Attendance $attendance)
    {
        $this->attendance->removeElement($attendance);
    }

    /**
     * Get attendance
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAttendance()
    {
        return $this->attendance;
    }
}
