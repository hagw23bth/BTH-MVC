<?php

namespace App\Tests\Repository;

use App\Repository\MarineProtectionRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MarineProtectionRepositoryTest extends KernelTestCase
{
    private MarineProtectionRepository $repository;

    protected function setUp(): void
    {
        self::bootKernel();
        $container = self::$kernel->getContainer()->get('test.service_container');

        // Hämta repository från container
        $this->repository = $container->get(MarineProtectionRepository::class);
    }

    public function testFindAllMarineProtectionData()
    {
        $result = $this->repository->findAllMarineProtectionData();

        // Kontrollera att resultatet är en array
        $this->assertIsArray($result);

        // Kontrollera att arrayen innehåller rätt dataformat
        foreach ($result as $data) {
            $this->assertArrayHasKey('year', $data);
            $this->assertArrayHasKey('riket', $data);
            $this->assertArrayHasKey('vasterhavet', $data);
            $this->assertArrayHasKey('ostersjon', $data);
            $this->assertArrayHasKey('bottniska_viken', $data);
        }
    }
}