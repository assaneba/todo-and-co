<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9b7bc661ee51c78cb3a57f9b7aeecd16222d3fc4b11f8848d9afa94becdc7598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae08601a50cfa2b7d7c00ddd67452ba72fc148281db98d8df2629741dcd684ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae08601a50cfa2b7d7c00ddd67452ba72fc148281db98d8df2629741dcd684ed->enter($__internal_ae08601a50cfa2b7d7c00ddd67452ba72fc148281db98d8df2629741dcd684ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ae08601a50cfa2b7d7c00ddd67452ba72fc148281db98d8df2629741dcd684ed->leave($__internal_ae08601a50cfa2b7d7c00ddd67452ba72fc148281db98d8df2629741dcd684ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
