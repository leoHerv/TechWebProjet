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

/* Produit/viewQB.html.twig */
class __TwigTemplate_4517c942c377c7d6f010608a74ff2ef5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Produit/viewQB.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Produit/viewQB.html.twig"));

        $this->parent = $this->loadTemplate("Layouts/layout_vente.html.twig", "Produit/viewQB.html.twig", 1);
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
        echo " : détail du produit ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " QueryBuilder";
        
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
        th { text-align: left; }
    </style>

    <h2>Détail du produit</h2>
    ";
        // line 18
        echo "    <ul>
        <li>id : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "</li>
        <li>dénomination : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 20, $this->source); })()), "denomination", [], "any", false, false, false, 20), "html", null, true);
        echo "</li>
        <li>code barre : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 21, $this->source); })()), "code", [], "any", false, false, false, 21), "html", null, true);
        echo "</li>
        <li>date de création : ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 22, $this->source); })()), "dateCreation", [], "any", false, false, false, 22)), "html", null, true);
        echo "</li>
        <li>actif : ";
        // line 23
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 23, $this->source); })()), "actif", [], "any", false, false, false, 23)) ? ("oui") : ("non"));
        echo "</li>
        <li>descriptif : ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 24, $this->source); })()), "descriptif", [], "any", false, false, false, 24), "html", null, true);
        echo "</li>
    </ul>

    <h2>Magasins</h2>
    ";
        // line 28
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 28, $this->source); })()), "produitMagasins", [], "any", false, false, false, 28)) == 0)) {
            // line 29
            echo "        <p>aucun magasin.</p>
    ";
        } else {
            // line 31
            echo "        <table>
            <tr><th>id</th><th>nom</th><th>quantité</th><th>prix unitaire</th></tr>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 33, $this->source); })()), "produitMagasins", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["produitMagasin"]) {
                // line 34
                echo "                <tr>
                    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produitMagasin"], "magasin", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>         ";
                // line 36
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produitMagasin"], "magasin", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>        ";
                // line 37
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produitMagasin"], "quantite", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>           ";
                // line 38
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produitMagasin"], "prixUnitaire", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>       ";
                // line 39
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produitMagasin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </table>
    ";
        }
        // line 43
        echo "
    <h2>dump de vérification</h2>
    ";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 45, $this->source); })()));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Produit/viewQB.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 45,  199 => 43,  195 => 41,  188 => 39,  184 => 38,  180 => 37,  176 => 36,  173 => 35,  170 => 34,  166 => 33,  162 => 31,  158 => 29,  156 => 28,  149 => 24,  145 => 23,  141 => 22,  137 => 21,  133 => 20,  129 => 19,  126 => 18,  116 => 9,  114 => 8,  104 => 7,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Layouts/layout_vente.html.twig' %}

{% block title %}{{ parent() }} : produits{% endblock %}

{% block titre_principal %}{{ parent() }} : détail du produit {{ produit.id }} {{ method }} QueryBuilder{% endblock %}

{% block vue %}
    {# normalement devrait être dans un fichier css #}
    <style>
        caption { border: red solid 1px; }
        table { border: black solid 1px; }
        th, td { border: black solid 1px; padding: 2px 10px 2px 10px;}
        th { text-align: left; }
    </style>

    <h2>Détail du produit</h2>
    {# le produit existe : le cas d'erreur a été traité dans le contrôleur #}
    <ul>
        <li>id : {{ produit.id }}</li>
        <li>dénomination : {{ produit.denomination }}</li>
        <li>code barre : {{ produit.code }}</li>
        <li>date de création : {{ produit.dateCreation|date }}</li>
        <li>actif : {{ produit.actif ? 'oui' : 'non' }}</li>
        <li>descriptif : {{ produit.descriptif }}</li>
    </ul>

    <h2>Magasins</h2>
    {% if produit.produitMagasins|length == 0 %}
        <p>aucun magasin.</p>
    {% else %}
        <table>
            <tr><th>id</th><th>nom</th><th>quantité</th><th>prix unitaire</th></tr>
            {% for produitMagasin in produit.produitMagasins %}
                <tr>
                    <td>{{ produitMagasin.magasin.id }}</td>         {# table magasins #}
                    <td>{{ produitMagasin.magasin.nom }}</td>        {# table magasins #}
                    <td>{{ produitMagasin.quantite }}</td>           {# table produits_magasins #}
                    <td>{{ produitMagasin.prixUnitaire }}</td>       {# table produits_magasins #}
                </tr>
            {% endfor %}
        </table>
    {% endif %}

    <h2>dump de vérification</h2>
    {{ dump(produit) }}
{% endblock %}
", "Produit/viewQB.html.twig", "C:\\Users\\lhervo01.SFASP2MI\\Documents\\Symfony\\TP6\\l3-web-2022-23-TP5\\templates\\Produit\\viewQB.html.twig");
    }
}
