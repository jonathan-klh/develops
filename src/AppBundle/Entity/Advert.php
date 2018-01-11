<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Advert
 *
 * @ORM\Table(name="advert")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdvertRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Advert
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="advertsCreate")
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     */
    private $createdBy;


    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=50)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime")
     */
    private $createdDate;

    /**
     *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="adverts")
     * @ORM\JoinTable(name="users_adverts")
     */
    private $candidates;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="candidate_selected", referencedColumnName="id")
     */
    private $candidateSelected;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->candidates = new ArrayCollection();
        $this->status = 'created';
    }

    /** @ORM\PrePersist */
    public function PrePersist()
    {
        $this->createdDate = new \DateTime(null, new \DateTimeZone( 'Europe/Paris'));
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
     * @return Advert
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
     * @return Advert
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
     * Set createdBy
     *
     * @param \AppBundle\Entity\User $createdBy
     *
     * @return Advert
     */
    public function setCreatedBy(\AppBundle\Entity\User $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \AppBundle\Entity\User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }


    /**
     * Set status
     *
     * @param string $status
     *
     * @return Advert
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Add candidate
     *
     * @param \AppBundle\Entity\User $candidate
     *
     * @return Advert
     */
    public function addCandidate(\AppBundle\Entity\User $candidate)
    {
        $this->candidates[] = $candidate;

        return $this;
    }

    /**
     * Remove candidate
     *
     * @param \AppBundle\Entity\User $candidate
     */
    public function removeCandidate(\AppBundle\Entity\User $candidate)
    {
        $this->candidates->removeElement($candidate);
    }

    /**
     * Get candidates
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCandidates()
    {
        return $this->candidates;
    }


    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return Advert
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }


    /**
     * Set candidateSelected
     *
     * @param \AppBundle\Entity\User $candidateSelected
     *
     * @return Advert
     */
    public function setCandidateSelected(\AppBundle\Entity\User $candidateSelected = null)
    {
        $this->candidateSelected = $candidateSelected;

        return $this;
    }

    /**
     * Get candidateSelected
     *
     * @return \AppBundle\Entity\User
     */
    public function getCandidateSelected()
    {
        return $this->candidateSelected;
    }
}
