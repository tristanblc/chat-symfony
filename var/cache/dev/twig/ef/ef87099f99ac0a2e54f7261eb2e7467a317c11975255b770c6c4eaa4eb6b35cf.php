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

/* user/channel/chat.html.twig */
class __TwigTemplate_3e9018e8b33c8244fe9e7fb46239ee0420814a129ab1b3d3bd6a91044c1e76a4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/channel/chat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/channel/chat.html.twig", 1);
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
        $this->loadTemplate("navbar/navbar.html.twig", "user/channel/chat.html.twig", 6)->display($context);
        // line 7
        echo "
<div class=\"container\">

    <h1>Canal : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
    <div class=\"container\" style=\"height: 600px\">
        <div class=\"container bg-light h-75 overflow-auto\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 14)))) {
                // line 15
                echo "                    <div class=\"row w-75 float-right\">
                 
                        
                        <div  class=\"alert alert-info w-100\">
                         ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 19), "urlimage", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                <div class=\"pull-left\">
                  <img src=\"../../";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 21), "urlimage", [], "any", false, false, false, 21), "html", null, true);
                    echo "\" class=\"rounded mx-auto d-block\" style=\"max-width:30px\" alt=\"...\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 21), "username", [], "any", false, false, false, 21), "html", null, true);
                    echo "
                </div>
              ";
                } else {
                    // line 24
                    echo "                <div class=\"pull-left\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png\" class=\"rounded mx-auto d-block\" style=\"max-width:30px\" alt=\"...\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 24), "username", [], "any", false, false, false, 24), "html", null, true);
                    echo "
                  </div>
              ";
                }
                // line 27
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 27), "html", null, true);
                echo " 
                       <div class=\"pull-right\">";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 28), " d/m/Y H:i"), "html", null, true);
                echo " </div>
                        </div>

                    </div>
                ";
            } else {
                // line 33
                echo "                    <div class=\"row w-75 \">
                        
                        <div class=\"alert alert-success w-100\">
                        ";
                // line 36
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 36), "urlimage", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "                <div class=\"pull-left\">
                  <img src=\"../../";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 38), "urlimage", [], "any", false, false, false, 38), "html", null, true);
                    echo "\" class=\"rounded mx-auto d-block\" style=\"max-width:30px\" alt=\"...\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 38), "username", [], "any", false, false, false, 38), "html", null, true);
                    echo "
                </div>
              ";
                } else {
                    // line 41
                    echo "                <div class=\"pull-left\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png\" class=\"rounded mx-auto d-block\" style=\"max-width:30px\" alt=\"...\">
                  ";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 42), "username", [], "any", false, false, false, 42), "html", null, true);
                    echo "</div>
              ";
                }
                // line 44
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 44), "html", null, true);
                echo "
                             <div class=\"pull-right\">";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 45), " d/m/Y H:i"), "html", null, true);
                echo " </div>
                        </div>

                    </div>
                ";
            }
            // line 50
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>
        <div>
                <form id=\"form\" class=\"container row\"> 
                <textarea id=\"message\" class=\"input-group-text col-sm-9\" placeholder=\"Message\" type=\"text\" ></textarea>
                <button id=\"submit\" type=\"submit\" class=\"btn btn-success col-sm-3\">Send</button>

            </form>
        </div>
    </div>
</div>

