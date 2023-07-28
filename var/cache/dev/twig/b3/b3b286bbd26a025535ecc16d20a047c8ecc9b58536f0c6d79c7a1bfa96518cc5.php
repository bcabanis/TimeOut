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

/* event/mestags.html.twig */
class __TwigTemplate_af9984764641ccea68c706719b9d115d330096e05543ef5a461b13351c9838a8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/mestags.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title> ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " </title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "</head>

";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 314
        echo "</body>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mes tags";
        
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
        <link rel=\"stylesheet\" href=\"/assets/css/21-07-23-style.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/mat.css\"> 
        <link rel=\"stylesheet\" href=\"/assets/css/usertags.css\"> 
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

    <section id=\"mestags\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"content col-12 col-xl-8\">
                    <div class=\"entete\">
                        <h1>Mes tags</h1>
                        <form class=\"form-tags\" action=\"#\" method=\"post\">
                            <select name=\"categories\" id=\"categories\" multiple>
                                <option value=\"Arts\">Arts</option>
                                <option value=\"Business\">Business</option>
                                <option value=\"Brunch-apéro\">Brunch-apéro</option>
                                <option value=\"Communauté\">Communauté</option>
                                <option value=\"Film-médias\">Film-médias</option>
                                <option value=\"Musique\">Musique</option>
                                <option value=\"Mode\">Mode</option>
                                <option value=\"Sports-Fitness\">Sports-Fitness</option>
                                <option value=\"Santé\">Santé</option>
                            </select>
                          
                            <input type=\"search\" name=\"tagsearch\" id=\"tagsearch\" placeholder=\"Rechercher par tag\">
                        </form>
                    </div>

                    <article id=\"Arts\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/art-category-icon.svg\" alt=\"picto art\"> Arts
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Comedy</button>
                            <button class=\"tag-choice\">Sculpture</button>
                            <button class=\"tag-choice\">Design</button>
                            <button class=\"tag-choice\">Bijoux</button>
                            <button class=\"tag-choice\">Ballet</button>
                            <button class=\"tag-choice\">Chorales</button>
                            <button class=\"tag-choice\">Comédies Musicales</button>
                            <button class=\"tag-choice\">Danse</button>
                            <button class=\"tag-choice\">Littérature</button>
                            <button class=\"tag-choice\">Orchestres</button>
                            <button class=\"tag-choice\">Peinture</button>
                        </div>
                    </article>

                    <article id=\"Business\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/business-category-icon.svg\" alt=\"picto business\"> Business
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">ONG</button>
                            <button class=\"tag-choice\">Start Ups</button>
                            <button class=\"tag-choice\">Associations</button>
                            <button class=\"tag-choice\">Carrières</button>
                            <button class=\"tag-choice\">Investissement</button>
                            <button class=\"tag-choice\">Immobilier</button>
                            <button class=\"tag-choice\">Marketing</button>
                            <button class=\"tag-choice\">Medias</button>
                            <button class=\"tag-choice\">Petites entreprises</button>
                            <button class=\"tag-choice\">Autres</button>
                        </div>
                    </article>

                    <article id=\"Brunch-apéro\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/brunch-apero-category-icon.svg\" alt=\"picto Brunch & apéro\"> Brunch & apéro
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Apéro</button>
                            <button class=\"tag-choice\">Bière</button>
                            <button class=\"tag-choice\">Brunch</button>
                            <button class=\"tag-choice\">Culinaire</button>
                            <button class=\"tag-choice\">Restaurants</button>
                            <button class=\"tag-choice\">Spiritueux</button>
                            <button class=\"tag-choice\">Autres</button>
                        </div>
                    </article>

                    <article id=\"Communauté\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/commuanute-category-icon.svg\" alt=\"picto Communauté\"> Communauté
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Actions Locales</button>
                            <button class=\"tag-choice\">Bénévolat</button>
                            <button class=\"tag-choice\">Cours particuliers</button>
                            <button class=\"tag-choice\">Histoire</button>
                            <button class=\"tag-choice\">Langues</button>
                            <button class=\"tag-choice\">Nationalité</button>
                            <button class=\"tag-choice\">Parrainages</button>
                            <button class=\"tag-choice\">Participatif</button>
                            <button class=\"tag-choice\">Autres</button>
                        </div>
                    </article>

                    <article id=\"Film-médias\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/film-medias-category-icon.svg\" alt=\"picto Film & médias\"> Film & médias
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Anime</button>
                            <button class=\"tag-choice\">Adult</button>
                            <button class=\"tag-choice\">Ciné-débat</button>
                            <button class=\"tag-choice\">Comédie</button>
                            <button class=\"tag-choice\">Comics</button>
                            <button class=\"tag-choice\">Film</button>
                            <button class=\"tag-choice\">Gaming</button>
                            <button class=\"tag-choice\">Autres</button>
                        </div>
                    </article>

                    <article id=\"Musique\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/musique-category-icon.svg\" alt=\"picto Musique\"> Musique
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Alternatif</button>
                            <button class=\"tag-choice\">Blues</button>
                            <button class=\"tag-choice\">Classique</button>
                            <button class=\"tag-choice\">Dj/Dance</button>
                            <button class=\"tag-choice\">Concert</button>
                            <button class=\"tag-choice\">Electro</button>
                            <button class=\"tag-choice\">Festival</button>
                            <button class=\"tag-choice\">Folk</button>
                            <button class=\"tag-choice\">Hip Hop/Rap</button>
                            <button class=\"tag-choice\">Jazz</button>
                            <button class=\"tag-choice\">Jam</button>
                            <button class=\"tag-choice\">Techno</button>
                            <button class=\"tag-choice\">Reggae</button>
                            <button class=\"tag-choice\">Live Music</button>
                        </div>
                    </article>

                    <article id=\"Mode\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/mode-category-icon.svg\" alt=\"picto Mode\"> Mode
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Accesoires</button>
                            <button class=\"tag-choice\">Beauté</button>
                            <button class=\"tag-choice\">Vide-grenier</button>
                            <button class=\"tag-choice\">Maquillage</button>
                            <button class=\"tag-choice\">Autres</button>
                        </div>
                    </article>

                    <article id=\"Sports-Fitness\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/sport-category-icon.svg\" alt=\" picto Sports & Fitness\"> Sports & Fitness
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Arts Martiaux</button>
                            <button class=\"tag-choice\">Basket</button>
                            <button class=\"tag-choice\">Cyclisme</button>
                            <button class=\"tag-choice\">Football</button>
                            <button class=\"tag-choice\">Golf</button>
                            <button class=\"tag-choice\">Hockey sur Gazon</button>
                            <button class=\"tag-choice\">Marche</button>
                            <button class=\"tag-choice\">Moto</button>
                            <button class=\"tag-choice\">Tennis</button>
                            <button class=\"tag-choice\">Yoga</button>
                        </div>
                    </article>

                    <article id=\"Santé\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/sante-category-icon.svg\" alt=\" picto Santé\"> Santé
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Bien-être</button>
                            <button class=\"tag-choice\">Hypnose</button>
                            <button class=\"tag-choice\">Méditation</button>
                            <button class=\"tag-choice\">Santé mentale</button>
                            <button class=\"tag-choice\">Spa</button>
                            <button class=\"tag-choice\">Yoga</button>
                            <button class=\"tag-choice\">Autres</button>
                        </div>
                    </article>

                    <button id=\"enregistrer-changements\" class=\"enregistrer-changements\">Enregistrer les changements</button>

                </div>
                <div id=\"active-buttons-container\" class=\"empty\"> Liste des événements enregistrés </div>
            </div>
        </div>
    </section>

    <footer><!-- footer start  -->
    <div class=\"container\">
       <div class=\"logotimeout\">
            <a href=\"#\">
                <img class=\"logo\" src=\"/assets/img/logo-timeout-white.svg\" alt=\"Logo TimeOut\">
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

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz\"
        crossorigin=\"anonymous\"></script>
