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

/* Sandbox/Doctrine/critiqueView2.html.twig */
class __TwigTemplate_142e496f7be673b4fd6ae7640300d00a extends Template
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
        return "Sandbox/Layouts/layout4.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/Doctrine/critiqueView2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/Doctrine/critiqueView2.html.twig"));

        $this->parent = $this->loadTemplate("Sandbox/Layouts/layout4.html.twig", "Sandbox/Doctrine/critiqueView2.html.twig", 1);
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
        echo " : doctrine";
        
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

        echo "Vue \"critiqueView2\" : exercices Doctrine";
        
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
        echo "    <p><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sandbox_doctrine_list");
        echo "\">Retour à la liste des films</a> </p>

    <h2>Détail du film ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
    <ul>
        <li>id : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</li>
        <li>titre : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 13, $this->source); })()), "titre", [], "any", false, false, false, 13), "html", null, true);
        echo "</li>
        <li>année : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 14, $this->source); })()), "annee", [], "any", false, false, false, 14), "html", null, true);
        echo "</li>
        <li>en stock : ";
        // line 15
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 15, $this->source); })()), "enstock", [], "any", false, false, false, 15)) ? ("oui") : ("non"));
        echo "</li>
        <li>prix : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 16, $this->source); })()), "prix", [], "any", false, false, false, 16), "html", null, true);
        echo " euro(s)</li>
        <li>quantité : ";
        // line 17
        (((null === twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 17, $this->source); })()), "quantite", [], "any", false, false, false, 17))) ? (print ("non renseigné")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 17, $this->source); })()), "quantite", [], "any", false, false, false, 17), "html", null, true))));
        echo "</li>
    </ul>

    <h2>dump avant getCritiques()</h2>
    ";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 21, $this->source); })()));
        echo "

    <h2>Critiques</h2>
    <ul>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 25, $this->source); })()), "critiques", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["critique"]) {
            // line 26
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["critique"], "note", [], "any", false, false, false, 26), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["critique"], "avis", [], "any", false, false, false, 26), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['critique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </ul>

    <h2>dump après getCritiques()</h2>
    ";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 31, $this->source); })()));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Sandbox/Doctrine/critiqueView2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 31,  169 => 28,  158 => 26,  154 => 25,  147 => 21,  140 => 17,  136 => 16,  132 => 15,  128 => 14,  124 => 13,  120 => 12,  115 => 10,  109 => 8,  99 => 7,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'Sandbox/Layouts/layout4.html.twig' %}

{% block title %}{{ parent() }} : doctrine{% endblock %}

{% block titre_principal %}Vue \"critiqueView2\" : exercices Doctrine{% endblock %}

{% block vue %}
    <p><a href=\"{{ path('sandbox_doctrine_list') }}\">Retour à la liste des films</a> </p>

    <h2>Détail du film {{ film.id }}</h2>
    <ul>
        <li>id : {{ film.id }}</li>
        <li>titre : {{ film.titre }}</li>
        <li>année : {{ film.annee }}</li>
        <li>en stock : {{ film.enstock ? 'oui' : 'non' }}</li>
        <li>prix : {{ film.prix }} euro(s)</li>
        <li>quantité : {{ film.quantite is null ? 'non renseigné' : film.quantite }}</li>
    </ul>

    <h2>dump avant getCritiques()</h2>
    {{ dump(film) }}

    <h2>Critiques</h2>
    <ul>
        {% for critique in film.critiques %}
            <li>{{ critique.note }} : {{ critique.avis }}</li>
        {% endfor %}
    </ul>

    <h2>dump après getCritiques()</h2>
    {{ dump(film) }}
{% endblock %}
", "Sandbox/Doctrine/critiqueView2.html.twig", "C:\\Users\\lhervo01.SFASP2MI\\Documents\\Symfony\\TP6\\l3-web-2022-23-TP5\\templates\\Sandbox\\Doctrine\\critiqueView2.html.twig");
    }
}
