<?php

namespace App\Repository;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Book>
 */
class BookRepository extends ServiceEntityRepository
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
        $result = $this->createQueryBuilder('b')
            ->andWhere('b.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();

        return $result instanceof Book ? $result : null;
    }

    /**
     * Find all books.
     *
     * @return Book[] Returns an array of Book objects
     */
    public function findAllBooks(): array
    {
        $result = $this->createQueryBuilder('b')
            ->orderBy('b.title', 'ASC')
            ->getQuery()
            ->getResult();

        return is_array($result) ? $result : [];
    }
}
