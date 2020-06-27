<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_601ea498f9ac2d0937e75c41bfb36edfcd02046fe30389804756a037f535af0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b93cc19501a384990970768ca5319789184449e32a8652d9a328e343214c9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b93cc19501a384990970768ca5319789184449e32a8652d9a328e343214c9dc->enter($__internal_8b93cc19501a384990970768ca5319789184449e32a8652d9a328e343214c9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b93cc19501a384990970768ca5319789184449e32a8652d9a328e343214c9dc->leave($__internal_8b93cc19501a384990970768ca5319789184449e32a8652d9a328e343214c9dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6055effb41ec84060acfaaf386397f2332c26370d5e4cd991127c14e340b4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6055effb41ec84060acfaaf386397f2332c26370d5e4cd991127c14e340b4d5->enter($__internal_a6055effb41ec84060acfaaf386397f2332c26370d5e4cd991127c14e340b4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_a6055effb41ec84060acfaaf386397f2332c26370d5e4cd991127c14e340b4d5->leave($__internal_a6055effb41ec84060acfaaf386397f2332c26370d5e4cd991127c14e340b4d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8fde0987223bff0d8a68466aabb71ded82d9e9a6bd1a2ad88ab6a79f2279120c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fde0987223bff0d8a68466aabb71ded82d9e9a6bd1a2ad88ab6a79f2279120c->enter($__internal_8fde0987223bff0d8a68466aabb71ded82d9e9a6bd1a2ad88ab6a79f2279120c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8fde0987223bff0d8a68466aabb71ded82d9e9a6bd1a2ad88ab6a79f2279120c->leave($__internal_8fde0987223bff0d8a68466aabb71ded82d9e9a6bd1a2ad88ab6a79f2279120c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c307f706f86ff77e1d919e3ee194f95c7567cdc7b7d002a559412309fd3ef2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c307f706f86ff77e1d919e3ee194f95c7567cdc7b7d002a559412309fd3ef2eb->enter($__internal_c307f706f86ff77e1d919e3ee194f95c7567cdc7b7d002a559412309fd3ef2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c307f706f86ff77e1d919e3ee194f95c7567cdc7b7d002a559412309fd3ef2eb->leave($__internal_c307f706f86ff77e1d919e3ee194f95c7567cdc7b7d002a559412309fd3ef2eb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
