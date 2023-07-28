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

/* login/avatar.html.twig */
class __TwigTemplate_88eb241141b23578094144a410c632c23201d22084535188c697245173591430 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/avatar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/avatar.html.twig", 1);
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

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "

\t<main>
\t\t<section id=\"inscription\">
\t\t\t<div class=\"containerfluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-md-5 background\">
\t\t\t\t\t\t<a href=\"#\" class=\"logo\"><img src=\"/assets/img/logo-gettogether-white.svg\" alt=\"\"></a>
\t\t\t\t\t\t<div class=\"divBack\">
\t\t\t\t\t\t\t<div class=\"divSepa\">
\t\t\t\t\t\t\t\t<p>Étape 2 sur 3</p>
\t\t\t\t\t\t\t\t<img src=\"/assets/img/step.svg\" alt=\"\" class=\"imgStep\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h1 class=\"h1perso\">Télécharger une photo ou<br>& choisissez un avatar.</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-12 col-md-7 inscription\">
\t\t\t\t\t\t<article class=\"cardsub\">
\t\t\t\t\t\t\t<h2 class=\"text-center h1File\">Télécharger une photo de profil</h2>
\t\t\t\t\t\t\t<div class=\"subform\" action=\"#\" method=\"post\">

\t\t\t\t\t\t\t\t<div class=\"inputsub\">
\t\t\t\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 38
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 44
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t\t\t\t\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["photoForm"]) || array_key_exists("photoForm", $context) ? $context["photoForm"] : (function () { throw new RuntimeError('Variable "photoForm" does not exist.', 48, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["photoForm"]) || array_key_exists("photoForm", $context) ? $context["photoForm"] : (function () { throw new RuntimeError('Variable "photoForm" does not exist.', 49, $this->source); })()), 'widget');
        echo "

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t\t<h2 class=\"text-center pt-5 m-0\">Ou choisissez un avatar</h2>
\t\t\t\t\t\t<div class=\"divAvatar row\"></div>
\t\t\t\t\t\t<div class=\"d-flex divConfirmFile placementLeft\">
\t\t\t\t\t\t\t<a href=\"\" class=\"row col-6 justify-content-center\"><img src=\"/assets/img/directLeft.svg\" alt=\"\" class=\"col-2\"><p class=\"col-10\">retour à l'étape précédente</p></a>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"inputsub btninscrire btn-valide colorWhite col-6\" style=\"width: 40%; margin:0\">Télécharger</button>
\t\t\t\t\t\t\t";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["photoForm"]) || array_key_exists("photoForm", $context) ? $context["photoForm"] : (function () { throw new RuntimeError('Variable "photoForm" does not exist.', 61, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t</section>


\t</main>

\t";
        // line 75
        echo "
\t<script src=\"/assets/js/avatar.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "login/avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 75,  172 => 61,  157 => 49,  152 => 48,  143 => 45,  140 => 44,  136 => 43,  133 => 42,  124 => 39,  121 => 38,  117 => 37,  91 => 13,  84 => 12,  75 => 7,  68 => 6,  54 => 3,  37 => 1,);
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
\t\t\t\t\t\t<div class=\"divBack\">
\t\t\t\t\t\t\t<div class=\"divSepa\">
\t\t\t\t\t\t\t\t<p>Étape 2 sur 3</p>
\t\t\t\t\t\t\t\t<img src=\"/assets/img/step.svg\" alt=\"\" class=\"imgStep\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h1 class=\"h1perso\">Télécharger une photo ou<br>& choisissez un avatar.</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-12 col-md-7 inscription\">
\t\t\t\t\t\t<article class=\"cardsub\">
\t\t\t\t\t\t\t<h2 class=\"text-center h1File\">Télécharger une photo de profil</h2>
\t\t\t\t\t\t\t<div class=\"subform\" action=\"#\" method=\"post\">

\t\t\t\t\t\t\t\t<div class=\"inputsub\">
\t\t\t\t\t\t\t\t\t{% for flashMessage in app.flashes('success') %}
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t\t\t\t{{ flashMessage }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t{% for flashMessage in app.flashes('error') %}
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t\t\t\t\t{{ flashMessage }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{{ form_start(photoForm) }}
\t\t\t\t\t\t\t\t\t{{ form_widget(photoForm) }}

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t\t<h2 class=\"text-center pt-5 m-0\">Ou choisissez un avatar</h2>
\t\t\t\t\t\t<div class=\"divAvatar row\"></div>
\t\t\t\t\t\t<div class=\"d-flex divConfirmFile placementLeft\">
\t\t\t\t\t\t\t<a href=\"\" class=\"row col-6 justify-content-center\"><img src=\"/assets/img/directLeft.svg\" alt=\"\" class=\"col-2\"><p class=\"col-10\">retour à l'étape précédente</p></a>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"inputsub btninscrire btn-valide colorWhite col-6\" style=\"width: 40%; margin:0\">Télécharger</button>
\t\t\t\t\t\t\t{{ form_end(photoForm) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t</section>


\t</main>

\t{# <h1>PAGE DE CHOIX D'AVATAR</h1>
\t\t<a href=\"{{ path('app_tags') }}\">Page de tags</a> #}

\t<script src=\"/assets/js/avatar.js\"></script>
{% endblock %}
", "login/avatar.html.twig", "/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/templates/login/avatar.html.twig");
    }
}
