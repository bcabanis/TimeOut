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

/* registration/index.html.twig */
class __TwigTemplate_a613190f08e70cc31126ace16436875ed44dd93d44537d79b4d162e32fc2fc72 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello RegistrationController !
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"./assets/css/17-07-23-style.css\">
\t<link rel=\"stylesheet\" href=\"./assets/css/mathieu.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "

\t<main>
\t\t<section id=\"inscription\">
\t\t\t<div class=\"containerfluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-md-5 background\">
\t\t\t\t\t\t<a href=\"#\" class=\"logo\"><img src=\"./assets/img/logo-timeout-white.svg\" alt=\"\"></a>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-12 col-md-7 inscription\">
\t\t\t\t\t\t<article class=\"cardsub\">
\t\t\t\t\t\t\t<h1>Inscription</h1>
\t\t\t\t\t\t\t<div class=\"subform\">
\t\t\t\t\t\t\t\t<div class=\"inputsub\">
\t\t\t\t\t\t\t\t\t";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["id" => "registrationForm"]]);
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"rssub\">
\t\t\t\t\t\t\t\t\t\t<div class=\"boutonsubrs\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 logoInscription\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/google.svg\" alt=\"Logo\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button col-8 socialLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">S'inscrire avec Google</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"boutonsubrs\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 logoInscription\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/apple.svg\" alt=\"Logo\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button col-8 socialLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">S'inscrire avec Apple</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"boutonsubrs\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 logoInscription\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/color=blue.svg\" alt=\"Logo\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button col-8 socialLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">S'inscrire avec Facebook</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<!-- </div> -->


\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t</section>


\t</main>
";
        // line 81
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 81,  117 => 29,  113 => 28,  109 => 27,  91 => 11,  84 => 10,  75 => 7,  68 => 6,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello RegistrationController !
{% endblock %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"./assets/css/17-07-23-style.css\">
\t<link rel=\"stylesheet\" href=\"./assets/css/mathieu.css\">
{% endblock %}
{% block body %}


\t<main>
\t\t<section id=\"inscription\">
\t\t\t<div class=\"containerfluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-md-5 background\">
\t\t\t\t\t\t<a href=\"#\" class=\"logo\"><img src=\"./assets/img/logo-timeout-white.svg\" alt=\"\"></a>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-12 col-md-7 inscription\">
\t\t\t\t\t\t<article class=\"cardsub\">
\t\t\t\t\t\t\t<h1>Inscription</h1>
\t\t\t\t\t\t\t<div class=\"subform\">
\t\t\t\t\t\t\t\t<div class=\"inputsub\">
\t\t\t\t\t\t\t\t\t{{ form_start(registrationForm, {'attr': {'id': 'registrationForm'}}) }}
\t\t\t\t\t\t\t\t\t{{ form_errors(registrationForm) }}
\t\t\t\t\t\t\t\t\t{{ form_end(registrationForm) }}
\t\t\t\t\t\t\t\t\t<div class=\"rssub\">
\t\t\t\t\t\t\t\t\t\t<div class=\"boutonsubrs\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 logoInscription\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/google.svg\" alt=\"Logo\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button col-8 socialLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">S'inscrire avec Google</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"boutonsubrs\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 logoInscription\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/apple.svg\" alt=\"Logo\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button col-8 socialLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">S'inscrire avec Apple</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"boutonsubrs\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 logoInscription\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/color=blue.svg\" alt=\"Logo\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button col-8 socialLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">S'inscrire avec Facebook</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<!-- </div> -->


\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t</section>


\t</main>
{# 
\t<h1>PAGE D'INSCRIPTION</h1>
\t<a href=\"{{ path('app_login') }}\">Page de connexion</a>
\t<!-- Afficher un message de validation caché -->
\t<div id=\"validationMessage\" style=\"display: none; text-align: center; font-weight: bold;\">
\t\tMerci d'avoir rempli le formulaire !
\t</div> #}


{% endblock %}
", "registration/index.html.twig", "/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/templates/registration/index.html.twig");
    }
}
