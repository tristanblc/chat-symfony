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

/* navbar/navbar.html.twig */
class __TwigTemplate_5bccaebbc5a3efa3fbcca860ce093eb9e76c63b11cb51ed45341454174e7924d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-sm bg-secondary \">

  <!-- Links -->
  <ul class=\"navbar-nav m-2\">
    <li class=\"nav-item\">
      <a class=\"btn btn-light\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
    </li>
    <br>
  </ul>

  ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "   <ul class=\"navbar-nav bg-secondary m-2\">
      <li class=\"nav-item\">
        <a class=\"btn btn-light\" href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_channel");
            echo "\">Chat</a>
      </li>
    </ul>
     ";
            // line 17
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 18
                echo "                      <ul class=\"navbar-nav m-2cd\">
      <li class=\"nav-item\">
        <a class=\"btn btn-light\" href=\"";
                // line 20
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
                echo "\">Gerer les utilisateurs</a>
      </li>
    </ul>
              ";
            }
            // line 24
            echo "
    <ul class=\"navbar-nav ml-auto\">
      <div class=\"collapse navbar-collapse \" id=\"navbarCollapse\">
        <li class=\"nav-item \">
           <div class=\"dropdown\">
           <a class=\"btn btn-light dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
             
              ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "urlimage", [], "any", false, false, false, 31)) {
                // line 32
                echo "                <div class=\"text-center\">
                  <img src=\"../../";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "urlimage", [], "any", false, false, false, 33), "html", null, true);
                echo "\" class=\"rounded mx-auto d-block\" style=\"max-width:30px\" alt=\"...\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
                echo "
                </div>
              ";
            } else {
                // line 36
                echo "                <div class=\"text-center\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png\" class=\"rounded mx-auto d-block\" style=\"max-width:30px\" alt=\"...\">
                  ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "username", [], "any", false, false, false, 37), "html", null, true);
                echo "</div>
              ";
            }
            // line 39
            echo "    
            </a>
             
            
             
           <div class=\"dropdown-menu pull-right \" aria-labelledby=\"dropdownMenuButton\">
            <a class=\"nav-link \" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">Profil</a>
            <a class=\"nav-link\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se deconnecter</a>
          </div>
           </div>
         </li>
    </div>
  </ul>
";
        } else {
            // line 53
            echo "                    <ul class=\"navbar-nav  \">
      <li class=\"nav-item pull-right\">
        <a class=\"btn btn-light\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a>
      </li>
    </ul>
         
";
        }
        // line 60
        echo "
</nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 60,  136 => 55,  132 => 53,  122 => 46,  118 => 45,  110 => 39,  105 => 37,  102 => 36,  94 => 33,  91 => 32,  89 => 31,  80 => 24,  73 => 20,  69 => 18,  67 => 17,  61 => 14,  57 => 12,  55 => 11,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-sm bg-secondary \">

  <!-- Links -->
  <ul class=\"navbar-nav m-2\">
    <li class=\"nav-item\">
      <a class=\"btn btn-light\" href=\"{{ path('home')}}\">Accueil</a>
    </li>
    <br>
  </ul>

  {% if app.user %}
   <ul class=\"navbar-nav bg-secondary m-2\">
      <li class=\"nav-item\">
        <a class=\"btn btn-light\" href=\"{{ path('chat_channel')}}\">Chat</a>
      </li>
    </ul>
     {% if is_granted('ROLE_ADMIN') %}
                      <ul class=\"navbar-nav m-2cd\">
      <li class=\"nav-item\">
        <a class=\"btn btn-light\" href=\"{{ path('user_index')}}\">Gerer les utilisateurs</a>
      </li>
    </ul>
              {% endif %}

    <ul class=\"navbar-nav ml-auto\">
      <div class=\"collapse navbar-collapse \" id=\"navbarCollapse\">
        <li class=\"nav-item \">
           <div class=\"dropdown\">
           <a class=\"btn btn-light dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
             
              {% if app.user.urlimage %}
                <div class=\"text-center\">
                  <img src=\"../../{{ app.user.urlimage }}\" class=\"rounded mx-auto d-block\" style=\"max-width:30px\" alt=\"...\">{{ app.user.username }}
                </div>
              {% else %}
                <div class=\"text-center\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png\" class=\"rounded mx-auto d-block\" style=\"max-width:30px\" alt=\"...\">
                  {{ app.user.username }}</div>
              {% endif %}
    
            </a>
             
            
             
           <div class=\"dropdown-menu pull-right \" aria-labelledby=\"dropdownMenuButton\">
            <a class=\"nav-link \" href=\"{{ path('app_profil')}}\">Profil</a>
            <a class=\"nav-link\" href=\"{{ path('app_logout')}}\">Se deconnecter</a>
          </div>
           </div>
         </li>
    </div>
  </ul>
{% else %}
                    <ul class=\"navbar-nav  \">
      <li class=\"nav-item pull-right\">
        <a class=\"btn btn-light\" href=\"{{ path('app_login')}}\">Se connecter</a>
      </li>
    </ul>
         
{% endif %}

</nav>", "navbar/navbar.html.twig", "C:\\Users\\trito\\Documents\\GitHub\\chat-projet-symfony\\projet_chat\\templates\\navbar\\navbar.html.twig");
    }
}
