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

/* partials/footer.html.twig */
class __TwigTemplate_66abd4114a7c0a179a997869e4ea789937ce105be2a4fdf191f9f00c26a94afb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "<div class=\"section bg_default small_pt small_pb\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"heading_s1 mb-md-0 heading_light\">
\t\t\t\t\t<h3>Subscribe Our Newsletter</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"newsletter_form\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<input type=\"text\" required=\"\" class=\"form-control rounded-0\" placeholder=\"Enter Email Address\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark rounded-0\" name=\"submit\" value=\"Submit\">Subscribe</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<footer class=\"footer_dark\">
\t<div class=\"footer_top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-12\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<div class=\"footer_logo\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/images/logo_light.png\" alt=\"logo\"/></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Exclusively for all! Take advantage of up to -50% on these offers during our smart days. Shop smart with discounts on electronics, phones and home goods. Up to -50% Buyer Protection. Free Shipping. Summer promo. Great Value. A multitude of sellers.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<ul class=\"social_icons social_white\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"ion-social-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"ion-social-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"ion-social-googleplus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"ion-social-youtube-outline\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"ion-social-instagram-outline\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h6 class=\"widget_title\">Useful Links</h6>
\t\t\t\t\t\t<ul class=\"widget_links\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">About Us</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">FAQ</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Location</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Affiliates</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h6 class=\"widget_title\">Category</h6>
\t\t\t\t\t\t<ul class=\"widget_links\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Men</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Woman</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Kids</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Best Saller</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">New Arrivals</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h6 class=\"widget_title\">My Account</h6>
\t\t\t\t\t\t<ul class=\"widget_links\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">My Account</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Discount</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Returns</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Orders History</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Order Tracking</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h6 class=\"widget_title\">Contact Info</h6>
\t\t\t\t\t\t<ul class=\"contact_info contact_info_light\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"ti-location-pin\"></i>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t3 Rue Léon Gambetta 59260 Hellemmes</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"ti-email\"></i>
\t\t\t\t\t\t\t\t<a href=\"mailto:contact@espero-soft.com\">contact@espero-soft.com</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"ti-mobile\"></i>
\t\t\t\t\t\t\t\t<p>+ 33 7 52 15 25 60</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"bottom_footer border-top-tran\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<p class=\"mb-md-0 text-center text-md-left\">© 2020 All Rights Reserved</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<ul class=\"footer_payment text-center text-lg-right\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/images/visa.png\" alt=\"visa\"></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/images/discover.png\" alt=\"discover\"></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/images/master_card.png\" alt=\"master_card\"></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/images/paypal.png\" alt=\"paypal\"></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/images/amarican_express.png\" alt=\"amarican_express\"></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>

<a href=\"#\" class=\"scrollup\" style=\"display: none;\">
\t<i class=\"ion-ios-arrow-up\"></i>
</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section bg_default small_pt small_pb\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"heading_s1 mb-md-0 heading_light\">
\t\t\t\t\t<h3>Subscribe Our Newsletter</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"newsletter_form\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<input type=\"text\" required=\"\" class=\"form-control rounded-0\" placeholder=\"Enter Email Address\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark rounded-0\" name=\"submit\" value=\"Submit\">Subscribe</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<footer class=\"footer_dark\">
\t<div class=\"footer_top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-12\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<div class=\"footer_logo\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/images/logo_light.png\" alt=\"logo\"/></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Exclusively for all! Take advantage of up to -50% on these offers during our smart days. Shop smart with discounts on electronics, phones and home goods. Up to -50% Buyer Protection. Free Shipping. Summer promo. Great Value. A multitude of sellers.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<ul class=\"social_icons social_white\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"ion-social-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"ion-social-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"ion-social-googleplus\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"ion-social-youtube-outline\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"ion-social-instagram-outline\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h6 class=\"widget_title\">Useful Links</h6>
\t\t\t\t\t\t<ul class=\"widget_links\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">About Us</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">FAQ</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Location</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Affiliates</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h6 class=\"widget_title\">Category</h6>
\t\t\t\t\t\t<ul class=\"widget_links\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Men</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Woman</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Kids</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Best Saller</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">New Arrivals</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h6 class=\"widget_title\">My Account</h6>
\t\t\t\t\t\t<ul class=\"widget_links\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">My Account</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Discount</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Returns</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Orders History</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Order Tracking</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h6 class=\"widget_title\">Contact Info</h6>
\t\t\t\t\t\t<ul class=\"contact_info contact_info_light\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"ti-location-pin\"></i>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t3 Rue Léon Gambetta 59260 Hellemmes</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"ti-email\"></i>
\t\t\t\t\t\t\t\t<a href=\"mailto:contact@espero-soft.com\">contact@espero-soft.com</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"ti-mobile\"></i>
\t\t\t\t\t\t\t\t<p>+ 33 7 52 15 25 60</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"bottom_footer border-top-tran\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<p class=\"mb-md-0 text-center text-md-left\">© 2020 All Rights Reserved</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<ul class=\"footer_payment text-center text-lg-right\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/images/visa.png\" alt=\"visa\"></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/images/discover.png\" alt=\"discover\"></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/images/master_card.png\" alt=\"master_card\"></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/images/paypal.png\" alt=\"paypal\"></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/images/amarican_express.png\" alt=\"amarican_express\"></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>

<a href=\"#\" class=\"scrollup\" style=\"display: none;\">
\t<i class=\"ion-ios-arrow-up\"></i>
</a>
", "partials/footer.html.twig", "/var/www/eShop/templates/partials/footer.html.twig");
    }
}
