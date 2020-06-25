<?php

/* :default:index.html.twig */
class __TwigTemplate_87978570d3d3ac686c445b98e8904eae46e134045ea805f6503933b96e0766d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e4a49058d7ed4323bee52752e0136ad8eaa5eef1fdd240e60bd2b782e67f234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4a49058d7ed4323bee52752e0136ad8eaa5eef1fdd240e60bd2b782e67f234->enter($__internal_8e4a49058d7ed4323bee52752e0136ad8eaa5eef1fdd240e60bd2b782e67f234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e4a49058d7ed4323bee52752e0136ad8eaa5eef1fdd240e60bd2b782e67f234->leave($__internal_8e4a49058d7ed4323bee52752e0136ad8eaa5eef1fdd240e60bd2b782e67f234_prof);

    }

    // line 3
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_d91fc37574ca95194c5154d97f432ac415029172c852861a99b5e5da22ae42d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91fc37574ca95194c5154d97f432ac415029172c852861a99b5e5da22ae42d4->enter($__internal_d91fc37574ca95194c5154d97f432ac415029172c852861a99b5e5da22ae42d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":default:index.html.twig"));

        // line 4
        echo "    <h1>Bienvenue sur Todo List, l'application vous permettant de gérer l'ensemble de vos tâches sans effort !</h1>
";
        
        $__internal_d91fc37574ca95194c5154d97f432ac415029172c852861a99b5e5da22ae42d4->leave($__internal_d91fc37574ca95194c5154d97f432ac415029172c852861a99b5e5da22ae42d4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_675d9ac6c5b8fde39a2ee0844378eb594275786b4beafc16ed6c61494b0433ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675d9ac6c5b8fde39a2ee0844378eb594275786b4beafc16ed6c61494b0433ec->enter($__internal_675d9ac6c5b8fde39a2ee0844378eb594275786b4beafc16ed6c61494b0433ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":default:index.html.twig"));

        // line 8
        echo "
    <div class=\"row\">
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_create");
        echo "\" class=\"btn btn-success\">Créer une nouvelle tâche</a>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_list");
        echo "\" class=\"btn btn-info\">Consulter la liste des tâches à faire</a>
        <a href=\"\" class=\"btn btn-secondary\">Consulter la liste des tâches terminées</a>
    </div>
";
        
        $__internal_675d9ac6c5b8fde39a2ee0844378eb594275786b4beafc16ed6c61494b0433ec->leave($__internal_675d9ac6c5b8fde39a2ee0844378eb594275786b4beafc16ed6c61494b0433ec_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  59 => 10,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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

{% block header_title %}
    <h1>Bienvenue sur Todo List, l'application vous permettant de gérer l'ensemble de vos tâches sans effort !</h1>
{% endblock %}

{% block body %}

    <div class=\"row\">
        <a href=\"{{ path('task_create') }}\" class=\"btn btn-success\">Créer une nouvelle tâche</a>
        <a href=\"{{ path('task_list') }}\" class=\"btn btn-info\">Consulter la liste des tâches à faire</a>
        <a href=\"\" class=\"btn btn-secondary\">Consulter la liste des tâches terminées</a>
    </div>
{% endblock %}
", ":default:index.html.twig", "/Applications/MAMP/htdocs/todo-and-co/app/Resources/views/default/index.html.twig");
    }
}
