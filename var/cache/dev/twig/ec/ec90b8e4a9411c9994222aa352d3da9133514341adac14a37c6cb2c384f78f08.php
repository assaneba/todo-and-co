<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9b1541ed5952d70098b709718e295f85b0c7a3477b97b0613657a39a850ceb0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1855d801e17ffb57c5b35ba3132c0b3912fc7ac33089bf1404c545cdfd689011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1855d801e17ffb57c5b35ba3132c0b3912fc7ac33089bf1404c545cdfd689011->enter($__internal_1855d801e17ffb57c5b35ba3132c0b3912fc7ac33089bf1404c545cdfd689011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1855d801e17ffb57c5b35ba3132c0b3912fc7ac33089bf1404c545cdfd689011->leave($__internal_1855d801e17ffb57c5b35ba3132c0b3912fc7ac33089bf1404c545cdfd689011_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5bbde50c7d0b64f4f6e8ead967071c665699a6409a6b5ca97898bf7a4d2ae5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5bbde50c7d0b64f4f6e8ead967071c665699a6409a6b5ca97898bf7a4d2ae5c->enter($__internal_f5bbde50c7d0b64f4f6e8ead967071c665699a6409a6b5ca97898bf7a4d2ae5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f5bbde50c7d0b64f4f6e8ead967071c665699a6409a6b5ca97898bf7a4d2ae5c->leave($__internal_f5bbde50c7d0b64f4f6e8ead967071c665699a6409a6b5ca97898bf7a4d2ae5c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d64df816ddefa9ec2330f36396c9d74aa289edcedae42a7c0b08ed14d9292b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64df816ddefa9ec2330f36396c9d74aa289edcedae42a7c0b08ed14d9292b50->enter($__internal_d64df816ddefa9ec2330f36396c9d74aa289edcedae42a7c0b08ed14d9292b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d64df816ddefa9ec2330f36396c9d74aa289edcedae42a7c0b08ed14d9292b50->leave($__internal_d64df816ddefa9ec2330f36396c9d74aa289edcedae42a7c0b08ed14d9292b50_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9297e14e7e7f585c34f0ca53964a8622b767a2c12cad14bd71d56f58c9fc52ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9297e14e7e7f585c34f0ca53964a8622b767a2c12cad14bd71d56f58c9fc52ff->enter($__internal_9297e14e7e7f585c34f0ca53964a8622b767a2c12cad14bd71d56f58c9fc52ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9297e14e7e7f585c34f0ca53964a8622b767a2c12cad14bd71d56f58c9fc52ff->leave($__internal_9297e14e7e7f585c34f0ca53964a8622b767a2c12cad14bd71d56f58c9fc52ff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
