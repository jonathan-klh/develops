<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Advert", mappedBy="createdBy")
     */
    private $advertsCreate;


    /**
     * @ORM\ManyToOne(targetEntity="Advert", inversedBy="candidates")
     * @ORM\JoinColumn(name="advert_id", referencedColumnName="id")
     */
    private $candidate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $formation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $experiencesPro;


    public function __construct()
    {
        parent::__construct();
        $this->advertsCreate = new ArrayCollection();
    }


    /**
     * Add advertsCreate
     *
     * @param \AppBundle\Entity\Advert $advertsCreate
     *
     * @return User
     */
    public function addAdvertsCreate(\AppBundle\Entity\Advert $advertsCreate)
    {
        $this->advertsCreate[] = $advertsCreate;

        return $this;
    }

    /**
     * Remove advertsCreate
     *
     * @param \AppBundle\Entity\Advert $advertsCreate
     */
    public function removeAdvertsCreate(\AppBundle\Entity\Advert $advertsCreate)
    {
        $this->advertsCreate->removeElement($advertsCreate);
    }

    /**
     * Get advertsCreate
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdvertsCreate()
    {
        return $this->advertsCreate;
    }

    /**
     * Set candidate
     *
     * @param \AppBundle\Entity\Advert $candidate
     *
     * @return User
     */
    public function setCandidate(\AppBundle\Entity\Advert $candidate = null)
    {
        $this->candidate = $candidate;

        return $this;
    }

    /**
     * Get candidate
     *
     * @return \AppBundle\Entity\Advert
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return User
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
     * Set formation
     *
     * @param string $formation
     *
     * @return User
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return string
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Set experiencesPro
     *
     * @param string $experiencesPro
     *
     * @return User
     */
    public function setExperiencesPro($experiencesPro)
    {
        $this->experiencesPro = $experiencesPro;

        return $this;
    }

    /**
     * Get experiencesPro
     *
     * @return string
     */
    public function getExperiencesPro()
    {
        return $this->experiencesPro;
    }
}
