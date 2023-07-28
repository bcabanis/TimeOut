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

/* dashboard/mainboard.html.twig */
class __TwigTemplate_a265306c4bd8287bf2ad07a18eb28f0935ef4b3b450ce51140ded3dbcd3a2cc6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/mainboard.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
    <html lang=\"fr\">
    
    
    <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    <!-- title --> 
    <title> ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo " </title>

    <!-- styles --> 
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('javascript', $context, $blocks);
        // line 26
        echo "
    </head>

        
        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 302
        echo "
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "TimeOut gettogether - Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "    
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
   
    <!-- fonts --> 
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"./assets/css/dashboard.css\">
    <link rel=\"stylesheet\" href=\"./assets/css/21-07-23-style.css\"> 
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "        <body> 
        <!-- navbar -->
        <header>
        <div class=\"container\">    
        <nav class=\"navbar navbar-expand-lg bg-body-tertiary navbar-dark\">
        <div class=\"container-fluid\">
        <a href=\"#\"><img class=\"logo\" src=\"./assets/img/logowhite.png\" alt=\"Logo gettogether\"></a> 
    
     <!-- searchbar -->
      <form class=\"d-flex\" role=\"search\" id=\"searchbarheader\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Veuillez taper votre recherche d’évent\" id=\"navsearchevent\" aria-label=\"Search\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Localisation\" id=\"navsearchlocal\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success\" type=\"submit\"><img src=\"./assets/img/searchwhite.svg\" alt=\"\"></button>
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
      </nav> </div> <!-- container end  --> 
      </header><!-- header end  -->




<main><!-- main end  -->
  <div class=\"container\" id=\"dashboard\">
  
      <section class=\"welcometext mb-5\">
        <h1>Bienvenue ";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 72, $this->source); })()), "html", null, true);
        echo " sur ton Dashboard : “Get together “ !</h1>
        <h2>Voici les evenements qui peuvent t’intéresser :</h2>
      </section>
  
  <div class=\"flexOnMyBody\">
      <div class=\"row flexOnMyBody\">
        <div class=\"columnleft col-md-5 col-sm-12\">
          <div class=\"date\">            
            <a href=\"#\">Aujourd'hui</a>
            <a href=\"#\" class=\"inactif\">Cette semaine</a>
            <a href=\"#\" class=\"inactif\">Ce week-end</a>
            <a href=\"#\" class=\"inactif\">Ce mois-ci</a>
          </div>
          <div class=\"agenda\">
            <h3><span>Mon agenda</span></h3>
            <img src=\"./assets/img/placeholderagenda.png\" alt=\"\">
          </div>


";
        // line 92
        echo "            <div class=\"tags text-center\">
            <h3><span>Mes tags</span></h3>

            
            <h1>Liste des catégories</h1>
                        <div class=\"example-wrapper\">
            <br>
            ";
        // line 99
        $context["tagCounter"] = 0;
        // line 100
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 101
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "subCategories", [], "any", false, false, false, 101));
            foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
                // line 102
                echo "            ";
                if (((isset($context["tagCounter"]) || array_key_exists("tagCounter", $context) ? $context["tagCounter"] : (function () { throw new RuntimeError('Variable "tagCounter" does not exist.', 102, $this->source); })()) < 12)) {
                    // line 103
                    echo "            <label>
            <checkbox class=\"category-btn supertags\" onclick=\"toggleSubCategory(this)\" data-category-name=\"";
                    // line 104
                    echo twig_escape_filter($this->env, $context["subCategory"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["subCategory"], "html", null, true);
                    echo "</checkbox>
            </label>
            <br>
            ";
                } else {
                    // line 108
                    echo "            <!-- Les boutons supplémentaires iront dans le menu déroulant -->
            ";
                }
                // line 110
                echo "            ";
                $context["tagCounter"] = ((isset($context["tagCounter"]) || array_key_exists("tagCounter", $context) ? $context["tagCounter"] : (function () { throw new RuntimeError('Variable "tagCounter" does not exist.', 110, $this->source); })()) + 1);
                // line 111
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "            </div>
          </div>

      ";
        // line 117
        echo "      <div class=\"dropdown tags text-center supertags\" id=\"tags-dropdown\" style=\"display : none;\">
      ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 118, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 119
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "subCategories", [], "any", false, false, false, 119));
            foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
                // line 120
                echo "        <label>
        <checkbox class=\"category-btn supertags\" onclick=\"toggleSubCategory(this)\" data-category-name=\"";
                // line 121
                echo twig_escape_filter($this->env, $context["subCategory"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["subCategory"], "html", null, true);
                echo "</checkbox>
        </label>
        <br>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "    </div>
     <!-- Bouton pour afficher le menu déroulant -->
    <button id=\"see-more-tags-btn\">Voir mes tags</button>
    </div>


           ";
        // line 133
        echo "    <div class=\"event-list\">
      ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 135
            echo "
      <div class=\"event-item\" 
      data-event-name=\"";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 137), "html", null, true);
            echo "\" 
      data-event-description=\"";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 138), "html", null, true);
            echo "\" 
      data-event-address=\"";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "address", [], "any", false, false, false, 139), "html", null, true);
            echo "\">

          <h3>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 141), "html", null, true);
            echo "</h3>
          ";
            // line 143
            echo "          <p>";
            echo twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 143);
            echo "</p>
           <!-- Affichez les autres détails de l'événement ici si nécessaire -->
      </div>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "    </div>
