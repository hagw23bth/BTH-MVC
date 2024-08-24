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

/* api.html.twig */
class __TwigTemplate_3b4a6877abf93f6562ac17aaab78f6ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "api.html.twig", 1);
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

        yield "API Overview";
        
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
        yield "<div class=\"inner-container\">
    <h1>API Overview</h1>
    <p>Below are the JSON routes available in this application:</p>
    <ul>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["apiRoutes"]) || array_key_exists("apiRoutes", $context) ? $context["apiRoutes"] : (function () { throw new RuntimeError('Variable "apiRoutes" does not exist.', 10, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
            // line 11
            yield "            <li>
                <strong>";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "title", [], "any", false, false, false, 12), "html", null, true);
            yield ":</strong>
                ";
            // line 13
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["route"], "method", [], "any", false, false, false, 13) == "GET")) {
                // line 14
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["route"], "method", [], "any", false, false, false, 14) == "GET")) {
                    // line 15
                    yield "                        <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "name", [], "any", false, false, false, 15), ["isbn" => "9781503290563"]);
                    yield "\" target=\"_blank\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "path", [], "any", false, false, false, 15), "html", null, true);
                    yield "</a>
                    ";
                } else {
                    // line 17
                    yield "                        <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "name", [], "any", false, false, false, 17));
                    yield "\" target=\"_blank\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "path", [], "any", false, false, false, 17), "html", null, true);
                    yield "</a>
                    ";
                }
                // line 19
                yield "                ";
            } else {
                // line 20
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "path", [], "any", false, false, false, 20), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "method", [], "any", false, false, false, 20), "html", null, true);
                yield "
                    <form method=\"post\" action=\"";
                // line 21
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["route"], "name", [], "any", false, false, false, 21) == "api_deck_draw_number")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "name", [], "any", false, false, false, 21), ["number" => 1])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "name", [], "any", false, false, false, 21))));
                yield "\">
                        ";
                // line 22
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["route"], "name", [], "any", false, false, false, 22) == "api_deck_draw_number")) {
                    // line 23
                    yield "                            <label for=\"number_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23), "html", null, true);
                    yield "\">Number of Cards:</label>
                            <input type=\"number\" name=\"number\" id=\"number_";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 24), "html", null, true);
                    yield "\" value=\"1\" min=\"1\">
                        ";
                }
                // line 26
                yield "                        <input type=\"submit\" value=\"Test ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "title", [], "any", false, false, false, 26), "html", null, true);
                yield "\">
                    </form>
                ";
            }
            // line 29
            yield "                <br>
                ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["route"], "description", [], "any", false, false, false, 30), "html", null, true);
            yield "
            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "    </ul>
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
        return "api.html.twig";
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
        return array (  194 => 33,  177 => 30,  174 => 29,  167 => 26,  162 => 24,  157 => 23,  155 => 22,  151 => 21,  144 => 20,  141 => 19,  133 => 17,  125 => 15,  122 => 14,  120 => 13,  116 => 12,  113 => 11,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}API Overview{% endblock %}

{% block body %}
<div class=\"inner-container\">
    <h1>API Overview</h1>
    <p>Below are the JSON routes available in this application:</p>
    <ul>
        {% for route in apiRoutes %}
            <li>
                <strong>{{ route.title }}:</strong>
                {% if route.method == 'GET' %}
                    {% if route.method == 'GET' %}
                        <a href=\"{{ path(route.name, {'isbn': '9781503290563'}) }}\" target=\"_blank\">{{ route.path }}</a>
                    {% else %}
                        <a href=\"{{ path(route.name) }}\" target=\"_blank\">{{ route.path }}</a>
                    {% endif %}
                {% else %}
                    {{ route.path }} - {{ route.method }}
                    <form method=\"post\" action=\"{{ route.name == 'api_deck_draw_number' ? path(route.name, {'number': 1}) : path(route.name) }}\">
                        {% if route.name == 'api_deck_draw_number' %}
                            <label for=\"number_{{ loop.index }}\">Number of Cards:</label>
                            <input type=\"number\" name=\"number\" id=\"number_{{ loop.index }}\" value=\"1\" min=\"1\">
                        {% endif %}
                        <input type=\"submit\" value=\"Test {{ route.title }}\">
                    </form>
                {% endif %}
                <br>
                {{ route.description }}
            </li>
        {% endfor %}
    </ul>
</div>
{% endblock %}", "api.html.twig", "/Users/hannagawlitza/dbwebb-kurser/mvc/me/report/templates/api.html.twig");
    }
}
