<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cef5a0bed9908a1081e51065a4ea3281980011a34f258c677af42b40ea017a28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b15a534e857b19b894aa2dec4dce45b77e87576052c5e0e4436343e1e1fbec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b15a534e857b19b894aa2dec4dce45b77e87576052c5e0e4436343e1e1fbec9->enter($__internal_9b15a534e857b19b894aa2dec4dce45b77e87576052c5e0e4436343e1e1fbec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9b15a534e857b19b894aa2dec4dce45b77e87576052c5e0e4436343e1e1fbec9->leave($__internal_9b15a534e857b19b894aa2dec4dce45b77e87576052c5e0e4436343e1e1fbec9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_65eb6d88f76688c11e799975224edb58b795878d1c3eee3d48f619e7dfc901ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65eb6d88f76688c11e799975224edb58b795878d1c3eee3d48f619e7dfc901ff->enter($__internal_65eb6d88f76688c11e799975224edb58b795878d1c3eee3d48f619e7dfc901ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_65eb6d88f76688c11e799975224edb58b795878d1c3eee3d48f619e7dfc901ff->leave($__internal_65eb6d88f76688c11e799975224edb58b795878d1c3eee3d48f619e7dfc901ff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
