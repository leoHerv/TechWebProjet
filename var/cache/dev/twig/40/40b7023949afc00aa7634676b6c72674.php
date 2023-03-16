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

/* Produit/view.html.twig */
class __TwigTemplate_1182e34175c7ec61f38b4a722af4d8d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Produit/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Produit/view.html.twig"));

        $this->parent = $this->loadTemplate("Layouts/layout_vente.html.twig", "Produit/view.html.twig", 1);
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

    <p><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_list");
        echo "\">vers la liste des produits</a></p>

    <h2>Détail du produit</h2>
    ";
        // line 20
        echo "    <ul>
        <li>id : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "</li>
        <li>dénomination : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 22, $this->source); })()), "denomination", [], "any", false, false, false, 22), "html", null, true);
        echo "</li>
        <li>code barre : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 23, $this->source); })()), "code", [], "any", false, false, false, 23), "html", null, true);
        echo "</li>
        <li>date de création : ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 24, $this->source); })()), "dateCreation", [], "any", false, false, false, 24)), "html", null, true);
        echo "</li>
        <li>actif : ";
        // line 25
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 25, $this->source); })()), "actif", [], "any", false, false, false, 25)) ? ("oui") : ("non"));
        echo "</li>
        <li>descriptif : ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 26, $this->source); })()), "descriptif", [], "any", false, false, false, 26), "html", null, true);
        echo "</li>
    </ul>

    <h2>Manuel</h2>
    ";
        // line 30
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 30, $this->source); })()), "manuel", [], "any", false, false, false, 30))) {
            // line 31
            echo "        <p>aucun manuel.</p>
    ";
        } else {
            // line 33
            echo "        <ul>
            <li>web : <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 34, $this->source); })()), "manuel", [], "any", false, false, false, 34), "url", [], "any", false, false, false, 34), "html", null, true);
            echo "\">vers le site</a> </li>
            <li>sommaire : ";
            // line 35
            (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 35, $this->source); })()), "manuel", [], "any", false, false, false, 35), "sommaire", [], "any", false, false, false, 35))) ? (print ("pas de sommaire")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 35, $this->source); })()), "manuel", [], "any", false, false, false, 35), "sommaire", [], "any", false, false, false, 35), "html", null, true))));
            echo "</li>
        </ul>
    ";
        }
        // line 38
        echo "
    <h2>Images</h2>
    ";
        // line 40
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 40, $this->source); })()), "images", [], "any", false, false, false, 40)) == 0)) {
            // line 41
            echo "        <p>aucune image.</p>
    ";
        } else {
            // line 43
            echo "        <table>
            <tr><th>id</th><th>url</th><th>url_mini</th><th>alt</th></tr>
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 45, $this->source); })()), "images", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 46
                echo "                <tr>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                    <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 48), "html", null, true);
                echo " : <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 48), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "alt", [], "any", false, false, false, 48), "html", null, true);
                echo "\" /></td>
                    ";
                // line 49
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["image"], "urlMini", [], "any", false, false, false, 49))) {
                    // line 50
                    echo "                        <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "urlMini", [], "any", false, false, false, 50), "html", null, true);
                    echo " : <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "urlMini", [], "any", false, false, false, 50), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "alt", [], "any", false, false, false, 50), "html", null, true);
                    echo "\" /></td>
                    ";
                } else {
                    // line 52
                    echo "                        <td>pas de miniature</td>
                    ";
                }
                // line 54
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "alt", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        </table>
    ";
        }
        // line 59
        echo "
    <h2>Pays</h2>
    ";
        // line 61
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 61, $this->source); })()), "payss", [], "any", false, false, false, 61)) == 0)) {
            // line 62
            echo "        <p>aucun pays.</p>
    ";
        } else {
            // line 64
            echo "        <table>
            <tr><th>id</th><th>nom</th><th>code</th></tr>
            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 66, $this->source); })()), "payss", [], "any", false, false, false, 66));
            foreach ($context['_seq'] as $context["_key"] => $context["pays"]) {
                // line 67
                echo "                <tr>
                    <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pays"], "id", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                    <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pays"], "nom", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                    <td>";
                // line 70
                (((null === twig_get_attribute($this->env, $this->source, $context["pays"], "code", [], "any", false, false, false, 70))) ? (print ("pas de code")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pays"], "code", [], "any", false, false, false, 70), "html", null, true))));
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pays'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "        </table>
    ";
        }
        // line 75
        echo "
    <h2>Magasins</h2>
    ";
        // line 77
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 77, $this->source); })()), "produitMagasins", [], "any", false, false, false, 77)) == 0)) {
            // line 78
            echo "        <p>aucun magasin.</p>
    ";
        } else {
            // line 80
            echo "        <table>
            <tr><th>id</th><th>nom</th><th>quantité</th><th>prix unitaire</th></tr>
            ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 82, $this->source); })()), "produitMagasins", [], "any", false, false, false, 82));
            foreach ($context['_seq'] as $context["_key"] => $context["produitMagasin"]) {
                // line 83
                echo "                <tr>
                    <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produitMagasin"], "magasin", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
                echo "</td>         ";
                // line 85
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produitMagasin"], "magasin", [], "any", false, false, false, 85), "nom", [], "any", false, false, false, 85), "html", null, true);
                echo "</td>        ";
                // line 86
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produitMagasin"], "quantite", [], "any", false, false, false, 86), "html", null, true);
                echo "</td>           ";
                // line 87
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produitMagasin"], "prixUnitaire", [], "any", false, false, false, 87), "html", null, true);
                echo "</td>       ";
                // line 88
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produitMagasin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "        </table>
    ";
        }
        // line 92
        echo "
    <h2>dump de vérification</h2>
    ";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 94, $this->source); })()));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Produit/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 94,  329 => 92,  325 => 90,  318 => 88,  314 => 87,  310 => 86,  306 => 85,  303 => 84,  300 => 83,  296 => 82,  292 => 80,  288 => 78,  286 => 77,  282 => 75,  278 => 73,  269 => 70,  265 => 69,  261 => 68,  258 => 67,  254 => 66,  250 => 64,  246 => 62,  244 => 61,  240 => 59,  236 => 57,  226 => 54,  222 => 52,  212 => 50,  210 => 49,  202 => 48,  198 => 47,  195 => 46,  191 => 45,  187 => 43,  183 => 41,  181 => 40,  177 => 38,  171 => 35,  167 => 34,  164 => 33,  160 => 31,  158 => 30,  151 => 26,  147 => 25,  143 => 24,  139 => 23,  135 => 22,  131 => 21,  128 => 20,  122 => 16,  113 => 9,  111 => 8,  101 => 7,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Layouts/layout_vente.html.twig' %}

