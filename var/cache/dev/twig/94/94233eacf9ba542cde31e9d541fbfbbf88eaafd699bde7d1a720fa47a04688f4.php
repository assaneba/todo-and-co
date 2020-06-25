<?php

/* :task:list.html.twig */
class __TwigTemplate_1423349d7d70096d2bf851e0875beb889e42479c88625273040b056f48bd38c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":task:list.html.twig", 1);
        $this->blocks = array(
            'header_img' => array($this, 'block_header_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_519ab968efc74fec3e49bd341f5175a1508218da60c93ffb6a950b5b88de726b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519ab968efc74fec3e49bd341f5175a1508218da60c93ffb6a950b5b88de726b->enter($__internal_519ab968efc74fec3e49bd341f5175a1508218da60c93ffb6a950b5b88de726b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":task:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_519ab968efc74fec3e49bd341f5175a1508218da60c93ffb6a950b5b88de726b->leave($__internal_519ab968efc74fec3e49bd341f5175a1508218da60c93ffb6a950b5b88de726b_prof);

    }

    // line 3
    public function block_header_img($context, array $blocks = array())
    {
        $__internal_03af9200aa3a9b3ff46b3b87a33b24c22a66ad7e9e2a4a8ea79315524b0981d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03af9200aa3a9b3ff46b3b87a33b24c22a66ad7e9e2a4a8ea79315524b0981d2->enter($__internal_03af9200aa3a9b3ff46b3b87a33b24c22a66ad7e9e2a4a8ea79315524b0981d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":task:list.html.twig"));

        echo "<img class=\"slide-image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/todolist_content.jpg"), "html", null, true);
        echo "\" alt=\"todo list\">";
        
        $__internal_03af9200aa3a9b3ff46b3b87a33b24c22a66ad7e9e2a4a8ea79315524b0981d2->leave($__internal_03af9200aa3a9b3ff46b3b87a33b24c22a66ad7e9e2a4a8ea79315524b0981d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e9595f09bf8f7abeb27066b664815df45da80e18d96ca10de7f96e6dd859414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9595f09bf8f7abeb27066b664815df45da80e18d96ca10de7f96e6dd859414->enter($__internal_7e9595f09bf8f7abeb27066b664815df45da80e18d96ca10de7f96e6dd859414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":task:list.html.twig"));

        // line 6
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_create");
        echo "\" class=\"btn btn-info pull-right\">Créer une tâche</a>
    <div class=\"row\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 9
            echo "        <div class=\"col-sm-4 col-lg-4 col-md-4\">
            <div class=\"thumbnail\">
                <div class=\"caption\">
                    <h4 class=\"pull-right\">
                        ";
            // line 13
            if ($this->getAttribute($context["task"], "isDone", array())) {
                echo "<span class=\"glyphicon glyphicon-ok\"></span>";
            } else {
                echo "<span class=\"glyphicon glyphicon-remove\"></span>";
            }
            // line 14
            echo "                    </h4>
                    <h4><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "</a></h4>
                    <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "content", array()), "html", null, true);
            echo "</p>
                </div>
                <div>
                    <form action=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_toggle", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">
                        <button class=\"btn btn-success btn-sm pull-right\">
                            ";
            // line 21
            if ( !$this->getAttribute($context["task"], "isDone", array())) {
                echo "Marquer comme faite";
            } else {
                echo "Marquer non terminée";
            }
            // line 22
            echo "                        </button>
                    </form>
                    <form action=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_delete", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">
                        <button class=\"btn btn-danger btn-sm pull-right\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "            <div class=\"alert alert-warning\" role=\"alert\">
                Il n'y a pas encore de tâche enregistrée. <a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_create");
            echo "\" class=\"btn btn-warning pull-right\">Créer une tâche</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </div>
";
        
        $__internal_7e9595f09bf8f7abeb27066b664815df45da80e18d96ca10de7f96e6dd859414->leave($__internal_7e9595f09bf8f7abeb27066b664815df45da80e18d96ca10de7f96e6dd859414_prof);

    }

    public function getTemplateName()
    {
        return ":task:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 35,  123 => 32,  120 => 31,  108 => 24,  104 => 22,  98 => 21,  93 => 19,  87 => 16,  81 => 15,  78 => 14,  72 => 13,  66 => 9,  61 => 8,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block header_img %}<img class=\"slide-image\" src=\"{{ asset('img/todolist_content.jpg') }}\" alt=\"todo list\">{% endblock %}

{% block body %}
    <a href=\"{{ path('task_create') }}\" class=\"btn btn-info pull-right\">Créer une tâche</a>
    <div class=\"row\">
        {% for task in tasks %}
        <div class=\"col-sm-4 col-lg-4 col-md-4\">
            <div class=\"thumbnail\">
                <div class=\"caption\">
                    <h4 class=\"pull-right\">
                        {% if task.isDone %}<span class=\"glyphicon glyphicon-ok\"></span>{% else %}<span class=\"glyphicon glyphicon-remove\"></span>{% endif %}
                    </h4>
                    <h4><a href=\"{{ path('task_edit', {'id' : task.id }) }}\">{{ task.title }}</a></h4>
                    <p>{{ task.content }}</p>
                </div>
                <div>
                    <form action=\"{{ path('task_toggle', {'id' : task.id }) }}\">
                        <button class=\"btn btn-success btn-sm pull-right\">
                            {% if not task.isDone %}Marquer comme faite{% else %}Marquer non terminée{% endif %}
                        </button>
                    </form>
                    <form action=\"{{ path('task_delete', {'id' : task.id }) }}\">
                        <button class=\"btn btn-danger btn-sm pull-right\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
        {% else %}
            <div class=\"alert alert-warning\" role=\"alert\">
                Il n'y a pas encore de tâche enregistrée. <a href=\"{{ path('task_create') }}\" class=\"btn btn-warning pull-right\">Créer une tâche</a>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", ":task:list.html.twig", "/Applications/MAMP/htdocs/todo-and-co/app/Resources/views/task/list.html.twig");
    }
}
