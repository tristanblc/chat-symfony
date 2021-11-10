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

/* user/index.html.twig */
class __TwigTemplate_87ca964474b24b61971707da9347dfca8904398ace8e401c806f9de2140fe656 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gerer les Utilisateurs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->loadTemplate("navbar/navbar.html.twig", "user/index.html.twig", 6)->display($context);
        // line 7
        echo "<div class=\"container\">
    <h1>Gerer les utilisateurs </h1>
    <div class=\"container\">
      <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        echo "\" class=\"pull-right btn btn-primary\">Créer un nouveau utilisateur</a>
    </div>
    <br>
</div>
    <table class=\"table table-bordered\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Image de profil</th>
                <th>Roles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["user"], "urlimage", [], "any", false, false, false, 29)) {
                // line 30
                echo "                                <td> <img src=\"../../";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "urlimage", [], "any", false, false, false, 30), "html", null, true);
                echo "\" class=\"rounded mx-auto d-block\" style=\"max-width:100px\"alt=\"...\"></td>
                ";
            } else {
                // line 32
                echo "                <td> <img src=\"https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png\" class=\"rounded mx-auto d-block\" style=\"max-width:100px\"alt=\"...\"></td>
                ";
            }
            // line 34
            echo "
                <td>";
            // line 35
            ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 35)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 35)), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"  class=\"btn btn-primary mt-1\">Editer</a> <a class=\"mt-1\">   ";
            echo twig_include($this->env, $context, "user/_delete_form.html.twig");
            echo "</a>
                   
                   
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 43
            echo "            <tr>
                <td colspan=\"5\">Aucun utilisateur dans la base de données</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 47,  168 => 43,  147 => 37,  142 => 35,  139 => 34,  135 => 32,  129 => 30,  127 => 29,  123 => 28,  119 => 27,  116 => 26,  98 => 25,  80 => 10,  75 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gerer les Utilisateurs{% endblock %}

{% block body %}
{% include 'navbar/navbar.html.twig'%}
<div class=\"container\">
    <h1>Gerer les utilisateurs </h1>
    <div class=\"container\">
      <a href=\"{{ path('user_new') }}\" class=\"pull-right btn btn-primary\">Créer un nouveau utilisateur</a>
    </div>
    <br>
</div>
    <table class=\"table table-bordered\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Image de profil</th>
                <th>Roles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.username }}</td>
                {% if user.urlimage %}
                                <td> <img src=\"../../{{ user.urlimage }}\" class=\"rounded mx-auto d-block\" style=\"max-width:100px\"alt=\"...\"></td>
                {% else %}
                <td> <img src=\"https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png\" class=\"rounded mx-auto d-block\" style=\"max-width:100px\"alt=\"...\"></td>
                {% endif %}

                <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
                <td>
                    <a href=\"{{ path('user_edit', {'id': user.id}) }}\"  class=\"btn btn-primary mt-1\">Editer</a> <a class=\"mt-1\">   {{ include('user/_delete_form.html.twig') }}</a>
                   
                   
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">Aucun utilisateur dans la base de données</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

  
{% endblock %}
", "user/index.html.twig", "C:\\Users\\trito\\Documents\\GitHub\\chat-projet-symfony\\projet_chat\\templates\\user\\index.html.twig");
    }
}
