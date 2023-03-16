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

/* Sandbox/Overview/hello3.html.twig */
class __TwigTemplate_c49899398ff68c14e8678e76985efeb2 extends Template
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
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Bienvenue !</title>
    </head>
    <body>
        <h1>Bienvenue ";
        // line 8
        echo twig_escape_filter($this->env, ($context["prenom"] ?? null), "html", null, true);
        echo "</h1>
        <p>
            Mes jeux préférés sont&nbsp;:
            ";
        // line 11
        $context["i"] = 1;
        echo "</br>
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jeux"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 13
            echo "                ";
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, $context["jeu"], "html", null, true);
            echo "   </br>          ";
            // line 14
            echo "                ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 15
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            echo "                        ";
            // line 16
            echo "                je ne préfère aucun jeu&nbsp;!</br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </p>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Sandbox/Overview/hello3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  76 => 16,  70 => 15,  67 => 14,  61 => 13,  56 => 12,  52 => 11,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Sandbox/Overview/hello3.html.twig", "C:\\Users\\lhervo01\\Documents\\Symfony\\TP1\\templates\\Sandbox\\Overview\\hello3.html.twig");
    }
}
