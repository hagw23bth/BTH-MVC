<?php

namespace App\Tests\Repository;

use App\Repository\FishStockRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FishStockRepositoryTest extends KernelTestCase
{
    private FishStockRepository $repository;

    protected function setUp(): void
    {
        self::bootKernel();
        $container = self::$kernel->getContainer()->get('test.service_container');
    
        $this->repository = $container->get(FishStockRepository::class);
    }

    public function testFindAllSortedByYearAsArray()
    {
        $result = $this->repository->findAllSortedByYearAsArray();

        // Kontrollera att resultatet är en array
        $this->assertIsArray($result);

        // Kontrollera att arrayen är sorterad efter år
        $years = array_column($result, 'year');
        $sortedYears = $years;
        sort($sortedYears);

        $this->assertEquals($sortedYears, $years);
    }
}