<script src=\"/assets/js/usertags.js\"></script> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "event/mestags.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 22,  106 => 21,  91 => 10,  84 => 9,  71 => 7,  64 => 314,  62 => 21,  58 => 19,  56 => 9,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title> {% block title %}Mes tags{% endblock %} </title>

    {% block stylesheets %}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com%22%3E/\">
    <link rel=\" preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"/assets/css/21-07-23-style.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/mat.css\"> 
        <link rel=\"stylesheet\" href=\"/assets/css/usertags.css\"> 
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

    <section id=\"mestags\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"content col-12 col-xl-8\">
                    <div class=\"entete\">
                        <h1>Mes tags</h1>
                        <form class=\"form-tags\" action=\"#\" method=\"post\">
                            <select name=\"categories\" id=\"categories\" multiple>
                                <option value=\"Arts\">Arts</option>
                                <option value=\"Business\">Business</option>
                                <option value=\"Brunch-apéro\">Brunch-apéro</option>
                                <option value=\"Communauté\">Communauté</option>
                                <option value=\"Film-médias\">Film-médias</option>
                                <option value=\"Musique\">Musique</option>
                                <option value=\"Mode\">Mode</option>
                                <option value=\"Sports-Fitness\">Sports-Fitness</option>
                                <option value=\"Santé\">Santé</option>
                            </select>
                          
                            <input type=\"search\" name=\"tagsearch\" id=\"tagsearch\" placeholder=\"Rechercher par tag\">
                        </form>
                    </div>

                    <article id=\"Arts\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/art-category-icon.svg\" alt=\"picto art\"> Arts
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Comedy</button>
                            <button class=\"tag-choice\">Sculpture</button>
                            <button class=\"tag-choice\">Design</button>
                            <button class=\"tag-choice\">Bijoux</button>
                            <button class=\"tag-choice\">Ballet</button>
                            <button class=\"tag-choice\">Chorales</button>
                            <button class=\"tag-choice\">Comédies Musicales</button>
                            <button class=\"tag-choice\">Danse</button>
                            <button class=\"tag-choice\">Littérature</button>
                            <button class=\"tag-choice\">Orchestres</button>
                            <button class=\"tag-choice\">Peinture</button>
                        </div>
                    </article>

                    <article id=\"Business\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/business-category-icon.svg\" alt=\"picto business\"> Business
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">ONG</button>
                            <button class=\"tag-choice\">Start Ups</button>
                            <button class=\"tag-choice\">Associations</button>
                            <button class=\"tag-choice\">Carrières</button>
                            <button class=\"tag-choice\">Investissement</button>
                            <button class=\"tag-choice\">Immobilier</button>
                            <button class=\"tag-choice\">Marketing</button>
                            <button class=\"tag-choice\">Medias</button>
                            <button class=\"tag-choice\">Petites entreprises</button>
                            <button class=\"tag-choice\">Autres</button>
                        </div>
                    </article>

                    <article id=\"Brunch-apéro\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/brunch-apero-category-icon.svg\" alt=\"picto Brunch & apéro\"> Brunch & apéro
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Apéro</button>
                            <button class=\"tag-choice\">Bière</button>
                            <button class=\"tag-choice\">Brunch</button>
                            <button class=\"tag-choice\">Culinaire</button>
                            <button class=\"tag-choice\">Restaurants</button>
                            <button class=\"tag-choice\">Spiritueux</button>
                            <button class=\"tag-choice\">Autres</button>
                        </div>
                    </article>

                    <article id=\"Communauté\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/commuanute-category-icon.svg\" alt=\"picto Communauté\"> Communauté
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Actions Locales</button>
                            <button class=\"tag-choice\">Bénévolat</button>
                            <button class=\"tag-choice\">Cours particuliers</button>
                            <button class=\"tag-choice\">Histoire</button>
                            <button class=\"tag-choice\">Langues</button>
                            <button class=\"tag-choice\">Nationalité</button>
                            <button class=\"tag-choice\">Parrainages</button>
                            <button class=\"tag-choice\">Participatif</button>
                            <button class=\"tag-choice\">Autres</button>
                        </div>
                    </article>

                    <article id=\"Film-médias\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/film-medias-category-icon.svg\" alt=\"picto Film & médias\"> Film & médias
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Anime</button>
                            <button class=\"tag-choice\">Adult</button>
                            <button class=\"tag-choice\">Ciné-débat</button>
                            <button class=\"tag-choice\">Comédie</button>
                            <button class=\"tag-choice\">Comics</button>
                            <button class=\"tag-choice\">Film</button>
                            <button class=\"tag-choice\">Gaming</button>
                            <button class=\"tag-choice\">Autres</button>
                        </div>
                    </article>

                    <article id=\"Musique\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/musique-category-icon.svg\" alt=\"picto Musique\"> Musique
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Alternatif</button>
                            <button class=\"tag-choice\">Blues</button>
                            <button class=\"tag-choice\">Classique</button>
                            <button class=\"tag-choice\">Dj/Dance</button>
                            <button class=\"tag-choice\">Concert</button>
                            <button class=\"tag-choice\">Electro</button>
                            <button class=\"tag-choice\">Festival</button>
                            <button class=\"tag-choice\">Folk</button>
                            <button class=\"tag-choice\">Hip Hop/Rap</button>
                            <button class=\"tag-choice\">Jazz</button>
                            <button class=\"tag-choice\">Jam</button>
                            <button class=\"tag-choice\">Techno</button>
                            <button class=\"tag-choice\">Reggae</button>
                            <button class=\"tag-choice\">Live Music</button>
                        </div>
                    </article>

                    <article id=\"Mode\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/mode-category-icon.svg\" alt=\"picto Mode\"> Mode
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Accesoires</button>
                            <button class=\"tag-choice\">Beauté</button>
                            <button class=\"tag-choice\">Vide-grenier</button>
                            <button class=\"tag-choice\">Maquillage</button>
                            <button class=\"tag-choice\">Autres</button>
                        </div>
                    </article>

                    <article id=\"Sports-Fitness\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/sport-category-icon.svg\" alt=\" picto Sports & Fitness\"> Sports & Fitness
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Arts Martiaux</button>
                            <button class=\"tag-choice\">Basket</button>
                            <button class=\"tag-choice\">Cyclisme</button>
                            <button class=\"tag-choice\">Football</button>
                            <button class=\"tag-choice\">Golf</button>
                            <button class=\"tag-choice\">Hockey sur Gazon</button>
                            <button class=\"tag-choice\">Marche</button>
                            <button class=\"tag-choice\">Moto</button>
                            <button class=\"tag-choice\">Tennis</button>
                            <button class=\"tag-choice\">Yoga</button>
                        </div>
                    </article>

                    <article id=\"Santé\">
                        <h2 class=\"label-categorie\">
                            <img src=\"/assets/img/sante-category-icon.svg\" alt=\" picto Santé\"> Santé
                        </h2>
                        <div class=\"tag-management\">
                            <button class=\"tag-choice\">Bien-être</button>
                            <button class=\"tag-choice\">Hypnose</button>
                            <button class=\"tag-choice\">Méditation</button>
                            <button class=\"tag-choice\">Santé mentale</button>
                            <button class=\"tag-choice\">Spa</button>
                            <button class=\"tag-choice\">Yoga</button>
                            <button class=\"tag-choice\">Autres</button>
                        </div>
                    </article>

                    <button id=\"enregistrer-changements\" class=\"enregistrer-changements\">Enregistrer les changements</button>

                </div>
                <div id=\"active-buttons-container\" class=\"empty\"> Liste des événements enregistrés </div>
            </div>
        </div>
    </section>

    <footer><!-- footer start  -->
    <div class=\"container\">
       <div class=\"logotimeout\">
            <a href=\"#\">
                <img class=\"logo\" src=\"/assets/img/logo-timeout-white.svg\" alt=\"Logo TimeOut\">
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

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz\"
        crossorigin=\"anonymous\"></script>
<script src=\"/assets/js/usertags.js\"></script> 
{% endblock %}
</body>", "event/mestags.html.twig", "/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/templates/event/mestags.html.twig");
    }
}
