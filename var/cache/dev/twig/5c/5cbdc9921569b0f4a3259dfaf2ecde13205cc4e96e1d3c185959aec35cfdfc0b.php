<?php

/* :user:edit.html.twig */
class __TwigTemplate_9b456eff8bb139afa6bd38e5df933315dd8301edb5e12097b650b48c4952f48a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
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
        $__internal_8779dbed3eab0fbd4a5909aa75fcfe24ae50fbc30690dd4597a38c8b0ae23b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8779dbed3eab0fbd4a5909aa75fcfe24ae50fbc30690dd4597a38c8b0ae23b77->enter($__internal_8779dbed3eab0fbd4a5909aa75fcfe24ae50fbc30690dd4597a38c8b0ae23b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8779dbed3eab0fbd4a5909aa75fcfe24ae50fbc30690dd4597a38c8b0ae23b77->leave($__internal_8779dbed3eab0fbd4a5909aa75fcfe24ae50fbc30690dd4597a38c8b0ae23b77_prof);

    }

    // line 3
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_362ce98e343e46037eee3043114b1b00eaf9a75228ba6d58d5150d7e4d310922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362ce98e343e46037eee3043114b1b00eaf9a75228ba6d58d5150d7e4d310922->enter($__internal_362ce98e343e46037eee3043114b1b00eaf9a75228ba6d58d5150d7e4d310922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":user:edit.html.twig"));

        echo "<h1>Modifier <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</strong></h1>";
        
        $__internal_362ce98e343e46037eee3043114b1b00eaf9a75228ba6d58d5150d7e4d310922->leave($__internal_362ce98e343e46037eee3043114b1b00eaf9a75228ba6d58d5150d7e4d310922_prof);

    }

    // line 4
    public function block_header_img($context, array $blocks = array())
    {
        $__internal_3ff22d4f8265e40fd451259d3bec52c9ab7df5c6b258b30f9c67f7036186134b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff22d4f8265e40fd451259d3bec52c9ab7df5c6b258b30f9c67f7036186134b->enter($__internal_3ff22d4f8265e40fd451259d3bec52c9ab7df5c6b258b30f9c67f7036186134b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":user:edit.html.twig"));

        
        $__internal_3ff22d4f8265e40fd451259d3bec52c9ab7df5c6b258b30f9c67f7036186134b->leave($__internal_3ff22d4f8265e40fd451259d3bec52c9ab7df5c6b258b30f9c67f7036186134b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dc77cca51e75ab12665b86a58eed39d5bc40d3885370445663268399ae55330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc77cca51e75ab12665b86a58eed39d5bc40d3885370445663268399ae55330->enter($__internal_6dc77cca51e75ab12665b86a58eed39d5bc40d3885370445663268399ae55330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":user:edit.html.twig"));

        // line 7
        echo "    <div class=\"row\">
        ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array())))));
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <button type=\"submit\" class=\"btn btn-success pull-right\">Modifier</button>
        ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_6dc77cca51e75ab12665b86a58eed39d5bc40d3885370445663268399ae55330->leave($__internal_6dc77cca51e75ab12665b86a58eed39d5bc40d3885370445663268399ae55330_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  74 => 9,  70 => 8,  67 => 7,  61 => 6,  50 => 4,  36 => 3,  11 => 1,);
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

{% block header_title %}<h1>Modifier <strong>{{ user.username }}</strong></h1>{% endblock %}
{% block header_img %}{% endblock %}

{% block body %}
    <div class=\"row\">
        {{ form_start(form, {'action' : path('user_edit', {'id' : user.id})}) }}
        {{ form_widget(form) }}

        <button type=\"submit\" class=\"btn btn-success pull-right\">Modifier</button>
        {{ form_end(form) }}
    </div>
{% endblock %}
", ":user:edit.html.twig", "/Applications/MAMP/htdocs/todo-and-co/app/Resources/views/user/edit.html.twig");
    }
}
