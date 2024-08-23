<?php

namespace App\Repository;

use App\Entity\FishStock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FishStock>
 */
class FishStockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FishStock::class);
    }

    /**
     * Hämta alla data sorterade efter år som arrayer.
     *
     * @return array
     */
    public function findAllSortedByYearAsArray(): array
    {
        $results = $this->createQueryBuilder('f')
            ->orderBy('f.year', 'ASC')
            ->getQuery()
            ->getResult();
    
        return array_map(function ($fishStock) {
            return [
                'id' => $fishStock->getId(),
                'year' => $fishStock->getYear(),
                'sustainable_percent' => $fishStock->getSustainablePercent(),
                'sustainable_count' => $fishStock->getSustainableCount(),
                'total_count' => $fishStock->getTotalCount(),                    
            ];
        }, $results);
    }
}
