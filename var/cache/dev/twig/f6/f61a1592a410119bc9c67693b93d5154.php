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

/* card/draw.html.twig */
class __TwigTemplate_c71c429f79bbe8caa1fda0247b19fe4d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/draw.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/draw.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/draw.html.twig", 1);
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

        yield "Draget Kort";
        
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
        yield "<div class=\"inner-container grid-container\">
    <div class=\"sidebar\">
        <ul>
            <li><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card");
        yield "\">Start</a></li>
            <li><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deck");
        yield "\">Visa hela kortleken</a></li>
            <li><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shuffle");
        yield "\">Blanda och visa kortleken</a></li>
            <li><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw");
        yield "\">Dra ett kort från kortleken</a></li>
            <li><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_number");
        yield "\">Dra flera kort från kortleken</a></li>
            <li><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session");
        yield "\">Visa sessionens innehåll</a></li>
            <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_delete");
        yield "\">Radera sessionens innehåll</a></li>
        </ul>
    </div>
    <div class=\"content\">
        <h2>Draget Kort</h2>
        ";
        // line 20
        if ((isset($context["drawnCard"]) || array_key_exists("drawnCard", $context) ? $context["drawnCard"] : (function () { throw new RuntimeError('Variable "drawnCard" does not exist.', 20, $this->source); })())) {
            // line 21
            yield "            <div class=\"deck\">
                <div class=\"card ";
            // line 22
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["drawnCard"]) || array_key_exists("drawnCard", $context) ? $context["drawnCard"] : (function () { throw new RuntimeError('Variable "drawnCard" does not exist.', 22, $this->source); })()), "getSuit", [], "method", false, false, false, 22), ["Hearts", "Diamonds"])) ? ("red") : (""));
            yield "\">
                    ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["drawnCard"]) || array_key_exists("drawnCard", $context) ? $context["drawnCard"] : (function () { throw new RuntimeError('Variable "drawnCard" does not exist.', 23, $this->source); })()), "getGraphic", [], "method", false, false, false, 23), "html", null, true);
            yield "
                </div>
                <p>Kvarvarande kort i leken: ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 25, $this->source); })()), "html", null, true);
            yield "</p>
            </div>
        ";
        } else {
            // line 28
            yield "            <p>Inga fler kort att dra!</p>
        ";
        }
        // line 30
        yield "        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw");
        yield "\">Dra ett nytt kort</a> | <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shuffle");
        yield "\">Blanda kortleken</a>
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
        return "card/draw.html.twig";
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
        return array (  151 => 30,  147 => 28,  141 => 25,  136 => 23,  132 => 22,  129 => 21,  127 => 20,  119 => 15,  115 => 14,  111 => 13,  107 => 12,  103 => 11,  99 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Draget Kort{% endblock %}

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
        <h2>Draget Kort</h2>
        {% if drawnCard %}
            <div class=\"deck\">
                <div class=\"card {{ drawnCard.getSuit() in ['Hearts', 'Diamonds'] ? 'red' : '' }}\">
                    {{ drawnCard.getGraphic() }}
                </div>
                <p>Kvarvarande kort i leken: {{ remaining }}</p>
            </div>
        {% else %}
            <p>Inga fler kort att dra!</p>
        {% endif %}
        <a href=\"{{ path('draw') }}\">Dra ett nytt kort</a> | <a href=\"{{ path('shuffle') }}\">Blanda kortleken</a>
    </div>
</div>
{% endblock %}
", "card/draw.html.twig", "/Users/hannagawlitza/dbwebb-kurser/mvc/me/report/templates/card/draw.html.twig");
    }
}
