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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_2d4cab8880322d2039eed1c9a8cbcf3a985be829e8598c52d94ae89506304824 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        // line 1
        echo "<h1>bonjour!
\t<h1></hr>
\t<h2>Veuillez confirmer votre email!</h2>
\t<p>
\t\tVeuillez confirmer votre adresse e-mail en cliquant sur le lien suivant:
\t\t<a href=\"";
        // line 6
        echo (isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 6, $this->source); })());
        echo "\">Je confirme mon email</a>.</p>
</br>
Ce lien expire dans
";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["expiresAtMessageKey"]) || array_key_exists("expiresAtMessageKey", $context) ? $context["expiresAtMessageKey"] : (function () { throw new RuntimeError('Variable "expiresAtMessageKey" does not exist.', 9, $this->source); })()), (isset($context["expiresAtMessageData"]) || array_key_exists("expiresAtMessageData", $context) ? $context["expiresAtMessageData"] : (function () { throw new RuntimeError('Variable "expiresAtMessageData" does not exist.', 9, $this->source); })()), "VerifyEmailBundle"), "html", null, true);
        echo ".</p><hr><p>Votre confidentialit?? est importante pour nous - toutes vos informations sont stock??es en toute s??curit?? et ne sont accessibles que par vous. Vos informations seront stock??es et utilis??es qu???en conformit?? avec notre politique de protection des donn??es personnelles.
\t\tNous nous r??jouissons de partager l???univers de eShop.com avec vous.</p><h3>Merci de nous avoir rejoints sur eShop.com!</h3>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>bonjour!
\t<h1></hr>
\t<h2>Veuillez confirmer votre email!</h2>
\t<p>
\t\tVeuillez confirmer votre adresse e-mail en cliquant sur le lien suivant:
\t\t<a href=\"{{ signedUrl|raw }}\">Je confirme mon email</a>.</p>
</br>
Ce lien expire dans
{{ expiresAtMessageKey|trans(expiresAtMessageData, 'VerifyEmailBundle') }}.</p><hr><p>Votre confidentialit?? est importante pour nous - toutes vos informations sont stock??es en toute s??curit?? et ne sont accessibles que par vous. Vos informations seront stock??es et utilis??es qu???en conformit?? avec notre politique de protection des donn??es personnelles.
\t\tNous nous r??jouissons de partager l???univers de eShop.com avec vous.</p><h3>Merci de nous avoir rejoints sur eShop.com!</h3>
", "registration/confirmation_email.html.twig", "/var/www/eShop/templates/registration/confirmation_email.html.twig");
    }
}
