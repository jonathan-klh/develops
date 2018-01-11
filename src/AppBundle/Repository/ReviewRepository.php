<?php

namespace AppBundle\Repository;

/**
 * ReviewRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReviewRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * Retourne les 3 derniers avis d'un utilisateur
     * @param User $user
     * @return lastReviews[]
     */
    public function findLastReviewsByUser($user): array
    {
        $qb = $this->createQueryBuilder('r')
                    ->where('r.candidate = :userId')
                    ->setParameter('userId', $user->getId())
                    ->orderBy('r.createdDate', 'DESC')
                    ->setMaxResults(3)
                    ->getQuery();
        return $qb->execute();
    }

    /**
     * Retourne la moyenne de l'utilisateur
     * @param User $user
     * @return String rateAvg
     */
    public function getUserRateAvg($user): float
    { 
        $qb = $this->createQueryBuilder('r')
                    ->select("avg(r.note)")
                    ->where('r.candidate = :userId')
                    ->setParameter('userId', $user->getId())
                    ->getQuery();
        return (float) ($qb->getSingleScalarResult() * 10);
    }
    
}
