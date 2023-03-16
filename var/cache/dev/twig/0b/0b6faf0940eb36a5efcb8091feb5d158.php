<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Sandbox/Twig/vue6.html.twig */
class __TwigTemplate_b087b07dc3d720f02378e7cceb5e1491 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titre_principal' => [$this, 'block_titre_principal'],
            'vue' => [$this, 'block_vue'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Sandbox/Layouts/layout3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/Twig/vue6.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/Twig/vue6.html.twig"));

        $this->parent = $this->loadTemplate("Sandbox/Layouts/layout3.html.twig", "Sandbox/Twig/vue6.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        $this->displayParentBlock("title", $context, $blocks);
        echo " : vue 6";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_titre_principal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre_principal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre_principal"));

        echo "Vue 6 : exercices Twig";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue"));

        // line 8
        echo "    <h2>Qui suis-je ?</h2>
    <p>
        Je suis ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " et je suis joignable à <em>";
        echo twig_escape_filter($this->env, (isset($context["mail"]) || array_key_exists("mail", $context) ? $context["mail"] : (function () { throw new RuntimeError('Variable "mail" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</em>
    </p>

    ";
        // line 14
        echo "    <h2>Noms des mentions</h2>
    <ul>
        ";
        // line 16
        echo "           ";
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 17, $this->source); })()), "mentions", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["nomCourt"] => $context["mention"]) {
            echo "                    ";
            // line 18
            echo "            ";
            // line 19
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mention"], "nom", [], "any", false, false, false, 19)), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $context["nomCourt"], "html", null, true);
            echo ")</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nomCourt'], $context['mention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>

    ";
        // line 24
        echo "    <h2>Noms et volumes des UEs</h2>
    <ul>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 26, $this->source); })()), "ues", [], "any", false, false, false, 26));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
            // line 27
            echo "            ";
            echo "          ";
            // line 28
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 28), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["ue"], "nom", [], "any", false, false, false, 28) . " : ") . twig_get_attribute($this->env, $this->source, $context["ue"], "volume", [], "any", false, false, false, 28)), "html", null, true);
            echo "</li>              ";
            // line 29
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>

    ";
        // line 33
        echo "    <h2>Tableau complet</h2>
    <ul>
        ";
        // line 36
        echo "        <li>Mentions
            <ul>
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 38, $this->source); })()), "mentions", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["nomCourt"] => $context["mention"]) {
            // line 39
            echo "                    ";
            // line 40
            echo "                    <li>";
            echo twig_escape_filter($this->env, $context["nomCourt"], "html", null, true);
            echo "
                        <ul>
                            <li>nom : ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mention"], "nom", [], "any", false, false, false, 42), "html", null, true);
            echo "</li>
                            <li>parcours :
                                <ul>
                                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["mention"], "parcours", [], "any", false, false, false, 45));
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
            foreach ($context['_seq'] as $context["_key"] => $context["parcour"]) {
                // line 46
                echo "                                        <li>parcours ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 46), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $context["parcour"], "html", null, true);
                echo "</li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parcour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                                </ul>
                            </li>
                            <li>responsable : ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mention"], "responsable", [], "any", false, false, false, 50), "html", null, true);
            echo "</li>
                        </ul>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nomCourt'], $context['mention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </ul>
        </li>
        ";
        // line 57
        echo "        <li>UEs
            <ul>
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 59, $this->source); })()), "ues", [], "any", false, false, false, 59));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
            // line 60
            echo "                    ";
            // line 61
            echo "                    <li>UE ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 61), "html", null, true);
            echo "
                        <ul>
                            <li>nom : ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "nom", [], "any", false, false, false, 63), "html", null, true);
            echo "</li>
                            <li>volume : ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "volume", [], "any", false, false, false, 64), "html", null, true);
            echo " heure(s)</li>
                        </ul>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            </ul>
        </li>
    </ul>

    ";
        // line 73
        echo "    <h2>Nombre de mentions</h2>
    <p>Il y a ";
        // line 74
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 74, $this->source); })()), "mentions", [], "any", false, false, false, 74)), "html", null, true);
        echo " mention";
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 74, $this->source); })()), "mentions", [], "any", false, false, false, 74)) > 1)) ? ("s") : (""));
        echo "</p>

    ";
        // line 77
        echo "    <h2>Filtre <code>format</code></h2>
    ";
        // line 78
        $context["ville"] = "Poitiers";
        // line 79
        echo "    <p>";
        echo twig_escape_filter($this->env, twig_sprintf("Il y a %d habitants à %s en 1990", 78894, (isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 79, $this->source); })())), "html", null, true);
        echo "</p>

    ";
        // line 82
        echo "    <h2>UEs dont le volume horaire est &ge; 30</h2>
    <ul>
        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 84, $this->source); })()), "ues", [], "any", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
            // line 85
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["ue"], "volume", [], "any", false, false, false, 85) >= 30)) {
                // line 86
                echo "                <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "nom", [], "any", false, false, false, 86), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "volume", [], "any", false, false, false, 86), "html", null, true);
                echo " heure(s))</li>
            ";
            }
            // line 88
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "    </ul>

    ";
        // line 92
        echo "    <h2>Variable globale <code>app</code></h2>
    <p>
        <code>app.session</code> : ";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "session", [], "any", false, false, false, 94));
        echo "
        <code>app.request</code> : ";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95));
        echo "
        <code>app.environment</code> : ";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "environment", [], "any", false, false, false, 96));
        echo "
        <code>app.debug</code> : ";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "debug", [], "any", false, false, false, 97));
        echo "
        <code>app.user</code> : ";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98));
        echo "
    </p>

    <h2>Dump du tableau des formations</h2>
    <p>Tips : Ctrl-clic sur les petites flèches</p>
    ";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 103, $this->source); })()));
        echo "
    <p>
        Tips : lorsqu'on manipule des structures complexes, il peut être utile d'avoir
        un <code>dump</code> sous les yeux pour visualiser l'organisation des données.
    </p>

    <h2>Dump dde la variable globale <code>app</code></h2>
    ";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Sandbox/Twig/vue6.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 110,  413 => 103,  405 => 98,  401 => 97,  397 => 96,  393 => 95,  389 => 94,  385 => 92,  381 => 89,  375 => 88,  367 => 86,  364 => 85,  360 => 84,  356 => 82,  350 => 79,  348 => 78,  345 => 77,  338 => 74,  335 => 73,  329 => 68,  311 => 64,  307 => 63,  301 => 61,  299 => 60,  282 => 59,  278 => 57,  274 => 54,  264 => 50,  260 => 48,  241 => 46,  224 => 45,  218 => 42,  212 => 40,  210 => 39,  206 => 38,  202 => 36,  198 => 33,  194 => 30,  180 => 29,  174 => 28,  171 => 27,  154 => 26,  150 => 24,  146 => 21,  135 => 19,  133 => 18,  127 => 17,  125 => 16,  121 => 14,  113 => 10,  109 => 8,  99 => 7,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'Sandbox/Layouts/layout3.html.twig' %}

