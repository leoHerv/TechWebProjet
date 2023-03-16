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

/* Magasin/stock.html.twig */
class __TwigTemplate_d723ed8437a608498a7c386554100c5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Magasin/stock.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Magasin/stock.html.twig"));

        $this->parent = $this->loadTemplate("Layouts/layout_vente.html.twig", "Magasin/stock.html.twig", 1);
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
        echo " : magasins";
        
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
        echo " : produits dans une fourchette de prix";
        
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
        echo "    ";
        // line 9
        echo "    <style>
        caption { border: red solid 1px; }
        table { border: black solid 1px; }
        th, td { border: black solid 1px; padding: 2px 10px 2px 10px;}
        th { text-align: right; }
    </style>

    <p>
        Nous sommes dans le magasin numéro&nbsp;";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 17, $this->source); })()), "html", null, true);
        echo ".<br />
        Voici la liste des produits dont les prix sont compris entre ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["valinf"]) || array_key_exists("valinf", $context) ? $context["valinf"] : (function () { throw new RuntimeError('Variable "valinf" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "&nbsp;euro";
        echo ((((isset($context["valinf"]) || array_key_exists("valinf", $context) ? $context["valinf"] : (function () { throw new RuntimeError('Variable "valinf" does not exist.', 18, $this->source); })()) <= 1)) ? ("") : ("s"));
        echo "
        et
        ";
        // line 20
        if (((isset($context["valsup"]) || array_key_exists("valsup", $context) ? $context["valsup"] : (function () { throw new RuntimeError('Variable "valsup" does not exist.', 20, $this->source); })()) ==  -1)) {
            // line 21
            echo "            pas de limite.
        ";
        } else {
            // line 23
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["valsup"]) || array_key_exists("valsup", $context) ? $context["valsup"] : (function () { throw new RuntimeError('Variable "valsup" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "&nbsp;euro";
            echo ((((isset($context["valsup"]) || array_key_exists("valsup", $context) ? $context["valsup"] : (function () { throw new RuntimeError('Variable "valsup" does not exist.', 23, $this->source); })()) <= 1)) ? ("") : ("s"));
            echo ".
        ";
        }
        // line 25
        echo "    </p>

    ";
        // line 27
        $context["quantite"] = 0;
        // line 28
        echo "    ";
        $context["total"] = 0;
        // line 29
        echo "    <table>
        <caption>Produit(s) correspondant à vos critères</caption>
        <tr>
            <th>dénomination</th>
            <th>PU</th>
            <th>qté</th>
            <th>total</th>
        </tr>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 38
            echo "            ";
            // line 42
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, $context["produit"], "prixUnitaire", [], "any", false, false, false, 42) >= (isset($context["valinf"]) || array_key_exists("valinf", $context) ? $context["valinf"] : (function () { throw new RuntimeError('Variable "valinf" does not exist.', 42, $this->source); })())) && (((isset($context["valsup"]) || array_key_exists("valsup", $context) ? $context["valsup"] : (function () { throw new RuntimeError('Variable "valsup" does not exist.', 42, $this->source); })()) ==  -1) || (twig_get_attribute($this->env, $this->source, $context["produit"], "prixUnitaire", [], "any", false, false, false, 42) <= (isset($context["valsup"]) || array_key_exists("valsup", $context) ? $context["valsup"] : (function () { throw new RuntimeError('Variable "valsup" does not exist.', 42, $this->source); })()))))) {
                // line 43
                echo "                ";
                $context["totalProduit"] = (twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 43) * twig_get_attribute($this->env, $this->source, $context["produit"], "prixUnitaire", [], "any", false, false, false, 43));
                // line 44
                echo "                ";
                $context["quantite"] = ((isset($context["quantite"]) || array_key_exists("quantite", $context) ? $context["quantite"] : (function () { throw new RuntimeError('Variable "quantite" does not exist.', 44, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 44));
                // line 45
                echo "                ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 45, $this->source); })()) + (isset($context["totalProduit"]) || array_key_exists("totalProduit", $context) ? $context["totalProduit"] : (function () { throw new RuntimeError('Variable "totalProduit" does not exist.', 45, $this->source); })()));
                // line 46
                echo "                <tr>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "denomination", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                    <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixUnitaire", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                    <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                    <td>";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["totalProduit"]) || array_key_exists("totalProduit", $context) ? $context["totalProduit"] : (function () { throw new RuntimeError('Variable "totalProduit" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            // line 53
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        <tr>
            <th colspan=\"2\">totaux</th>
            <td>";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["quantite"]) || array_key_exists("quantite", $context) ? $context["quantite"] : (function () { throw new RuntimeError('Variable "quantite" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "</td>
            <td>";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Magasin/stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 57,  215 => 56,  211 => 54,  205 => 53,  199 => 50,  195 => 49,  191 => 48,  187 => 47,  184 => 46,  181 => 45,  178 => 44,  175 => 43,  172 => 42,  170 => 38,  166 => 37,  156 => 29,  153 => 28,  151 => 27,  147 => 25,  139 => 23,  135 => 21,  133 => 20,  126 => 18,  122 => 17,  112 => 9,  110 => 8,  100 => 7,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Layouts/layout_vente.html.twig' %}

{% block title %}{{ parent() }} : magasins{% endblock %}

{% block titre_principal %}{{ parent() }} : produits dans une fourchette de prix{% endblock %}

{% block vue %}
    {# normalement devrait être dans un fichier css #}
    <style>
        caption { border: red solid 1px; }
        table { border: black solid 1px; }
        th, td { border: black solid 1px; padding: 2px 10px 2px 10px;}
        th { text-align: right; }
    </style>

    <p>
        Nous sommes dans le magasin numéro&nbsp;{{ id }}.<br />
        Voici la liste des produits dont les prix sont compris entre {{ valinf }}&nbsp;euro{{ valinf <=1 ? '' : 's' }}
        et
        {% if valsup == -1 %}
            pas de limite.
        {% else %}
            {{ valsup }}&nbsp;euro{{ valsup <=1 ? '' : 's' }}.
        {% endif %}
    </p>

    {% set quantite = 0 %}
    {% set total = 0 %}
    <table>
        <caption>Produit(s) correspondant à vos critères</caption>
        <tr>
            <th>dénomination</th>
            <th>PU</th>
            <th>qté</th>
            <th>total</th>
        </tr>
        {% for produit in produits %}
            {# Notez au passage les deux manières d'accéder à une case du tableau produit :
                produit['denomination']      la plus logique car produit est un tableau
                produit.denomination         la plus lisible (et que nous utiliserons)
            #}
            {% if (produit.prixUnitaire >= valinf) and ((valsup == -1) or (produit.prixUnitaire <= valsup)) %}
                {% set totalProduit = produit.quantite * produit.prixUnitaire %}
                {% set quantite = quantite + produit.quantite %}
                {% set total = total + totalProduit %}
                <tr>
                    <td>{{ produit.denomination }}</td>
                    <td>{{ produit.prixUnitaire }}</td>
                    <td>{{ produit.quantite }}</td>
                    <td>{{ totalProduit }}</td>
                </tr>
            {% endif %}
        {% endfor %}
        <tr>
            <th colspan=\"2\">totaux</th>
            <td>{{ quantite }}</td>
            <td>{{ total }}</td>
        </tr>
    </table>
{% endblock %}
", "Magasin/stock.html.twig", "C:\\Users\\lhervo01.SFASP2MI\\Documents\\Symfony\\TP6\\l3-web-2022-23-TP5\\templates\\Magasin\\stock.html.twig");
    }
}