<script>

     let chatDiv = document.querySelector('.overflow-auto');
        chatDiv.scrollTop = chatDiv.scrollHeight; // On souhaite scroller toujours jusqu'au dernier message du chat
    
        let form = document.getElementById('form');
        function handleForm(event) {
            event.preventDefault(); // Empêche la page de se rafraîchir après le submit du formulaire
        }
        form.addEventListener('submit', handleForm);

       var id = '";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "username", [], "any", false, false, false, 73), "html", null, true);
        echo "';
        console.log(id);
        const submit = document.querySelector('button');
        submit.onclick = e => { // On change le comportement du submit
            const message = document.getElementById('message'); // Récupération du message dans l'input correspondants
            const data = { // La variable data sera envoyée au controller
                \"content\": message.value, // On transmet le message...
                \"channel\": '";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80), "html", null, true);
        echo "', // ... Et le canal correspondant
                \"user\": id
            }
            console.log(data); // Pour vérifier vos informations
            fetch('/message', { // On envoie avec un post nos datas sur le endpoint /message de notre application
                method: 'POST',
                body: JSON.stringify(data) // On envoie les data sous format JSON
            }).then((response) => {
                message.value = '';
                console.log(response);
                
            });
           
        }
     
  
    const url = new URL(\"http://localhost:3000/hub\");
    url.searchParams.append('topic',  encodeURI(\"http://localhost:8000/channel/\")); // On ajoute le topic souhaité aux paramètres de la requête vers le Hub

  const eventSource = new EventSource( encodeURI(url), {withCredentials: true});

const appUser = ";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101), "html", null, true);
        echo ";


eventSource.onmessage = ({data}) => { // On écoute les événements publiés par le Hub
    const message = JSON.parse(data); // Le contenu des événements est sous format JSON, il faut le parser
        document.querySelector('.bg-light').insertAdjacentHTML( // On injecte le nouveau message selon le HTML déjà présent plus haut dans notre fichier Twig
        'beforeend',
            appUser === message.author.id ?
            `<div class=\"row w-75 float-right\">
            <b>\${message.author.username}</b>
            <p class=\"alert alert-info w-100\">\${message.content}</p>
          
        </div>` :
            `<div class=\"row w-75 float-left\">
            <b>\${message.author.username}</b>
            <p class=\"alert alert-success w-100\">\${message.content}</p>
        </div>`
    )

    chatDiv.scrollTop = chatDiv.scrollHeight; // On demande au navigateur de scroller le chat tout en bas pour bien apercevoir le dernier message apparu
   
}
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/channel/chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 101,  211 => 80,  201 => 73,  177 => 51,  171 => 50,  163 => 45,  158 => 44,  153 => 42,  150 => 41,  142 => 38,  139 => 37,  137 => 36,  132 => 33,  124 => 28,  119 => 27,  112 => 24,  104 => 21,  101 => 20,  99 => 19,  93 => 15,  90 => 14,  86 => 13,  80 => 10,  75 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chat{% endblock %}

{% block body %}
{% include 'navbar/navbar.html.twig'%}

<div class=\"container\">

    <h1>Canal : {{ channel.name }}</h1>
    <div class=\"container\" style=\"height: 600px\">
        <div class=\"container bg-light h-75 overflow-auto\">
            {% for message in messages %}
                {% if app.user == message.author %}
                    <div class=\"row w-75 float-right\">
                 
                        
                        <div  class=\"alert alert-info w-100\">
                         {% if message.author.urlimage %}
                <div class=\"pull-left\">
                  <img src=\"../../{{   message.author.urlimage }}\" class=\"rounded mx-auto d-block\" style=\"max-width:30px\" alt=\"...\">{{  message.author.username }}
                </div>
              {% else %}
                <div class=\"pull-left\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png\" class=\"rounded mx-auto d-block\" style=\"max-width:30px\" alt=\"...\">{{  message.author.username }}
                  </div>
              {% endif %}
                            {{ message.content }} 
                       <div class=\"pull-right\">{{message.createdAt|date(' d/m/Y H:i')}} </div>
                        </div>

                    </div>
                {% else %}
                    <div class=\"row w-75 \">
                        
                        <div class=\"alert alert-success w-100\">
                        {% if message.author.urlimage %}
                <div class=\"pull-left\">
                  <img src=\"../../{{   message.author.urlimage }}\" class=\"rounded mx-auto d-block\" style=\"max-width:30px\" alt=\"...\">{{  message.author.username }}
                </div>
              {% else %}
                <div class=\"pull-left\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png\" class=\"rounded mx-auto d-block\" style=\"max-width:30px\" alt=\"...\">
                  {{ message.author.username}}</div>
              {% endif %}
                            {{ message.content }}
                             <div class=\"pull-right\">{{message.createdAt|date(' d/m/Y H:i')}} </div>
                        </div>

                    </div>
                {% endif %}
            {% endfor %}
        </div>
        <div>
                <form id=\"form\" class=\"container row\"> 
                <textarea id=\"message\" class=\"input-group-text col-sm-9\" placeholder=\"Message\" type=\"text\" ></textarea>
                <button id=\"submit\" type=\"submit\" class=\"btn btn-success col-sm-3\">Send</button>

            </form>
        </div>
    </div>
</div>

<script>

     let chatDiv = document.querySelector('.overflow-auto');
        chatDiv.scrollTop = chatDiv.scrollHeight; // On souhaite scroller toujours jusqu'au dernier message du chat
    
        let form = document.getElementById('form');
        function handleForm(event) {
            event.preventDefault(); // Empêche la page de se rafraîchir après le submit du formulaire
        }
        form.addEventListener('submit', handleForm);

       var id = '{{ app.user.username}}';
        console.log(id);
        const submit = document.querySelector('button');
        submit.onclick = e => { // On change le comportement du submit
            const message = document.getElementById('message'); // Récupération du message dans l'input correspondants
            const data = { // La variable data sera envoyée au controller
                \"content\": message.value, // On transmet le message...
                \"channel\": '{{ channel.id }}', // ... Et le canal correspondant
                \"user\": id
            }
            console.log(data); // Pour vérifier vos informations
            fetch('/message', { // On envoie avec un post nos datas sur le endpoint /message de notre application
                method: 'POST',
                body: JSON.stringify(data) // On envoie les data sous format JSON
            }).then((response) => {
                message.value = '';
                console.log(response);
                
            });
           
        }
     
  
    const url = new URL(\"http://localhost:3000/hub\");
    url.searchParams.append('topic',  encodeURI(\"http://localhost:8000/channel/\")); // On ajoute le topic souhaité aux paramètres de la requête vers le Hub

  const eventSource = new EventSource( encodeURI(url), {withCredentials: true});

const appUser = {{ app.user.id }};


eventSource.onmessage = ({data}) => { // On écoute les événements publiés par le Hub
    const message = JSON.parse(data); // Le contenu des événements est sous format JSON, il faut le parser
        document.querySelector('.bg-light').insertAdjacentHTML( // On injecte le nouveau message selon le HTML déjà présent plus haut dans notre fichier Twig
        'beforeend',
            appUser === message.author.id ?
            `<div class=\"row w-75 float-right\">
            <b>\${message.author.username}</b>
            <p class=\"alert alert-info w-100\">\${message.content}</p>
          
        </div>` :
            `<div class=\"row w-75 float-left\">
            <b>\${message.author.username}</b>
            <p class=\"alert alert-success w-100\">\${message.content}</p>
        </div>`
    )

    chatDiv.scrollTop = chatDiv.scrollHeight; // On demande au navigateur de scroller le chat tout en bas pour bien apercevoir le dernier message apparu
   
}
</script>

{% endblock %}
", "user/channel/chat.html.twig", "C:\\Users\\trito\\Documents\\GitHub\\chat-projet-symfony\\projet_chat\\templates\\user\\channel\\chat.html.twig");
    }
}