";
        // line 150
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
              <a href=\"#\"><img src=\"./assets/img/favorite_card_black.png\" alt=\"favorite\"></a>
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
              <a href=\"#\"><img src=\"./assets/img/favorite_card_black.png\" alt=\"favorite\"></a>
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
             
        
      </div>
  </div> 
  </article> 


</main><!-- main end  -->
<footer><!-- footer start  -->
    <div class=\"container\">
       <div class=\"logotimeout\">
            <a href=\"#\">
                <img class=\"logo\" src=\"./assets/img/logo-timeout-white.svg\" alt=\"Logo TimeOut\">
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
            <script src=\"./assets/js/tags.js\"></script> ";
        // line 300
        echo "</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/mainboard.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  502 => 300,  351 => 150,  348 => 148,  336 => 143,  332 => 141,  327 => 139,  323 => 138,  319 => 137,  315 => 135,  311 => 134,  308 => 133,  300 => 126,  294 => 125,  282 => 121,  279 => 120,  274 => 119,  270 => 118,  267 => 117,  262 => 113,  256 => 112,  250 => 111,  247 => 110,  243 => 108,  234 => 104,  231 => 103,  228 => 102,  223 => 101,  218 => 100,  216 => 99,  207 => 92,  185 => 72,  142 => 31,  135 => 30,  122 => 25,  106 => 14,  99 => 13,  86 => 10,  76 => 302,  74 => 30,  68 => 26,  66 => 25,  63 => 24,  61 => 13,  55 => 10,  44 => 1,);
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
    
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
   
    <!-- fonts --> 
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"./assets/css/dashboard.css\">
    <link rel=\"stylesheet\" href=\"./assets/css/21-07-23-style.css\"> 
    {% endblock %}

    {% block javascript %}  {% endblock %}

    </head>

        
        {% block body %}
        <body> 
        <!-- navbar -->
        <header>
        <div class=\"container\">    
        <nav class=\"navbar navbar-expand-lg bg-body-tertiary navbar-dark\">
        <div class=\"container-fluid\">
        <a href=\"#\"><img class=\"logo\" src=\"./assets/img/logowhite.png\" alt=\"Logo gettogether\"></a> 
    
     <!-- searchbar -->
      <form class=\"d-flex\" role=\"search\" id=\"searchbarheader\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Veuillez taper votre recherche d’évent\" id=\"navsearchevent\" aria-label=\"Search\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Localisation\" id=\"navsearchlocal\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success\" type=\"submit\"><img src=\"./assets/img/searchwhite.svg\" alt=\"\"></button>
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
      </nav> </div> <!-- container end  --> 
      </header><!-- header end  -->




