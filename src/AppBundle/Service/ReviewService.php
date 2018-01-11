<?php

namespace AppBundle\Service;

use AppBundle\Entity\User;
use AppBundle\Entity\Advert;
use AppBundle\Entity\Review;
use AppBundle\Form\ReviewType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ReviewService
{
    private $em;
    private $repository;
    private $container;
    private $request;

    public function __construct(EntityManagerInterface $em, ContainerInterface $container, RequestStack $request)
    {
        $this->em = $em;
        $this->repository = $em->getRepository('AppBundle:Review');
        $this->container = $container;
        $this->request = $request->getCurrentRequest();
    }

    /*
     * La méthode addReview retourne le formulaire pour ajouter un avi 
     * et si celui si est submit elle l'ajoute en base et retourne true 
     */
    public function addReview($advert)
    {
        $review = new Review();
        $form = $this->container->get('form.factory')->create(ReviewType::class, $review);
        $form->handleRequest($this->request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $review->setAdvert($advert);
            $review->setCreatedBy($advert->getCreatedBy());
            $review->setCandidate($advert->getCandidateSelected());
            $review->setCreatedDate(new \Datetime());
            $this->em->persist($review);
            $this->em->flush();
            return true;
        }

        return $form;
    }

    /*
     * La méthode editReview permet de modifier un avi
     * dans un délai maximum de 3 jour à partir du premier émis
     */
    public function editReview($advert)
    {
        $advert = $advert->getReview();
        if (date_diff($advert->getCreatedDate(), new \Datetime())->days <= 3) {
            $form = $this->container->get('form.factory')->create(ReviewType::class, $advert);
            $form->handleRequest($this->request);
            
            if ($form->isSubmitted() && $form->isValid()){
                $this->em->flush();
                $this->setRateAvgToUser($advert);
                return true;
            }

            return $form;
        }

        return false;
    }

    /*
     * Cette méthode set la note moyenne d'un utilisateur en pourcentage
     */
    public function setRateAvgToUser($advert)
    {
        $candidate = $advert->getCandidate();
        $candidate->setRateAvg($this->repository->getUserRateAvg($candidate));
        $this->em->flush();
    }

}