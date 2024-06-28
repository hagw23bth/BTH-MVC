# Metrics

## Introduktion

Kodkvalitet är en viktig aspekt av mjukvaruutveckling. Att hålla koden ren och underhållbar förbättrar inte bara läsbarheten utan också hållbarheten och skalbarheten av applikationen. Kodkvalitet kan bedömas och förbättras med hjälp av olika mätvärden. Vi använder oss av sex viktiga mätvärden, kända som de sex C:na:

- **Codestyle**
- **Coverage**
- **Complexity** 
- **Cohesion** 
- **Coupling**
- **CRAP**

### Codestyle
Kodstil handlar om att följa en enhetlig stil i hela koden för att göra den lättare att läsa och förstå. Det kan till exempel handla om att använda beskrivande namn på metoder

**Beskrivande namn och CamelCase för metoder**

Metodnamn som tydligt beskriver vad metoden gör, gör koden lättare att förstå. Metodnamn som börjar med ett verb beskriver vanligtvis en handling, vilket gör det tydligt vad metoden gör. Att använda CamelCase (starta med liten bokstav och varje nytt ord börjar med stor bokstav) för metodnamn är en standard i många PHP-kodstilar, inklusive PSR-12. Detta gör koden konsekvent och lättare att läsa.


```php
public function createBook(Request $request): Response
{
    // Kod för att skapa en bok
}

public function deleteBook(Request $request): Response
{
    // Kod för att ta bort en bok
}
```

**PascalCase för Klasser**

Att använda PascalCase (starta varje ord med stor bokstav) enligt PSR-12 standarden för namngivning av klasser gör det lättare att identifiera klasser i koden.

```php
// BookController.php
class BookController extends AbstractController
{
    // Metoder för att hantera bokoperationer
}
```

**Konsekvent indentering**

Att använda konsekvent indentering, ex 4 mellanslag enligt PSR-12, gör koden mer läsbar.

**Dokumentation och Kommentarer**

Att använda PHPDoc-kommentarer för att dokumentera metoder och deras parametrar gör det lättare för andra utvecklare att förstå vad varje metod gör och hur den ska användas.

```php
/**
 * Creates a new book entity.
 *
 * @param Request $request
 * @return Response
 */
public function createBook(Request $request): Response
{
    // Kod för att skapa en bok
}
```

### Coverage

Kodtäckning mäter hur stor del av koden som är täckt av tester. En högre täckningsgrad indikerar att mer av din kod testas, vilket kan leda till färre buggar och högre kodkvalitet.

Enligt rapporten från Scrutinizer täcker mina enhetstester 14.1% av kodbasen. Detta visar att en betydande del av koden inte är testad, vilket innebär att det finns utrymme för förbättringar för att öka täckningsgraden och därmed kodkvaliteten.

### Complexity

Komplexitet mäter hur komplicerad koden är. Hög komplexitet kan göra koden svår att förstå och underhålla. Ett vanligt mått på komplexitet är cyklomatisk komplexitet.

Min kod har en genomsnittlig cyklomatisk komplexitet på 4.29. Detta innebär att mina metoder i genomsnitt har 4.29 möjliga exekveringsvägar, vilket är ett acceptabelt värde men ett värde som nog kan förbättras.

### Cohesion

Sammanhållning (cohesion) mäter hur väl sammanhållen en klass eller metod är. Låg sammanhållning innebär att klassen/metoden gör för många olika saker. Hög cohesion innebär att en klass gör en sak och gör det bra.

Jag tycker jag uppnår hög grad av kohesion i mina ändamålsspecifika controllers, exempelvis BookController som i huvudsak ansvarar för operationer relaterade till böcker.

### Coupling

Koppling (coupling) refererar till hur beroende moduler eller klasser är av varandra. Låg koppling är att föredra eftersom det gör koden mer modulär och lättare att underhålla.

Exempelvis min BookRepository är väl avgränsad och har låg koppling till andra delar av systemet, vilket gör det lätt att underhålla och testa.

### CRAP

CRAP (Change Risk Anti-Patterns) är ett mått som kombinerar cyklomatisk komplexitet och kodtäckning för att bedöma risken med förändringar i koden. Låga CRAP-värden är att föredra eftersom de indikerar låg komplexitet och hög testtäckning.

Mina metoder har i genomsnitt ett CRAP-värde på 5, vilket innebär att de har låg komplexitet och är väl testade.
