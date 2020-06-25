<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f92b82c58eff4c60af0bce1141fccc9d16fbef87894a4766a5bfa474d1a23460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_dc5734fe07f93d222ca5aa3513e986d8f1e94eba189f5c113ad891d8fbcaa487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5734fe07f93d222ca5aa3513e986d8f1e94eba189f5c113ad891d8fbcaa487->enter($__internal_dc5734fe07f93d222ca5aa3513e986d8f1e94eba189f5c113ad891d8fbcaa487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc5734fe07f93d222ca5aa3513e986d8f1e94eba189f5c113ad891d8fbcaa487->leave($__internal_dc5734fe07f93d222ca5aa3513e986d8f1e94eba189f5c113ad891d8fbcaa487_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e93c39ad31d45e16bbaadb72e584c3362b3d029fea114c561545668bf2a79cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93c39ad31d45e16bbaadb72e584c3362b3d029fea114c561545668bf2a79cad->enter($__internal_e93c39ad31d45e16bbaadb72e584c3362b3d029fea114c561545668bf2a79cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e93c39ad31d45e16bbaadb72e584c3362b3d029fea114c561545668bf2a79cad->leave($__internal_e93c39ad31d45e16bbaadb72e584c3362b3d029fea114c561545668bf2a79cad_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b85b39a09bce4c8fdf9b451a8f2a3dc4a7ac02b8643eeb8b4e9c373cfa96f7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85b39a09bce4c8fdf9b451a8f2a3dc4a7ac02b8643eeb8b4e9c373cfa96f7b5->enter($__internal_b85b39a09bce4c8fdf9b451a8f2a3dc4a7ac02b8643eeb8b4e9c373cfa96f7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b85b39a09bce4c8fdf9b451a8f2a3dc4a7ac02b8643eeb8b4e9c373cfa96f7b5->leave($__internal_b85b39a09bce4c8fdf9b451a8f2a3dc4a7ac02b8643eeb8b4e9c373cfa96f7b5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0f2c5793375a178c0932ac8dff542c18e0e527c963924f128811bbd723ce6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f2c5793375a178c0932ac8dff542c18e0e527c963924f128811bbd723ce6dd->enter($__internal_a0f2c5793375a178c0932ac8dff542c18e0e527c963924f128811bbd723ce6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a0f2c5793375a178c0932ac8dff542c18e0e527c963924f128811bbd723ce6dd->leave($__internal_a0f2c5793375a178c0932ac8dff542c18e0e527c963924f128811bbd723ce6dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
