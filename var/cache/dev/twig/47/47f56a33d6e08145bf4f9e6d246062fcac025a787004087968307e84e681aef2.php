<?php

/* :task:create.html.twig */
class __TwigTemplate_537faa4bea21faa9a15621ee0ae74d53cdca3cd49c337d2f996287897b5998da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":task:create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfa9a84c456d092ca2b3770a23673f99f1be066c76b9c1a6b5d13dfd09db97e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa9a84c456d092ca2b3770a23673f99f1be066c76b9c1a6b5d13dfd09db97e1->enter($__internal_cfa9a84c456d092ca2b3770a23673f99f1be066c76b9c1a6b5d13dfd09db97e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":task:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfa9a84c456d092ca2b3770a23673f99f1be066c76b9c1a6b5d13dfd09db97e1->leave($__internal_cfa9a84c456d092ca2b3770a23673f99f1be066c76b9c1a6b5d13dfd09db97e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bff1f044c55004bc27dca709903040e76ef28e76c78dca37fd0d24394ef2b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bff1f044c55004bc27dca709903040e76ef28e76c78dca37fd0d24394ef2b5e->enter($__internal_4bff1f044c55004bc27dca709903040e76ef28e76c78dca37fd0d24394ef2b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":task:create.html.twig"));

        // line 4
        echo "    <div class=\"row\">
        ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_create")));
        echo "
            ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_list");
        echo "\" class=\"btn btn-primary\">Retour à la liste des tâches</a>
    </div>
";
        
        $__internal_4bff1f044c55004bc27dca709903040e76ef28e76c78dca37fd0d24394ef2b5e->leave($__internal_4bff1f044c55004bc27dca709903040e76ef28e76c78dca37fd0d24394ef2b5e_prof);

    }

    public function getTemplateName()
    {
        return ":task:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  53 => 9,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

{% block body %}
    <div class=\"row\">
        {{ form_start(form, {'action' : path('task_create')}) }}
            {{ form_widget(form) }}

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        {{ form_end(form) }}

        <a href=\"{{ path('task_list') }}\" class=\"btn btn-primary\">Retour à la liste des tâches</a>
    </div>
{% endblock %}
", ":task:create.html.twig", "/Applications/MAMP/htdocs/todo-and-co/app/Resources/views/task/create.html.twig");
    }
}
