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

/* Sandbox/Prefix/hello4.html.twig */
class __TwigTemplate_c96dafc20110cea320fcf7dd5280f25b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/Prefix/hello4.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/Prefix/hello4.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Prefix</title>
        <style>
            caption { border: red solid 1px; }
            table { border: black solid 1px; }
            td { border: black solid 1px; }
        </style>
    </head>
    <body>
        <h1>(Prefix) Bienvenue ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</h1>

        <table>
            <caption>Mes jeux préférés sont&nbsp;:</caption>
            ";
        // line 17
        $context["i"] = 1;
        // line 18
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jeux"]) || array_key_exists("jeux", $context) ? $context["jeux"] : (function () { throw new RuntimeError('Variable "jeux" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 19
            echo "                <tr>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $context["jeu"], "html", null, true);
            echo "</td>
                </tr>
                ";
            // line 22
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 22, $this->source); })()) + 1);
            // line 23
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            echo "                        ";
            // line 24
            echo "                <tr><td>je ne préfère aucun jeu&nbsp;!</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </table>

        ";
        // line 29
        echo "        <table>
            <caption>Mes jeux préférés sont&nbsp;:</caption>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jeux"]) || array_key_exists("jeux", $context) ? $context["jeux"] : (function () { throw new RuntimeError('Variable "jeux" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 32
            echo "                <tr>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $context["jeu"], "html", null, true);
            echo "</td>
                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                        ";
            // line 36
            echo "                <tr><td>je ne préfère aucun jeu&nbsp;!</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </table>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Sandbox/Prefix/hello4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 38,  146 => 36,  144 => 35,  126 => 33,  123 => 32,  105 => 31,  101 => 29,  97 => 26,  90 => 24,  84 => 23,  82 => 22,  75 => 20,  72 => 19,  66 => 18,  64 => 17,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Prefix</title>
        <style>
            caption { border: red solid 1px; }
            table { border: black solid 1px; }
            td { border: black solid 1px; }
        </style>
    </head>
    <body>
        <h1>(Prefix) Bienvenue {{ prenom }}</h1>

        <table>
            <caption>Mes jeux préférés sont&nbsp;:</caption>
            {% set i = 1 %}
            {% for jeu in jeux %}
                <tr>
                    <td>{{ i }}</td><td>{{ jeu }}</td>
                </tr>
                {% set i = i+1 %}
            {% else %}                        {# utilisé si aucune itération n'est effectuée #}
                <tr><td>je ne préfère aucun jeu&nbsp;!</td></tr>
            {% endfor %}
        </table>

        {# code équivalent en utilisant loop #}
        <table>
            <caption>Mes jeux préférés sont&nbsp;:</caption>
            {% for jeu in jeux %}
                <tr>
                    <td>{{ loop.index }}</td><td>{{ jeu }}</td>
                </tr>
            {% else %}                        {# utilisé si aucune itération n'est effectuée #}
                <tr><td>je ne préfère aucun jeu&nbsp;!</td></tr>
            {% endfor %}
        </table>
    </body>
</html>
", "Sandbox/Prefix/hello4.html.twig", "C:\\Users\\lhervo01.SFASP2MI\\Documents\\Symfony\\TP6\\l3-web-2022-23-TP5\\templates\\Sandbox\\Prefix\\hello4.html.twig");
    }
}
