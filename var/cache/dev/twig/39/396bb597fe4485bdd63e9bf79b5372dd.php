<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* report.html.twig */
class __TwigTemplate_83f8b5cbb018132d83da2962e7319eb2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Report";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"inner-container grid-container\">
        <div class=\"sidebar\">
            <ul>
                <li><a href=\"#kmom01\">Kmom01</a></li>
                <li><a href=\"#kmom02\">Kmom02</a></li>
                <li><a href=\"#kmom03\">Kmom03</a></li>
                <li><a href=\"#kmom04\">Kmom04</a></li>
                <li><a href=\"#kmom05\">Kmom05</a></li>
                <li><a href=\"#kmom06\">Kmom06</a></li>
                            </ul>
        </div>
        <div class=\"content\">
            <section id=\"kmom01\">
                <h2>Kmom01</h2>
                <p>Jag har tidigare erfarenhet av objektorienterad programmering i Java, JavaScript och Python men inte i PHP så det blir nytt med den här kursen. Jag brukar tycka objektorienterat är kul eftersom det blir lite mer avancerat, organiserat och systematiskt.</p>
                <p>PHP:s objektorienterade programmering låter dig definiera klasser som mallar för att skapa objekt. En klass kan innehålla egenskaper (variabler) och metoder (funktioner) som definierar objektets tillstånd och beteende. Konstruktorer, specialmetoder som heter __construct, används för att initialisera nya objekt. PHP stöder enkel arv, vilket möjliggör att en klass kan ärva funktionalitet från en annan klass med nyckelordet extends. Synlighetsmodifikatorer som public, protected, och private styr åtkomsten till klassens medlemmar. För att komma igång, definiera en klass med dess egenskaper och metoder, instansiera klassen med new-nyckelordet, och interagera sedan med objektets egenskaper och metoder.</p>
                <p>Jag känner mig bekväm med html, twig, scss och känner på det stora hela att jag har fått till en bra kodbas. Men när det gäller php-delen känns det inte riktigt som att jag förstår vad det är jag gör. Jag utgick blankt från exemplet men förstår inte riktigt Controller-delen. Eller snarare, jag förstår koden men det känns främmande och jag förstår inte varför man gör som man gör och hade inte kunnat återskapa den själv.</p>
                <p>Jag har inte djupdykt i dokumentet utan tittade överskådligt. Jag bläddrade i getting started, code stylefuide och i Coding pratiges. Jag tror att det är en bra resurs att ha som uppslagsverk snarare än att läsa pärm till pärm. Jag kan tänka mig att man vill återkomma till dokumentet när teman som databaser, testing, caching och security blir relevanta.</p>
                <p><strong>TIL:</strong> Symphony och PHP-controllern.</p>

            </section>
            <section id=\"kmom02\">
                <h2>Kmom02</h2>
                <p><strong>Arv</strong> i PHP tillåter en klass att ärva metoder och egenskaper från en annan klass. Detta används för att skapa en hierarki av klasser som delar gemensamma egenskaper och beteenden. Jag har använt arv i klassen CardGraphic, som ärver från Card. </p>
                <p><strong>Komposition</strong> innebär att en klass innehåller en eller flera instanser av andra klasser som delar av dess funktionalitet. Jag har använt komposition i CardDeck, där varje CardDeck innehåller flera instanser av Card. </p>
                <p><strong>Interface</strong> i PHP definierar en standardiserad uppsättning metoder som en klass måste implementera. Interface är användbara för att skapa kod som är flexibel och återanvändbar utan att implementera ett fullt arv. Jag har ännu inte använde mig av ett interface, men det skulle kunna vara användbart för att definiera standardoperationer för olika typer av kortspel.</p>
                <p><strong>Trait</strong> tillåter återanvändning av kodblock i flera klasser i PHP. Traits kan vara användbara för att dela beteenden mellan klasser utan att vara bunden av klasshierarkin. Jag har inte använd Traits men jag insåg när jag gjorde sista delen med API routes att det började bli ganska mycket upprepning och nu slår mig tanken att jag hade kunnat bryta ut delar av koden som upprepas i flera routes, exempelvis operationer för att blanda och dra kort, och lägga i ett Trait som jag sedan använder i mina kontrollers.</p>
                <p>Jag började med att utveckla grundläggande klasser - Card, CardGraphic och CardDecklösa för att sedan gå över tilll att lösa webbapplikation delen. Successivt kompletterade jag mina klasser och anpassade funktionerna tills webbdelen fungerade. Då gick jag över till API-delen och där tyckte jag det klurigaste var att förstå hur jag kunde testa mina routes och se om de fungerar. Jag har aldrig använt curl innan men använde det för att testa mina POST-routes. Men då verkade det först som att jag hade problem med sewssionhanteringen så laborerade rätt mycket med min kod för att försöka få det att fungera innan jag insåg att det var min testning som inte fungerade. Jag tänkte inte på att att mina curlkommanon verkar oberoende av varandra om jag inte använder cookies. När jag la till flaggor för cookies kunde jag testa flödet av att blanda och sedan dra, och att dra upprepade gånger och  se att allt fungerade. Jag är nöjd med strukturen och moduläriteten i koden men ser ganska mycket upprepning i min kod, så det måste gå att skriva den mycket effektivare. Jag hade nog kunnat använda interfaces eller trait exempelvis för att modularisera och effektivisera koden ännu mer. Klasserna tycker jag är logiskt uppdelade och fungerar bra men om man ska arbeta vidare med ett kortspel tror jag att jag behöver utöka med en Hand-klass också.</p>
                <p>Jag tycker det har gått ganska lätt att komma in i arbetssättet, i alla fall om man lyckas installera och sätta upp allt korrekt. Första och andra gången vi satte upp symfoni från scratch (i förra kmom) gick det jättebra men nu när jag skulle göra övningen i detta kmom var det flera saker som krånglade när jag skulle sätta upp och det var svårt att förstå felet. Och detta var innan jag ens hade kommit igång med själva uppgiften. Jag fick jämföra kommandon mellan den nya och de gamla övningsfilerna och de visade sig ha små variationer, jag installerade om allt från början vilket löste något problem men sen var det ändå något som inte fungerade så jag struntade i övningen efter flera timmar av debuggande. Jag läste igenom övningen dock. Började sedan med uppgiften och då har allt flutit på jättebra.</p>
                <p><strong>TIL:</strong> Sessionhantering I API. Testa API POST routes. Traits och interface.</p>
            </section>
            <section id=\"kmom03\">
                <h2>Kmom03</h2>
                <p>Jag tyckte det var hjälpsamt och skönt att bryta ner problemet ordentligt och göra en plan innan jag började bygga upp koden. Framförallt tyckte jag psuedokoden var hjälpsam för det tvingade mig att fundera tidigigt på logiken, komponenter och loop-strukturen. Flödesschemat kan jag tänka mig är ett bra verktyg för att kunna visualisera och illustrera sin ide och förklara för andra men för mig personligen så hade psuedokoden räckt för att känna att jag har en plan och ser framför mig vad jag ska göra. Jag tar med mig de här verktygen inför kommande projekt. Flödesschema för de fall jag behöver få andra med på banan och psuedkod för att själv bryta ner ett problem och lägga upp en plan. Kodningsprocessen gick smidigt och följde i stor grad min plan.</p>
                <p>Jag försökte bygga vidare på klasser jag redan hade utan att göra några förändringar i de befintliga klasserna. För att få till spellogiken behövde jag komplettera med en klass för spelaren och en för banken samt en ny kontroller. Jag är nöjd med hur jag har valt att lösa detta.</p>
                <p>En förändring jag gjorde sedan förra kmom var att förenkla session-lagringen och frångå användning av serilisering/unserialisering, främst på grund av de fel jag stötte på med typvalideringen, särskilt när det gällde blandade typer (mixed type). Dessa problem gjorde det onödigt komplicerat för mitt ändamål att serialisera vid varje sessionlagring. Genom att undvika serialisering kunde jag förenkla koden och minska risken för typrelaterade buggar, vilket i sin tur gjorde applikationen mer pålitlig och lättare att underhålla. Nu känns koden snygg och robust och framförallt inte onödigt komplicerad.</p>
                <p>Det finns självklart mer förbättringspotential. Jag tror till exempel att en förbättring jag hade försökt mig på om jag arbetade vidare på koden är att komprimera bank-klassen så att den förlänger player-klassen istället. Där tror jag man skulle kunna spara sig en del upprepning. Jag hade även kunnat lägga mer kraft på att göra knappar och spelplan lite snyggare. Dessutom kan applikationens helhet förbättras med bättre felhantering och mer omfattande tester för att säkerställa robusthet och stabilitet.</p>
                <p>Överlag känner jag mig mer bekväm och självsäker i att använda Symfony, och jag ser fördelar med alla funktioner och hjälpmedel det är kompatibelt med.</p>
                <p><strong>TIL:</strong> De nya verktygen phpstan och phpmd samt vikten av enkel och robust sessionhantering. Och jag lärde mig göra formulär för att testa API post routes vilket jag missat i förra kmom då jag själv testade dem med Curl istället.</p>
            </section>
            <section id=\"kmom04\">
                <h2>Kmom04</h2>
                <p>Jag tyckte det var smidigt att arbeta med PHPUnit. Det kändes inte speciellt komplicerat att installera och komma igång. Övningarna var väldigt bra. Jag tyckte rapporten/översikten i html var väldigt tydlig och bra att ha till hands. </p>
                <p>Jag nådde 100% för alla filer jag testade.</p>
                <p>Jag upplevde min kod som väldigt testbar. Förhoppningsvis ett tecken på att jag lyckats skapa tydlig och modulär kod. Det kändes inte svårt att uppnå 100% täckning med testerna. Det som skulle kunna göra testerna bättre och mer isolerade är att använda mocking. Jag läste igenom övningen men har inte tillämpat tekniken utan försökt skriva så enkla tester som möjligt. </p>
                <p>De tester som är mest beroende av andra klasser är de som testar Bank och Player, eftersom dessa klasser interagerar med CardDeck och Card. Alla metoder som använder sig av instanser av card eller cardDeck hade kunnat skrivas om att istället använda mock-objekt för med förutsägbart och isolerat testresultat. I synnerhet kanske testerna för metoderna player:drawCard och bank:drawCard. Med mocking skulle dessa tester kunna skrivas så att de blir helt oberoende av att cardDeck och Card fungerar korrekt. Så som testerna är utformat i nuläget antar jag att cardDeck fungerar när jag testar bank:drawCard och player:drawCard. </p>
                <p>Jag gjorde en snabb förbättring och förenkling av min kod innan jag påbörjade testerna och som nog även gjorde koden mer testbar nämligen att förenkla bank-klassen så att den ärver hela player med den enda skillnaden i att drawCard endast anropas när poängen är mindre än 17 - en logik som förut låg i gameControllern. Det kändes som en väldigt rimligt förbättring att låta bank ärva istället för att återupprepa player-klassen totalt samt att tunna ut gameControllern där det är möjligt och flytta specifik spellogik för banken till bank-klassen. Detta var något som jag kom att tänka på i redan i förra kmom. Förändringen innebar att färre tester behövde skrivas för bank-klassen. I övrigt har jag inte gjort några direkta förändringar i källkoden.</p>
                <p>Jag kan inte själv komma på fler sätt att göra min kod mer testbar men jag är säker på att det finns. Jag inser att det är beroenden mellan olika klasser som skapar de mest komplicerade testfallen. Samtidigt hade koden blivit väldigt upprepande om man försökte kringgå beroende mellan klasser. Rent generellt tror jag att man ofta kan likställa ren och snygg kod som testbar men just i detta avseende kan jag tänka mig att den snyggaste koden inte nödvändigtvis är den lättaste att testa. Det skulle antagligen vara lättare att testa klasserna om man återupprepade sig ibland där det går att kringgå beroende av andra klasser, vilket dock inte är eftersträvansvärt. Men det finns säkert andra effektiva sätt att minimera komplexitet i koden på så vis att koden både blir ren, snygg och testbar. Modularisering verkar vara väldigt tacksamt när man ska skriva enhetstester. Kanske hade jag kunnat modularisera koden ännu mer. </p>
                <p><strong>TIL:</strong> Användning av PHPUnit och mycket bättre känsla för att skriva enhetstester.</p>
            </section>
            <section id=\"kmom05\"><h2>Kmom05</h2>
            <p>Övningen var bra och tydlig. Nu känns det som att jag har lärt mig använda verktygen men det känns däremot inte som att jag lärt mig att sätta upp en databas med doctrine. För att göra det igen skulle jag behöva följa guiden slaviskt igen. Men det känns smidigt att arbeta med eftersom man kan behålla fokus inom applikationen snarare än att växla till att skriva sql-frågor. Det underlättar arbetsflödet för mig och jag kan även se att det verkligen underlättar om alla som ska utveckla applikationen inte har databaskompetens.</p>
            <p>Jag valde att behålla samma grundstruktur på min twig som på andra sidor inom applikationen dvs en kolumnlayout med sidebar i en kolumn och innehållet i en större kolumn. Till en början höll jag gränssnittet väldigt enkelt men när allt väl fungerade var det frestande att göra små förbättringar.  För en enkel tydligare representation valde jag att lägga detaljerna för varje bok i en egen div som jag genererar dynamiskt. Inom diven centrerade jag innehållet och separerade detaljerna på egna rader för en snygg representation. sedan kändes det relativt enkelt och trevligt att ordna divs på rader. Jag valde att anpassa antalet objekt per rad dels efter skärmstorlek och dels efter hur många objekt som finns tillgängliga att visa.  Jag har även valt att göra hela div-en till länk och framhäva den vid hover. Jag la även lite tid på att styla knappar för edit och delete samt gjorde formulären för edit och create snyggare med ett fält per rad och en snygg knapp för spara. Även om det var lite mer jobb än nödvändigt blev jag väldigt nöjd med min snygga lösning.</p>
            <p>Att jobba med ORM i CRUD-operationer gick väldigt bra. Doctrine ORM gör det enkelt att mappa objekt till databastabeller och hantera data utan att behöva skriva komplexa SQL-frågor. Jämfört med att jobba direkt med SQL tycker jag att ORM erbjuder en högre abstraktionsnivå som gör koden mer läsbar och underhållsvänlig. Det är också enklare att refaktorera kod och göra ändringar i databasstrukturen när man använder ORM. Dock kan det finnas tillfällen då det kan vara mer effektivt att arbeta med direkta SQL-frågor. </p>
            <p>Min uppfattning om ORM är positiv. Det underlättar utvecklingen genom att erbjuda ett objektorienterat sätt att interagera med databasen. Detta gör det enklare att skriva, läsa och underhålla kod, särskilt i större projekt. Jämfört med att använda råa SQL-frågor innebär ORM mindre kod och färre möjligheter till fel. Men jag kan tänka mig att det kan vara svårt att reda ut om det väl blir fel utan djupare förståelse för databaser.</p>
            <p><strong>TIL:</strong> Konfigurera och använda Doctrine.</p>
            </section>
            <section id=\"kmom06\"><h2>Kmom06</h2>
            <p>Jag fann att phpmetrics var ett mycket informativt verktyg för att analysera kodens kvalitet. Den visuella presentationen av olika mättal, som komplexitet och sammanhållning, gav mig en tydlig översikt över var min kod hade förbättringspotential. Särskilt uppskattade jag CRAP-indexet från Phpmetrics, eftersom det kombinerar komplexitet och testtäckning på ett sätt som tydligt visade vilka delar av koden som var mest riskabla och behövde förbättras.</p>
            <p>Integrationen med Scrutinizer började bra, och jag kunde snabbt få en översikt över mitt projekt med dess kvalitets- och kodtäckningsbetyg. Verktyget fungerade som förväntat under de första två veckorna av provperioden, och jag kunde se uppdateringar i mitt kodtäckningsvärde samt kvalitetspoäng. Däremot stötte jag på problem efter att provperioden avslutades. Jag har haft problem med att inspektioner hänger sig i vissa steg och har kämpat med att få dem att gå igenom genom att trigga nya inspektioner med tomma commits, ändra i konfigurationen för att förhindra att de hänger sig och rensa cache varje gång etc. Jag märkte dock att även när inspektionerna lyckades fullföljas så uppdaterades inte kodtäckningen eller issues som fixed, inte heller dök de nya filerna jag la till upp bland klasser och metoder på scrutinzer. Jag försökte återigen experimentera med scrutizer konfigurationen rädd att jag hade sabbat något tidigare och osäker på om jag behövde lägga in något särskilt kommando för att den ska uppdatera ex kodtäckning vid varje inspektion. Efter alla tester och en del googlande tror jag att detta beror på att provperioden löpt ut och att enda alternativet för att få uppdaterade värden nu vore att betala för en månad vilket jag helst avstår. Jag tror att scurtinizer är ett bra verktyg om man är beredd att betala för det. Jag måste dock säga att jag tycker att det är väldigt känsligt och svårt att konfigurera rätt för ett komplext projekt, det är lätt att man får issues med timeout i de olika installationsmomenten eller om cachen inte rensas korrekt. Det krävs nog viss rutin för att detta verktyg ska fungera optimalt. </p>
            <p>De första värdena jag fick med scrutinizer var betyget 9.9 och kodtäckning 14.1%. </p>
            <p>Kodkvalitet är för mig ett brett och viktigt område som handlar om mycket mer än bara att få koden att fungera. Det handlar om att skriva kod som är läsbar, underhållsbar och testbar. Att upprätthålla en hög kodkvalitet innebär att man följer principer som enkelhet, modularitet och tydliga gränssnitt. Jag tror att badges kan vara ett användbart verktyg för att indikera kodkvalitet, särskilt när det gäller att visa att viss grundläggande praxis, som att skriva tester och följa kodstil, har följts. Men jag tror också att de bara ger en del av bilden. Även om en hög kodtäckning eller ett bra betyg på Scrutinizer är positiva indikatorer, måste de kompletteras med regelbundna kodgranskningar och en medvetenhet om den specifika kontexten och behoven i projektet.</p>
            <p><strong>TIL:</strong> Använda verktyg som Phpmetrics och Scrutinizer för att identifiera och förstå kodens komplexitet, samt hur CRAP-indexet kan hjälpa till att prioritera refaktorisering för att förbättra kodens hållbarhet och kvalitet.</p>
            </section>
                    </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "report.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Report{% endblock %}

