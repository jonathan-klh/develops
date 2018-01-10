<?php

namespace AppBundle\Service;

use AppBundle\Entity\User;
use AppBundle\Entity\Advert;
use AppBundle\Entity\Review;
use AppBundle\Form\ReviewType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class ReviewService
{
    private $em;
    private $repository;
    private $request;

    public function __construct(EntityManagerInterface $em, RequestStack $request)
    {
        $this->em = $em;
        $this->request = $request;
        $this->repository = $em->getRepository('AppBundle:Review');
    }

    public function addReview() {

    }

    public function getFormReview($advert)
    {
        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($this->request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $review->setClient($advert->getCreatedBy());
            $review->setDeveloper($advert->getCreatedBy());
            $this->em->persist($review);
            $this->em->flush();
            return true;
        }

        return $form;
    }

}