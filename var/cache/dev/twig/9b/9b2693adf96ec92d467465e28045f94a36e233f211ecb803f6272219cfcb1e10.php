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

/* user/channel/newchannel.html.twig */
class __TwigTemplate_cc5482646f1e6a2a62d877abbeb6e7cd4fae22d629b90a226fffa320f6d3c624 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/channel/newchannel.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/channel/newchannel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Chat";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        $this->loadTemplate("navbar/navbar.html.twig", "user/channel/newchannel.html.twig", 7)->display($context);
        // line 8
        echo "<div class=\"container\">
    <h1>Creer un nouveau canal</h1>

    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["channelForm"]) || array_key_exists("channelForm", $context) ? $context["channelForm"] : (function () { throw new RuntimeError('Variable "channelForm" does not exist.', 11, $this->source); })()), 'form_start', ["class" => "col-lg-6 offset-lg-3"]);
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["channelForm"]) || array_key_exists("channelForm", $context) ? $context["channelForm"] : (function () { throw new RuntimeError('Variable "channelForm" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), 'row', ["label" => "Nom du canal :", "attr" => ["class" => "form-control"]]);
        echo "
    
        <br>
        <button type=\"submit\" class=\"btn btn-lg btn-primary\">Creer</button>
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["channelForm"]) || array_key_exists("channelForm", $context) ? $context["channelForm"] : (function () { throw new RuntimeError('Variable "channelForm" does not exist.', 16, $this->source); })()), 'form_end');
        echo "
<div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/channel/newchannel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 16,  84 => 12,  80 => 11,  75 => 8,  73 => 7,  66 => 6,  53 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Chat{% endblock %}

{% block body %}
{% include 'navbar/navbar.html.twig'%}
<div class=\"container\">
    <h1>Creer un nouveau canal</h1>

    {{ form_start(channelForm,{'class': 'col-lg-6 offset-lg-3'}) }}
        {{ form_row(channelForm.name, { 'label': 'Nom du canal :','attr': {'class': 'form-control'}}) }}
    
        <br>
        <button type=\"submit\" class=\"btn btn-lg btn-primary\">Creer</button>
    {{ form_end(channelForm) }}
<div>
{% endblock %}
", "user/channel/newchannel.html.twig", "C:\\Users\\trito\\Documents\\GitHub\\chat-projet-symfony\\projet_chat\\templates\\user\\channel\\newchannel.html.twig");
    }
}
