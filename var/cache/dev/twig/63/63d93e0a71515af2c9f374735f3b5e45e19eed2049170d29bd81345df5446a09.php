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

/* profil/index.html.twig */
class __TwigTemplate_b3110ff8988b15949cb7c615b542eba353f21d0444a69039a1994503d1a5db61 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->loadTemplate("navbar/navbar.html.twig", "profil/index.html.twig", 6)->display($context);
        // line 7
        echo "<div class=\"container\">
  
<div>
<div class=\"container\">
<div class=\"row\">
   <div class=\"col-xs-4 panel border\" >
   <h3>Mon profil</h3>
   <h4>Nom utilisateur : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "username", [], "any", false, false, false, 14), "html", null, true);
        echo "</h4>
    <picture>
  <source srcset=\"...\" type=\"image/svg+xml\">
  ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "urlimage", [], "any", false, false, false, 17)) {
            // line 18
            echo "   <div class=\"text-center\">
  <img src=\"../../";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "urlimage", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"rounded mx-auto d-block\" style=\"max-width:100px\"alt=\"...\">
  <br>
 
</div>
  ";
        } else {
            // line 24
            echo "</picture>
  <div class=\"text-center\">
  <img src=\"https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png\" class=\"rounded mx-auto d-block\" style=\"max-width:100px\"alt=\"...\">
</div>
  ";
        }
        // line 29
        echo "
</picture>
</div>
<div class=\"col-xs-4 panel border\" >
<h3>Gerer votre image</h3>
  ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 34, $this->source); })()), 'form_start', ["class" => "col-lg-6 offset-lg-3"]);
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 35, $this->source); })()), "upload_file", [], "any", false, false, false, 35), 'label');
        echo "
          ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 36, $this->source); })()), "upload_file", [], "any", false, false, false, 36), 'widget');
        echo "
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 37, $this->source); })()), "upload_file", [], "any", false, false, false, 37), 'errors');
        echo "
          <br>
         ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 39, $this->source); })()), "send", [], "any", false, false, false, 39), 'widget', ["label" => "Changer votre image de profil", "attr" => ["class" => "btn btn-primary"]]);
        echo "
       
    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start', ["class" => "col-lg-6 offset-lg-3"]);
        echo "
    ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_start', ["class" => "col-lg-6 offset-lg-3"]);
        echo "
    <br>
    ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "urlimage", [], "any", false, false, false, 45)) {
            // line 46
            echo "     <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supprimer_image");
            echo "\" class=\"btn  btn-danger\">Supprimer mon image de profil</a>
      <br>
    ";
        }
        // line 49
        echo "   
</div>
</div>
<br>
<br>
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), 'row', ["label" => "Mot de passe", "attr" => ["class" => "form-control"]]);
        // line 57
        echo "
        <br>
     
        <div class=\"form-group\">
        <br>
          ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "send", [], "any", false, false, false, 62), 'widget', ["label" => "Modifier", "attr" => ["class" => "btn btn-primary"]]);
        echo "
           
        </div>
        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'rest');
        echo "
      ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        echo "
    
        </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 66,  183 => 65,  177 => 62,  170 => 57,  168 => 54,  161 => 49,  154 => 46,  152 => 45,  147 => 43,  143 => 42,  139 => 41,  134 => 39,  129 => 37,  125 => 36,  121 => 35,  117 => 34,  110 => 29,  103 => 24,  95 => 19,  92 => 18,  90 => 17,  84 => 14,  75 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil{% endblock %}

{% block body %}
{% include 'navbar/navbar.html.twig'%}
<div class=\"container\">
  
<div>
<div class=\"container\">
<div class=\"row\">
   <div class=\"col-xs-4 panel border\" >
   <h3>Mon profil</h3>
   <h4>Nom utilisateur : {{ app.user.username }}</h4>
    <picture>
  <source srcset=\"...\" type=\"image/svg+xml\">
  {% if app.user.urlimage %}
   <div class=\"text-center\">
  <img src=\"../../{{ app.user.urlimage }}\" class=\"rounded mx-auto d-block\" style=\"max-width:100px\"alt=\"...\">
  <br>
 
</div>
  {% else %}
</picture>
  <div class=\"text-center\">
  <img src=\"https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png\" class=\"rounded mx-auto d-block\" style=\"max-width:100px\"alt=\"...\">
</div>
  {% endif %}

</picture>
</div>
<div class=\"col-xs-4 panel border\" >
<h3>Gerer votre image</h3>
  {{ form_start(form2,{'class': 'col-lg-6 offset-lg-3'}) }}
        {{ form_label(form2.upload_file) }}
          {{ form_widget(form2.upload_file) }}
          {{ form_errors(form2.upload_file) }}
          <br>
         {{ form_widget(form2.send, {'label': \"Changer votre image de profil\", 'attr' : { 'class': 'btn btn-primary' }}) }}
       
    {{ form_end(form2) }}
    {{ form_start(form,{'class': 'col-lg-6 offset-lg-3'}) }}
    {{ form_start(form,{'class': 'col-lg-6 offset-lg-3'}) }}
    <br>
    {% if app.user.urlimage %}
     <a href=\"{{ path('app_supprimer_image')}}\" class=\"btn  btn-danger\">Supprimer mon image de profil</a>
      <br>
    {% endif %}
   
</div>
</div>
<br>
<br>
        {{ form_row(form.password, {
            'label': 'Mot de passe',
            'attr': {'class': 'form-control'}
        }) }}
        <br>
     
        <div class=\"form-group\">
        <br>
          {{ form_widget(form.send, {'label': \"Modifier\", 'attr' : { 'class': 'btn btn-primary' }}) }}
           
        </div>
        {{ form_rest(form) }}
      {{ form_end(form) }}
    
        </div>
</div>

{% endblock %}
", "profil/index.html.twig", "C:\\Users\\trito\\Documents\\GitHub\\chat-projet-symfony\\projet_chat\\templates\\profil\\index.html.twig");
    }
}
