<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Advert
 *
 * @ORM\Table(name="advert")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdvertRepository")
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
     * @ORM\OneToMany(targetEntity="User", mappedBy="candidate", cascade={"persist", "remove"})
     */
    private $candidates;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->candidates = new ArrayCollection();
    }



    public function getPostuler()
    {
        return $this->id;
//        $postuler = $this->getGouvernanceByImport()->filter(function($ligne){
//            return $ligne->getFlag() !== null;
//        });
//
//        return $postuler->count();
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
}