{% block title %}{{ parent() }} : vue 6{% endblock %}

{% block titre_principal %}Vue 6 : exercices Twig{% endblock %}

{% block vue %}
    <h2>Qui suis-je ?</h2>
    <p>
        Je suis {{ prenom }} et je suis joignable à <em>{{ mail }}</em>
    </p>

    {# noms longs et courts des mentions #}
    <h2>Noms des mentions</h2>
    <ul>
        {# {% for nomCourt, mention in offre['mentions'] %} #}           {# syntaxe orientée \"tableau\" #}
        {% for nomCourt, mention in offre.mentions %}                    {# syntaxe orientée \"objet\" #}
            {# <li>{{ mention['nom']|upper }} ({{ nomCourt }})</li> #}
            <li>{{ mention.nom|upper }} ({{ nomCourt }})</li>
        {% endfor %}
    </ul>

    {# noms et volumes horaires des UEs #}
    <h2>Noms et volumes des UEs</h2>
    <ul>
        {% for ue in offre.ues %}
            {# <li>{{ loop.index }}. {{ ue.nom }} : {{ ue.volume }}</li> #}          {# manière \"normale\" #}
            <li>{{ loop.index }}. {{ ue.nom ~ ' : ' ~ ue.volume }}</li>              {# manière avec concaténation #}
        {% endfor %}
    </ul>

    {# tableau complet #}
    <h2>Tableau complet</h2>
    <ul>
        {#  partie 1 : les mentions #}
        <li>Mentions
            <ul>
                {% for nomCourt, mention in offre.mentions %}
                    {# traitement d'une mention #}
                    <li>{{ nomCourt }}
                        <ul>
                            <li>nom : {{ mention.nom }}</li>
                            <li>parcours :
                                <ul>
                                    {% for parcour in mention.parcours %}
                                        <li>parcours {{ loop.index }} : {{ parcour }}</li>
                                    {% endfor %}
                                </ul>
                            </li>
                            <li>responsable : {{ mention.responsable }}</li>
                        </ul>
                    </li>
                {% endfor %}
            </ul>
        </li>
        {#  partie 2 : les UEs #}
        <li>UEs
            <ul>
                {% for ue in offre.ues %}
                    {# traitement d'une UE #}
                    <li>UE {{ loop.index0 }}
                        <ul>
                            <li>nom : {{ ue.nom }}</li>
                            <li>volume : {{ ue.volume }} heure(s)</li>
                        </ul>
                    </li>
                {% endfor %}
            </ul>
        </li>
    </ul>

    {# nombre de mentions #}
    <h2>Nombre de mentions</h2>
    <p>Il y a {{ offre.mentions|length }} mention{{ offre.mentions|length > 1 ? 's' : '' }}</p>

    {# filtre format #}
    <h2>Filtre <code>format</code></h2>
    {% set ville = 'Poitiers' %}
    <p>{{ 'Il y a %d habitants à %s en 1990' | format(78894, ville) }}</p>

    {# UEs sous condition #}
    <h2>UEs dont le volume horaire est &ge; 30</h2>
    <ul>
        {% for ue in offre.ues %}
            {% if ue.volume >= 30 %}
                <li>{{ ue.nom }} ({{ ue.volume }} heure(s))</li>
            {% endif %}
        {% endfor %}
    </ul>

    {# variable app #}
    <h2>Variable globale <code>app</code></h2>
    <p>
        <code>app.session</code> : {{ dump(app.session) }}
        <code>app.request</code> : {{ dump(app.request) }}
        <code>app.environment</code> : {{ dump(app.environment) }}
        <code>app.debug</code> : {{ dump(app.debug) }}
        <code>app.user</code> : {{ dump(app.user) }}
    </p>

    <h2>Dump du tableau des formations</h2>
    <p>Tips : Ctrl-clic sur les petites flèches</p>
    {{ dump(offre) }}
    <p>
        Tips : lorsqu'on manipule des structures complexes, il peut être utile d'avoir
        un <code>dump</code> sous les yeux pour visualiser l'organisation des données.
    </p>

    <h2>Dump dde la variable globale <code>app</code></h2>
    {{ dump(app) }}
{% endblock %}", "Sandbox/Twig/vue6.html.twig", "C:\\Users\\lhervo01.SFASP2MI\\Documents\\Symfony\\TP6\\l3-web-2022-23-TP5\\templates\\Sandbox\\Twig\\vue6.html.twig");
    }
}
