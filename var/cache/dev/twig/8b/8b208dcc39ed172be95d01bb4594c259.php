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

/* Layouts/footer.html.twig */
class __TwigTemplate_7976915178182f1bc8c1ee705e053f44 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layouts/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layouts/footer.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "<a href=\"https://www.mangerbouger.fr\" target=\"_blank\" rel=\"noopener noreferrer\">www.mangerbouger.fr</a>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Layouts/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# bas de page #}

{#  <img src=\"{{asset('Mix-Fruits-Basket-PNG-Pic.png')}}\" title=\"my image\" alt=\"My image\">#}
<a href=\"https://www.mangerbouger.fr\" target=\"_blank\" rel=\"noopener noreferrer\">www.mangerbouger.fr</a>", "Layouts/footer.html.twig", "C:\\Users\\Léo\\Documents\\Ecole\\Université\\L3\\_S6\\TWeb\\Projet\\ProjetTW\\TWGit\\TechWebProjet\\templates\\Layouts\\footer.html.twig");
    }
}
