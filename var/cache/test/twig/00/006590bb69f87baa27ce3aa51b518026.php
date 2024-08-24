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

/* card/draw_number.html.twig */
class __TwigTemplate_cb4be80d86d7a57616d251759df4cb0d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/draw_number.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/draw_number.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/draw_number.html.twig", 1);
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

        yield "Drag flera kort";
        
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
        <h2>Drag flera kort</h2>
        <form action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_number");
        yield "\" method=\"GET\">
            <label for=\"number\">Ange antal kort att dra (max ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxDraw"]) || array_key_exists("maxDraw", $context) ? $context["maxDraw"] : (function () { throw new RuntimeError('Variable "maxDraw" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "):</label>
            <input type=\"number\" id=\"number\" name=\"number\" min=\"1\" max=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxDraw"]) || array_key_exists("maxDraw", $context) ? $context["maxDraw"] : (function () { throw new RuntimeError('Variable "maxDraw" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "\" required>
            <button type=\"submit\">Dra kort</button>
        </form>
    
        ";
        // line 26
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["drawnCards"]) || array_key_exists("drawnCards", $context) ? $context["drawnCards"] : (function () { throw new RuntimeError('Variable "drawnCards" does not exist.', 26, $this->source); })()))) {
            // line 27
            yield "            <h3>Dragna kort</h3>
            <div class=\"deck\">
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["drawnCards"]) || array_key_exists("drawnCards", $context) ? $context["drawnCards"] : (function () { throw new RuntimeError('Variable "drawnCards" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 30
                yield "                    <div class=\"card ";
                yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "getSuit", [], "method", false, false, false, 30), ["Hearts", "Diamonds"])) ? ("red") : (""));
                yield "\">
                        ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "getGraphic", [], "method", false, false, false, 31), "html", null, true);
                yield "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "            </div>
        ";
        }
        // line 36
        yield "        <p>Kvarvarande kort i leken: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "</p>
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
        return "card/draw_number.html.twig";
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
        return array (  170 => 36,  166 => 34,  157 => 31,  152 => 30,  148 => 29,  144 => 27,  142 => 26,  135 => 22,  131 => 21,  127 => 20,  119 => 15,  115 => 14,  111 => 13,  107 => 12,  103 => 11,  99 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Drag flera kort{% endblock %}

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
        <h2>Drag flera kort</h2>
        <form action=\"{{ path('draw_number') }}\" method=\"GET\">
            <label for=\"number\">Ange antal kort att dra (max {{ maxDraw }}):</label>
            <input type=\"number\" id=\"number\" name=\"number\" min=\"1\" max=\"{{ maxDraw }}\" required>
            <button type=\"submit\">Dra kort</button>
        </form>
    
        {% if drawnCards is not empty %}
            <h3>Dragna kort</h3>
            <div class=\"deck\">
                {% for card in drawnCards %}
                    <div class=\"card {{ card.getSuit() in ['Hearts', 'Diamonds'] ? 'red' : '' }}\">
                        {{ card.getGraphic() }}
                    </div>
                {% endfor %}
            </div>
        {% endif %}
        <p>Kvarvarande kort i leken: {{ remaining }}</p>
    </div>
</div>
{% endblock %}", "card/draw_number.html.twig", "/Users/hannagawlitza/dbwebb-kurser/mvc/me/report/templates/card/draw_number.html.twig");
    }
}
