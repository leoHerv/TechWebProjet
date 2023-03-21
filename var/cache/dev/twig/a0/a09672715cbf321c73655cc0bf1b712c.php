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
<div class=\"menu\"><a>Accueil</a></div>

";
        // line 5
        if ((isset($context["isAuth"]) || array_key_exists("isAuth", $context) ? $context["isAuth"] : (function () { throw new RuntimeError('Variable "isAuth" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "
    <div class=\"menu\"><a>Edit Profile</a></div>

";
        }
        // line 10
        echo "
";
        // line 11
        if ( !(isset($context["isAuth"]) || array_key_exists("isAuth", $context) ? $context["isAuth"] : (function () { throw new RuntimeError('Variable "isAuth" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "
    <div class=\"menu\"><a>Login</a></div>
    <div class=\"menu\"><a>SignIn</a></div>

";
        }
        // line 17
        echo "
";
        // line 18
        if (((isset($context["isAuth"]) || array_key_exists("isAuth", $context) ? $context["isAuth"] : (function () { throw new RuntimeError('Variable "isAuth" does not exist.', 18, $this->source); })()) &&  !(isset($context["isSuperAdmin"]) || array_key_exists("isSuperAdmin", $context) ? $context["isSuperAdmin"] : (function () { throw new RuntimeError('Variable "isSuperAdmin" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo "
    <div class=\"menu\"><a>Panier</a></div>
    <div class=\"menu\"><a>Products</a></div>

";
        }
        // line 24
        echo "
";
        // line 25
        if ((((isset($context["isAuth"]) || array_key_exists("isAuth", $context) ? $context["isAuth"] : (function () { throw new RuntimeError('Variable "isAuth" does not exist.', 25, $this->source); })()) && (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 25, $this->source); })())) &&  !(isset($context["isSuperAdmin"]) || array_key_exists("isSuperAdmin", $context) ? $context["isSuperAdmin"] : (function () { throw new RuntimeError('Variable "isSuperAdmin" does not exist.', 25, $this->source); })()))) {
            // line 26
            echo "
    <div class=\"menu\"><a>Edit Users</a></div>
    <div class=\"menu\"><a>Add Products</a></div>
    <div class=\"menu\"><a>The Truman Show</a></div>

";
        }
        // line 32
        echo "
";
        // line 33
        if ((((isset($context["isAuth"]) || array_key_exists("isAuth", $context) ? $context["isAuth"] : (function () { throw new RuntimeError('Variable "isAuth" does not exist.', 33, $this->source); })()) &&  !(isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 33, $this->source); })())) && (isset($context["isSuperAdmin"]) || array_key_exists("isSuperAdmin", $context) ? $context["isSuperAdmin"] : (function () { throw new RuntimeError('Variable "isSuperAdmin" does not exist.', 33, $this->source); })()))) {
            // line 34
            echo "
    <div class=\"menu\"><a>Edit Users + Admin ?</a></div>
    <div class=\"menu\"><a>Add Admin</a></div>

";
        }
        
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
        return array (  98 => 34,  96 => 33,  93 => 32,  85 => 26,  83 => 25,  80 => 24,  73 => 19,  71 => 18,  68 => 17,  61 => 12,  59 => 11,  56 => 10,  50 => 6,  48 => 5,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# menu de l'application #}

<div class=\"menu\"><a>Accueil</a></div>

{% if isAuth %}

    <div class=\"menu\"><a>Edit Profile</a></div>

{% endif %}

{% if not isAuth %}

    <div class=\"menu\"><a>Login</a></div>
    <div class=\"menu\"><a>SignIn</a></div>

{% endif %}

{% if isAuth and not isSuperAdmin %}

    <div class=\"menu\"><a>Panier</a></div>
    <div class=\"menu\"><a>Products</a></div>

{% endif %}

{% if isAuth and isAdmin and not isSuperAdmin %}

    <div class=\"menu\"><a>Edit Users</a></div>
    <div class=\"menu\"><a>Add Products</a></div>
    <div class=\"menu\"><a>The Truman Show</a></div>

{% endif %}

{% if isAuth and not isAdmin and isSuperAdmin %}

    <div class=\"menu\"><a>Edit Users + Admin ?</a></div>
    <div class=\"menu\"><a>Add Admin</a></div>

{% endif %}
", "Layouts/menu.html.twig", "C:\\Users\\Léo\\Documents\\Ecole\\Université\\L3\\_S6\\TWeb\\Projet\\ProjetTW\\TWGit\\TechWebProjet\\templates\\Layouts\\menu.html.twig");
    }
}
