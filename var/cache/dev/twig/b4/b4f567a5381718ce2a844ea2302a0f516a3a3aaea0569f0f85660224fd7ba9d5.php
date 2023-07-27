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

/* login/index.html.twig */
class __TwigTemplate_d0683f11afb81444ea8f991ddaae0def39b9257eaeba629f07bcb38f5e039112 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
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
        echo "\t<link rel=\"stylesheet\" href=\"/assets/css/17-07-23-style.css\">
\t<link rel=\"stylesheet\" href=\"/assets/css/mathieu.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "

\t<main>
\t\t<section id=\"inscription\">
\t\t\t<div class=\"containerfluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-md-5 background\">
\t\t\t\t\t\t<a href=\"#\" class=\"logo\"><img src=\"/assets/img/logo-gettogether-white.svg\" alt=\"\"></a>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-12 col-md-7 inscription adjust\">
\t\t\t\t\t\t<article class=\"cardsub\">
\t\t\t\t\t\t\t<h1>Connexion</h1>
\t\t\t\t\t\t\t<div class=\"subform\">
\t\t\t\t\t\t\t\t<div class=\"inputsub\">
\t\t\t\t\t\t\t\t\t";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 29, $this->source); })()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'row');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 31, $this->source); })()), "password", [], "any", false, false, false, 31), 'row');
        echo "

\t\t\t\t\t\t\t\t\t<div class=\"col-8 row\">

\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 36, $this->source); })()), "stayConnected", [], "any", false, false, false, 36), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 39, $this->source); })()), "stayConnected", [], "any", false, false, false, 39), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["loginForm"]) || array_key_exists("loginForm", $context) ? $context["loginForm"] : (function () { throw new RuntimeError('Variable "loginForm" does not exist.', 43, $this->source); })()), 'form_end');
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
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 43,  135 => 39,  129 => 36,  121 => 31,  117 => 30,  113 => 29,  109 => 28,  91 => 12,  84 => 11,  75 => 7,  68 => 6,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-12 col-md-7 inscription adjust\">
\t\t\t\t\t\t<article class=\"cardsub\">
\t\t\t\t\t\t\t<h1>Connexion</h1>
\t\t\t\t\t\t\t<div class=\"subform\">
\t\t\t\t\t\t\t\t<div class=\"inputsub\">
\t\t\t\t\t\t\t\t\t{{ form_start(loginForm) }}
\t\t\t\t\t\t\t\t\t{{ form_errors(loginForm) }}
\t\t\t\t\t\t\t\t\t{{ form_row(loginForm.email) }}
\t\t\t\t\t\t\t\t\t{{ form_row(loginForm.password) }}

\t\t\t\t\t\t\t\t\t<div class=\"col-8 row\">

\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(loginForm.stayConnected) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_label(loginForm.stayConnected)  }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t{{ form_end(loginForm) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t</section>


\t</main>



{% endblock %}
", "login/index.html.twig", "/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/templates/login/index.html.twig");
    }
}
