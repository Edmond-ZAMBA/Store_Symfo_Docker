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

/* partials/header.html.twig */
class __TwigTemplate_1b702e456d0bc93fd9d0f4e3bc539b9693c0f33b56580484d42eb3967468cf6a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 8
        echo "<div class=\"\">
\t<div class=\"\">
\t\t<span></span>
\t\t<span></span>
\t\t<span></span>
\t</div>
</div>
<header class=\"header_wrap fixed-top header_with_topbar\">
\t<div class=\"top-header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
\t\t\t\t\t\t<div class=\"lng_dropdown mr-2\">
\t\t\t\t\t\t\t<select name=\"countries\" class=\"custome_select\">
\t\t\t\t\t\t\t\t<option value='en' data-image=\"assets/images/eng.png\" data-title=\"English\">English</option>
\t\t\t\t\t\t\t\t<option value='fn' data-image=\"assets/images/fn.png\" data-title=\"France\">France</option>
\t\t\t\t\t\t\t\t<option value='us' data-image=\"assets/images/us.png\" data-title=\"United States\">United States</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t<select name=\"countries\" class=\"custome_select\">
\t\t\t\t\t\t\t\t<option value='USD' data-title=\"USD\">USD</option>
\t\t\t\t\t\t\t\t<option value='EUR' data-title=\"EUR\">EUR</option>
\t\t\t\t\t\t\t\t<option value='GBR' data-title=\"GBR\">GBR</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"contact_detail text-center text-lg-left\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"ti-mobile\"></i>
\t\t\t\t\t\t\t\t<span>000-000-000</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"text-center text-md-right\">
\t\t\t\t\t\t<ul class=\"header_list\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-control-shuffle\"></i>
\t\t\t\t\t\t\t\t\t<span>Compare</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-heart\"></i>
\t\t\t\t\t\t\t\t\t<span>Wishlist</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t";
        // line 60
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60)) {
            // line 61
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\t<span>Bonjour
\t\t\t\t\t\t\t\t\t\t";
            // line 64
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "prenom", [], "any", false, false, false, 64)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-home\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Mon compte</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t";
        } else {
            // line 76
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\t\t<span>S'identifier |</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t<span>Rejoignez-nous</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 93
        echo "
\t\t</ul>
\t</div>
</div></div></div></div><div class=\"bottom_header dark_skin main_menu_uppercase\"><div class=\"container\"><nav class=\"navbar navbar-expand-lg\">
<a class=\"navbar-brand\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t";
        // line 99
        echo "\t";
        // line 100
        echo "\t\t<span class=\"text-bold \"> eShop</span>
</a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-expanded=\"false\">
\t<span class=\"ion-android-menu\"></span>
</button>
<div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\">
\t<ul class=\"navbar-nav\">
\t\t<li class=\"dropdown\">
\t\t\t<a class=\"nav-link\" href=\"#\">Home</a>
\t\t</li>
\t\t<li class=\"dropdown\">
\t\t\t<a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Pages</a>
\t\t</li>
\t\t<li class=\"\">
\t\t\t<a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Products</a>

\t\t</li>
\t\t<li class=\"dropdown\">
\t\t\t<a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Blog</a>

\t\t</li>
\t\t<li class=\"\">
\t\t\t<a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Shop</a>

\t\t</li>
\t\t<li>
\t\t\t<a class=\"nav-link nav_item\" href=\"#\">Contact Us</a>
\t\t</li>
\t</ul>
</div>
<ul class=\"navbar-nav attr-nav align-items-center\">
\t<li>
\t\t<a href=\"javascript:void(0);\" class=\"nav-link search_trigger\">
\t\t\t<i class=\"linearicons-magnifier\"></i>
\t\t</a>
\t\t<div class=\"search_wrap\">
\t\t\t<span class=\"close-search\">
\t\t\t\t<i class=\"ion-ios-close-empty\"></i>
\t\t\t</span>
\t\t\t<form>
\t\t\t\t<input type=\"text\" placeholder=\"Search\" class=\"form-control\" id=\"search_input\">
\t\t\t\t<button type=\"submit\" class=\"search_icon\">
\t\t\t\t\t<i class=\"ion-ios-search-strong\"></i>
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"search_overlay\"></div>
\t</li>
\t<li class=\"dropdown cart_dropdown\">
\t\t<a class=\"nav-link cart_trigger\" href=\"#\" data-toggle=\"dropdown\">
\t\t\t<i class=\"linearicons-cart\"></i>
\t\t\t<span class=\"cart_count\">2</span>
\t\t</a>
\t\t<div class=\"cart_box dropdown-menu dropdown-menu-right\">
\t\t\t<ul class=\"cart_list\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"item_remove\">
\t\t\t\t\t\t<i class=\"ion-close\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\"><img src=\"https://placehold.it/300\" alt=\"cart_thumb1\">Variable product 001</a>
\t\t\t\t\t<span class=\"cart_quantity\">
\t\t\t\t\t\t1 x
\t\t\t\t\t\t<span class=\"cart_amount\">
\t\t\t\t\t\t\t<span class=\"price_symbole\">\$</span>
\t\t\t\t\t\t</span>78.00</span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"item_remove\">
\t\t\t\t\t\t<i class=\"ion-close\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\"><img src=\"https://placehold.it/300\" alt=\"cart_thumb1\">Variable product 001</a>
\t\t\t\t\t<span class=\"cart_quantity\">
\t\t\t\t\t\t1 x
\t\t\t\t\t\t<span class=\"cart_amount\">
\t\t\t\t\t\t\t<span class=\"price_symbole\">\$</span>
\t\t\t\t\t\t</span>78.00</span>
\t\t\t\t</li>

\t\t\t</ul>
\t\t\t<div class=\"cart_footer\">
\t\t\t\t<p class=\"cart_total\">
\t\t\t\t\t<strong>Subtotal:</strong>
\t\t\t\t\t<span class=\"cart_price\">
\t\t\t\t\t\t<span class=\"price_symbole\">\$</span>
\t\t\t\t\t</span>159.00</p>
\t\t\t\t<p class=\"cart_buttons\">
\t\t\t\t\t<a href=\"#\" class=\"btn btn-fill-line rounded-0 view-cart\">View Cart</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-fill-out rounded-0 checkout\">Checkout</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</li>
</ul></nav></div></div></header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 100,  157 => 99,  153 => 97,  147 => 93,  136 => 85,  125 => 77,  122 => 76,  111 => 68,  104 => 64,  99 => 61,  97 => 60,  43 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{# <div class=\"preloader\">
\t<div class=\"preloader-content\">
\t\t<span></span>
\t\t<span></span>
\t\t<span></span>
\t</div>
</div> #}
<div class=\"\">
\t<div class=\"\">
\t\t<span></span>
\t\t<span></span>
\t\t<span></span>
\t</div>
</div>
<header class=\"header_wrap fixed-top header_with_topbar\">
\t<div class=\"top-header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
\t\t\t\t\t\t<div class=\"lng_dropdown mr-2\">
\t\t\t\t\t\t\t<select name=\"countries\" class=\"custome_select\">
\t\t\t\t\t\t\t\t<option value='en' data-image=\"assets/images/eng.png\" data-title=\"English\">English</option>
\t\t\t\t\t\t\t\t<option value='fn' data-image=\"assets/images/fn.png\" data-title=\"France\">France</option>
\t\t\t\t\t\t\t\t<option value='us' data-image=\"assets/images/us.png\" data-title=\"United States\">United States</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t<select name=\"countries\" class=\"custome_select\">
\t\t\t\t\t\t\t\t<option value='USD' data-title=\"USD\">USD</option>
\t\t\t\t\t\t\t\t<option value='EUR' data-title=\"EUR\">EUR</option>
\t\t\t\t\t\t\t\t<option value='GBR' data-title=\"GBR\">GBR</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"contact_detail text-center text-lg-left\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"ti-mobile\"></i>
\t\t\t\t\t\t\t\t<span>000-000-000</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"text-center text-md-right\">
\t\t\t\t\t\t<ul class=\"header_list\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-control-shuffle\"></i>
\t\t\t\t\t\t\t\t\t<span>Compare</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t<i class=\"ti-heart\"></i>
\t\t\t\t\t\t\t\t\t<span>Wishlist</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\t<span>Bonjour
\t\t\t\t\t\t\t\t\t\t{{ app.user.prenom |upper }}</span>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('compte') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-home\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Mon compte</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\t\t<span>S'identifier |</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('app_register')}}\">
\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t<span>Rejoignez-nous</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endif %}

\t\t</ul>
\t</div>
</div></div></div></div><div class=\"bottom_header dark_skin main_menu_uppercase\"><div class=\"container\"><nav class=\"navbar navbar-expand-lg\">
<a class=\"navbar-brand\" href=\"{{path('home')}}\">
\t{# <img class=\"logo_light\" src=\"assets/images/logo_light.png\" alt=\"logo\"/> #}
\t{# <img class=\"logo_dark\" src=\"assets/images/logo_dark.png\" alt=\"logo\"/> #}
\t\t<span class=\"text-bold \"> eShop</span>
</a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-expanded=\"false\">
\t<span class=\"ion-android-menu\"></span>
</button>
<div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\">
\t<ul class=\"navbar-nav\">
\t\t<li class=\"dropdown\">
\t\t\t<a class=\"nav-link\" href=\"#\">Home</a>
\t\t</li>
\t\t<li class=\"dropdown\">
\t\t\t<a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Pages</a>
\t\t</li>
\t\t<li class=\"\">
\t\t\t<a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Products</a>

\t\t</li>
\t\t<li class=\"dropdown\">
\t\t\t<a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Blog</a>

\t\t</li>
\t\t<li class=\"\">
\t\t\t<a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Shop</a>

\t\t</li>
\t\t<li>
\t\t\t<a class=\"nav-link nav_item\" href=\"#\">Contact Us</a>
\t\t</li>
\t</ul>
</div>
<ul class=\"navbar-nav attr-nav align-items-center\">
\t<li>
\t\t<a href=\"javascript:void(0);\" class=\"nav-link search_trigger\">
\t\t\t<i class=\"linearicons-magnifier\"></i>
\t\t</a>
\t\t<div class=\"search_wrap\">
\t\t\t<span class=\"close-search\">
\t\t\t\t<i class=\"ion-ios-close-empty\"></i>
\t\t\t</span>
\t\t\t<form>
\t\t\t\t<input type=\"text\" placeholder=\"Search\" class=\"form-control\" id=\"search_input\">
\t\t\t\t<button type=\"submit\" class=\"search_icon\">
\t\t\t\t\t<i class=\"ion-ios-search-strong\"></i>
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"search_overlay\"></div>
\t</li>
\t<li class=\"dropdown cart_dropdown\">
\t\t<a class=\"nav-link cart_trigger\" href=\"#\" data-toggle=\"dropdown\">
\t\t\t<i class=\"linearicons-cart\"></i>
\t\t\t<span class=\"cart_count\">2</span>
\t\t</a>
\t\t<div class=\"cart_box dropdown-menu dropdown-menu-right\">
\t\t\t<ul class=\"cart_list\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"item_remove\">
\t\t\t\t\t\t<i class=\"ion-close\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\"><img src=\"https://placehold.it/300\" alt=\"cart_thumb1\">Variable product 001</a>
\t\t\t\t\t<span class=\"cart_quantity\">
\t\t\t\t\t\t1 x
\t\t\t\t\t\t<span class=\"cart_amount\">
\t\t\t\t\t\t\t<span class=\"price_symbole\">\$</span>
\t\t\t\t\t\t</span>78.00</span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"item_remove\">
\t\t\t\t\t\t<i class=\"ion-close\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\"><img src=\"https://placehold.it/300\" alt=\"cart_thumb1\">Variable product 001</a>
\t\t\t\t\t<span class=\"cart_quantity\">
\t\t\t\t\t\t1 x
\t\t\t\t\t\t<span class=\"cart_amount\">
\t\t\t\t\t\t\t<span class=\"price_symbole\">\$</span>
\t\t\t\t\t\t</span>78.00</span>
\t\t\t\t</li>

\t\t\t</ul>
\t\t\t<div class=\"cart_footer\">
\t\t\t\t<p class=\"cart_total\">
\t\t\t\t\t<strong>Subtotal:</strong>
\t\t\t\t\t<span class=\"cart_price\">
\t\t\t\t\t\t<span class=\"price_symbole\">\$</span>
\t\t\t\t\t</span>159.00</p>
\t\t\t\t<p class=\"cart_buttons\">
\t\t\t\t\t<a href=\"#\" class=\"btn btn-fill-line rounded-0 view-cart\">View Cart</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-fill-out rounded-0 checkout\">Checkout</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</li>
</ul></nav></div></div></header>
", "partials/header.html.twig", "/var/www/eShop/templates/partials/header.html.twig");
    }
}
