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

/* login/tags.html.twig */
class __TwigTemplate_b27cd626f4be15238773a7fe02161aa529b3de36ecb96bef0a13b6f56b068cfb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/tags.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/tags.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello LoginController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello ! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/GetTogether/src/Controller/LoginController.php", 0), "html", null, true);
        echo "\">src/Controller/LoginController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/GetTogether/templates/login/index.html.twig", 0), "html", null, true);
        echo "\">templates/login/index.html.twig</a></code></li>
    </ul>
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tagsForm"]) || array_key_exists("tagsForm", $context) ? $context["tagsForm"] : (function () { throw new RuntimeError('Variable "tagsForm" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["tagsForm"]) || array_key_exists("tagsForm", $context) ? $context["tagsForm"] : (function () { throw new RuntimeError('Variable "tagsForm" does not exist.', 20, $this->source); })()), 'errors');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["tagsForm"]) || array_key_exists("tagsForm", $context) ? $context["tagsForm"] : (function () { throw new RuntimeError('Variable "tagsForm" does not exist.', 21, $this->source); })()), 'widget');
        echo "
    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tagsForm"]) || array_key_exists("tagsForm", $context) ? $context["tagsForm"] : (function () { throw new RuntimeError('Variable "tagsForm" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
</div>

<h1>PAGE DE CHOIX DES TAGS</h1>
<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">Page Dashboard</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "login/tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 26,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  89 => 17,  85 => 16,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello LoginController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello ! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ '/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/GetTogether/src/Controller/LoginController.php'|file_link(0) }}\">src/Controller/LoginController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/GetTogether/templates/login/index.html.twig'|file_link(0) }}\">templates/login/index.html.twig</a></code></li>
    </ul>
    {{ form_start(tagsForm) }}
        {{ form_errors(tagsForm) }}
        {{ form_widget(tagsForm) }}
    {{ form_end(tagsForm) }}
</div>

<h1>PAGE DE CHOIX DES TAGS</h1>
<a href=\"{{ path('app_dashboard') }}\">Page Dashboard</a>
{% endblock %}
", "login/tags.html.twig", "/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/templates/login/tags.html.twig");
    }
}
