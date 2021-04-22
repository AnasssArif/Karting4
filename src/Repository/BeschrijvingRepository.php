<?php

namespace App\Repository;

use App\Entity\Beschrijving;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Beschrijving|null find($id, $lockMode = null, $lockVersion = null)
 * @method Beschrijving|null findOneBy(array $criteria, array $orderBy = null)
 * @method Beschrijving[]    findAll()
 * @method Beschrijving[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BeschrijvingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Beschrijving::class);
    }

    // /**
    //  * @return Beschrijving[] Returns an array of Beschrijving objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Beschrijving
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
