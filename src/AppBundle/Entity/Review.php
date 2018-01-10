<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * Review
 *
 * @ORM\Table(name="review",
 *    uniqueConstraints={
 *        @UniqueConstraint(name="review_unique",
 *            columns={"developer", "client", "advert"})
 *    }
 * )
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReviewRepository")
 */
class Review
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
     * @var User $developer
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="reviews")
     * @ORM\JoinColumn(name="developer", referencedColumnName="id")
     */
    private $developer;

    /**
     * @var User $client
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="writtenReviews")
     * @ORM\JoinColumn(name="client", referencedColumnName="id")
     */
    private $client;

    /**
     * @var Advert $advert
     *
     * @ORM\OneToOne(targetEntity="Advert", inversedBy="review")
     * @ORM\JoinColumn(name="advert", referencedColumnName="id")
     */
    private $advert;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime")
     */
    private $createdDate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Review
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Review
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set developer
     *
     * @param \AppBundle\Entity\User $developer
     *
     * @return Review
     */
    public function setDeveloper(\AppBundle\Entity\User $developer = null)
    {
        $this->developer = $developer;

        return $this;
    }

    /**
     * Get developer
     *
     * @return \AppBundle\Entity\User
     */
    public function getDeveloper()
    {
        return $this->developer;
    }


    /**
     * Set client
     *
     * @param \AppBundle\Entity\User $client
     *
     * @return Review
     */
    public function setClient(\AppBundle\Entity\User $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\User
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return Review
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
     * Set advert
     *
     * @param \AppBundle\Entity\Advert $advert
     *
     * @return Review
     */
    public function setAdvert(\AppBundle\Entity\Advert $advert = null)
    {
        $this->advert = $advert;

        return $this;
    }

    /**
     * Get advert
     *
     * @return \AppBundle\Entity\Advert
     */
    public function getAdvert()
    {
        return $this->advert;
    }
}
