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

/* compte/compte.html.twig */
class __TwigTemplate_a58baa5dbc1ddfebc35a8264c08387fac2b12786ff76c0eb2b01db04b57a8baa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compte/compte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compte/compte.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "compte/compte.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tMon compte eShop.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t";
        // line 9
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["prenom" => (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 9, $this->source); })())], ["titre" => (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 9, $this->source); })())], ["information" => (isset($context["information"]) || array_key_exists("information", $context) ? $context["information"] : (function () { throw new RuntimeError('Variable "information" does not exist.', 9, $this->source); })())]);
        echo "

\t<div class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-4\">
\t\t\t\t\t<div class=\"dashboard_menu\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs flex-column\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"dashboard-tab\" data-toggle=\"tab\" href=\"#dashboard\" role=\"tab\" aria-controls=\"dashboard\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-layout-grid2\"></i>Mon tableau de bord</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"orders-tab\" data-toggle=\"tab\" href=\"#orders\" role=\"tab\" aria-controls=\"orders\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-shopping-cart-full\"></i>Mes commandes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"address-tab\" data-toggle=\"tab\" href=\"#address\" role=\"tab\" aria-controls=\"address\" aria-selected=\"true\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-location-pin\"></i>Mes addresses</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"account-detail-tab\" data-toggle=\"tab\" href=\"#account-detail\" role=\"tab\" aria-controls=\"account-detail\" aria-selected=\"true\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-id-badge\"></i>Mon profil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-lock\"></i>
\t\t\t\t\t\t\t\t\tDéconnexion</li>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-9 col-md-8\">

\t\t\t";
        // line 46
        echo "\t\t\t";
        // line 52
        echo "

\t\t\t\t<div class=\"tab-content dashboard_content\"> <div class=\"tab-pane fade active show\" id=\"dashboard\" role=\"tabpanel\" aria-labelledby=\"dashboard-tab\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h3>HELLO</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card-body\">

\t\t\t\t\t\t\t";
        // line 68
        echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCette page vous est entièrement réservée. Effectuez le suivi des dernières commandes, 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                passez en revue votre liste de favoris, 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                mettez à jour les détails de votre compte, découvrez 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                les produits recommandés et bien plus encore.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h3>Commandes</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Commande</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>#1234</td>
\t\t\t\t\t\t\t\t\t\t\t<td>March 15, 2020</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Processing</td>
\t\t\t\t\t\t\t\t\t\t\t<td>\$78.00 for 1 item</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-fill-out btn-sm\">Voir</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>#2366</td>
\t\t\t\t\t\t\t\t\t\t\t<td>June 20, 2020</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Completed</td>
\t\t\t\t\t\t\t\t\t\t\t<td>\$81.00 for 1 item</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-fill-out btn-sm\">Voir</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"address\" role=\"tabpanel\" aria-labelledby=\"address-tab\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-fill-out mb-3\">Ajoutez une nouvelle adresse</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t";
        // line 129
        echo "
\t\t\t\t\t\t";
        // line 130
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "adresses", [], "any", false, false, false, 130)) {
            // line 131
            echo "

\t\t\t\t\t\t\t";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "adresses", [], "any", false, false, false, 133));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 134
                echo "

\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"card mb-3 mb-lg-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\tAdresse 1
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "fullName", [], "any", false, false, false, 145), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "numeroDeRue", [], "any", false, false, false, 146), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "nomDeRue", [], "any", false, false, false, 146), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "complement", [], "any", false, false, false, 148), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 150), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "postal", [], "any", false, false, false, 152), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 153), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">Editer</a>


\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">suprimer</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "
\t\t\t\t\t\t";
        } else {
            // line 168
            echo "\t\t\t\t\t\t\t<p>You don't have an address yet</p>

\t\t\t\t\t\t";
        }
        // line 171
        echo "
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card mb-3 mb-lg-0\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\tAdresse # 1
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t\tNom Prénom<br>
\t\t\t\t\t\t\t\t\t\t25 Rue symfony
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\tApp n°10
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\tParis
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t75000<br>
\t\t\t\t\t\t\t\t\t\tFrance

\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">Editer</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">suprimer</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"account-detail\" role=\"tabpanel\" aria-labelledby=\"account-detail-tab\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h3>Account Details</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<p>Already have an account?
\t\t\t\t\t\t\t\t<a href=\"#\">Log in instead!</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<form method=\"post\" name=\"enq\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>First Name
\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input required=\"\" class=\"form-control\" name=\"name\" type=\"text\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>Last Name
\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input required=\"\" class=\"form-control\" name=\"phone\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label>Display Name
\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input required=\"\" class=\"form-control\" name=\"dname\" type=\"text\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label>Email Address
\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input required=\"\" class=\"form-control\" name=\"email\" type=\"email\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label>Current Password
\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input required=\"\" class=\"form-control\" name=\"password\" type=\"password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label>New Password
\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input required=\"\" class=\"form-control\" name=\"npassword\" type=\"password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label>Confirm Password
\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input required=\"\" class=\"form-control\" name=\"cpassword\" type=\"password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-fill-out\" name=\"submit\" value=\"Submit\">Save</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "compte/compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 171,  285 => 168,  281 => 166,  262 => 153,  258 => 152,  253 => 150,  248 => 148,  241 => 146,  237 => 145,  224 => 134,  220 => 133,  216 => 131,  214 => 130,  211 => 129,  149 => 68,  137 => 52,  135 => 46,  121 => 34,  93 => 9,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tMon compte eShop.
{% endblock %}

