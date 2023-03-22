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

/* Layouts/menu.html.twig */
class __TwigTemplate_60f0f4ac0ec23d53ceaeaa0266fd17e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layouts/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layouts/menu.html.twig"));

        // line 2
        echo "
<div class=\"menu\"><a href=\"/\">Accueil</a></div>

";
        // line 6
        if ((isset($context["isAuth"]) || array_key_exists("isAuth", $context) ? $context["isAuth"] : (function () { throw new RuntimeError('Variable "isAuth" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "
    <div class=\"menu\"><a href=\"/edit\">Edit Profile</a></div>

    ";
            // line 10
            if ( !(isset($context["isSuperAdmin"]) || array_key_exists("isSuperAdmin", $context) ? $context["isSuperAdmin"] : (function () { throw new RuntimeError('Variable "isSuperAdmin" does not exist.', 10, $this->source); })())) {
                // line 11
                echo "
        <div class=\"menu\"><a href=\"/panier\">Panier</a></div>
        <div class=\"menu\"><a href=\"/listProduct\">Products</a></div>

    ";
            }
            // line 16
            echo "
    ";
            // line 17
            if (((isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 17, $this->source); })()) &&  !(isset($context["isSuperAdmin"]) || array_key_exists("isSuperAdmin", $context) ? $context["isSuperAdmin"] : (function () { throw new RuntimeError('Variable "isSuperAdmin" does not exist.', 17, $this->source); })()))) {
                // line 18
                echo "
        <div class=\"menu\"><a href=\"/editUsers\">Edit Users</a></div>
        <div class=\"menu\"><a href=\"/addProduct\">Add Products</a></div>
        <div class=\"menu\"><a href=\"https://fr.wikipedia.org/wiki/The_Truman_Show\" target=\"_blank\" rel=\"noopener noreferrer\">The Truman Show</a></div>

    ";
            }
            // line 24
            echo "
    ";
            // line 25
            if (( !(isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 25, $this->source); })()) && (isset($context["isSuperAdmin"]) || array_key_exists("isSuperAdmin", $context) ? $context["isSuperAdmin"] : (function () { throw new RuntimeError('Variable "isSuperAdmin" does not exist.', 25, $this->source); })()))) {
                // line 26
                echo "        
        <div class=\"menu\"><a href=\"/addAdmin\">Add Admin</a></div>

    ";
            }
            // line 30
            echo "
    <div class=\"menu\"><a href=\"/\">Deconnection</a></div>

";
        }
        // line 34
        echo "
";
        // line 36
        if ( !(isset($context["isAuth"]) || array_key_exists("isAuth", $context) ? $context["isAuth"] : (function () { throw new RuntimeError('Variable "isAuth" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "
    <div class=\"menu\"><a href=\"/login\">Login</a></div>
    <div class=\"menu\"><a href=\"/signIn\">SignIn</a></div>

";
        }
        // line 42
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Layouts/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 42,  99 => 37,  97 => 36,  94 => 34,  88 => 30,  82 => 26,  80 => 25,  77 => 24,  69 => 18,  67 => 17,  64 => 16,  57 => 11,  55 => 10,  50 => 7,  48 => 6,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# menu de l'application #}

<div class=\"menu\"><a href=\"/\">Accueil</a></div>

{# Si l'utilisateur est authentifier#}
{% if isAuth %}

    <div class=\"menu\"><a href=\"/edit\">Edit Profile</a></div>

    {% if not isSuperAdmin %}

        <div class=\"menu\"><a href=\"/panier\">Panier</a></div>
        <div class=\"menu\"><a href=\"/listProduct\">Products</a></div>

    {% endif %}

    {% if isAdmin and not isSuperAdmin %}

        <div class=\"menu\"><a href=\"/editUsers\">Edit Users</a></div>
        <div class=\"menu\"><a href=\"/addProduct\">Add Products</a></div>
        <div class=\"menu\"><a href=\"https://fr.wikipedia.org/wiki/The_Truman_Show\" target=\"_blank\" rel=\"noopener noreferrer\">The Truman Show</a></div>

    {% endif %}

    {% if not isAdmin and isSuperAdmin %}
        
        <div class=\"menu\"><a href=\"/addAdmin\">Add Admin</a></div>

    {% endif %}

    <div class=\"menu\"><a href=\"/\">Deconnection</a></div>

{% endif %}

{# Si il n'y a pas d'authentification de l'utilisateur #}
{% if not isAuth %}

    <div class=\"menu\"><a href=\"/login\">Login</a></div>
    <div class=\"menu\"><a href=\"/signIn\">SignIn</a></div>

{% endif %}

", "Layouts/menu.html.twig", "C:\\Users\\Léo\\Documents\\Ecole\\Université\\L3\\_S6\\TWeb\\Projet\\ProjetTW\\TWGit\\TechWebProjet\\templates\\Layouts\\menu.html.twig");
    }
}
