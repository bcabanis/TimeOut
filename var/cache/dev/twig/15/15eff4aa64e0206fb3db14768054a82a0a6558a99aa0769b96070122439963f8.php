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

/* event/categories2.html.twig */
class __TwigTemplate_992fd0f90fce936a33978bde7f944d2a7c8db1eed3859bea3e334b2dc142154d extends Template
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
            'javascript' => [$this, 'block_javascript'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/categories2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
    <html lang=\"fr\">
    <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    <!-- title --> 
    <title> ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " </title>

    <!-- styles --> 
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('javascript', $context, $blocks);
        // line 21
        echo "    </head>

        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 253
        echo "
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "TimeOut gettogether - Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link rel=\"stylesheet\" href=\"assets/css/21-07-23-style.css\"> 
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
    <!-- fonts --> 
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "        <body> <!-- navbar -->
        <header>
        <div class=\"container\">    
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
  </nav> </div> <!-- container end  --> </header><!-- header end  -->

<main><!-- main end  -->
  <div class=\"container\" id=\"dashboard\">
  
      <section class=\"welcometext mb-5\">
        <h1>Bienvenue ";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 63, $this->source); })()), "html", null, true);
        echo " sur ton Dashboard : “Get together “ !</h1>
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

          <div class=\"tags text-center\">
            <h3><span>Mes tags</span></h3>
            <div>
              <p href=\"#\">Musique</p>
              <p href=\"#\">Theatre</p>
              <p href=\"#\">Jazz</p>
              <p href=\"#\">Hip&nbsp;Hop</p>
              <p href=\"#\">Cinéma</p>
              <p href=\"#\">Environnement</p>
            </div>    
            <div>
              <p href=\"#\">Theatre</p>
              <p href=\"#\">Musique</p>
              <p href=\"#\">Environnement</p>
              <p href=\"#\">Jazz</p>
              <p href=\"#\">Hip&nbsp;Hop</p>
              <p href=\"#\">Cinéma</p>              
            </div>            
            <a href=\"#\" class=\"voirplus\"> Voir mes tags</a>
          </div>


          <div class=\"events\">
            <h3><span>Recommondation d'évent</span></h3>

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
  
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz\" crossorigin=\"anonymous\"></script>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "event/categories2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  176 => 63,  135 => 24,  128 => 23,  115 => 20,  102 => 12,  95 => 11,  82 => 8,  72 => 253,  70 => 23,  66 => 21,  64 => 20,  61 => 19,  59 => 11,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
    <html lang=\"fr\">
    <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    <!-- title --> 
    <title> {% block title %}TimeOut gettogether - Dashboard{% endblock %} </title>

    <!-- styles --> 
    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"assets/css/21-07-23-style.css\"> 
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
    <!-- fonts --> 
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap\" rel=\"stylesheet\">
    {% endblock %}

    {% block javascript %}  {% endblock %}
    </head>

        {% block body %}
        <body> <!-- navbar -->
        <header>
        <div class=\"container\">    
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
  </nav> </div> <!-- container end  --> </header><!-- header end  -->

<main><!-- main end  -->
  <div class=\"container\" id=\"dashboard\">
  
      <section class=\"welcometext mb-5\">
        <h1>Bienvenue {{ firstName }} sur ton Dashboard : “Get together “ !</h1>
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

          <div class=\"tags text-center\">
            <h3><span>Mes tags</span></h3>
            <div>
              <p href=\"#\">Musique</p>
              <p href=\"#\">Theatre</p>
              <p href=\"#\">Jazz</p>
              <p href=\"#\">Hip&nbsp;Hop</p>
              <p href=\"#\">Cinéma</p>
              <p href=\"#\">Environnement</p>
            </div>    
            <div>
              <p href=\"#\">Theatre</p>
              <p href=\"#\">Musique</p>
              <p href=\"#\">Environnement</p>
              <p href=\"#\">Jazz</p>
              <p href=\"#\">Hip&nbsp;Hop</p>
              <p href=\"#\">Cinéma</p>              
            </div>            
            <a href=\"#\" class=\"voirplus\"> Voir mes tags</a>
          </div>


          <div class=\"events\">
            <h3><span>Recommondation d'évent</span></h3>

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
  
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz\" crossorigin=\"anonymous\"></script>
</body>
{% endblock %}

</html>

", "event/categories2.html.twig", "/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/templates/event/categories2.html.twig");
    }
}
