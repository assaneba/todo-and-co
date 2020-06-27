<?php

/* security/login.html.twig */
class __TwigTemplate_810bc66a28c4c4dc3057bf301476f071541e5b040be4750d6fd1eeee72b2ecb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_6908c4716905f18bd651f33e8943ea6eb1fa539ab2f69d5b6b09b7ce68166d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6908c4716905f18bd651f33e8943ea6eb1fa539ab2f69d5b6b09b7ce68166d75->enter($__internal_6908c4716905f18bd651f33e8943ea6eb1fa539ab2f69d5b6b09b7ce68166d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6908c4716905f18bd651f33e8943ea6eb1fa539ab2f69d5b6b09b7ce68166d75->leave($__internal_6908c4716905f18bd651f33e8943ea6eb1fa539ab2f69d5b6b09b7ce68166d75_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53d2371df5188f0f59bc6683a536c707b1990722ff8cbddd174025b4e4938af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d2371df5188f0f59bc6683a536c707b1990722ff8cbddd174025b4e4938af7->enter($__internal_53d2371df5188f0f59bc6683a536c707b1990722ff8cbddd174025b4e4938af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "security/login.html.twig"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Nom d'utilisateur :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <button class=\"btn btn-success\" type=\"submit\">Se connecter</button>
    </form>
";
        
        $__internal_53d2371df5188f0f59bc6683a536c707b1990722ff8cbddd174025b4e4938af7->leave($__internal_53d2371df5188f0f59bc6683a536c707b1990722ff8cbddd174025b4e4938af7_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    {% if error %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <label for=\"username\">Nom d'utilisateur :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <button class=\"btn btn-success\" type=\"submit\">Se connecter</button>
    </form>
{% endblock %}
", "security/login.html.twig", "/Applications/MAMP/htdocs/todo-and-co/app/Resources/views/security/login.html.twig");
    }
}
