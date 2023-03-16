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

/* Produit/list.html.twig */
class __TwigTemplate_12d650854301271cce6166fca2a8cf0b extends Template
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
        return "Layouts/layout_vente.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Produit/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Produit/list.html.twig"));

        $this->parent = $this->loadTemplate("Layouts/layout_vente.html.twig", "Produit/list.html.twig", 1);
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
        echo " : produits";
        
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

        $this->displayParentBlock("titre_principal", $context, $blocks);
        echo " : liste des produits";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_add");
        echo "\">ajouter un produit</a></p>

    <p>
        ";
        // line 11
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 11, $this->source); })()) == 0)) {
            // line 12
            echo "            affichage de toutes les pages
        ";
        } else {
            // line 14
            echo "            affichage de la page ";
            echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "
        ";
        }
        // line 16
        echo "    </p>

    ";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 18, $this->source); })())) == 0)) {
            // line 19
            echo "        <p>Aucun produit dans la base de données</p>
    ";
        } else {
            // line 21
            echo "        <table>
            <tr><th>dénomination</th><th></th></tr>
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 24
                echo "                ";
                $context["urlView"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_view", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 24)]);
                // line 25
                echo "                ";
                $context["urlDelete"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 25)]);
                // line 26
                echo "                <tr>
                    <td><a href=\"";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["urlView"]) || array_key_exists("urlView", $context) ? $context["urlView"] : (function () { throw new RuntimeError('Variable "urlView" does not exist.', 27, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "denomination", [], "any", false, false, false, 27), "html", null, true);
                echo "</a></td>
                    <td><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["urlDelete"]) || array_key_exists("urlDelete", $context) ? $context["urlDelete"] : (function () { throw new RuntimeError('Variable "urlDelete" does not exist.', 28, $this->source); })()), "html", null, true);
                echo "\">delete</a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </table>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 34, $this->source); })()));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Produit/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 34,  175 => 33,  171 => 31,  162 => 28,  156 => 27,  153 => 26,  150 => 25,  147 => 24,  143 => 23,  139 => 21,  135 => 19,  133 => 18,  129 => 16,  123 => 14,  119 => 12,  117 => 11,  110 => 8,  100 => 7,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Layouts/layout_vente.html.twig' %}

{% block title %}{{ parent() }} : produits{% endblock %}

{% block titre_principal %}{{ parent() }} : liste des produits{% endblock %}

{% block vue %}
    <p><a href=\"{{ path('produit_add') }}\">ajouter un produit</a></p>

    <p>
        {% if page == 0 %}
            affichage de toutes les pages
        {% else %}
            affichage de la page {{ page }}
        {% endif %}
    </p>

    {% if produits|length == 0 %}
        <p>Aucun produit dans la base de données</p>
    {% else %}
        <table>
            <tr><th>dénomination</th><th></th></tr>
            {% for produit in produits %}
                {% set urlView = path('produit_view', {'id' : produit.id}) %}
                {% set urlDelete = path('produit_delete', {'id' : produit.id}) %}
                <tr>
                    <td><a href=\"{{ urlView }}\">{{ produit.denomination }}</a></td>
                    <td><a href=\"{{ urlDelete }}\">delete</a></td>
                </tr>
            {% endfor %}
        </table>
    {% endif %}

    {{ dump(produits) }}
{% endblock %}
", "Produit/list.html.twig", "C:\\Users\\lhervo01.SFASP2MI\\Documents\\Symfony\\TP6\\l3-web-2022-23-TP5\\templates\\Produit\\list.html.twig");
    }
}
