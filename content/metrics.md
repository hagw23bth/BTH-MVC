# Metrics

## Introduktion

Kodkvalitet är en viktig aspekt av mjukvaruutveckling. Att hålla koden ren och underhållbar förbättrar inte bara läsbarheten utan också hållbarheten och skalbarheten av applikationen. Kodkvalitet kan bedömas och förbättras med hjälp av olika mätvärden. Vi använder oss av sex viktiga mätvärden, kända som de sex C:na:

- **Codestyle:** Enhetlig stil i koden för att förbättra läsbarhet och förståelse.
- **Coverage:** Andelen av koden som täcks av tester.
- **Complexity:** Hur komplicerad koden är, ofta mätt med cyklomatisk komplexitet. 
- **Cohesion:** Hur väl sammanhållen en klass eller metod är. 
- **Coupling:** Hur beroende olika klasser eller moduler är av varandra.
- **CRAP:** Kombinerar komplexitet och täckning för att bedöma risken med förändringar i koden.

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

Komplexitet mäter hur komplicerad koden är. Hög komplexitet kan göra koden svår att förstå och underhålla. Ett vanligt mått på komplexitet är cyklomatisk komplexitet. Generellt sett innebär hög komplexitet att det finns många grenar (if-satser, loopar etc.) i koden, vilket kan göra den svår att förstå och underhålla.

Min kod har en genomsnittlig cyklomatisk komplexitet på 4.29. Detta innebär att mina metoder i genomsnitt har 4.29 möjliga exekveringsvägar, vilket är ett acceptabelt värde men ett värde som nog kan förbättras.

### Cohesion

Sammanhållning (cohesion) mäter hur väl sammanhållen en klass eller metod är. Låg sammanhållning innebär att klassen/metoden gör för många olika saker. Hög cohesion innebär att en klass gör en sak och gör det bra.

Jag tycker jag uppnår hög grad av kohesion i mina ändamålsspecifika controllers, exempelvis BookController som i huvudsak ansvarar för operationer relaterade till böcker.

### Coupling

Koppling (coupling) refererar till hur beroende moduler eller klasser är av varandra. Låg koppling är att föredra eftersom det gör koden mer modulär och lättare att underhålla.

Exempelvis min BookRepository är väl avgränsad och har låg koppling till andra delar av systemet, vilket gör det lätt att underhålla och testa.

Det finns två sätt att mäta koppling. 

**Afferent coupling (Ca)** mäter antalet andra klasser eller moduler som använder en viss klass.

**Efferent coupling (Ce)** mäter antalet andra klasser eller moduler som en viss klass använder. 

I genomsnitt har min kod ett afferent kopplingsvärde på 1 vilket är förhållandevis lågt och indikerar att dina klasser är självständiga och att ändringar i dessa klasser sannolikt inte kommer att ha en stor påverkan på andra delar av systemet. Detta är generellt sett positivt för kodunderhåll och modularitet.

Man kan räkna koppling i antalet klasser som en klass är beroende av (afficient koppling) eller i antalet klasser som är beroende av en viss klass (e)

### CRAP (Change Risk Anti-Patterns)

CRAP är ett mått som kombinerar cyklomatisk komplexitet och kodtäckning för att bedöma risken med förändringar i koden. Låga CRAP-värden är att föredra eftersom de indikerar låg komplexitet och hög testtäckning.

Genom att analysera CRAP-värdena kan vi identifiera vilka metoder som behöver förbättras. Eftersträvansvärt är att minska komplexiteten och öka testtäckningen för metoder med höga CRAP-värden. Detta skulle kunna göras genom att bryta ner komplexa metoder i mindre, mer hanterbara bitar och skriva fler tester för att täcka alla möjliga scenarier.

Mina metoder har i genomsnitt ett CRAP-värde på 6.4. Värdet skiljer dock stort mellan olika metoder där många har ett värde på 1-2 och några betydligt högre värden på upp till 56 hos mina metod Controller\GameController::play() och Controller\CardController::drawNumber().

## Phpmetrics

Phpmetrics är ett verktyg som analyserar PHP-kod och ger detaljerade rapporter om olika mätvärden som hjälper till att identifiera flaskhalsar och svaga punkter i koden. 

<div class="image-container">
    <img src="img/phpmetrics.png" alt="phpmetrics-data" class="metrics-square">
</div>

Utifrån min Phpmetrics-analys har jag identiferat följande svaga punkter i min kod.

### Komplexitet (complexity)

