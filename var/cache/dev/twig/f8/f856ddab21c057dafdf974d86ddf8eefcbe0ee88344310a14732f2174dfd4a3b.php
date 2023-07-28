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

/* login/profil.html.twig */
class __TwigTemplate_91c452c7cbfba08dabaaf7b81d6dc5bfa6758c8dbeb77641d94be233c38778a7 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/profil.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello RegistrationController !
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t<link rel=\"stylesheet\" href=\"/assets/css/17-07-23-style.css\">
\t<link rel=\"stylesheet\" href=\"/assets/css/mathieu.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "

\t<main>
\t\t<section id=\"inscription\">
\t\t\t<div class=\"containerfluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-md-5 background\">
\t\t\t\t\t\t<a href=\"#\" class=\"logo\"><img src=\"/assets/img/logo-gettogether-white.svg\" alt=\"\"></a>
\t\t\t\t\t\t<div class=\"divBack\">
\t\t\t\t\t\t\t<div class=\"divSepa\">
\t\t\t\t\t\t\t\t<p>Étape 1 sur 3</p>
\t\t\t\t\t\t\t\t<img src=\"/assets/img/step1.svg\" alt=\"\" class=\"imgStep\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h1 class=\"h1perso\">Choisissez votre pseudo<br>& votre ville</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-12 col-md-7 inscription\">
\t\t\t\t\t\t<article class=\"cardsub\">
\t\t\t\t\t\t\t<h1>Parcours de personnalisation</h1>
\t\t\t\t\t\t\t<p>Bienvenue dans votre parcours de personnalisation. Ce parcours n'est pas obligatoire mais vous permettera d'optimiser votre expérience \"Get together\".</p>
\t\t\t\t\t\t\t<div class=\"subform\">
\t\t\t\t\t\t\t\t<div class=\"inputsub\">
\t\t\t\t\t\t\t\t\t";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profilForm"]) || array_key_exists("profilForm", $context) ? $context["profilForm"] : (function () { throw new RuntimeError('Variable "profilForm" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["profilForm"]) || array_key_exists("profilForm", $context) ? $context["profilForm"] : (function () { throw new RuntimeError('Variable "profilForm" does not exist.', 39, $this->source); })()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profilForm"]) || array_key_exists("profilForm", $context) ? $context["profilForm"] : (function () { throw new RuntimeError('Variable "profilForm" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t</section>


\t</main>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "login/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 40,  121 => 39,  117 => 38,  91 => 14,  84 => 13,  75 => 8,  68 => 7,  54 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Hello RegistrationController !
{% endblock %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"/assets/css/17-07-23-style.css\">
\t<link rel=\"stylesheet\" href=\"/assets/css/mathieu.css\">
{% endblock %}


{% block body %}


\t<main>
\t\t<section id=\"inscription\">
\t\t\t<div class=\"containerfluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-md-5 background\">
\t\t\t\t\t\t<a href=\"#\" class=\"logo\"><img src=\"/assets/img/logo-gettogether-white.svg\" alt=\"\"></a>
\t\t\t\t\t\t<div class=\"divBack\">
\t\t\t\t\t\t\t<div class=\"divSepa\">
\t\t\t\t\t\t\t\t<p>Étape 1 sur 3</p>
\t\t\t\t\t\t\t\t<img src=\"/assets/img/step1.svg\" alt=\"\" class=\"imgStep\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h1 class=\"h1perso\">Choisissez votre pseudo<br>& votre ville</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-12 col-md-7 inscription\">
\t\t\t\t\t\t<article class=\"cardsub\">
\t\t\t\t\t\t\t<h1>Parcours de personnalisation</h1>
\t\t\t\t\t\t\t<p>Bienvenue dans votre parcours de personnalisation. Ce parcours n'est pas obligatoire mais vous permettera d'optimiser votre expérience \"Get together\".</p>
\t\t\t\t\t\t\t<div class=\"subform\">
\t\t\t\t\t\t\t\t<div class=\"inputsub\">
\t\t\t\t\t\t\t\t\t{{ form_start(profilForm) }}
\t\t\t\t\t\t\t\t\t{{ form_errors(profilForm) }}
\t\t\t\t\t\t\t\t\t{{ form_end(profilForm) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t</section>


\t</main>



{% endblock %}
", "login/profil.html.twig", "/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/templates/login/profil.html.twig");
    }
}
