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

/* card/home.html.twig */
class __TwigTemplate_f5ef246599ce560aaa5c606f471109ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/home.html.twig", 1);
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

        yield "Kortspel";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card");
        yield "\">Start</a></li>
            <li><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deck");
        yield "\">Visa hela kortleken</a></li>
            <li><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shuffle");
        yield "\">Blanda och visa kortleken</a></li>
            <li><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw");
        yield "\">Dra ett kort från kortleken</a></li>
            <li><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_number");
        yield "\">Dra flera kort från kortleken</a></li>
            <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session");
        yield "\">Visa sessionens innehåll</a></li>
            <li><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_delete");
        yield "\">Radera sessionens innehåll</a></li>
        </ul>
    </div>
    <div class=\"content\">
        <h1>Välkommen till Kortspel</h1>
        <p>Här kan du hantera en kortlek på olika sätt. Blanda, visa hela kortleken, dra ett eller flera kort och hantera dina dragningar med session.</p>
        <h2>UML och översikt av klasstruktur</h2>
        <p>Jag har valt att bygga upp min kod runt följande klasser:</p>
        <ul>
            <li><strong>Card: </strong>Denna bas-klass representerar ett enskilt kort och innehåller egenskaper för färg (suit) och värde (value).</li>
            <li><strong>CardDeck: </strong>Ärver från Card och utökar den med funktionalitet för att ge en grafisk representation av kortet, vilket gör det möjligt att visualisera kortet som hjärter, spader, och så vidare.</li>
            <li><strong>CardGraphic: </strong>Denna klass hanterar en samling av Card-objekt, vilket i praktiken innebär instanser av CardGraphic. Detta illustrerar en kompositionsförhållande, mellan CardDeck och Card. Klassen innehåller metoder för att skapa en kortlek, blanda, sortera, och dra kort från kortleken. </li>
        </ul>
        <p>Jag har utgått från hur kraven varit formulerade och har hittills inte märkt ett behov av en CardHand. Men om spelet ska utvecklas vidare kommer nog en sådan klass kännas aktuell.</p>

        <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/CardUML.png"), "html", null, true);
        yield "\" alt=\"UML\" class=\"image\">
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
        return "card/home.html.twig";
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
        return array (  138 => 31,  120 => 16,  116 => 15,  112 => 14,  108 => 13,  104 => 12,  100 => 11,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Kortspel{% endblock %}

{% block body %}

<div class=\"inner-container grid-container\">
    <div class=\"sidebar\">
        <ul>
            <li><a href=\"{{ path('card') }}\">Start</a></li>
            <li><a href=\"{{ path('deck') }}\">Visa hela kortleken</a></li>
            <li><a href=\"{{ path('shuffle') }}\">Blanda och visa kortleken</a></li>
            <li><a href=\"{{ path('draw') }}\">Dra ett kort från kortleken</a></li>
            <li><a href=\"{{ path('draw_number') }}\">Dra flera kort från kortleken</a></li>
            <li><a href=\"{{ path('session') }}\">Visa sessionens innehåll</a></li>
            <li><a href=\"{{ path('session_delete') }}\">Radera sessionens innehåll</a></li>
        </ul>
    </div>
    <div class=\"content\">
        <h1>Välkommen till Kortspel</h1>
        <p>Här kan du hantera en kortlek på olika sätt. Blanda, visa hela kortleken, dra ett eller flera kort och hantera dina dragningar med session.</p>
        <h2>UML och översikt av klasstruktur</h2>
        <p>Jag har valt att bygga upp min kod runt följande klasser:</p>
        <ul>
            <li><strong>Card: </strong>Denna bas-klass representerar ett enskilt kort och innehåller egenskaper för färg (suit) och värde (value).</li>
            <li><strong>CardDeck: </strong>Ärver från Card och utökar den med funktionalitet för att ge en grafisk representation av kortet, vilket gör det möjligt att visualisera kortet som hjärter, spader, och så vidare.</li>
            <li><strong>CardGraphic: </strong>Denna klass hanterar en samling av Card-objekt, vilket i praktiken innebär instanser av CardGraphic. Detta illustrerar en kompositionsförhållande, mellan CardDeck och Card. Klassen innehåller metoder för att skapa en kortlek, blanda, sortera, och dra kort från kortleken. </li>
        </ul>
        <p>Jag har utgått från hur kraven varit formulerade och har hittills inte märkt ett behov av en CardHand. Men om spelet ska utvecklas vidare kommer nog en sådan klass kännas aktuell.</p>

        <img src=\"{{ asset('img/CardUML.png') }}\" alt=\"UML\" class=\"image\">
    </div>
</div>

{% endblock %}
", "card/home.html.twig", "/Users/hannagawlitza/dbwebb-kurser/mvc/me/report/templates/card/home.html.twig");
    }
}
