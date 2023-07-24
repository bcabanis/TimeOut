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

/* test/index.html.twig */
class __TwigTemplate_81d3216ca413fdcc406c9bc052a59c48c648d56c2625dfb0ac14418209b2f9c1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "test/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello TestController!";
        
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
    
    <div class=\"card-event\" data-id-event=\"85b83a5a454ff58db1a167e93967bd7a52361ebf\">
        <h3>Mon titre</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, debitis corrupti ab id sed expedita commodi saepe et quos ratione totam sequi quisquam sunt obcaecati minima omnis eveniet, voluptatibus rem.</p>
        <a href=\"#\" class=\"btn btn-primary btn-participer\">Participer</a>
    </div>


    <div class=\"card-event\" data-id-event=\"95b83a5a454ff58db1a167e93967bd7a52361ebf\">
        <h3>Mon titre</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, debitis corrupti ab id sed expedita commodi saepe et quos ratione totam sequi quisquam sunt obcaecati minima omnis eveniet, voluptatibus rem.</p>
         <a href=\"#\" class=\"btn btn-primary btn-participer\">Participer</a>
    </div>


    This friendly message is coming from:
    <ul>
        ";
        // line 30
        echo "        <li>Your template at <code><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/Users/moussaillon/Documents/GitHub/TimeOut/templates/test/index.html.twig", 0), "html", null, true);
        echo "\">templates/test/index.html.twig</a></code></li>
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "test/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TestController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    
    <div class=\"card-event\" data-id-event=\"85b83a5a454ff58db1a167e93967bd7a52361ebf\">
        <h3>Mon titre</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, debitis corrupti ab id sed expedita commodi saepe et quos ratione totam sequi quisquam sunt obcaecati minima omnis eveniet, voluptatibus rem.</p>
        <a href=\"#\" class=\"btn btn-primary btn-participer\">Participer</a>
    </div>


    <div class=\"card-event\" data-id-event=\"95b83a5a454ff58db1a167e93967bd7a52361ebf\">
        <h3>Mon titre</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, debitis corrupti ab id sed expedita commodi saepe et quos ratione totam sequi quisquam sunt obcaecati minima omnis eveniet, voluptatibus rem.</p>
         <a href=\"#\" class=\"btn btn-primary btn-participer\">Participer</a>
    </div>


    This friendly message is coming from:
    <ul>
        {# <li>{{ data.records.0.datasetid }}</a></code></li> #}
        <li>Your template at <code><a href=\"{{ '/Users/moussaillon/Documents/GitHub/TimeOut/templates/test/index.html.twig'|file_link(0) }}\">templates/test/index.html.twig</a></code></li>
    </ul>
</div>
{% endblock %}
", "test/index.html.twig", "/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/templates/test/index.html.twig");
    }
}
