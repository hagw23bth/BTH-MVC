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

/* game/doc.html.twig */
class __TwigTemplate_225b7d9d72e4d25b5a5998add8d09e98 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/doc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/doc.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/doc.html.twig", 1);
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

        yield "Documentation";
        
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
        yield "
<div class=\"inner-container grid-container\">
    <div class=\"sidebar\">
        <ul>
            <li><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game");
        yield "\">Spela</a></li>
            <li><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc");
        yield "\">Dokumentation</a></li>
        </ul>
    </div>
    <div class=\"content\">
        <h1>Samlad dokumentation</h1>
        <p>Här kan du ta del av dokumentation kring spelets uppbyggnad.</p>

        <h2>Flödesschema</h2>
        <img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/flowchart.png"), "html", null, true);
        yield "\" alt=\"Flödesschema för kortspelet 21\" class=\"image\">

        <h2>Pseudokod:</h2>
        <pre>
        <code>
        STARTA SPELET
            Initiera kortleken och blanda den
            Använd: CardDeck::shuffleDeck()

        WHILE spelet inte är över
            SPELARENS TUR
                WHILE spelaren inte har stannat och spelarens poäng <= 21
                    \"Vill du dra ett kort eller stanna på nuvarande poäng?\"
                    Skriv ut nuvarande summa.
                    IF spelaren väljer att dra ett kort
                        Spelaren drar ett kort från kortleken
                        Använd: CardDeck::drawCard()
                        Uppdatera spelarens poäng
                        IF spelarens poäng > 21
                            Banken vinner
                            Avsluta spelet
                    ELSE
                        Spelaren stannar
                        Avsluta spelarens tur

            IF spelarens poäng <= 21
                BANKENS TUR
                    WHILE bankens poäng < 17 och bankens poäng <= 21
                        Banken drar ett kort från kortleken
                        Använd: CardDeck::drawCard()
                        Uppdatera bankens poäng
                        IF bankens poäng > 21
                            Spelaren vinner
                            Avsluta spelet

            IF båda har stannat eller båda har fått över 21 poäng
                SPELET AVGÖRS
                IF spelarens poäng > bankens poäng och spelarens poäng <= 21
                    Spelaren vinner
                ELSE
                    Banken vinner
                Avsluta spelet
        </code>
        </pre>

        <h2>Klassbeskrivningar:</h2>
        <ul>
            <li><strong>GameController:</strong> Hanterar spelets flöde, spelarens handlingar och bankens handlingar.</li>
            <li><strong>Player:</strong> Klass som representerar spelaren. Håller spelarens hand och poäng.</li>
            <li><strong>Bank:</strong> Klass som representerar banken. Håller bankens hand och poäng.</li>
            <li><strong>Card: </strong>Denna bas-klass representerar ett enskilt kort och innehåller egenskaper för färg (suit) och värde (value).</li>
            <li><strong>CardDeck: </strong>Ärver från Card och utökar den med funktionalitet för att ge en grafisk representation av kortet, vilket gör det möjligt att visualisera kortet som hjärter, spader, och så vidare.</li>
            <li><strong>CardGraphic: </strong>Denna klass hanterar en samling av Card-objekt, vilket i praktiken innebär instanser av CardGraphic. Detta illustrerar en kompositionsförhållande, mellan CardDeck och Card. Klassen innehåller metoder för att skapa en kortlek, blanda, sortera, och dra kort från kortleken. </li>
        </ul>
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
        return "game/doc.html.twig";
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
        return array (  111 => 19,  100 => 11,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Documentation{% endblock %}

{% block body %}

<div class=\"inner-container grid-container\">
    <div class=\"sidebar\">
        <ul>
            <li><a href=\"{{ path('game') }}\">Spela</a></li>
            <li><a href=\"{{ path('doc') }}\">Dokumentation</a></li>
        </ul>
    </div>
    <div class=\"content\">
        <h1>Samlad dokumentation</h1>
        <p>Här kan du ta del av dokumentation kring spelets uppbyggnad.</p>

        <h2>Flödesschema</h2>
        <img src=\"{{ asset('img/flowchart.png') }}\" alt=\"Flödesschema för kortspelet 21\" class=\"image\">

        <h2>Pseudokod:</h2>
        <pre>
        <code>
        STARTA SPELET
            Initiera kortleken och blanda den
            Använd: CardDeck::shuffleDeck()

        WHILE spelet inte är över
            SPELARENS TUR
                WHILE spelaren inte har stannat och spelarens poäng <= 21
                    \"Vill du dra ett kort eller stanna på nuvarande poäng?\"
                    Skriv ut nuvarande summa.
                    IF spelaren väljer att dra ett kort
                        Spelaren drar ett kort från kortleken
                        Använd: CardDeck::drawCard()
                        Uppdatera spelarens poäng
                        IF spelarens poäng > 21
                            Banken vinner
                            Avsluta spelet
                    ELSE
                        Spelaren stannar
                        Avsluta spelarens tur

            IF spelarens poäng <= 21
                BANKENS TUR
                    WHILE bankens poäng < 17 och bankens poäng <= 21
                        Banken drar ett kort från kortleken
                        Använd: CardDeck::drawCard()
                        Uppdatera bankens poäng
                        IF bankens poäng > 21
                            Spelaren vinner
                            Avsluta spelet

            IF båda har stannat eller båda har fått över 21 poäng
                SPELET AVGÖRS
                IF spelarens poäng > bankens poäng och spelarens poäng <= 21
                    Spelaren vinner
                ELSE
                    Banken vinner
                Avsluta spelet
        </code>
        </pre>

        <h2>Klassbeskrivningar:</h2>
        <ul>
            <li><strong>GameController:</strong> Hanterar spelets flöde, spelarens handlingar och bankens handlingar.</li>
            <li><strong>Player:</strong> Klass som representerar spelaren. Håller spelarens hand och poäng.</li>
            <li><strong>Bank:</strong> Klass som representerar banken. Håller bankens hand och poäng.</li>
            <li><strong>Card: </strong>Denna bas-klass representerar ett enskilt kort och innehåller egenskaper för färg (suit) och värde (value).</li>
            <li><strong>CardDeck: </strong>Ärver från Card och utökar den med funktionalitet för att ge en grafisk representation av kortet, vilket gör det möjligt att visualisera kortet som hjärter, spader, och så vidare.</li>
            <li><strong>CardGraphic: </strong>Denna klass hanterar en samling av Card-objekt, vilket i praktiken innebär instanser av CardGraphic. Detta illustrerar en kompositionsförhållande, mellan CardDeck och Card. Klassen innehåller metoder för att skapa en kortlek, blanda, sortera, och dra kort från kortleken. </li>
        </ul>
    </div>
</div>

{% endblock %}
", "game/doc.html.twig", "/Users/hannagawlitza/dbwebb-kurser/mvc/me/report/templates/game/doc.html.twig");
    }
}
