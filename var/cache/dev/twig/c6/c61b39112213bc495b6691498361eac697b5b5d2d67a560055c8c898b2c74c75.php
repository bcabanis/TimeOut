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

/* registration/error.html.twig */
class __TwigTemplate_cc75c696947979e6acd45f47e73ad98de98bcdddc3294ff76ca595bbd936165b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/error.html.twig"));

        // line 1
        echo "<h2>Erreur</h2>
<p>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["message2"]) || array_key_exists("message2", $context) ? $context["message2"] : (function () { throw new RuntimeError('Variable "message2" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam natus at voluptatum numquam ducimus enim autem error, tenetur illo et omnis, deleniti veniam blanditiis vitae excepturi totam similique ipsa odio!</p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Erreur</h2>
<p>{{message2}}</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam natus at voluptatum numquam ducimus enim autem error, tenetur illo et omnis, deleniti veniam blanditiis vitae excepturi totam similique ipsa odio!</p>", "registration/error.html.twig", "/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/templates/registration/error.html.twig");
    }
}
