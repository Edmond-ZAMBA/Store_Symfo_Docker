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

/* base.html.twig */
class __TwigTemplate_61d2aac208ca8b4b978a87882347313500fe929228a3c8af81283450823331e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t";
        // line 5
        echo "\t\t";
        // line 6
        echo "\t\t";
        // line 7
        echo "\t\t";
        // line 8
        echo "
\t\t";
        // line 10
        echo "\t\t";
        // line 11
        echo "\t\t";
        // line 12
        echo "
\t\t<!-- Meta -->
\t\t<meta charset=\"utf-8\"> <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta content=\"Site ecommerce en symfony 5\" name=\"Edmond ZAMBA\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Exclusively for all! Take advantage of up to -50% on these offers during our smart days. Shop smart with discounts on electronics, phones and home goods. Up to -50% Buyer Protection. Free Shipping. Summer promo. Great Value. A multitude of sellers.\">
\t\t<meta name=\"keywords\" content=\"\">
\t\t<title>
\t\t\t";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        // line 22
        echo "\t\t</title>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap\" rel=\"stylesheet\">
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\">
\t</head>
\t<body>
\t\t";
        // line 28
        $this->loadTemplate("partials/header.html.twig", "base.html.twig", 28)->display($context);
        // line 29
        echo "
\t\t<div class=\"container\"> ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "\t\t\t</div>

\t\t\t";
        // line 33
        $this->loadTemplate("partials/footer.html.twig", "base.html.twig", 33)->display($context);
        // line 34
        echo "
\t\t\t";
        // line 35
        $this->displayBlock('javascript', $context, $blocks);
        // line 36
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/owlcarousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/parallax.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.dd.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slick.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.elevatezoom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
\t\t</body>
\t</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "eShop
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 35,  191 => 30,  171 => 20,  157 => 48,  153 => 47,  149 => 46,  145 => 45,  141 => 44,  137 => 43,  133 => 42,  129 => 41,  125 => 40,  121 => 39,  117 => 38,  113 => 37,  108 => 36,  106 => 35,  103 => 34,  101 => 33,  97 => 31,  95 => 30,  92 => 29,  90 => 28,  84 => 25,  80 => 24,  76 => 22,  74 => 20,  64 => 12,  62 => 11,  60 => 10,  57 => 8,  55 => 7,  53 => 6,  51 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t{# Run `composer require symfony/webpack-encore-bundle`\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t           and uncomment the following Encore helpers to start using Symfony UX #}
\t\t{# {% block stylesheets %}   #}
\t\t{#{{ encore_entry_link_tags('app') }}#}
\t\t{# {% endblock %} #}

\t\t{# {% block javascripts %} #}
\t\t{#{{ encore_entry_script_tags('app') }}#}
\t\t{# {% endblock %} #}

\t\t<!-- Meta -->
\t\t<meta charset=\"utf-8\"> <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta content=\"Site ecommerce en symfony 5\" name=\"Edmond ZAMBA\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Exclusively for all! Take advantage of up to -50% on these offers during our smart days. Shop smart with discounts on electronics, phones and home goods. Up to -50% Buyer Protection. Free Shipping. Summer promo. Great Value. A multitude of sellers.\">
\t\t<meta name=\"keywords\" content=\"\">
\t\t<title>
\t\t\t{% block title %}eShop
\t\t\t{% endblock %}
\t\t</title>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap\" rel=\"stylesheet\">
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{asset('assets/images/favicon.png')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('assets/style.css')}}\">
\t</head>
\t<body>
\t\t{% include \"partials/header.html.twig\" %}

\t\t<div class=\"container\"> {% block body %}{% endblock %}
\t\t\t</div>

\t\t\t{% include \"partials/footer.html.twig\" %}

\t\t\t{% block javascript %}{% endblock %}
\t\t\t<script src=\"{{asset('assets/js/jquery-1.12.4.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/bootstrap/js/bootstrap.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/owlcarousel/js/owl.carousel.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/js/magnific-popup.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/js/waypoints.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/js/parallax.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/js/jquery.countdown.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/js/imagesloaded.pkgd.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/js/isotope.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/js/jquery.dd.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/js/slick.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/js/jquery.elevatezoom.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/js/scripts.js')}}\"></script>
\t\t</body>
\t</html>
", "base.html.twig", "/var/www/eShop/templates/base.html.twig");
    }
}