{% block body %}

\t{{ include (\"partials/title_section.html.twig\", {prenom},{titre}, {information}) }}

\t<div class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-4\">
\t\t\t\t\t<div class=\"dashboard_menu\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs flex-column\" role=\"tablist\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"dashboard-tab\" data-toggle=\"tab\" href=\"#dashboard\" role=\"tab\" aria-controls=\"dashboard\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-layout-grid2\"></i>Mon tableau de bord</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"orders-tab\" data-toggle=\"tab\" href=\"#orders\" role=\"tab\" aria-controls=\"orders\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-shopping-cart-full\"></i>Mes commandes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"address-tab\" data-toggle=\"tab\" href=\"#address\" role=\"tab\" aria-controls=\"address\" aria-selected=\"true\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-location-pin\"></i>Mes addresses</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"account-detail-tab\" data-toggle=\"tab\" href=\"#account-detail\" role=\"tab\" aria-controls=\"account-detail\" aria-selected=\"true\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-id-badge\"></i>Mon profil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_logout')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-lock\"></i>
\t\t\t\t\t\t\t\t\tDéconnexion</li>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-9 col-md-8\">

\t\t\t{# Flash message #}
\t\t\t{# <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmessage flash
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> #}


\t\t\t\t<div class=\"tab-content dashboard_content\"> <div class=\"tab-pane fade active show\" id=\"dashboard\" role=\"tabpanel\" aria-labelledby=\"dashboard-tab\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h3>HELLO</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card-body\">

\t\t\t\t\t\t\t{# <p>From your account dashboard. you can easily check &amp; view your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"\$('#orders-tab').trigger('click')\">recent orders</a>, manage your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"\$('#address-tab').trigger('click')\">shipping and billing addresses</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tand
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"\$('#account-detail-tab').trigger('click')\">edit your password and account details.</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p> #}
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCette page vous est entièrement réservée. Effectuez le suivi des dernières commandes, 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                passez en revue votre liste de favoris, 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                mettez à jour les détails de votre compte, découvrez 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                les produits recommandés et bien plus encore.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h3>Commandes</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Commande</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>#1234</td>
\t\t\t\t\t\t\t\t\t\t\t<td>March 15, 2020</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Processing</td>
\t\t\t\t\t\t\t\t\t\t\t<td>\$78.00 for 1 item</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-fill-out btn-sm\">Voir</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>#2366</td>
\t\t\t\t\t\t\t\t\t\t\t<td>June 20, 2020</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Completed</td>
\t\t\t\t\t\t\t\t\t\t\t<td>\$81.00 for 1 item</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-fill-out btn-sm\">Voir</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"address\" role=\"tabpanel\" aria-labelledby=\"address-tab\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-fill-out mb-3\">Ajoutez une nouvelle adresse</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t{# parcourir l'array adress et afficher toutes les adresses #}

\t\t\t\t\t\t{% if app.user.adresses %}


\t\t\t\t\t\t\t{% for address in app.user.adresses %}


\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"card mb-3 mb-lg-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\tAdresse 1
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t\t\t\t{{address.fullName}}<br>
\t\t\t\t\t\t\t\t\t\t\t\t{{address.numeroDeRue}},{{address.nomDeRue}}
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t{{address.complement}}
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t{{address.city}}
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t{{address.postal}}<br>
\t\t\t\t\t\t\t\t\t\t\t\t{{address.country}}
\t\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">Editer</a>


\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">suprimer</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>You don't have an address yet</p>

\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card mb-3 mb-lg-0\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\tAdresse # 1
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t\tNom Prénom<br>
\t\t\t\t\t\t\t\t\t\t25 Rue symfony
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\tApp n°10
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\tParis
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t75000<br>
\t\t\t\t\t\t\t\t\t\tFrance

\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">Editer</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">suprimer</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade\" id=\"account-detail\" role=\"tabpanel\" aria-labelledby=\"account-detail-tab\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h3>Account Details</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<p>Already have an account?
\t\t\t\t\t\t\t\t<a href=\"#\">Log in instead!</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<form method=\"post\" name=\"enq\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>First Name
\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input required=\"\" class=\"form-control\" name=\"name\" type=\"text\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>Last Name
\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input required=\"\" class=\"form-control\" name=\"phone\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label>Display Name
\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input required=\"\" class=\"form-control\" name=\"dname\" type=\"text\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label>Email Address
\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input required=\"\" class=\"form-control\" name=\"email\" type=\"email\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label>Current Password
\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input required=\"\" class=\"form-control\" name=\"password\" type=\"password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label>New Password
\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input required=\"\" class=\"form-control\" name=\"npassword\" type=\"password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t<label>Confirm Password
\t\t\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input required=\"\" class=\"form-control\" name=\"cpassword\" type=\"password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-fill-out\" name=\"submit\" value=\"Submit\">Save</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div></div>{% endblock %}
", "compte/compte.html.twig", "/var/www/eShop/templates/compte/compte.html.twig");
    }
}
