<?php

namespace App\Repository;

use App\Entity\ReserveP;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReserveP|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReserveP|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReserveP[]    findAll()
 * @method ReserveP[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservePRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReserveP::class);
    }

    // /**
    //  * @return ReserveP[] Returns an array of ReserveP objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReserveP
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
