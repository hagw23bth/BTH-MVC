<?php

namespace App\Repository;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @extends ServiceEntityRepository<Product>
 */
class BookRepostery extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Book::class);
    }

    /**
     * Find a book by its ID.
     * 
     * @return Book|null Returns a Book object or null
     */
    public function findById(int $id): ?Book
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Find all books.
     * 
     * @return Book[] Returns an array of Book objects
     */
    public function findAllBooks(): array
    {
        return $this->createQueryBuilder('b')
            ->orderBy('b.title', 'ASC')
            ->getQuery()
            ->getResult();
    }

    // /**
    //  * Find all products having a value above the specified one.
    //  * 
    //  * @return Product[] Returns an array of Product objects
    //  */
    // public function findByMinimumValue($value): array
    // {
    //     return $this->createQueryBuilder('p')
    //         ->andWhere('p.value >= :value')
    //         ->setParameter('value', $value)
    //         ->orderBy('p.value', 'ASC')
    //         ->getQuery()
    //         ->getResult()
    //     ;
    // }

    // /**
    //  * Find all products having a value above the specified one with SQL.
    //  * 
    //  * @return array Returns an array of arrays (i.e. a raw data set)
    //  */
    // public function findByMinimumValue2($value): array
    // {
    //     $conn = $this->getEntityManager()->getConnection();

    //     $sql = '
    //         SELECT * FROM product AS p
    //         WHERE p.value >= :value
    //         ORDER BY p.value ASC
    //     ';

    //     $resultSet = $conn->executeQuery($sql, ['value' => $value]);

    //     return $resultSet->fetchAllAssociative();
    // }
}
