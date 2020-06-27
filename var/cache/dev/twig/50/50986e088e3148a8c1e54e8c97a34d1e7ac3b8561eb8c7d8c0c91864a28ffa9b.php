<?php

/* :task:edit.html.twig */
class __TwigTemplate_d7dafc15bed14e2204ea9b72392ceed804130535c6ee6404c27d57682d3a703a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":task:edit.html.twig", 1);
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
        $__internal_dda96d50cfb403920ff06cc2011d0404b5dab9bdade6b03cb57a65d7d871836c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda96d50cfb403920ff06cc2011d0404b5dab9bdade6b03cb57a65d7d871836c->enter($__internal_dda96d50cfb403920ff06cc2011d0404b5dab9bdade6b03cb57a65d7d871836c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":task:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dda96d50cfb403920ff06cc2011d0404b5dab9bdade6b03cb57a65d7d871836c->leave($__internal_dda96d50cfb403920ff06cc2011d0404b5dab9bdade6b03cb57a65d7d871836c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27d5515a2451538fda6154018f81842ed9d11eb9ba1a04ada84f11d5bc078311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d5515a2451538fda6154018f81842ed9d11eb9ba1a04ada84f11d5bc078311->enter($__internal_27d5515a2451538fda6154018f81842ed9d11eb9ba1a04ada84f11d5bc078311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":task:edit.html.twig"));

        // line 4
        echo "    <div class=\"row\">
        ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array())))));
        echo "
            ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <button type=\"submit\" class=\"btn btn-success pull-right\">Modifier</button>
        ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_27d5515a2451538fda6154018f81842ed9d11eb9ba1a04ada84f11d5bc078311->leave($__internal_27d5515a2451538fda6154018f81842ed9d11eb9ba1a04ada84f11d5bc078311_prof);

    }

    public function getTemplateName()
    {
        return ":task:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
        {{ form_start(form, {'action' : path('task_edit', { 'id' : task.id })}) }}
            {{ form_widget(form) }}

            <button type=\"submit\" class=\"btn btn-success pull-right\">Modifier</button>
        {{ form_end(form) }}
    </div>
{% endblock %}
", ":task:edit.html.twig", "/Applications/MAMP/htdocs/todo-and-co/app/Resources/views/task/edit.html.twig");
    }
}
