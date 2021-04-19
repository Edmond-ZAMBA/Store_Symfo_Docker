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

/* partials/title_section.html.twig */
class __TwigTemplate_f03d382a8ad1f4151fec048ede1d4346f0e109717dd5b49d0dc11f81467352b1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/title_section.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/title_section.html.twig"));

        // line 2
        echo "<div class=\"breadcrumb_section bg_gray page-title-mini\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"page-title\">
\t\t\t\t\t<h1>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<ol class=\"breadcrumb justify-content-md-end\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"#\">Pages</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/title_section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  50 => 7,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Insertion dymaique du titre d'une page, la variable titre est à définir dans chaque nouveau controller #}
<div class=\"breadcrumb_section bg_gray page-title-mini\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"page-title\">
\t\t\t\t\t<h1>{{titre}}</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<ol class=\"breadcrumb justify-content-md-end\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"#\">Pages</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\">{{titre}}</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "partials/title_section.html.twig", "/var/www/eShop/templates/partials/title_section.html.twig");
    }
}