{% block body %}
    <div class=\"inner-container grid-container\">
        <div class=\"sidebar\">
            <ul>
                <li><a href=\"#kmom01\">Kmom01</a></li>
                <li><a href=\"#kmom02\">Kmom02</a></li>
                <li><a href=\"#kmom03\">Kmom03</a></li>
                <li><a href=\"#kmom04\">Kmom04</a></li>
                <li><a href=\"#kmom05\">Kmom05</a></li>
                <li><a href=\"#kmom06\">Kmom06</a></li>
                {# <li><a href=\"#kmom07/10\">Kmom07/10</a></li> #}
            </ul>
        </div>
        <div class=\"content\">
            <section id=\"kmom01\">
                <h2>Kmom01</h2>
                <p>Jag har tidigare erfarenhet av objektorienterad programmering i Java, JavaScript och Python men inte i PHP så det blir nytt med den här kursen. Jag brukar tycka objektorienterat är kul eftersom det blir lite mer avancerat, organiserat och systematiskt.</p>
                <p>PHP:s objektorienterade programmering låter dig definiera klasser som mallar för att skapa objekt. En klass kan innehålla egenskaper (variabler) och metoder (funktioner) som definierar objektets tillstånd och beteende. Konstruktorer, specialmetoder som heter __construct, används för att initialisera nya objekt. PHP stöder enkel arv, vilket möjliggör att en klass kan ärva funktionalitet från en annan klass med nyckelordet extends. Synlighetsmodifikatorer som public, protected, och private styr åtkomsten till klassens medlemmar. För att komma igång, definiera en klass med dess egenskaper och metoder, instansiera klassen med new-nyckelordet, och interagera sedan med objektets egenskaper och metoder.</p>
                <p>Jag känner mig bekväm med html, twig, scss och känner på det stora hela att jag har fått till en bra kodbas. Men när det gäller php-delen känns det inte riktigt som att jag förstår vad det är jag gör. Jag utgick blankt från exemplet men förstår inte riktigt Controller-delen. Eller snarare, jag förstår koden men det känns främmande och jag förstår inte varför man gör som man gör och hade inte kunnat återskapa den själv.</p>
                <p>Jag har inte djupdykt i dokumentet utan tittade överskådligt. Jag bläddrade i getting started, code stylefuide och i Coding pratiges. Jag tror att det är en bra resurs att ha som uppslagsverk snarare än att läsa pärm till pärm. Jag kan tänka mig att man vill återkomma till dokumentet när teman som databaser, testing, caching och security blir relevanta.</p>
                <p><strong>TIL:</strong> Symphony och PHP-controllern.</p>

            </section>
            <section id=\"kmom02\">
                <h2>Kmom02</h2>
                <p><strong>Arv</strong> i PHP tillåter en klass att ärva metoder och egenskaper från en annan klass. Detta används för att skapa en hierarki av klasser som delar gemensamma egenskaper och beteenden. Jag har använt arv i klassen CardGraphic, som ärver från Card. </p>
                <p><strong>Komposition</strong> innebär att en klass innehåller en eller flera instanser av andra klasser som delar av dess funktionalitet. Jag har använt komposition i CardDeck, där varje CardDeck innehåller flera instanser av Card. </p>
                <p><strong>Interface</strong> i PHP definierar en standardiserad uppsättning metoder som en klass måste implementera. Interface är användbara för att skapa kod som är flexibel och återanvändbar utan att implementera ett fullt arv. Jag har ännu inte använde mig av ett interface, men det skulle kunna vara användbart för att definiera standardoperationer för olika typer av kortspel.</p>
                <p><strong>Trait</strong> tillåter återanvändning av kodblock i flera klasser i PHP. Traits kan vara användbara för att dela beteenden mellan klasser utan att vara bunden av klasshierarkin. Jag har inte använd Traits men jag insåg när jag gjorde sista delen med API routes att det började bli ganska mycket upprepning och nu slår mig tanken att jag hade kunnat bryta ut delar av koden som upprepas i flera routes, exempelvis operationer för att blanda och dra kort, och lägga i ett Trait som jag sedan använder i mina kontrollers.</p>
                <p>Jag började med att utveckla grundläggande klasser - Card, CardGraphic och CardDecklösa för att sedan gå över tilll att lösa webbapplikation delen. Successivt kompletterade jag mina klasser och anpassade funktionerna tills webbdelen fungerade. Då gick jag över till API-delen och där tyckte jag det klurigaste var att förstå hur jag kunde testa mina routes och se om de fungerar. Jag har aldrig använt curl innan men använde det för att testa mina POST-routes. Men då verkade det först som att jag hade problem med sewssionhanteringen så laborerade rätt mycket med min kod för att försöka få det att fungera innan jag insåg att det var min testning som inte fungerade. Jag tänkte inte på att att mina curlkommanon verkar oberoende av varandra om jag inte använder cookies. När jag la till flaggor för cookies kunde jag testa flödet av att blanda och sedan dra, och att dra upprepade gånger och  se att allt fungerade. Jag är nöjd med strukturen och moduläriteten i koden men ser ganska mycket upprepning i min kod, så det måste gå att skriva den mycket effektivare. Jag hade nog kunnat använda interfaces eller trait exempelvis för att modularisera och effektivisera koden ännu mer. Klasserna tycker jag är logiskt uppdelade och fungerar bra men om man ska arbeta vidare med ett kortspel tror jag att jag behöver utöka med en Hand-klass också.</p>
                <p>Jag tycker det har gått ganska lätt att komma in i arbetssättet, i alla fall om man lyckas installera och sätta upp allt korrekt. Första och andra gången vi satte upp symfoni från scratch (i förra kmom) gick det jättebra men nu när jag skulle göra övningen i detta kmom var det flera saker som krånglade när jag skulle sätta upp och det var svårt att förstå felet. Och detta var innan jag ens hade kommit igång med själva uppgiften. Jag fick jämföra kommandon mellan den nya och de gamla övningsfilerna och de visade sig ha små variationer, jag installerade om allt från början vilket löste något problem men sen var det ändå något som inte fungerade så jag struntade i övningen efter flera timmar av debuggande. Jag läste igenom övningen dock. Började sedan med uppgiften och då har allt flutit på jättebra.</p>
                <p><strong>TIL:</strong> Sessionhantering I API. Testa API POST routes. Traits och interface.</p>
            </section>
            <section id=\"kmom03\">
                <h2>Kmom03</h2>
                <p>Jag tyckte det var hjälpsamt och skönt att bryta ner problemet ordentligt och göra en plan innan jag började bygga upp koden. Framförallt tyckte jag psuedokoden var hjälpsam för det tvingade mig att fundera tidigigt på logiken, komponenter och loop-strukturen. Flödesschemat kan jag tänka mig är ett bra verktyg för att kunna visualisera och illustrera sin ide och förklara för andra men för mig personligen så hade psuedokoden räckt för att känna att jag har en plan och ser framför mig vad jag ska göra. Jag tar med mig de här verktygen inför kommande projekt. Flödesschema för de fall jag behöver få andra med på banan och psuedkod för att själv bryta ner ett problem och lägga upp en plan. Kodningsprocessen gick smidigt och följde i stor grad min plan.</p>
                <p>Jag försökte bygga vidare på klasser jag redan hade utan att göra några förändringar i de befintliga klasserna. För att få till spellogiken behövde jag komplettera med en klass för spelaren och en för banken samt en ny kontroller. Jag är nöjd med hur jag har valt att lösa detta.</p>
                <p>En förändring jag gjorde sedan förra kmom var att förenkla session-lagringen och frångå användning av serilisering/unserialisering, främst på grund av de fel jag stötte på med typvalideringen, särskilt när det gällde blandade typer (mixed type). Dessa problem gjorde det onödigt komplicerat för mitt ändamål att serialisera vid varje sessionlagring. Genom att undvika serialisering kunde jag förenkla koden och minska risken för typrelaterade buggar, vilket i sin tur gjorde applikationen mer pålitlig och lättare att underhålla. Nu känns koden snygg och robust och framförallt inte onödigt komplicerad.</p>
                <p>Det finns självklart mer förbättringspotential. Jag tror till exempel att en förbättring jag hade försökt mig på om jag arbetade vidare på koden är att komprimera bank-klassen så att den förlänger player-klassen istället. Där tror jag man skulle kunna spara sig en del upprepning. Jag hade även kunnat lägga mer kraft på att göra knappar och spelplan lite snyggare. Dessutom kan applikationens helhet förbättras med bättre felhantering och mer omfattande tester för att säkerställa robusthet och stabilitet.</p>
                <p>Överlag känner jag mig mer bekväm och självsäker i att använda Symfony, och jag ser fördelar med alla funktioner och hjälpmedel det är kompatibelt med.</p>
                <p><strong>TIL:</strong> De nya verktygen phpstan och phpmd samt vikten av enkel och robust sessionhantering. Och jag lärde mig göra formulär för att testa API post routes vilket jag missat i förra kmom då jag själv testade dem med Curl istället.</p>
            </section>
            <section id=\"kmom04\">
                <h2>Kmom04</h2>
                <p>Jag tyckte det var smidigt att arbeta med PHPUnit. Det kändes inte speciellt komplicerat att installera och komma igång. Övningarna var väldigt bra. Jag tyckte rapporten/översikten i html var väldigt tydlig och bra att ha till hands. </p>
                <p>Jag nådde 100% för alla filer jag testade.</p>
                <p>Jag upplevde min kod som väldigt testbar. Förhoppningsvis ett tecken på att jag lyckats skapa tydlig och modulär kod. Det kändes inte svårt att uppnå 100% täckning med testerna. Det som skulle kunna göra testerna bättre och mer isolerade är att använda mocking. Jag läste igenom övningen men har inte tillämpat tekniken utan försökt skriva så enkla tester som möjligt. </p>
                <p>De tester som är mest beroende av andra klasser är de som testar Bank och Player, eftersom dessa klasser interagerar med CardDeck och Card. Alla metoder som använder sig av instanser av card eller cardDeck hade kunnat skrivas om att istället använda mock-objekt för med förutsägbart och isolerat testresultat. I synnerhet kanske testerna för metoderna player:drawCard och bank:drawCard. Med mocking skulle dessa tester kunna skrivas så att de blir helt oberoende av att cardDeck och Card fungerar korrekt. Så som testerna är utformat i nuläget antar jag att cardDeck fungerar när jag testar bank:drawCard och player:drawCard. </p>
                <p>Jag gjorde en snabb förbättring och förenkling av min kod innan jag påbörjade testerna och som nog även gjorde koden mer testbar nämligen att förenkla bank-klassen så att den ärver hela player med den enda skillnaden i att drawCard endast anropas när poängen är mindre än 17 - en logik som förut låg i gameControllern. Det kändes som en väldigt rimligt förbättring att låta bank ärva istället för att återupprepa player-klassen totalt samt att tunna ut gameControllern där det är möjligt och flytta specifik spellogik för banken till bank-klassen. Detta var något som jag kom att tänka på i redan i förra kmom. Förändringen innebar att färre tester behövde skrivas för bank-klassen. I övrigt har jag inte gjort några direkta förändringar i källkoden.</p>
                <p>Jag kan inte själv komma på fler sätt att göra min kod mer testbar men jag är säker på att det finns. Jag inser att det är beroenden mellan olika klasser som skapar de mest komplicerade testfallen. Samtidigt hade koden blivit väldigt upprepande om man försökte kringgå beroende mellan klasser. Rent generellt tror jag att man ofta kan likställa ren och snygg kod som testbar men just i detta avseende kan jag tänka mig att den snyggaste koden inte nödvändigtvis är den lättaste att testa. Det skulle antagligen vara lättare att testa klasserna om man återupprepade sig ibland där det går att kringgå beroende av andra klasser, vilket dock inte är eftersträvansvärt. Men det finns säkert andra effektiva sätt att minimera komplexitet i koden på så vis att koden både blir ren, snygg och testbar. Modularisering verkar vara väldigt tacksamt när man ska skriva enhetstester. Kanske hade jag kunnat modularisera koden ännu mer. </p>
                <p><strong>TIL:</strong> Användning av PHPUnit och mycket bättre känsla för att skriva enhetstester.</p>
            </section>
            <section id=\"kmom05\"><h2>Kmom05</h2>
            <p>Övningen var bra och tydlig. Nu känns det som att jag har lärt mig använda verktygen men det känns däremot inte som att jag lärt mig att sätta upp en databas med doctrine. För att göra det igen skulle jag behöva följa guiden slaviskt igen. Men det känns smidigt att arbeta med eftersom man kan behålla fokus inom applikationen snarare än att växla till att skriva sql-frågor. Det underlättar arbetsflödet för mig och jag kan även se att det verkligen underlättar om alla som ska utveckla applikationen inte har databaskompetens.</p>
            <p>Jag valde att behålla samma grundstruktur på min twig som på andra sidor inom applikationen dvs en kolumnlayout med sidebar i en kolumn och innehållet i en större kolumn. Till en början höll jag gränssnittet väldigt enkelt men när allt väl fungerade var det frestande att göra små förbättringar.  För en enkel tydligare representation valde jag att lägga detaljerna för varje bok i en egen div som jag genererar dynamiskt. Inom diven centrerade jag innehållet och separerade detaljerna på egna rader för en snygg representation. sedan kändes det relativt enkelt och trevligt att ordna divs på rader. Jag valde att anpassa antalet objekt per rad dels efter skärmstorlek och dels efter hur många objekt som finns tillgängliga att visa.  Jag har även valt att göra hela div-en till länk och framhäva den vid hover. Jag la även lite tid på att styla knappar för edit och delete samt gjorde formulären för edit och create snyggare med ett fält per rad och en snygg knapp för spara. Även om det var lite mer jobb än nödvändigt blev jag väldigt nöjd med min snygga lösning.</p>
            <p>Att jobba med ORM i CRUD-operationer gick väldigt bra. Doctrine ORM gör det enkelt att mappa objekt till databastabeller och hantera data utan att behöva skriva komplexa SQL-frågor. Jämfört med att jobba direkt med SQL tycker jag att ORM erbjuder en högre abstraktionsnivå som gör koden mer läsbar och underhållsvänlig. Det är också enklare att refaktorera kod och göra ändringar i databasstrukturen när man använder ORM. Dock kan det finnas tillfällen då det kan vara mer effektivt att arbeta med direkta SQL-frågor. </p>
            <p>Min uppfattning om ORM är positiv. Det underlättar utvecklingen genom att erbjuda ett objektorienterat sätt att interagera med databasen. Detta gör det enklare att skriva, läsa och underhålla kod, särskilt i större projekt. Jämfört med att använda råa SQL-frågor innebär ORM mindre kod och färre möjligheter till fel. Men jag kan tänka mig att det kan vara svårt att reda ut om det väl blir fel utan djupare förståelse för databaser.</p>
            <p><strong>TIL:</strong> Konfigurera och använda Doctrine.</p>
            </section>
            <section id=\"kmom06\"><h2>Kmom06</h2>
            <p>Jag fann att phpmetrics var ett mycket informativt verktyg för att analysera kodens kvalitet. Den visuella presentationen av olika mättal, som komplexitet och sammanhållning, gav mig en tydlig översikt över var min kod hade förbättringspotential. Särskilt uppskattade jag CRAP-indexet från Phpmetrics, eftersom det kombinerar komplexitet och testtäckning på ett sätt som tydligt visade vilka delar av koden som var mest riskabla och behövde förbättras.</p>
            <p>Integrationen med Scrutinizer började bra, och jag kunde snabbt få en översikt över mitt projekt med dess kvalitets- och kodtäckningsbetyg. Verktyget fungerade som förväntat under de första två veckorna av provperioden, och jag kunde se uppdateringar i mitt kodtäckningsvärde samt kvalitetspoäng. Däremot stötte jag på problem efter att provperioden avslutades. Jag har haft problem med att inspektioner hänger sig i vissa steg och har kämpat med att få dem att gå igenom genom att trigga nya inspektioner med tomma commits, ändra i konfigurationen för att förhindra att de hänger sig och rensa cache varje gång etc. Jag märkte dock att även när inspektionerna lyckades fullföljas så uppdaterades inte kodtäckningen eller issues som fixed, inte heller dök de nya filerna jag la till upp bland klasser och metoder på scrutinzer. Jag försökte återigen experimentera med scrutizer konfigurationen rädd att jag hade sabbat något tidigare och osäker på om jag behövde lägga in något särskilt kommando för att den ska uppdatera ex kodtäckning vid varje inspektion. Efter alla tester och en del googlande tror jag att detta beror på att provperioden löpt ut och att enda alternativet för att få uppdaterade värden nu vore att betala för en månad vilket jag helst avstår. Jag tror att scurtinizer är ett bra verktyg om man är beredd att betala för det. Jag måste dock säga att jag tycker att det är väldigt känsligt och svårt att konfigurera rätt för ett komplext projekt, det är lätt att man får issues med timeout i de olika installationsmomenten eller om cachen inte rensas korrekt. Det krävs nog viss rutin för att detta verktyg ska fungera optimalt. </p>
            <p>De första värdena jag fick med scrutinizer var betyget 9.9 och kodtäckning 14.1%. </p>
            <p>Kodkvalitet är för mig ett brett och viktigt område som handlar om mycket mer än bara att få koden att fungera. Det handlar om att skriva kod som är läsbar, underhållsbar och testbar. Att upprätthålla en hög kodkvalitet innebär att man följer principer som enkelhet, modularitet och tydliga gränssnitt. Jag tror att badges kan vara ett användbart verktyg för att indikera kodkvalitet, särskilt när det gäller att visa att viss grundläggande praxis, som att skriva tester och följa kodstil, har följts. Men jag tror också att de bara ger en del av bilden. Även om en hög kodtäckning eller ett bra betyg på Scrutinizer är positiva indikatorer, måste de kompletteras med regelbundna kodgranskningar och en medvetenhet om den specifika kontexten och behoven i projektet.</p>
            <p><strong>TIL:</strong> Använda verktyg som Phpmetrics och Scrutinizer för att identifiera och förstå kodens komplexitet, samt hur CRAP-indexet kan hjälpa till att prioritera refaktorisering för att förbättra kodens hållbarhet och kvalitet.</p>
            </section>
            {# <section id=\"kmom07/10\"><h2>Kmom07/10</h2><p>Redovisningstext för kmom07</p></section> #}
        </div>
    </div>
{% endblock %}

", "report.html.twig", "/Users/hannagawlitza/dbwebb-kurser/mvc/me/report/templates/report.html.twig");
    }
}
