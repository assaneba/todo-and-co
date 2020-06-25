<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ddc72a8beb698141c4a870ab149027ac4255a5779e8b25e210981fe4acd90e3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3b2bcd424e6b0f9e1c2f7f167f1a80f04afd19e53a23e49b928a846d2c53a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b2bcd424e6b0f9e1c2f7f167f1a80f04afd19e53a23e49b928a846d2c53a35->enter($__internal_a3b2bcd424e6b0f9e1c2f7f167f1a80f04afd19e53a23e49b928a846d2c53a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3b2bcd424e6b0f9e1c2f7f167f1a80f04afd19e53a23e49b928a846d2c53a35->leave($__internal_a3b2bcd424e6b0f9e1c2f7f167f1a80f04afd19e53a23e49b928a846d2c53a35_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad28930cba08ac7525f5289cd50d8c9acf09770d6f9d8812d205a622c359d8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad28930cba08ac7525f5289cd50d8c9acf09770d6f9d8812d205a622c359d8f3->enter($__internal_ad28930cba08ac7525f5289cd50d8c9acf09770d6f9d8812d205a622c359d8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_ad28930cba08ac7525f5289cd50d8c9acf09770d6f9d8812d205a622c359d8f3->leave($__internal_ad28930cba08ac7525f5289cd50d8c9acf09770d6f9d8812d205a622c359d8f3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_11a7a81ffed655e7f111c1b8b8e53753d55b2306ad8aa1a11617d169f17fe4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a7a81ffed655e7f111c1b8b8e53753d55b2306ad8aa1a11617d169f17fe4ef->enter($__internal_11a7a81ffed655e7f111c1b8b8e53753d55b2306ad8aa1a11617d169f17fe4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_11a7a81ffed655e7f111c1b8b8e53753d55b2306ad8aa1a11617d169f17fe4ef->leave($__internal_11a7a81ffed655e7f111c1b8b8e53753d55b2306ad8aa1a11617d169f17fe4ef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
