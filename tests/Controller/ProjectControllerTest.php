<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\FishStock;

class ProjectControllerTest extends WebTestCase
{
    // Testmetoden för att kontrollera att /data-routen fungerar korrekt
    public function testDataRoute(): void
    {
        // Skapa en klient för att simulera webbläsaren
        $client = static::createClient();
        
        // Gör en GET-begäran till /data-routen
        $crawler = $client->request('GET', '/data');

        // Kontrollera att svaret från servern är framgångsrikt (status 200)
        $this->assertResponseIsSuccessful();
        
        // Kontrollera att en viss CSS-selektor finns i den renderade HTML-koden
        $this->assertSelectorExists('.main-content-grid');

        // Hämta containern för att få tillgång till tjänster och repository
        $container = self::getContainer();
        
        // Hämta FishStock-repository och all data från FishStock-entiteten
        $fishStockRepository = $container->get('doctrine')->getRepository(FishStock::class);
        $fishStockData = $fishStockRepository->findAll();

        // Kontrollera att FishStock-data inte är tom
        $this->assertNotEmpty($fishStockData);
    }
}
