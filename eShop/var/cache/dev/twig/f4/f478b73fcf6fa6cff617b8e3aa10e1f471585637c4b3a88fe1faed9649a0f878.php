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

/* security/login.html.twig */
class __TwigTemplate_0de958300d9757686251a0d9de2b8ee8ba68c13c9794054618bd35c6a844cd29 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!
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
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["titre" => "Connexion eShop.com"]);
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
        // line 17
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"message-flash\">
\t\t\t\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 20
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<form method=\"post\">

\t\t\t\t\t\t\t\t";
        // line 27
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })()), "messageKey", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })()), "messageData", [], "any", false, false, false, 28), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 30
        echo "
\t\t\t\t\t\t\t\t";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            echo "\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\tBonjour
\t\t\t\t\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "prenom", [], "any", false, false, false, 34), "html", null, true);
            echo ", vous êtes déja connecté.
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t\t\t\t\t<div class=\"heading_s1\">
\t\t\t\t\t\t\t\t\t<h3 class=\"h3 mb-3\">Identifiez-vous !</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t\t\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">


\t\t\t\t\t\t\t\t";
        // line 52
        echo "
\t\t\t\t\t\t\t\t<div class=\"row mt-4 mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"checkbox col-md-6 \">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\">
\t\t\t\t\t\t\t\t\t\t\tSe souvenir de moi
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-right  \">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Mot de passe oublié !</a>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<button class=\"btn btn-fill-out btn-block\" type=\"submit\">Connexion</button>
\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t<div class=\"different_login\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\tou</span>
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

\t\t\t\t\t\t\t<div class=\"form-note text-center\">Pas encore de compte !
\t\t\t\t\t\t\t\t<a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Rejoignez-nous</a>
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 86,  184 => 61,  173 => 52,  167 => 47,  159 => 42,  153 => 38,  147 => 35,  143 => 34,  139 => 32,  137 => 31,  134 => 30,  128 => 28,  126 => 27,  119 => 22,  110 => 20,  106 => 19,  102 => 17,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!
{% endblock %}

{% block body %}
\t{{ include(\"partials/title_section.html.twig\", {'titre':\"Connexion eShop.com\"} ) }}
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
\t\t\t\t\t\t\t<div class=\"message-flash\">
\t\t\t\t\t\t\t\t{% for flashError in app.flashes('verify_email_error') %}
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<form method=\"post\">

\t\t\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\tBonjour
\t\t\t\t\t\t\t\t\t\t{{ app.user.prenom }}, vous êtes déja connecté.
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<div class=\"heading_s1\">
\t\t\t\t\t\t\t\t\t<h3 class=\"h3 mb-3\">Identifiez-vous !</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t\t\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">


\t\t\t\t\t\t\t\t{# Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    See https://symfony.com/doc/current/security/remember_me.html #}

\t\t\t\t\t\t\t\t<div class=\"row mt-4 mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"checkbox col-md-6 \">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\">
\t\t\t\t\t\t\t\t\t\t\tSe souvenir de moi
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-right  \">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_forgot_password_request')}}\">Mot de passe oublié !</a>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<button class=\"btn btn-fill-out btn-block\" type=\"submit\">Connexion</button>
\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t<div class=\"different_login\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\tou</span>
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

\t\t\t\t\t\t\t<div class=\"form-note text-center\">Pas encore de compte !
\t\t\t\t\t\t\t\t<a href=\"{{path('app_register')}}\">Rejoignez-nous</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "security/login.html.twig", "/var/www/eShop/templates/security/login.html.twig");
    }
}
