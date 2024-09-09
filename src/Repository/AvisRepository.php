<?php

namespace App\Repository;

use App\Entity\Avis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Avis>
 */
class AvisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Avis::class);
    }

    /**
     * @return Avis[] Returns an array of non-validated Avis objects
     */
    public function findNonValidated(): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.isVisible = :val')
            ->setParameter('val', true)
            ->orderBy('a.avis_id', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
