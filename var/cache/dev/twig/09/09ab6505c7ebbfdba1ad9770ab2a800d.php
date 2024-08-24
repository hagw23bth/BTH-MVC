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

/* proj/data.html.twig */
class __TwigTemplate_dad623323bf2f56c0e0cf241af698fa8 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "proj/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/data.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/data.html.twig"));

        $this->parent = $this->loadTemplate("proj/base.html.twig", "proj/data.html.twig", 1);
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

        yield "Data page";
        
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
        yield "    <div class=\"data-page\">
        ";
        // line 7
        yield (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 7, $this->source); })());
        yield "

        <h2 class=\"chart-label\">Andelen fiskbestånd inom en biologiskt hållbar nivå</h2>
        <!-- Canvas för att visa Fish Stock -->
        <div class=\"chart-container\">
            <canvas id=\"fishStockChart\" width=\"400\" height=\"200\"></canvas>
        </div>
        
        <p>Linjediagram som illustrerar hur andelarna av hållbara fiskebestånd utvecklats mellan åren 2015 och 2021.</p>

        <!-- JSON för Fish Stock -->
        <script id=\"fishStockData\" type=\"application/json\">
            ";
        // line 19
        yield json_encode((isset($context["fishStockData"]) || array_key_exists("fishStockData", $context) ? $context["fishStockData"] : (function () { throw new RuntimeError('Variable "fishStockData" does not exist.', 19, $this->source); })()), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT"));
        yield "
        </script>

        <h2 class=\"chart-label\">Täckning av skyddade områden i förhållande till marina områden</h2>

        <!-- Canvas för att visa Marine Protection -->
        <div class=\"chart-container\">
            <canvas id=\"marineProtectionChart\" width=\"400\" height=\"200\"></canvas>
        </div>

        <p>Stapeldiagram som illustrerar hur andelarna av skyddade marina områden utvecklats mellan åren 2018 och 2022.</p>

        <!-- Canvas för cirkeldiagram Marine Protection-->
        <div class=\"circle-charts-container\">
            <div class=\"circle-chart\">
                <h3>Riket</h3>
                <canvas id=\"riketChart\"></canvas>
            </div>
            <div class=\"circle-chart\">
                <h3>Västerhavet</h3>
                <canvas id=\"västerhavetChart\"></canvas>
            </div>
            <div class=\"circle-chart\">
                <h3>Östersjön</h3>
                <canvas id=\"östersjönChart\"></canvas>
            </div>
            <div class=\"circle-chart\">
                <h3>Bottniska viken</h3>
                <canvas id=\"bottniskaVikenChart\"></canvas>
            </div>
        </div>
        <p>Cirkeldiagram som illustrerar andelarna av skyddade marina områden för år 2022.</p>


        <!-- JSON för Marine Protection -->
        <script id=\"marineProtectionData\" type=\"application/json\">
            ";
        // line 55
        yield json_encode((isset($context["marineProtectionData"]) || array_key_exists("marineProtectionData", $context) ? $context["marineProtectionData"] : (function () { throw new RuntimeError('Variable "marineProtectionData" does not exist.', 55, $this->source); })()), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT"));
        yield "
        </script>

        ";
        // line 58
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 61
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        yield "            ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("proj");
        yield "
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
        return "proj/data.html.twig";
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
        return array (  178 => 59,  168 => 58,  156 => 61,  154 => 58,  148 => 55,  109 => 19,  94 => 7,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"proj/base.html.twig\" %}

{% block title %}Data page{% endblock %}

{% block body %}
    <div class=\"data-page\">
        {{ content|raw }}

        <h2 class=\"chart-label\">Andelen fiskbestånd inom en biologiskt hållbar nivå</h2>
        <!-- Canvas för att visa Fish Stock -->
        <div class=\"chart-container\">
            <canvas id=\"fishStockChart\" width=\"400\" height=\"200\"></canvas>
        </div>
        
        <p>Linjediagram som illustrerar hur andelarna av hållbara fiskebestånd utvecklats mellan åren 2015 och 2021.</p>

        <!-- JSON för Fish Stock -->
        <script id=\"fishStockData\" type=\"application/json\">
            {{ fishStockData|json_encode(constant('JSON_PRETTY_PRINT'))|raw }}
        </script>

        <h2 class=\"chart-label\">Täckning av skyddade områden i förhållande till marina områden</h2>

        <!-- Canvas för att visa Marine Protection -->
        <div class=\"chart-container\">
            <canvas id=\"marineProtectionChart\" width=\"400\" height=\"200\"></canvas>
        </div>

        <p>Stapeldiagram som illustrerar hur andelarna av skyddade marina områden utvecklats mellan åren 2018 och 2022.</p>

        <!-- Canvas för cirkeldiagram Marine Protection-->
        <div class=\"circle-charts-container\">
            <div class=\"circle-chart\">
                <h3>Riket</h3>
                <canvas id=\"riketChart\"></canvas>
            </div>
            <div class=\"circle-chart\">
                <h3>Västerhavet</h3>
                <canvas id=\"västerhavetChart\"></canvas>
            </div>
            <div class=\"circle-chart\">
                <h3>Östersjön</h3>
                <canvas id=\"östersjönChart\"></canvas>
            </div>
            <div class=\"circle-chart\">
                <h3>Bottniska viken</h3>
                <canvas id=\"bottniskaVikenChart\"></canvas>
            </div>
        </div>
        <p>Cirkeldiagram som illustrerar andelarna av skyddade marina områden för år 2022.</p>


        <!-- JSON för Marine Protection -->
        <script id=\"marineProtectionData\" type=\"application/json\">
            {{ marineProtectionData|json_encode(constant('JSON_PRETTY_PRINT'))|raw }}
        </script>

        {% block javascripts %}
            {{ encore_entry_script_tags('proj') }}
        {% endblock %}
    </div>
{% endblock %}
", "proj/data.html.twig", "/Users/hannagawlitza/dbwebb-kurser/mvc/me/report/templates/proj/data.html.twig");
    }
}
