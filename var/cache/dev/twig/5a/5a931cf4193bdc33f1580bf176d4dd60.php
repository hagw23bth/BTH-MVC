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

/* proj/goals.html.twig */
class __TwigTemplate_6dcf4b9566ba866839fff9367a07397b extends Template
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
        return "proj/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/goals.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/goals.html.twig"));

        $this->parent = $this->loadTemplate("proj/base.html.twig", "proj/goals.html.twig", 1);
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

        yield "Project";
        
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
        yield "        <div class=\"goals-page\">
            ";
        // line 7
        yield (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 7, $this->source); })());
        yield "
            <div class=\"goals-grid\">
                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/14-1.png"), "html", null, true);
        yield "\" alt=\"14-1\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.1</div>
                        <div class=\"name\">Minska föroreningarna i haven</div>
                        <div class=\"description\">Till 2025 förebygga och avsevärt minska alla slags föroreningar i havet, i synnerhet från landbaserad verksamhet, inklusive marint skräp och tillförsel av näringsämnen.</div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/14-2.png"), "html", null, true);
        yield "\" alt=\"14-2\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.2</div>
                        <div class=\"name\">Skydda och återställ ekosystem</div>
                        <div class=\"description\">
                            Senast 2020 förvalta och skydda marina och kustnära ekosystem på ett hållbart sätt för att undvika betydande negativa konsekvenser, bland annat genom att stärka deras motståndskraft, samt vidta åtgärder för att återställa dem i syfte att uppnå friska och produktiva hav.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/14-3.png"), "html", null, true);
        yield "\" alt=\"14-3\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.3</div>
                        <div class=\"name\">Minska havsförsurningen</div>
                        <div class=\"description\">
                            Minimera och åtgärda havsförsurningens konsekvenser, bland annat genom ökat vetenskapligt samarbete på alla nivåer.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/14-4.png"), "html", null, true);
        yield "\" alt=\"14-4\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.4</div>
                        <div class=\"name\">Främja hållbart fiske</div>
                        <div class=\"description\">
                            Senast 2020 införa en effektiv fångstreglering och stoppa överfiske, olagligt, orapporterat och oreglerat fiske liksom destruktiva fiskemetoder samt genomföra vetenskapligt baserade förvaltningsplaner i syfte att återställa fiskbestånden så snabbt som möjligt, åtminstone till de nivåer som kan producera maximalt hållbart uttag, fastställt utifrån deras biologiska egenskaper.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/14-5.png"), "html", null, true);
        yield "\" alt=\"14-5\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.5</div>
                        <div class=\"name\">Bevara kust- och havsområden</div>
                        <div class=\"description\">
                            Senast 2020 skydda minst 10 procent av kust- och havsområdena, i överensstämmelse med nationell och internationell rätt och på grundval av bästa tillgängliga vetenskapliga rön.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/14-6.png"), "html", null, true);
        yield "\" alt=\"14-6\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.6</div>
                        <div class=\"name\">Avskaffa subventioner som bidrar till överfiske</div>
                        <div class=\"description\">
                            Senast 2020 förbjuda vissa former av fiskesubventioner som bidrar till överkapacitet och överfiske, avskaffa subventioner som bidrar till olagligt, orapporterat och oreglerat fiske och avstå från att införa nya sådana subventioner, med erkännande av att en ändamålsenlig och effektiv särskild och differentierad behandling av utvecklingsländerna och de minst utvecklade länderna bör vara en integrerad del av förhandlingarna om fiskesubventioner i Världshandelsorganisationen.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/14-7.png"), "html", null, true);
        yield "\" alt=\"14-7\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.7</div>
                        <div class=\"name\">Öka den ekonomiska nyttan av hållbar hantering av marina resurser</div>
                        <div class=\"description\">
                            Till 2030 öka den ekonomiska nyttan för små önationer under utveckling och de minst utvecklade länderna av ett hållbart nyttjande av marina resurser, bland annat genom en hållbar förvaltning av fiske, vattenbruk och turism.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/14-A.png"), "html", null, true);
        yield "\" alt=\"14-A\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.A</div>
                        <div class=\"name\">Utöka vetenskaplig kunskap, forskning och teknik</div>
                        <div class=\"description\">
                            Öka den vetenskapliga kunskapen, utveckla forskningskapaciteten och överföra havsteknik, med hänsyn tagen till den mellanstatliga oceanografiska kommissionens kriterier och riktlinjer för överföring av havsteknik, i syfte att skapa friskare hav och öka den marina biologiska mångfaldens bidrag till utvecklingen i utvecklingsländerna, i synnerhet i små önationer under utveckling och de minst utvecklade länderna.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/14-B.png"), "html", null, true);
        yield "\" alt=\"14-B\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.B</div>
                        <div class=\"name\">Stöd småskalig fiskenäring</div>
                        <div class=\"description\">
                            Säkerställa tillträde för småskaliga icke-industriella fiskare till marina resurser och marknader.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/14-C.png"), "html", null, true);
        yield "\" alt=\"14-C\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.C</div>
                        <div class=\"name\">Implementera och verkställ den internationella havsrättskonventionen</div>
                        <div class=\"description\">
                            Stärka bevarandet och hållbart nyttjande av haven och havsresurserna genom att genomföra internationell rätt, såsom den kommer till uttryck i Förenta Nationernas havsrättskonvention (UNCLOS), som utgör den rättsliga ramen för bevarande och hållbart nyttjande av hav och havsresurser.
                        </div>
                    </div>
                </div>
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
        return "proj/goals.html.twig";
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
        return array (  242 => 126,  226 => 113,  210 => 100,  194 => 87,  178 => 74,  162 => 61,  146 => 48,  130 => 35,  114 => 22,  100 => 11,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"proj/base.html.twig\" %}

{% block title %}Project{% endblock %}

{% block body %}
        <div class=\"goals-page\">
            {{ content|raw }}
            <div class=\"goals-grid\">
                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"{{ asset('img/14-1.png') }}\" alt=\"14-1\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.1</div>
                        <div class=\"name\">Minska föroreningarna i haven</div>
                        <div class=\"description\">Till 2025 förebygga och avsevärt minska alla slags föroreningar i havet, i synnerhet från landbaserad verksamhet, inklusive marint skräp och tillförsel av näringsämnen.</div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"{{ asset('img/14-2.png') }}\" alt=\"14-2\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.2</div>
                        <div class=\"name\">Skydda och återställ ekosystem</div>
                        <div class=\"description\">
                            Senast 2020 förvalta och skydda marina och kustnära ekosystem på ett hållbart sätt för att undvika betydande negativa konsekvenser, bland annat genom att stärka deras motståndskraft, samt vidta åtgärder för att återställa dem i syfte att uppnå friska och produktiva hav.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"{{ asset('img/14-3.png') }}\" alt=\"14-3\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.3</div>
                        <div class=\"name\">Minska havsförsurningen</div>
                        <div class=\"description\">
                            Minimera och åtgärda havsförsurningens konsekvenser, bland annat genom ökat vetenskapligt samarbete på alla nivåer.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"{{ asset('img/14-4.png') }}\" alt=\"14-4\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.4</div>
                        <div class=\"name\">Främja hållbart fiske</div>
                        <div class=\"description\">
                            Senast 2020 införa en effektiv fångstreglering och stoppa överfiske, olagligt, orapporterat och oreglerat fiske liksom destruktiva fiskemetoder samt genomföra vetenskapligt baserade förvaltningsplaner i syfte att återställa fiskbestånden så snabbt som möjligt, åtminstone till de nivåer som kan producera maximalt hållbart uttag, fastställt utifrån deras biologiska egenskaper.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"{{ asset('img/14-5.png') }}\" alt=\"14-5\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.5</div>
                        <div class=\"name\">Bevara kust- och havsområden</div>
                        <div class=\"description\">
                            Senast 2020 skydda minst 10 procent av kust- och havsområdena, i överensstämmelse med nationell och internationell rätt och på grundval av bästa tillgängliga vetenskapliga rön.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"{{ asset('img/14-6.png') }}\" alt=\"14-6\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.6</div>
                        <div class=\"name\">Avskaffa subventioner som bidrar till överfiske</div>
                        <div class=\"description\">
                            Senast 2020 förbjuda vissa former av fiskesubventioner som bidrar till överkapacitet och överfiske, avskaffa subventioner som bidrar till olagligt, orapporterat och oreglerat fiske och avstå från att införa nya sådana subventioner, med erkännande av att en ändamålsenlig och effektiv särskild och differentierad behandling av utvecklingsländerna och de minst utvecklade länderna bör vara en integrerad del av förhandlingarna om fiskesubventioner i Världshandelsorganisationen.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"{{ asset('img/14-7.png') }}\" alt=\"14-7\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.7</div>
                        <div class=\"name\">Öka den ekonomiska nyttan av hållbar hantering av marina resurser</div>
                        <div class=\"description\">
                            Till 2030 öka den ekonomiska nyttan för små önationer under utveckling och de minst utvecklade länderna av ett hållbart nyttjande av marina resurser, bland annat genom en hållbar förvaltning av fiske, vattenbruk och turism.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"{{ asset('img/14-A.png') }}\" alt=\"14-A\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.A</div>
                        <div class=\"name\">Utöka vetenskaplig kunskap, forskning och teknik</div>
                        <div class=\"description\">
                            Öka den vetenskapliga kunskapen, utveckla forskningskapaciteten och överföra havsteknik, med hänsyn tagen till den mellanstatliga oceanografiska kommissionens kriterier och riktlinjer för överföring av havsteknik, i syfte att skapa friskare hav och öka den marina biologiska mångfaldens bidrag till utvecklingen i utvecklingsländerna, i synnerhet i små önationer under utveckling och de minst utvecklade länderna.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"{{ asset('img/14-B.png') }}\" alt=\"14-B\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.B</div>
                        <div class=\"name\">Stöd småskalig fiskenäring</div>
                        <div class=\"description\">
                            Säkerställa tillträde för småskaliga icke-industriella fiskare till marina resurser och marknader.
                        </div>
                    </div>
                </div>

                <div class=\"goal-box\">
                    <div class=\"goal-image\">
                        <img src=\"{{ asset('img/14-C.png') }}\" alt=\"14-C\">
                    </div>
                    <div class=\"goal-content\">
                        <div class=\"number\">14.C</div>
                        <div class=\"name\">Implementera och verkställ den internationella havsrättskonventionen</div>
                        <div class=\"description\">
                            Stärka bevarandet och hållbart nyttjande av haven och havsresurserna genom att genomföra internationell rätt, såsom den kommer till uttryck i Förenta Nationernas havsrättskonvention (UNCLOS), som utgör den rättsliga ramen för bevarande och hållbart nyttjande av hav och havsresurser.
                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}", "proj/goals.html.twig", "/Users/hannagawlitza/dbwebb-kurser/mvc/me/report/templates/proj/goals.html.twig");
    }
}
