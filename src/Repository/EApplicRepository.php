<?php

namespace App\Repository;

use App\Entity\EApplic;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EApplic|null find($id, $lockMode = null, $lockVersion = null)
 * @method EApplic|null findOneBy(array $criteria, array $orderBy = null)
 * @method EApplic[]    findAll()
 * @method EApplic[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EApplicRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EApplic::class);
    }

    // /**
    //  * @return EApplic[] Returns an array of EApplic objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EApplic
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}