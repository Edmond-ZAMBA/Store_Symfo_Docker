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

/* reset_password/request.html.twig */
class __TwigTemplate_57a42f3050e7622e760f46fbc92c779d129f38a63872d539b39753c8ea18572f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/request.html.twig", 1);
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

        echo "Réinitialisation mot de passe
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t";
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["titre" => "Réinitialisation mot de passe"]);
        echo "

\t<!--  -->
\t<div class=\"login_register_wrap section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-xl-6 col-md-10\">
\t\t\t\t\t<div class=\"login_wrap\">
\t\t\t\t\t\t<div class=\"padding_eight_all bg-white\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"heading_s1\">";
        // line 18
        echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "reset_password_error"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 21
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t\t\t\t<h2>Mot de passe oublié</h2>

\t\t\t\t\t\t\t";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'row');
        echo "
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t<p>Entrez votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de passe</p>
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<button class=\"btn btn-fill-out btn-block\">Valider</button>

\t\t\t\t\t\t\t";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 35, $this->source); })()), 'form_end');
        echo "


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 35,  128 => 26,  124 => 25,  120 => 23,  111 => 21,  107 => 20,  103 => 18,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réinitialisation mot de passe
{% endblock %}

{% block body %}
\t{{ include(\"partials/title_section.html.twig\", {'titre':\"Réinitialisation mot de passe\"} ) }}

\t<!--  -->
\t<div class=\"login_register_wrap section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-xl-6 col-md-10\">
\t\t\t\t\t<div class=\"login_wrap\">
\t\t\t\t\t\t<div class=\"padding_eight_all bg-white\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"heading_s1\">{# <h3>Rejoindre eShop !</h3> #}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{% for flashError in app.flashes('reset_password_error') %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<h2>Mot de passe oublié</h2>

\t\t\t\t\t\t\t{{ form_start(requestForm) }}
\t\t\t\t\t\t\t{{ form_row(requestForm.email) }}
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t<p>Entrez votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de passe</p>
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<button class=\"btn btn-fill-out btn-block\">Valider</button>

\t\t\t\t\t\t\t{{ form_end(requestForm) }}


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "reset_password/request.html.twig", "/var/www/eShop/templates/reset_password/request.html.twig");
    }
}
