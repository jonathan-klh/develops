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

    /**
     * @ORM\ManyToMany(targetEntity="Advert", inversedBy="candidates")
     */
    private $adverts;



    public function __construct()
    {
        parent::__construct();
        $this->adverts = new ArrayCollection();
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



    /**
     * Add advert
     *
     * @param \AppBundle\Entity\Advert $advert
     *
     * @return User
     */
    public function addAdvert(\AppBundle\Entity\Advert $advert)
    {
        $this->adverts[] = $advert;

        return $this;
    }

    /**
     * Remove advert
     *
     * @param \AppBundle\Entity\Advert $advert
     */
    public function removeAdvert(\AppBundle\Entity\Advert $advert)
    {
        $this->adverts->removeElement($advert);
    }

    /**
     * Get adverts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdverts()
    {
        return $this->adverts;
    }
}
