<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_19a316a4c9bb8625431c6bae9e8515b231bfddb5407fccdfe391d348b260df0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_d2df51cb86ec8a05d96bec3f4917cddb78619dca2f8486e1142486d25d1c34c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2df51cb86ec8a05d96bec3f4917cddb78619dca2f8486e1142486d25d1c34c1->enter($__internal_d2df51cb86ec8a05d96bec3f4917cddb78619dca2f8486e1142486d25d1c34c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2df51cb86ec8a05d96bec3f4917cddb78619dca2f8486e1142486d25d1c34c1->leave($__internal_d2df51cb86ec8a05d96bec3f4917cddb78619dca2f8486e1142486d25d1c34c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_affed622029e3da5cc405cc58fecfb2d794432393ae5bb062ebd478b2a01bea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affed622029e3da5cc405cc58fecfb2d794432393ae5bb062ebd478b2a01bea3->enter($__internal_affed622029e3da5cc405cc58fecfb2d794432393ae5bb062ebd478b2a01bea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_affed622029e3da5cc405cc58fecfb2d794432393ae5bb062ebd478b2a01bea3->leave($__internal_affed622029e3da5cc405cc58fecfb2d794432393ae5bb062ebd478b2a01bea3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_493c091288d28904676eaeef2dde8fee62a475dbfbf7bb5d40540c710cc63a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493c091288d28904676eaeef2dde8fee62a475dbfbf7bb5d40540c710cc63a20->enter($__internal_493c091288d28904676eaeef2dde8fee62a475dbfbf7bb5d40540c710cc63a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_493c091288d28904676eaeef2dde8fee62a475dbfbf7bb5d40540c710cc63a20->leave($__internal_493c091288d28904676eaeef2dde8fee62a475dbfbf7bb5d40540c710cc63a20_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d332c0acd82900bbc1bac1122d7a1838d98d52376fec28b7130e55025578d553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d332c0acd82900bbc1bac1122d7a1838d98d52376fec28b7130e55025578d553->enter($__internal_d332c0acd82900bbc1bac1122d7a1838d98d52376fec28b7130e55025578d553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d332c0acd82900bbc1bac1122d7a1838d98d52376fec28b7130e55025578d553->leave($__internal_d332c0acd82900bbc1bac1122d7a1838d98d52376fec28b7130e55025578d553_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