Enligt Phpmetrics-rapporten har min kod en genomsnittlig cyklomatisk komplexitet på 4.13. Det innebär att metoderna i genomsnitt har 4.13 möjliga exekveringsvägar, vilket kan göra koden svår att förstå och underhålla. Några klasser har särskilt hög komplexitet, särskilt mina controllers.

**Förbättringsmöjligheter**

- Bryta ner komplexa metoder till flera mindre, mer hanterbara metoder. Introducera fler hjälpfunktioner.

- Refaktorera villkorssatser. Om det finns många if-else- eller switch-satser, försöka att använda polymorfism eller strategimönster för att minska komplexiteten.

<div class="image-container">
    <img src="img/complexity.png" alt="phpmetrics-data complexity" class="metrics-wide">
</div>

### Koppling (Coupling)

Min kod har en genomsnittlig afferent och efferent koppling på 1 respektive 2.67 vilket är låg. Ett afferent kopplingsvärde på 1 är lågt och indikerar att dina klasser är självständiga och att ändringar i dessa klasser sannolikt inte kommer att ha en stor påverkan på andra delar av systemet. 

Granskar man enskilda filer så finns det dock några som har relativt höga värden på koppling. Hög koppling kan göra koden svårare att underhålla eftersom ändringar i en del av koden kan påverka många andra delar. Jag själv ställer mig lite frågande till om låg koppling alltid är det mest eftersträvansvärda. Om man lyckats väl med modularisering, så att flera enskilda moduler används många gånger inom koden, kan koden vara effektivt skriven och lätt att underhålla, trots höga värden på coupling. Därför är det viktigt att granska dessa värden modul för modul och fundera på varför vissa av dem får höga värden innan man drar för stora slutsatser. Att minska koppling till priset av kodduplicering känns inte meningsfullt.

Exempelvis har App\Card\CardDeck en afferent coupling (Ca) på 5 vilket är förväntat då den är en central del av min applikation och byggd för att användas av många andra klasser. Hög koppling här behöver inte vara negativt så länge klassen är väl utformad och testad.

Vidare är det mina controllers (ApiController, GameController och CardController) som sticker ut med höga värden (6) på efferent coupling (Ce) vilket kanske inte är så konstigt med tanke på att controllers ofta interagerar med och knyter ihop flera delar av applikationen. Att minska kopplingen här kan vara svårt men att refaktorisera och separera ansvar kan hjälpa.

**Förbättringsmöjligheter**

- Granska metoderna var och en för sig och hitta förklaringen till kopplingsvärdet. Utvärdera om någon förändring borde göras eller om värdet är rimligt så som det är.

- Se till att klasser med hög koppling är stabila och vältestade.

<div class="image-container">
    <img src="img/coupling.png" alt="phpmetrics-data coupling" class="metrics-wide">
</div>

### Kohesion (Cohesion)

Min kod har en låg sammanhållning (Lack of Cohesion of Methods) på 1.07, vilket innebär att klasser och metoder inte är väl sammanhållna. Låg sammanhållning kan göra koden svår att förstå och underhålla eftersom klasser och metoder gör för många olika saker. Att jag har ett lågt värde här indikerar att det fortfarande borde finnas utrymme att modularisera koden mer.

**Förbättringsmöjligheter**

- Enkelansvarsprincipen (Single Responsibility Principle). Se till att varje klass och metod har ett enda ansvar. 

- Använda modulär design för att dela upp funktionaliteten i mindre, mer fokuserade enheter.

### Kodtäckning (Coverage)

Din kodtäckning är för närvarande 14.1%, vilket innebär att en stor del av koden inte är täckt av tester. Detta kan leda till oupptäckta buggar och försämrad kodkvalitet. En förklaring till detta är att jag ännu inte utformat tester för mina controllers som står för väldigt stor andel av kodmassan. 

**Förbättringsmöjligheter**

- Överväga att utforma tester för controllers för att öka testtäckningen.

### Slutsats

Sammanfattningsvis ser jag att det finns en röd tråd här i att koden skulle gynnas av att modulariseras i ännu större utsträckning. Att bryta ner stora metoder i mindre komponenter och introducera fler hjälpfunktioner kommer förbättra koden i flera aspekter samtidigt nämligen komplexitet (complexity), koppling (coupling) och kohesion (cohesion). Koden skulle dessutom därmed bli lättare att testa. 

**Förbättringsmöjligheter**

- Granskning av Metoder: Se över metoderna för att säkerställa att de bara gör en sak (Single Responsibility Principle). Detta kan hjälpa till att reducera WMC genom att minska antalet ansvar per metod.

- Överväga att utforma tester för controllers för att öka testtäckningen.

## Scrutinizer


## Förbättringar