<main><!-- main end  -->
  <div class=\"container\" id=\"dashboard\">
  
      <section class=\"welcometext mb-5\">
        <h1>Bienvenue {{ firstName }} sur ton Dashboard : “Get together “ !</h1>
        <h2>Voici les evenements qui peuvent t’intéresser :</h2>
      </section>
  
  <div class=\"flexOnMyBody\">
      <div class=\"row flexOnMyBody\">
        <div class=\"columnleft col-md-5 col-sm-12\">
          <div class=\"date\">            
            <a href=\"#\">Aujourd'hui</a>
            <a href=\"#\" class=\"inactif\">Cette semaine</a>
            <a href=\"#\" class=\"inactif\">Ce week-end</a>
            <a href=\"#\" class=\"inactif\">Ce mois-ci</a>
          </div>
          <div class=\"agenda\">
            <h3><span>Mon agenda</span></h3>
            <img src=\"./assets/img/placeholderagenda.png\" alt=\"\">
          </div>


{# Début de la DIV #}
            <div class=\"tags text-center\">
            <h3><span>Mes tags</span></h3>

            
            <h1>Liste des catégories</h1>
                        <div class=\"example-wrapper\">
            <br>
            {% set tagCounter = 0 %}
            {% for category in categories %}
            {% for subCategory in category.subCategories %}
            {% if tagCounter < 12 %}
            <label>
            <checkbox class=\"category-btn supertags\" onclick=\"toggleSubCategory(this)\" data-category-name=\"{{ subCategory }}\">{{ subCategory }}</checkbox>
            </label>
            <br>
            {% else %}
            <!-- Les boutons supplémentaires iront dans le menu déroulant -->
            {% endif %}
            {% set tagCounter = tagCounter + 1 %}
          {% endfor %}
        {% endfor %}
            </div>
          </div>

      {# Menu déroulant pour les tags supplémentaires #}
      <div class=\"dropdown tags text-center supertags\" id=\"tags-dropdown\" style=\"display : none;\">
      {% for category in categories %}
      {% for subCategory in category.subCategories %}
        <label>
        <checkbox class=\"category-btn supertags\" onclick=\"toggleSubCategory(this)\" data-category-name=\"{{ subCategory }}\">{{ subCategory }}</checkbox>
        </label>
        <br>
      {% endfor %}
    {% endfor %}
    </div>
     <!-- Bouton pour afficher le menu déroulant -->
    <button id=\"see-more-tags-btn\">Voir mes tags</button>
    </div>


           {# Afficher la liste des événements récupérés depuis le contrôleur #}
    <div class=\"event-list\">
      {% for event in events %}

      <div class=\"event-item\" 
      data-event-name=\"{{ event.title }}\" 
      data-event-description=\"{{ event.description }}\" 
      data-event-address=\"{{ event.address }}\">

          <h3>{{ event.title }}</h3>
          {# Utilisation de la fonction \"raw\" pour désactiver l'échappement des balises HTML #}
          <p>{{ event.description|raw }}</p>
           <!-- Affichez les autres détails de l'événement ici si nécessaire -->
      </div>
    
    {% endfor %}
    </div>
{# FIN DE LA DIV #}

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
              <a href=\"#\"><img src=\"./assets/img/favorite_card_black.png\" alt=\"favorite\"></a>
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
              <a href=\"#\"><img src=\"./assets/img/favorite_card_black.png\" alt=\"favorite\"></a>
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
             
        
      </div>
  </div> 
  </article> 


</main><!-- main end  -->
<footer><!-- footer start  -->
    <div class=\"container\">
       <div class=\"logotimeout\">
            <a href=\"#\">
                <img class=\"logo\" src=\"./assets/img/logo-timeout-white.svg\" alt=\"Logo TimeOut\">
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
            <script src=\"./assets/js/tags.js\"></script> {# le script#}
</body>
{% endblock %}

</html>

", "dashboard/mainboard.html.twig", "/Users/moussaillon/Desktop/Dossier requesitory symfony/TimeOut/templates/dashboard/mainboard.html.twig");
    }
}
