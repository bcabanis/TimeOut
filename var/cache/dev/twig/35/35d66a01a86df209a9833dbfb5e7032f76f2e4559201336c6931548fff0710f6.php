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

/* dashboard/index.html.twig */
class __TwigTemplate_507130f6567316c7ea1707f64991ca24371786b3f2419209c01dd0dffe6482c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'JavaScript' => [$this, 'block_JavaScript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "</head>

";
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " <title> Hello Patrick ! </title> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com%22%3E/\">
    <link rel=\" preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
        
        ";
        // line 17
        echo "        <link rel=\"stylesheet\" href=\"/assets/css/21-07-23-style.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/usertags.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/mathieu.css\">

     ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "<body>
  
";
        // line 30
        echo "
<header>

<div class=\"container\">
  <!-- navbar -->
  <nav class=\"navbar navbar-expand-lg bg-body-tertiary navbar-dark\">
    <div class=\"container-fluid\">
       
      <a href=\"#\"><img class=\"logo\" src=\"assets/img/logowhite.png\" alt=\"Logo gettogether\"></a>
    
     <!-- searchbar -->
      <form class=\"d-flex\" role=\"search\" id=\"searchbarheader\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Veuillez taper votre recherche d’évent\" id=\"navsearchevent\" aria-label=\"Search\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Localisation\" id=\"navsearchlocal\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success\" type=\"submit\"><img src=\"/assets/img/searchwhite.svg\" alt=\"\"></button>
      </form>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
       
        
      <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link chat\" href=\"#\">Chat</a>
          </li>
          <li class=\"nav-item\">     
            <a class=\"nav-link notif\" href=\"#\">Notifcations</a>
          </li>   
          <li class=\"nav-item\">
            <a class=\"nav-link user\">Profil</a>
          </li>
        </ul>
      
      </div>
    </div>
  </nav>
</div> <!-- container end  -->
</header><!-- header end  -->

<main><!-- main end  -->
  <div class=\"container\" id=\"dashboard\">
  
      <section class=\"welcometext mb-5\">
        <h1>Bienvenue Patrick sur ton Dashboard : “Get together “ !</h1>
        <h2>Voici les evenements qui peuvent t’intéresser :</h2>
      </section>
  
      <div class=\"row\">
        <div class=\"columnleft col-md-5 col-sm-12\">
          <div class=\"date\">            
            <a href=\"#\">Aujourd'hui</a>
            <a href=\"#\" class=\"inactif\">Cette semaine</a>
            <a href=\"#\" class=\"inactif\">Ce week-end</a>
            <a href=\"#\" class=\"inactif\">Ce mois-ci</a>
          </div>
          <div class=\"agenda\">
            <h3><span>Mon agenda</span></h3>
            <img src=\"/assets/img/placeholderagenda.png\" alt=\"\">
          </div>

";
        // line 92
        echo "<div class=\"tags text-center\" id=\"tags-resumey\">
    <h3><span>Mes tags</span></h3>
    <div>
";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tagsByCategory"]) || array_key_exists("tagsByCategory", $context) ? $context["tagsByCategory"] : (function () { throw new RuntimeError('Variable "tagsByCategory" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 96
            echo "        <p href=\"#\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </div>
    <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_mestags");
        echo "\" class=\"voirplus\"> Voir mes tags</a>
</div>
";
        // line 102
        echo "
          <div class=\"events\">
            <h3><span>Recommandation d'évent</span></h3>

           <div class=\"d-flex justify-content-start\">
              <div class=\"cardeventsmall\"> <!-- CARD event SMALL start  -->
                <div class=\"cardtagfav\">
                  <p class=\"tagcardsmall bg-light text-black bg-opacity-75 avenirbold\">Tag</p>
                </div>
                <div class=\"bg-dark bg-opacity-75 text-white cardtext\">
                  <div>
                    <h5>Le roi Jean</h5>
                    <p class=\"icondate\">29/08/2023</p>
                    <p class=\"iconloc\">L'opera de Paris</p>
                  </div>
                </div>
              </div><!-- CARD event SMALL end  -->
  
              <div class=\"cardeventsmall\"> <!-- CARD event SMALL start  -->
                <div class=\"cardtagfav\">
                  <p class=\"tagcardsmall bg-light text-black bg-opacity-75 avenirbold\">Tag</p>
                </div>
                <div class=\"bg-dark bg-opacity-75 text-white cardtext\">
                  <div>
                    <h5>Le roi Jean</h5>
                    <p class=\"icondate\">29/08/2023</p>
                    <p class=\"iconloc\">L'opera de Paris</p>
                  </div>
                </div>
              </div><!-- CARD event SMALL end  -->
           </div>
            <p>Vous ne participez pas encore à aucun event</p>
          </div>
        </div>
        
        <div class=\"columnspacer col-md-1 col-12\"></div>

        <article class=\"columnright col-md-6 col-12\">
          <h2>Aujourd'hui</h2>  
          <div class=\"cardeventbig\"> <!-- CARD event BIG start  -->
            <div class=\"d-flex cardtagfav\">
              <p class=\"tagcard bg-light text-black bg-opacity-75 avenirbold\">Théâtre</p>
              <a href=\"#\"><img src=\"assets/img/favorite_card_black.png\" alt=\"favorite\"></a>
            </div>
            <div class=\"d-flex bg-dark bg-opacity-75 text-white cardtext\">
              <div>
                <h3>Le roi Jean</h3>
                <p class=\"iconloc\">L'opera de Paris</p>
                <p class=\"icondate\">29/08/2023</p>
                <p class=\"iconcontact\">Contacter: <a href=\"#\" class=\"avenirbold text-white\">Jean-Pierre</a></p>
              </div>
              <div>
                <a class=\"btn btn-red text-white avenirbold\" href=\"#\">Participer</a>
              </div>
            </div>
          </div><!-- CARD event BIG end  -->


          <div class=\"cardeventbig\"> <!-- CARD event BIG start  -->
            <div class=\"d-flex cardtagfav\">
              <p class=\"tagcard bg-light text-black bg-opacity-75 avenirbold\">Théâtre</p>
              <a href=\"#\"><img src=\"assets/img/favorite_card_black.png\" alt=\"favorite\"></a>
            </div>
            <div class=\"d-flex bg-dark bg-opacity-75 text-white cardtext\">
              <div>
                <h3>Le roi Jean</h3>
                <p class=\"iconloc\">L'opera de Paris</p>
                <p class=\"icondate\">29/08/2023</p>
                <p class=\"iconcontact\">Contacter: <a href=\"#\" class=\"avenirbold text-white\">Jean-Pierre</a></p>
              </div>
              <div>
                <a class=\"btn btn-red text-white avenirbold\" href=\"#\">Participer</a>
              </div>
            </div>
          </div><!-- CARD event BIG end  -->
          

    
        </article>
      </div>
      

  </div>

</main><!-- main end  -->
<footer><!-- footer start  -->
    <div class=\"container\">
       <div class=\"logotimeout\">
            <a href=\"#\">
                <img class=\"logo\" src=\"assets/img/logo-timeout-white.svg\" alt=\"Logo TimeOut\">
            </a>
       </div>
        
        <div class=\"row\">
            <article class=\"col-6 col-md-3 mobile\">
                <h4>Nous Suivre</h4>
                <div class=\"rs-icons\">
                    <a id=\"facebookicon\" href=\"#\"></a>
                    <a id=\"pinteresticon\" href=\"#\"></a>
                    <a id=\"twittericon\" href=\"#\"></a>
                    <a id=\"instagramicon\" href=\"#\"></a>
                </div>
            </article>
        </div>

        <div class=\"row\">
            <article id=\"aproposdenous\" class=\"col-xl-3 col-md-3 col-6\">
                <h4><a href=\"#\">À propos de nous</a></h4>
                <p><a href=\"#\">Les communiqués de presse</a></p>
                <p><a href=\"#\">Actionnaires</a></p>
                <p><a href=\"#\">Recrutement</a></p>
                <p><a href=\"#\">Avis de confidentialité</a></p>
                <p><a href=\"#\">Politique concernant les cookies</a></p>
                <p><a href=\"#\">Conditions d'utilisation</a></p>
                <p id=\"cookies\"><a href=\"#\">Gérer les cookies</a></p>
            </article>

            <article id=\"nouscontacter\" class=\"col-xl-3 col-md-3 col-6\">
                <h4><a href=\"#\">Nous contacter</a></h4>
                <p><a href=\"#\">Apparaitre sur Time Out Paris</a></p>
                <p><a href=\"#\">La publicité</a></p>
                <p><a href=\"#\">Time Out Market</a></p>
            </article>

            <article id=\"loffretimeout\" class=\"col-xl-3 col-md-3 col-6\">
                <h4><a href=\"#\">L'offre Time Out</a></h4>
                <p><a href=\"#\">Magazine papier</a></p>
                <p><a href=\"#\">Media kit</a></p>
                <p><a href=\"#\">Les Profils Premium</a></p>
                <p><a href=\"#\">Les leviers digitaux</a></p>
                <p><a href=\"#\">Time Out worldwide</a></p>
            </article>

            <article class=\"col-xl-3 col-md-3 col-6 noussuivre\">
                <h4>Nous Suivre</h4>
                <div class=\"rs-icons\">
                    <a id=\"facebookicon\" href=\"#\"></a>
                    <a id=\"pinteresticon\" href=\"#\"></a>
                    <a id=\"twittericon\" href=\"#\"></a>
                    <a id=\"instagramicon\" href=\"#\"></a>
                </div>
            </article>
        </div>
        <p class=\"sitemap\"><a href=\"#\">PLAN DU SITE</a></p>
        <p class=\"mentionslegales\">© 2023 Time Out England Limited and affiliated companies owned by Time Out Group
            Plc. All rights reserved. Time Out is a registered trademark of Time Out Digital Limited.</p>
    </div>
</footer><!-- footer end  -->
  
  ";
        // line 251
        $this->displayBlock('JavaScript', $context, $blocks);
        // line 255
        echo "
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 251
    public function block_JavaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JavaScript"));

        // line 252
        echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz\" crossorigin=\"anonymous\"></script>
<script src=\"/assets/js/dashboardtags.js\"></script> 
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  381 => 252,  374 => 251,  365 => 255,  363 => 251,  212 => 102,  207 => 99,  204 => 98,  195 => 96,  191 => 95,  186 => 92,  123 => 30,  119 => 27,  112 => 26,  101 => 17,  93 => 10,  86 => 9,  73 => 7,  66 => 26,  63 => 25,  59 => 22,  57 => 9,  54 => 8,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
{% block title %} <title> Hello Patrick ! </title> {% endblock %}

    {% block stylesheets %}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com%22%3E/\">
    <link rel=\" preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
        
        {# <link rel=\"stylesheet\" href=\"/assets/css/mat.css\">  #}
        <link rel=\"stylesheet\" href=\"/assets/css/21-07-23-style.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/usertags.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/mathieu.css\">

     {% endblock %}
</head>

{# {% extends 'base.html.twig' %} #}

{% block body %}
<body>
  
{# {{user.email}} #}

<header>

<div class=\"container\">
  <!-- navbar -->
  <nav class=\"navbar navbar-expand-lg bg-body-tertiary navbar-dark\">
    <div class=\"container-fluid\">
       
      <a href=\"#\"><img class=\"logo\" src=\"assets/img/logowhite.png\" alt=\"Logo gettogether\"></a>
    
     <!-- searchbar -->
      <form class=\"d-flex\" role=\"search\" id=\"searchbarheader\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Veuillez taper votre recherche d’évent\" id=\"navsearchevent\" aria-label=\"Search\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Localisation\" id=\"navsearchlocal\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success\" type=\"submit\"><img src=\"/assets/img/searchwhite.svg\" alt=\"\"></button>
      </form>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
       
        
      <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link chat\" href=\"#\">Chat</a>
          </li>
          <li class=\"nav-item\">     
            <a class=\"nav-link notif\" href=\"#\">Notifcations</a>
          </li>   
          <li class=\"nav-item\">
            <a class=\"nav-link user\">Profil</a>
          </li>
        </ul>
      
      </div>
    </div>
  </nav>
</div> <!-- container end  -->
</header><!-- header end  -->

<main><!-- main end  -->
  <div class=\"container\" id=\"dashboard\">
  
      <section class=\"welcometext mb-5\">
        <h1>Bienvenue Patrick sur ton Dashboard : “Get together “ !</h1>
        <h2>Voici les evenements qui peuvent t’intéresser :</h2>
      </section>
  
      <div class=\"row\">
        <div class=\"columnleft col-md-5 col-sm-12\">
          <div class=\"date\">            
            <a href=\"#\">Aujourd'hui</a>
            <a href=\"#\" class=\"inactif\">Cette semaine</a>
            <a href=\"#\" class=\"inactif\">Ce week-end</a>
            <a href=\"#\" class=\"inactif\">Ce mois-ci</a>
          </div>
          <div class=\"agenda\">
            <h3><span>Mon agenda</span></h3>
            <img src=\"/assets/img/placeholderagenda.png\" alt=\"\">
          </div>

{# PARTIE \"MES TAGS #}
<div class=\"tags text-center\" id=\"tags-resumey\">
    <h3><span>Mes tags</span></h3>
    <div>
{% for tag in tagsByCategory %}
        <p href=\"#\">{{ tag }}</p>
{% endfor %}
    </div>
    <a href=\"{{ path('app_dashboard_mestags') }}\" class=\"voirplus\"> Voir mes tags</a>
</div>
{# FIN DE PARTIE \"MES TAGS #}

          <div class=\"events\">
            <h3><span>Recommandation d'évent</span></h3>

           <div class=\"d-flex justify-content-start\">
              <div class=\"cardeventsmall\"> <!-- CARD event SMALL start  -->
                <div class=\"cardtagfav\">
                  <p class=\"tagcardsmall bg-light text-black bg-opacity-75 avenirbold\">Tag</p>
                </div>
                <div class=\"bg-dark bg-opacity-75 text-white cardtext\">
                  <div>
                    <h5>Le roi Jean</h5>
                    <p class=\"icondate\">29/08/2023</p>
                    <p class=\"iconloc\">L'opera de Paris</p>
                  </div>
                </div>
              </div><!-- CARD event SMALL end  -->
  
              <div class=\"cardeventsmall\"> <!-- CARD event SMALL start  -->
                <div class=\"cardtagfav\">
                  <p class=\"tagcardsmall bg-light text-black bg-opacity-75 avenirbold\">Tag</p>
                </div>
                <div class=\"bg-dark bg-opacity-75 text-white cardtext\">
                  <div>
                    <h5>Le roi Jean</h5>
                    <p class=\"icondate\">29/08/2023</p>
                    <p class=\"iconloc\">L'opera de Paris</p>
                  </div>
                </div>
              </div><!-- CARD event SMALL end  -->
           </div>
            <p>Vous ne participez pas encore à aucun event</p>
          </div>
        </div>
        
        <div class=\"columnspacer col-md-1 col-12\"></div>

        <article class=\"columnright col-md-6 col-12\">
          <h2>Aujourd'hui</h2>  
          <div class=\"cardeventbig\"> <!-- CARD event BIG start  -->
            <div class=\"d-flex cardtagfav\">
              <p class=\"tagcard bg-light text-black bg-opacity-75 avenirbold\">Théâtre</p>
              <a href=\"#\"><img src=\"assets/img/favorite_card_black.png\" alt=\"favorite\"></a>
            </div>
            <div class=\"d-flex bg-dark bg-opacity-75 text-white cardtext\">
              <div>
                <h3>Le roi Jean</h3>
                <p class=\"iconloc\">L'opera de Paris</p>
                <p class=\"icondate\">29/08/2023</p>
                <p class=\"iconcontact\">Contacter: <a href=\"#\" class=\"avenirbold text-white\">Jean-Pierre</a></p>
              </div>
              <div>
                <a class=\"btn btn-red text-white avenirbold\" href=\"#\">Participer</a>
              </div>
            </div>
          </div><!-- CARD event BIG end  -->


          <div class=\"cardeventbig\"> <!-- CARD event BIG start  -->
            <div class=\"d-flex cardtagfav\">
              <p class=\"tagcard bg-light text-black bg-opacity-75 avenirbold\">Théâtre</p>
              <a href=\"#\"><img src=\"assets/img/favorite_card_black.png\" alt=\"favorite\"></a>
            </div>
            <div class=\"d-flex bg-dark bg-opacity-75 text-white cardtext\">
              <div>
                <h3>Le roi Jean</h3>
                <p class=\"iconloc\">L'opera de Paris</p>
                <p class=\"icondate\">29/08/2023</p>
                <p class=\"iconcontact\">Contacter: <a href=\"#\" class=\"avenirbold text-white\">Jean-Pierre</a></p>
              </div>
              <div>
                <a class=\"btn btn-red text-white avenirbold\" href=\"#\">Participer</a>
              </div>
            </div>
          </div><!-- CARD event BIG end  -->
          

    
        </article>
      </div>
      

  </div>

</main><!-- main end  -->
<footer><!-- footer start  -->
    <div class=\"container\">
       <div class=\"logotimeout\">
            <a href=\"#\">
                <img class=\"logo\" src=\"assets/img/logo-timeout-white.svg\" alt=\"Logo TimeOut\">
            </a>
       </div>
        
        <div class=\"row\">
            <article class=\"col-6 col-md-3 mobile\">
                <h4>Nous Suivre</h4>
                <div class=\"rs-icons\">
                    <a id=\"facebookicon\" href=\"#\"></a>
                    <a id=\"pinteresticon\" href=\"#\"></a>
                    <a id=\"twittericon\" href=\"#\"></a>
                    <a id=\"instagramicon\" href=\"#\"></a>
                </div>
            </article>
        </div>

        <div class=\"row\">
            <article id=\"aproposdenous\" class=\"col-xl-3 col-md-3 col-6\">
                <h4><a href=\"#\">À propos de nous</a></h4>
                <p><a href=\"#\">Les communiqués de presse</a></p>
                <p><a href=\"#\">Actionnaires</a></p>
                <p><a href=\"#\">Recrutement</a></p>
                <p><a href=\"#\">Avis de confidentialité</a></p>
                <p><a href=\"#\">Politique concernant les cookies</a></p>
                <p><a href=\"#\">Conditions d'utilisation</a></p>
                <p id=\"cookies\"><a href=\"#\">Gérer les cookies</a></p>
            </article>

            <article id=\"nouscontacter\" class=\"col-xl-3 col-md-3 col-6\">
                <h4><a href=\"#\">Nous contacter</a></h4>
                <p><a href=\"#\">Apparaitre sur Time Out Paris</a></p>
                <p><a href=\"#\">La publicité</a></p>
                <p><a href=\"#\">Time Out Market</a></p>
            </article>

            <article id=\"loffretimeout\" class=\"col-xl-3 col-md-3 col-6\">
                <h4><a href=\"#\">L'offre Time Out</a></h4>
                <p><a href=\"#\">Magazine papier</a></p>
                <p><a href=\"#\">Media kit</a></p>
                <p><a href=\"#\">Les Profils Premium</a></p>
                <p><a href=\"#\">Les leviers digitaux</a></p>
                <p><a href=\"#\">Time Out worldwide</a></p>
            </article>

            <article class=\"col-xl-3 col-md-3 col-6 noussuivre\">
                <h4>Nous Suivre</h4>
                <div class=\"rs-icons\">
                    <a id=\"facebookicon\" href=\"#\"></a>
                    <a id=\"pinteresticon\" href=\"#\"></a>
                    <a id=\"twittericon\" href=\"#\"></a>
                    <a id=\"instagramicon\" href=\"#\"></a>
                </div>
            </article>
        </div>
        <p class=\"sitemap\"><a href=\"#\">PLAN DU SITE</a></p>
        <p class=\"mentionslegales\">© 2023 Time Out England Limited and affiliated companies owned by Time Out Group
            Plc. All rights reserved. Time Out is a registered trademark of Time Out Digital Limited.</p>
    </div>
</footer><!-- footer end  -->
  
  {% block JavaScript %}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz\" crossorigin=\"anonymous\"></script>
<script src=\"/assets/js/dashboardtags.js\"></script> 
    {% endblock %}

</body>
{% endblock %}
", "dashboard/index.html.twig", "/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/templates/dashboard/index.html.twig");
    }
}
