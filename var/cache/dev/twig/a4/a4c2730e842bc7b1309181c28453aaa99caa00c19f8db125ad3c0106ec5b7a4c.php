<?php

/* :user:create.html.twig */
class __TwigTemplate_29f9c5b4e1bebd8ccaf629a5a8c9ff40446122e6dbef3940cd8988314237e271 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:create.html.twig", 1);
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
        $__internal_ea565ea4fa0872ff8da4a51c1c701e310f29202c3b1a14dbecc44c160d0d5493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea565ea4fa0872ff8da4a51c1c701e310f29202c3b1a14dbecc44c160d0d5493->enter($__internal_ea565ea4fa0872ff8da4a51c1c701e310f29202c3b1a14dbecc44c160d0d5493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea565ea4fa0872ff8da4a51c1c701e310f29202c3b1a14dbecc44c160d0d5493->leave($__internal_ea565ea4fa0872ff8da4a51c1c701e310f29202c3b1a14dbecc44c160d0d5493_prof);

    }

    // line 3
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_3d06a249f8ab98568bc81c387b96c9f0d6a3dc5d8ed7e4193eb5a67ac2eb65c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d06a249f8ab98568bc81c387b96c9f0d6a3dc5d8ed7e4193eb5a67ac2eb65c5->enter($__internal_3d06a249f8ab98568bc81c387b96c9f0d6a3dc5d8ed7e4193eb5a67ac2eb65c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":user:create.html.twig"));

        echo "<h1>Créer un utilisateur</h1>";
        
        $__internal_3d06a249f8ab98568bc81c387b96c9f0d6a3dc5d8ed7e4193eb5a67ac2eb65c5->leave($__internal_3d06a249f8ab98568bc81c387b96c9f0d6a3dc5d8ed7e4193eb5a67ac2eb65c5_prof);

    }

    // line 4
    public function block_header_img($context, array $blocks = array())
    {
        $__internal_b1214ffc0b8373854597c429d5ea73338d4a6312ef6b706a45eb2cba991eaa63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1214ffc0b8373854597c429d5ea73338d4a6312ef6b706a45eb2cba991eaa63->enter($__internal_b1214ffc0b8373854597c429d5ea73338d4a6312ef6b706a45eb2cba991eaa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":user:create.html.twig"));

        
        $__internal_b1214ffc0b8373854597c429d5ea73338d4a6312ef6b706a45eb2cba991eaa63->leave($__internal_b1214ffc0b8373854597c429d5ea73338d4a6312ef6b706a45eb2cba991eaa63_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2c4a5fab264918f3b79a2b12d1761b30235a6134a5094dd415204bf1e7023f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c4a5fab264918f3b79a2b12d1761b30235a6134a5094dd415204bf1e7023f4->enter($__internal_f2c4a5fab264918f3b79a2b12d1761b30235a6134a5094dd415204bf1e7023f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":user:create.html.twig"));

        // line 7
        echo "    <div class=\"row\">
        ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_create")));
        echo "
            ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_f2c4a5fab264918f3b79a2b12d1761b30235a6134a5094dd415204bf1e7023f4->leave($__internal_f2c4a5fab264918f3b79a2b12d1761b30235a6134a5094dd415204bf1e7023f4_prof);

    }

    public function getTemplateName()
    {
        return ":user:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 9,  68 => 8,  65 => 7,  59 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block header_title %}<h1>Créer un utilisateur</h1>{% endblock %}
{% block header_img %}{% endblock %}

{% block body %}
    <div class=\"row\">
        {{ form_start(form, {'action' : path('user_create')}) }}
            {{ form_widget(form) }}

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        {{ form_end(form) }}
    </div>
{% endblock %}
", ":user:create.html.twig", "/Applications/MAMP/htdocs/todo-and-co/app/Resources/views/user/create.html.twig");
    }
}
