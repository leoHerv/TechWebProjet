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

/* Sandbox/Overview/hello4.html.twig */
class __TwigTemplate_2f876bdcdf1afa5cb86c251baf6053a9 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Bienvenue !</title>
        <style>
            caption { border: #00a6ff solid 1px; }
            table { border: black solid 1px; }
            td { border: black solid 1px; }
        </style>
    </head>
    <body>
        <h1>Bienvenue ";
        // line 13
        echo twig_escape_filter($this->env, ($context["prenom"] ?? null), "html", null, true);
        echo "</h1>

        <table>
            <caption>Mes jeux préférés sont&nbsp;:</caption>
            ";
        // line 17
        $context["i"] = 1;
        // line 18
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jeux"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 19
            echo "                <tr>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $context["jeu"], "html", null, true);
            echo "</td>
                </tr>
                ";
            // line 22
            $context["i"] = (($context["i"] ?? null) + 1);
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
        $context['_seq'] = twig_ensure_traversable(($context["jeux"] ?? null));
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
    }

    public function getTemplateName()
    {
        return "Sandbox/Overview/hello4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 38,  140 => 36,  138 => 35,  120 => 33,  117 => 32,  99 => 31,  95 => 29,  91 => 26,  84 => 24,  78 => 23,  76 => 22,  69 => 20,  66 => 19,  60 => 18,  58 => 17,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Sandbox/Overview/hello4.html.twig", "C:\\Users\\lhervo01\\Documents\\Symfony\\TP1\\templates\\Sandbox\\Overview\\hello4.html.twig");
    }
}
