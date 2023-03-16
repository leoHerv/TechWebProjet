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

/* Sandbox/Doctrine/list.html.twig */
class __TwigTemplate_bc1be9ca163b13c15cac0ae5bd00492a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/Doctrine/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/Doctrine/list.html.twig"));

        $this->parent = $this->loadTemplate("Sandbox/Layouts/layout4.html.twig", "Sandbox/Doctrine/list.html.twig", 1);
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

        echo "Vue \"list\" : exercices Doctrine";
        
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
        echo "    <h2>Liste de tous les films</h2>
    <table>
        <tr><th>id</th><th>titre</th><th></th></tr>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 12
            echo "            ";
            $context["urlView"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sandbox_doctrine_view", ["id" => twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 12)]);
            // line 13
            echo "            ";
            $context["urlDelete"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sandbox_doctrine_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 13)]);
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["urlView"]) || array_key_exists("urlView", $context) ? $context["urlView"] : (function () { throw new RuntimeError('Variable "urlView" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "titre", [], "any", false, false, false, 16), "html", null, true);
            echo "</a></td>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["urlDelete"]) || array_key_exists("urlDelete", $context) ? $context["urlDelete"] : (function () { throw new RuntimeError('Variable "urlDelete" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\">delete</a> (! pas de confirmation)</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </table>

    <h2>dump</h2>
    ";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 23, $this->source); })()));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Sandbox/Doctrine/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 23,  146 => 20,  137 => 17,  131 => 16,  127 => 15,  124 => 14,  121 => 13,  118 => 12,  114 => 11,  109 => 8,  99 => 7,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'Sandbox/Layouts/layout4.html.twig' %}

{% block title %}{{ parent() }} : doctrine{% endblock %}

{% block titre_principal %}Vue \"list\" : exercices Doctrine{% endblock %}

{% block vue %}
    <h2>Liste de tous les films</h2>
    <table>
        <tr><th>id</th><th>titre</th><th></th></tr>
        {% for film in films %}
            {% set urlView = path('sandbox_doctrine_view', { 'id' : film.id }) %}
            {% set urlDelete = path('sandbox_doctrine_delete', { 'id' : film.id }) %}
            <tr>
                <td>{{ film.id }}</td>
                <td><a href=\"{{ urlView }}\">{{ film.titre }}</a></td>
                <td><a href=\"{{ urlDelete }}\">delete</a> (! pas de confirmation)</td>
            </tr>
        {% endfor %}
    </table>

    <h2>dump</h2>
    {{ dump(films) }}
{% endblock %}
", "Sandbox/Doctrine/list.html.twig", "C:\\Users\\lhervo01.SFASP2MI\\Documents\\Symfony\\TP6\\l3-web-2022-23-TP5\\templates\\Sandbox\\Doctrine\\list.html.twig");
    }
}
