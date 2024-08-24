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

/* card/session.html.twig */
class __TwigTemplate_1f5258c3ffdcfc69a608f73a085daceb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/session.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/session.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/session.html.twig", 1);
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

        yield "Sessionens innehåll";
        
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
        <h1>Sessionens innehåll</h1>
        ";
        // line 20
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["sessionData"]) || array_key_exists("sessionData", $context) ? $context["sessionData"] : (function () { throw new RuntimeError('Variable "sessionData" does not exist.', 20, $this->source); })()))) {
            // line 21
            yield "        <p>Sessionen är tom.</p>
        ";
        } else {
            // line 23
            yield "        <ul>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sessionData"]) || array_key_exists("sessionData", $context) ? $context["sessionData"] : (function () { throw new RuntimeError('Variable "sessionData" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 25
                yield "                <li><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield ":</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "        </ul>
        ";
        }
        // line 29
        yield "        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session_delete");
        yield "\">Rensa sessionen</a>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", ["success"], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            yield "        <div class=\"alert alert-success\">
            ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "    </div>
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
        return "card/session.html.twig";
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
        return array (  176 => 35,  167 => 32,  164 => 31,  160 => 30,  155 => 29,  151 => 27,  140 => 25,  136 => 24,  133 => 23,  129 => 21,  127 => 20,  119 => 15,  115 => 14,  111 => 13,  107 => 12,  103 => 11,  99 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sessionens innehåll{% endblock %}

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
        <h1>Sessionens innehåll</h1>
        {% if sessionData is empty %}
        <p>Sessionen är tom.</p>
        {% else %}
        <ul>
            {% for key, value in sessionData %}
                <li><strong>{{ key }}:</strong> {{ value }}</li>
            {% endfor %}
        </ul>
        {% endif %}
        <a href=\"{{ path('session_delete') }}\">Rensa sessionen</a>
        {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "card/session.html.twig", "/Users/hannagawlitza/dbwebb-kurser/mvc/me/report/templates/card/session.html.twig");
    }
}
