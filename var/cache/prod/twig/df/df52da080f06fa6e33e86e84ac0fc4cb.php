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

/* Accueil/index.html.twig */
class __TwigTemplate_75f712a06f4c4a0e9d926c07c0224a21 extends Template
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
        <title>Vente</title>
        <link rel=\"stylesheet\" href=\"index.css\">
    </head>
    <body>
        <h1>Bienvenue sur le meilleur site de ventes de Poitiers</h1>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Accueil/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Accueil/index.html.twig", "C:\\Users\\lhervo01\\Documents\\Symfony\\TP1\\templates\\Accueil\\index.html.twig");
    }
}
