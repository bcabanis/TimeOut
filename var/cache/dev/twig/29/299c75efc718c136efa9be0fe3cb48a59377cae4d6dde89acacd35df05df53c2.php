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

/* event/mesevents.html.twig */
class __TwigTemplate_9a34eb5855990fb72f4402c0fcb1de6d3ee5076664cbf366291cd90c9f0208fe extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/mesevents.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "</head>


";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 230
        echo "</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "TimeOut gettogether - Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <!-- fonts --> 
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap\" rel=\"stylesheet\">
    <!-- styles --> 
    <link rel=\"stylesheet\" href=\"/assets/css/21-07-23-style.css\">
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "<body>
<header>

<div class=\"container\">
  <!-- navbar -->
  <nav class=\"navbar navbar-expand-lg bg-body-tertiary navbar-dark\">
    <div class=\"container-fluid\">
       
      <a href=\"#\"><img class=\"logo\" src=\"/assets/img/logowhite.png\" alt=\"Logo gettogether\"></a>
    
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

<main><!-- main start  -->
  <div class=\"container\" id=\"mesevents\">
  
    <div class=\"welcometext d-flex\">
      <h1>Mes événements</h1>

        

      <a href=\"#\">Supprimer des événements</a>
      <a href=\"#\">Du plus récent au plus ancien</a>
    </div>

    <div class=\"wholescreen\">
      <h2><span>Aujourd'hui</span></h2>
    </div>

    <article class=\"columnright col-md-6 col-12\">
      <div class=\"cardeventbig\"> <!-- CARD event BIG start  -->
        <div class=\"d-flex cardtagfav\">
          <p class=\"tagcard bg-light text-black bg-opacity-75 avenirbold\">Théâtre</p>
          <a href=\"#\"><img src=\"/assets/img/favorite_card_black.png\" alt=\"favorite\"></a>
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
    

    <h1 class=\"mt-5\"><span>Événements similaire</span></h1>

    <form action=\"\" method=\"post\">
      <input type=\"text\" placeholder=\"Recherche des événements\" id=\"eventssimilaire\" >
    </form>
     
    <div class=\"d-flex flex-nowrap overflow-hidden justify-content-start\">
      
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
      </div><!-- CARD event end  -->
  
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
    <a class=\"safchanges\" href=\"#\">Enregistrer les changements</a>
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "event/mesevents.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 22,  107 => 21,  93 => 10,  86 => 9,  73 => 7,  65 => 230,  63 => 21,  58 => 18,  56 => 9,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    <title>{% block title %}TimeOut gettogether - Dashboard{% endblock %}</title>
    
    {% block stylesheets %}
    <!-- fonts --> 
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap\" rel=\"stylesheet\">
    <!-- styles --> 
    <link rel=\"stylesheet\" href=\"/assets/css/21-07-23-style.css\">
   {% endblock %}
</head>


{% block body %}
<body>
<header>

<div class=\"container\">
  <!-- navbar -->
  <nav class=\"navbar navbar-expand-lg bg-body-tertiary navbar-dark\">
    <div class=\"container-fluid\">
       
      <a href=\"#\"><img class=\"logo\" src=\"/assets/img/logowhite.png\" alt=\"Logo gettogether\"></a>
    
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

<main><!-- main start  -->
  <div class=\"container\" id=\"mesevents\">
  
    <div class=\"welcometext d-flex\">
      <h1>Mes événements</h1>

        

      <a href=\"#\">Supprimer des événements</a>
      <a href=\"#\">Du plus récent au plus ancien</a>
    </div>

    <div class=\"wholescreen\">
      <h2><span>Aujourd'hui</span></h2>
    </div>

    <article class=\"columnright col-md-6 col-12\">
      <div class=\"cardeventbig\"> <!-- CARD event BIG start  -->
        <div class=\"d-flex cardtagfav\">
          <p class=\"tagcard bg-light text-black bg-opacity-75 avenirbold\">Théâtre</p>
          <a href=\"#\"><img src=\"/assets/img/favorite_card_black.png\" alt=\"favorite\"></a>
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
    

    <h1 class=\"mt-5\"><span>Événements similaire</span></h1>

    <form action=\"\" method=\"post\">
      <input type=\"text\" placeholder=\"Recherche des événements\" id=\"eventssimilaire\" >
    </form>
     
    <div class=\"d-flex flex-nowrap overflow-hidden justify-content-start\">
      
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
      </div><!-- CARD event end  -->
  
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
    <a class=\"safchanges\" href=\"#\">Enregistrer les changements</a>
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

{% endblock %}
</body>
</html>", "event/mesevents.html.twig", "/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/templates/event/mesevents.html.twig");
    }
}
