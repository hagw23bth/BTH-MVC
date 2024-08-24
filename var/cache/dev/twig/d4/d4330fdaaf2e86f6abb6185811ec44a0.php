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

/* game/play.html.twig */
class __TwigTemplate_a39b369cbc195d7e05fa2c136e4eca70 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/play.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/play.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/play.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Spela";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    <div class=\"inner-container grid-container\">
        <div class=\"sidebar\">
            <ul>
                <li><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game");
        yield "\">Spela</a></li>
                <li><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc");
        yield "\">Dokumentation</a></li>
            </ul>
        </div>
        <div class=\"content\">
            <h1>Spela kortspelet 21</h1>
            <div id=\"player-status\">
                <h2>Din hand</h2>
                <ul>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 20, $this->source); })()), "getHand", [], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 21
            yield "                        <div class=\"card ";
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "getSuit", [], "method", false, false, false, 21), ["Hearts", "Diamonds"])) ? ("red") : (""));
            yield "\">
                            ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "getGraphic", [], "method", false, false, false, 22), "html", null, true);
            yield "
                        </div>                        
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "                </ul>
                <p>Din poäng: ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 26, $this->source); })()), "getScore", [], "method", false, false, false, 26), "html", null, true);
        yield "</p>
            </div>

            <div id=\"game-controls\">
                ";
        // line 30
        if ( !(isset($context["game_over"]) || array_key_exists("game_over", $context) ? $context["game_over"] : (function () { throw new RuntimeError('Variable "game_over" does not exist.', 30, $this->source); })())) {
            // line 31
            yield "                    ";
            if ((isset($context["player_turn"]) || array_key_exists("player_turn", $context) ? $context["player_turn"] : (function () { throw new RuntimeError('Variable "player_turn" does not exist.', 31, $this->source); })())) {
                // line 32
                yield "                        <p> Vill du stanna på nuvarande poäng eller dra fler kort?
                        <a href=\"";
                // line 33
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_draw_card");
                yield "\">Dra kort</a>
                        <a href=\"";
                // line 34
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_pass");
                yield "\">Stanna</a>
                    ";
            }
            // line 36
            yield "                ";
        }
        // line 37
        yield "            </div>

            <div id=\"bank-status\">
                <h2>Bankens hand</h2>
                <ul>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bank"]) || array_key_exists("bank", $context) ? $context["bank"] : (function () { throw new RuntimeError('Variable "bank" does not exist.', 42, $this->source); })()), "getHand", [], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 43
            yield "                        <div class=\"card ";
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "getSuit", [], "method", false, false, false, 43), ["Hearts", "Diamonds"])) ? ("red") : (""));
            yield "\">
                            ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "getGraphic", [], "method", false, false, false, 44), "html", null, true);
            yield "
                        </div>                     
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                </ul>
                <p>Bankens poäng: ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bank"]) || array_key_exists("bank", $context) ? $context["bank"] : (function () { throw new RuntimeError('Variable "bank" does not exist.', 48, $this->source); })()), "getScore", [], "method", false, false, false, 48), "html", null, true);
        yield "</p>
            </div>

            ";
        // line 51
        if ((isset($context["game_over"]) || array_key_exists("game_over", $context) ? $context["game_over"] : (function () { throw new RuntimeError('Variable "game_over" does not exist.', 51, $this->source); })())) {
            // line 52
            yield "                <div id=\"game-result\">
                    <h2>Spelet är avgjort!</h2>
                    <p>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["result_message"]) || array_key_exists("result_message", $context) ? $context["result_message"] : (function () { throw new RuntimeError('Variable "result_message" does not exist.', 54, $this->source); })()), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        // line 57
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_restart");
        yield "\">Starta nytt spel!</a>
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
        return "game/play.html.twig";
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
        return array (  204 => 57,  198 => 54,  194 => 52,  192 => 51,  186 => 48,  183 => 47,  174 => 44,  169 => 43,  165 => 42,  158 => 37,  155 => 36,  150 => 34,  146 => 33,  143 => 32,  140 => 31,  138 => 30,  131 => 26,  128 => 25,  119 => 22,  114 => 21,  110 => 20,  99 => 12,  95 => 11,  90 => 8,  80 => 7,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/game/play.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Spela{% endblock %}

{% block body %}
    <div class=\"inner-container grid-container\">
        <div class=\"sidebar\">
            <ul>
                <li><a href=\"{{ path('game') }}\">Spela</a></li>
                <li><a href=\"{{ path('doc') }}\">Dokumentation</a></li>
            </ul>
        </div>
        <div class=\"content\">
            <h1>Spela kortspelet 21</h1>
            <div id=\"player-status\">
                <h2>Din hand</h2>
                <ul>
                    {% for card in player.getHand() %}
                        <div class=\"card {{ card.getSuit() in ['Hearts', 'Diamonds'] ? 'red' : '' }}\">
                            {{ card.getGraphic() }}
                        </div>                        
                    {% endfor %}
                </ul>
                <p>Din poäng: {{ player.getScore() }}</p>
            </div>

            <div id=\"game-controls\">
                {% if not game_over %}
                    {% if player_turn %}
                        <p> Vill du stanna på nuvarande poäng eller dra fler kort?
                        <a href=\"{{ path('game_draw_card') }}\">Dra kort</a>
                        <a href=\"{{ path('game_pass') }}\">Stanna</a>
                    {% endif %}
                {% endif %}
            </div>

            <div id=\"bank-status\">
                <h2>Bankens hand</h2>
                <ul>
                    {% for card in bank.getHand() %}
                        <div class=\"card {{ card.getSuit() in ['Hearts', 'Diamonds'] ? 'red' : '' }}\">
                            {{ card.getGraphic() }}
                        </div>                     
                    {% endfor %}
                </ul>
                <p>Bankens poäng: {{ bank.getScore() }}</p>
            </div>

            {% if game_over %}
                <div id=\"game-result\">
                    <h2>Spelet är avgjort!</h2>
                    <p>{{ result_message }}</p>
                </div>
            {% endif %}
            <a href=\"{{ path('game_restart') }}\">Starta nytt spel!</a>
        </div>
    </div>
{% endblock %}", "game/play.html.twig", "/Users/hannagawlitza/dbwebb-kurser/mvc/me/report/templates/game/play.html.twig");
    }
}
