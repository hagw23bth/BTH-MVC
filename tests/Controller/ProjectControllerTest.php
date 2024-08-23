<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectControllerTest extends WebTestCase
{
    public function testDataPage()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/data');

        // Kontrollera att sidan laddas korrekt
        $this->assertResponseIsSuccessful();

        // Kontrollera att FishStockData och MarineProtectionData skickas till vyn och innehåller data
        $this->assertSelectorExists('#fishStockData');
        $this->assertNotEmpty(json_decode($crawler->filter('#fishStockData')->text()));

        $this->assertSelectorExists('#marineProtectionData');
        $this->assertNotEmpty(json_decode($crawler->filter('#marineProtectionData')->text()));

        // Kontrollera att nödvändiga diagram finns på sidan
        $this->assertSelectorExists('#fishStockChart');
        $this->assertSelectorExists('#marineProtectionChart');
        $this->assertSelectorExists('#riketChart');
        $this->assertSelectorExists('#västerhavetChart');
        $this->assertSelectorExists('#östersjönChart');
        $this->assertSelectorExists('#bottniskaVikenChart');
    }
}
