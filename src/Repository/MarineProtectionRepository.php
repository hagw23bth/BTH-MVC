<?php

namespace App\Repository;

use App\Entity\MarineProtection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MarineProtection>
 */
class MarineProtectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MarineProtection::class);
    }

    /**
     * Hämta alla data om marint skydd.
     *
     * @return array
     */
    public function findAllMarineProtectionData(): array
    {
        $results = $this->createQueryBuilder('m')
            ->orderBy('m.year', 'ASC')
            ->getQuery()
            ->getResult();

        return array_map(function ($protection) {
            return [
                'year' => $protection->getYear(),
                'riket' => $protection->getNationwidePercent(),
                'vasterhavet' => $protection->getVästerhavetPercent(),
                'ostersjon' => $protection->getöstersjönPercent(),
                'bottniska_viken' => $protection->getBottniskaVikenPercent(),
            ];
        }, $results);
    }
}
