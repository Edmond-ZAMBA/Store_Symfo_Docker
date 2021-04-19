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

/* registration/register.html.twig */
class __TwigTemplate_8bfc21328f5c059c792b39d7b32b0976681a8c0f3d174dea7d1791236748b2ce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Inscription eShop
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
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["titre" => (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 7, $this->source); })())]);
        echo "

\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 10
            echo "\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
\t<div class=\"login_register_wrap section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-xl-6 col-md-10\">
\t\t\t\t\t<div class=\"login_wrap\">
\t\t\t\t\t\t<div class=\"padding_eight_all bg-white\">
\t\t\t\t\t\t\t<div class=\"heading_s1\">
\t\t\t\t\t\t\t\t<h2 style=\"text-transform:none;font-weight:light;font-size:1.5rem;\">Je créer mon compte</h2>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), 'form_start');
        echo "

\t\t\t\t\t\t\t<div class=\"form-group\"></div>

\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "pseudo", [], "any", false, false, false, 28), 'row');
        echo "</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'row');
        echo "</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "prenom", [], "any", false, false, false, 40), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<div class=\"col-md\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "telephone", [], "any", false, false, false, 45), 'row');
        echo "</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "plainPassword", [], "any", false, false, false, 50), 'row', ["label" => "Password"]);
        // line 52
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"login_footer form-group\">
\t\t\t\t\t\t\t\t<div class=\"chek-form\">
\t\t\t\t\t\t\t\t\t<div class=\"custome-checkbox\">
\t\t\t\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "agreeTerms", [], "any", false, false, false, 58), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-fill-out btn-block\" name=\"register\">Je valide mon compte
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), 'form_end');
        echo "


\t\t\t\t\t\t\t<div class=\"different_login\">
\t\t\t\t\t\t\t\t<span>ou</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"btn-login list_none text-center\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-facebook\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion-social-facebook\"></i>Facebook</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-google\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion-social-googleplus\"></i>Google</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"form-note text-center\">Vous possédez un compte ?
\t\t\t\t\t\t\t\t<a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion</a>
\t\t\t\t\t\t\t</div>
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
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 84,  188 => 67,  176 => 58,  168 => 52,  166 => 50,  158 => 45,  150 => 40,  144 => 37,  135 => 31,  129 => 28,  121 => 23,  108 => 12,  99 => 10,  95 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription eShop
{% endblock %}

{% block body %}
\t{{ include('partials/title_section.html.twig', {titre})}}

\t{% for flashError in app.flashes('verify_email_error') %}
\t\t<div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
\t{% endfor %}

\t<div class=\"login_register_wrap section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-xl-6 col-md-10\">
\t\t\t\t\t<div class=\"login_wrap\">
\t\t\t\t\t\t<div class=\"padding_eight_all bg-white\">
\t\t\t\t\t\t\t<div class=\"heading_s1\">
\t\t\t\t\t\t\t\t<h2 style=\"text-transform:none;font-weight:light;font-size:1.5rem;\">Je créer mon compte</h2>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{{ form_start(registrationForm) }}

\t\t\t\t\t\t\t<div class=\"form-group\"></div>

\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">{{ form_row(registrationForm.pseudo) }}</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.email) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">{{ form_row(registrationForm.nom) }}</div>

\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.prenom) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<div class=\"col-md\">{{ form_row(registrationForm.telephone) }}</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t{{ form_row(registrationForm.plainPassword, {
\t\t\t\t\t\t\t            label: 'Password'
\t\t\t\t\t\t\t        }) }}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"login_footer form-group\">
\t\t\t\t\t\t\t\t<div class=\"chek-form\">
\t\t\t\t\t\t\t\t\t<div class=\"custome-checkbox\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.agreeTerms) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-fill-out btn-block\" name=\"register\">Je valide mon compte
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ form_end(registrationForm) }}


\t\t\t\t\t\t\t<div class=\"different_login\">
\t\t\t\t\t\t\t\t<span>ou</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"btn-login list_none text-center\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-facebook\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion-social-facebook\"></i>Facebook</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-google\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ion-social-googleplus\"></i>Google</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"form-note text-center\">Vous possédez un compte ?
\t\t\t\t\t\t\t\t<a href=\"{{path('app_login')}}\">Connexion</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "registration/register.html.twig", "/var/www/eShop/templates/registration/register.html.twig");
    }
}