{% block title %}{{ parent() }} : produits{% endblock %}

{% block titre_principal %}{{ parent() }} : détail du produit {{ produit.id }}{% endblock %}

{% block vue %}
    {# normalement devrait être dans un fichier css #}
    <style>
        caption { border: red solid 1px; }
        table { border: black solid 1px; }
        th, td { border: black solid 1px; padding: 2px 10px 2px 10px;}
        th { text-align: left; }
    </style>

    <p><a href=\"{{ path('produit_list') }}\">vers la liste des produits</a></p>

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

    <h2>Manuel</h2>
    {% if produit.manuel is null %}
        <p>aucun manuel.</p>
    {% else %}
        <ul>
            <li>web : <a href=\"{{ produit.manuel.url }}\">vers le site</a> </li>
            <li>sommaire : {{ produit.manuel.sommaire is null ? 'pas de sommaire' : produit.manuel.sommaire }}</li>
        </ul>
    {% endif %}

    <h2>Images</h2>
    {% if produit.images|length == 0 %}
        <p>aucune image.</p>
    {% else %}
        <table>
            <tr><th>id</th><th>url</th><th>url_mini</th><th>alt</th></tr>
            {% for image in produit.images %}
                <tr>
                    <td>{{ image.id }}</td>
                    <td>{{ image.url }} : <img src=\"{{ image.url }}\" alt=\"{{ image.alt }}\" /></td>
                    {% if image.urlMini is not null %}
                        <td>{{ image.urlMini }} : <img src=\"{{ image.urlMini }}\" alt=\"{{ image.alt }}\" /></td>
                    {% else %}
                        <td>pas de miniature</td>
                    {% endif %}
                    <td>{{ image.alt }}</td>
                </tr>
            {% endfor %}
        </table>
    {% endif %}

    <h2>Pays</h2>
    {% if produit.payss|length == 0 %}
        <p>aucun pays.</p>
    {% else %}
        <table>
            <tr><th>id</th><th>nom</th><th>code</th></tr>
            {% for pays in produit.payss %}
                <tr>
                    <td>{{ pays.id }}</td>
                    <td>{{ pays.nom }}</td>
                    <td>{{ pays.code is null ? 'pas de code' : pays.code }}</td>
                </tr>
            {% endfor %}
        </table>
    {% endif %}

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
", "Produit/view.html.twig", "C:\\Users\\lhervo01.SFASP2MI\\Documents\\Symfony\\TP6\\l3-web-2022-23-TP5\\templates\\Produit\\view.html.twig");
    }
}
