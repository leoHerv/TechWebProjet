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

/* Sandbox/Route/test1234.html.twig */
class __TwigTemplate_f475fef5987abfe76b1220ec89dc252b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/Route/test1234.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/Route/test1234.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</title>
        <style>
            caption { border: red solid 1px; }
            table { border: black solid 1px; }
            th, td { border: black solid 1px; padding: 2px 10px 2px 10px;}
            th { text-align: right; }
        </style>
    </head>
    <body>
        <h1>Route::";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</h1>
        <table>
            <tr><th>year</th>    <td>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</td></tr>
            <tr><th>month</th>   <td>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</td></tr>
            <tr><th>filename</th><td>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</td></tr>
            <tr><th>ext</th>     <td>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</td></tr>
        </table>
        ";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 22, $this->source); })()), (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 22, $this->source); })()), (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 22, $this->source); })()), (isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 22, $this->source); })()));
        echo "    ";
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Sandbox/Route/test1234.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  83 => 22,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  61 => 15,  49 => 6,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# vue commune aux actions test1, test2, test3 et test4 #}
<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{{ title }}</title>
        <style>
            caption { border: red solid 1px; }
            table { border: black solid 1px; }
            th, td { border: black solid 1px; padding: 2px 10px 2px 10px;}
            th { text-align: right; }
        </style>
    </head>
    <body>
        <h1>Route::{{ title }}</h1>
        <table>
            <tr><th>year</th>    <td>{{ year }}</td></tr>
            <tr><th>month</th>   <td>{{ month }}</td></tr>
            <tr><th>filename</th><td>{{ filename }}</td></tr>
            <tr><th>ext</th>     <td>{{ ext }}</td></tr>
        </table>
        {{ dump(year, month, filename, ext) }}    {# sont-ce des chaînes ? #}
    </body>
</html>
", "Sandbox/Route/test1234.html.twig", "C:\\Users\\lhervo01.SFASP2MI\\Documents\\Symfony\\TP6\\l3-web-2022-23-TP5\\templates\\Sandbox\\Route\\test1234.html.twig");
    }
}
