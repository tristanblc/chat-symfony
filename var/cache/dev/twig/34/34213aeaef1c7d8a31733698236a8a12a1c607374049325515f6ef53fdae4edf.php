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

/* user/channel/index.html.twig */
class __TwigTemplate_215336e086b62988c4e144e626cc86fa14b5c7ebcb5ed8813419127d93c2d9f9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/channel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/channel/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Chat";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->loadTemplate("navbar/navbar.html.twig", "user/channel/index.html.twig", 6)->display($context);
        // line 7
        echo "

<div class=\"container\">  
<a class=\"btn btn-primary float-right\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_channel_new");
        echo "\">Creer un canal</a>   
    ";
        // line 11
        if ((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 11, $this->source); })())) {
            echo "  
        <h2>Canaux disponibles :</h2>  
        <table class=\"table table-striped\">  
            <tbody>  
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                echo "  
                <tr class=\"\">  
                    <th>  
                        <span>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</span>  
                        <a class=\"btn btn-primary float-right\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat", ["id" => twig_get_attribute($this->env, $this->source, $context["channel"], "id", [], "any", false, false, false, 19)]), "html", null, true);
                echo "\">Chatter</a>  
                    </th>  
                </tr>  
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "  
            </tbody>  
        </table>  
    ";
        } else {
            // line 26
            echo "        <div>
            <div class=\"alert alert-danger text-center\">Aucun canal disponibles</div>
        </div>
    ";
        }
        // line 30
        echo "</div>  

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/channel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 30,  119 => 26,  113 => 22,  103 => 19,  99 => 18,  91 => 15,  84 => 11,  80 => 10,  75 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chat{% endblock %}

{% block body %}
{% include 'navbar/navbar.html.twig'%}


<div class=\"container\">  
<a class=\"btn btn-primary float-right\" href=\"{{path('app_channel_new')}}\">Creer un canal</a>   
    {% if channels %}  
        <h2>Canaux disponibles :</h2>  
        <table class=\"table table-striped\">  
            <tbody>  
            {% for channel in channels %}  
                <tr class=\"\">  
                    <th>  
                        <span>{{ channel.name }}</span>  
                        <a class=\"btn btn-primary float-right\" href=\"{{ path('chat', {id: channel.id}) }}\">Chatter</a>  
                    </th>  
                </tr>  
            {% endfor %}  
            </tbody>  
        </table>  
    {% else %}
        <div>
            <div class=\"alert alert-danger text-center\">Aucun canal disponibles</div>
        </div>
    {% endif %}
</div>  

{% endblock %}
", "user/channel/index.html.twig", "C:\\Users\\trito\\Documents\\GitHub\\chat-projet-symfony\\projet_chat\\templates\\user\\channel\\index.html.twig");
    }
}
