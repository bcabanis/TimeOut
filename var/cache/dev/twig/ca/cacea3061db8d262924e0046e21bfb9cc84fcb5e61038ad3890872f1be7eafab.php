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

/* event/show.html.twig */
class __TwigTemplate_45e83fd202d08724a3a89c0fd785e633eae644f356c7fa6d5a3e021aadf44cd0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Event : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"event-details\">
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
        <p>Description :";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
        <p>Lieu : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "place", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
        <p>Date : ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "startDate", [], "any", false, false, false, 10), "Y-m-d H:i"), "html", null, true);
        echo " jusqu'à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "endDate", [], "any", false, false, false, 10), "Y-m-d H:i"), "html", null, true);
        echo "</p>
        <p>Organisateur : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "planner", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
    </div>

    <div class=\"chat-section\">
        <h2>Chat</h2>
        <div class=\"chat-messages\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chatMessages"]) || array_key_exists("chatMessages", $context) ? $context["chatMessages"] : (function () { throw new RuntimeError('Variable "chatMessages" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 18)) {
                // line 19
                echo "                    <p><strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 19), "pseudo", [], "any", false, false, false, 19), "html", null, true);
                echo "</strong>: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 19), "html", null, true);
                echo "</p>
                ";
            } else {
                // line 21
                echo "                    <p><strong>Utilisateur inconnu</strong>: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 21), "html", null, true);
                echo "</p>
                ";
            }
            // line 23
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>

        <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_post_chat_message", ["eventId" => twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "eventId", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\" method=\"post\">
            <div>
                <label for=\"content\">Message :</label>
                <input type=\"text\" id=\"content\" name=\"content\" required>
            </div>
            <button type=\"submit\">Envoyer</button>
        </form>
    </div>

    ";
        // line 36
        echo "    ";
        if ((array_key_exists("authenticatedUser", $context) &&  !(null === (isset($context["authenticatedUser"]) || array_key_exists("authenticatedUser", $context) ? $context["authenticatedUser"] : (function () { throw new RuntimeError('Variable "authenticatedUser" does not exist.', 36, $this->source); })())))) {
            // line 37
            echo "        <p>Pseudo de l'utilisateur connecté : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["authenticatedUser"]) || array_key_exists("authenticatedUser", $context) ? $context["authenticatedUser"] : (function () { throw new RuntimeError('Variable "authenticatedUser" does not exist.', 37, $this->source); })()), "pseudo", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "event/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 37,  147 => 36,  135 => 26,  131 => 24,  125 => 23,  119 => 21,  111 => 19,  108 => 18,  104 => 17,  95 => 11,  89 => 10,  85 => 9,  81 => 8,  77 => 7,  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Event : {{ event.title }}{% endblock %}

{% block body %}
    <div class=\"event-details\">
        <h1>{{ event.title }}</h1>
        <p>Description :{{ event.description }}</p>
        <p>Lieu : {{ event.place }}</p>
        <p>Date : {{ event.startDate|date('Y-m-d H:i') }} jusqu'à {{ event.endDate|date('Y-m-d H:i') }}</p>
        <p>Organisateur : {{ event.planner }}</p>
    </div>

    <div class=\"chat-section\">
        <h2>Chat</h2>
        <div class=\"chat-messages\">
            {% for message in chatMessages %}
                {% if message.user %}
                    <p><strong>{{ message.user.pseudo }}</strong>: {{ message.content }}</p>
                {% else %}
                    <p><strong>Utilisateur inconnu</strong>: {{ message.content }}</p>
                {% endif %}
            {% endfor %}
        </div>

        <form action=\"{{ path('app_event_post_chat_message', {'eventId': event.eventId}) }}\" method=\"post\">
            <div>
                <label for=\"content\">Message :</label>
                <input type=\"text\" id=\"content\" name=\"content\" required>
            </div>
            <button type=\"submit\">Envoyer</button>
        </form>
    </div>

    {# Afficher le pseudo de l'utilisateur connecté #}
    {% if authenticatedUser is defined and authenticatedUser is not null %}
        <p>Pseudo de l'utilisateur connecté : {{ authenticatedUser.pseudo }}</p>
    {% endif %}
{% endblock %}



", "event/show.html.twig", "/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/templates/event/show.html.twig");
    }
}
