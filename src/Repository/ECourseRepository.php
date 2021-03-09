<?php

namespace App\Repository;

use App\Entity\ECourse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ECourse|null find($id, $lockMode = null, $lockVersion = null)
 * @method ECourse|null findOneBy(array $criteria, array $orderBy = null)
 * @method ECourse[]    findAll()
 * @method ECourse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ECourseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ECourse::class);
    }

    // /**
    //  * @return ECourse[] Returns an array of ECourse objects
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
    public function findOneBySomeField($value): ?ECourse
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
