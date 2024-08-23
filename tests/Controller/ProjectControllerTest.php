<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectControllerTest extends WebTestCase
{
    public function testHomeRoute()
    {
        $client = static::createClient();
        $client->request('GET', '/proj');

        // Kontrollera att sidan laddas utan fel
        $this->assertResponseIsSuccessful();

        // Kontrollera att rätt template används
        $this->assertSelectorExists('html'); // Kontrollera att ett html-element finns, vilket indikerar att sidan renderas
    }

    public function testAboutRoute()
    {
        $client = static::createClient();
        $client->request('GET', '/proj/about');

        // Kontrollera att sidan laddas utan fel
        $this->assertResponseIsSuccessful();

        // Kontrollera att rätt template används
        $this->assertSelectorExists('html'); // Kontrollera att ett html-element finns, vilket indikerar att sidan renderas
    }

    public function testGoalsRoute()
    {
        $client = static::createClient();
        $client->request('GET', '/proj/goals');

        // Kontrollera att sidan laddas utan fel
        $this->assertResponseIsSuccessful();

        // Kontrollera att rätt template används
        $this->assertSelectorExists('html'); // Kontrollera att ett html-element finns, vilket indikerar att sidan renderas
    }

    public function testDataRoute()
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
