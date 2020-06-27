<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f4ed203f21c22fe4c25b69b90ebc0f3f919500aae2dda1f75f788dbd4740bdaa extends Twig_Template
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
        $__internal_4925db570626dcc9e4f6ef90a52ec21dd78ce6ded50c0ead81b8c446691e62c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4925db570626dcc9e4f6ef90a52ec21dd78ce6ded50c0ead81b8c446691e62c9->enter($__internal_4925db570626dcc9e4f6ef90a52ec21dd78ce6ded50c0ead81b8c446691e62c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_4925db570626dcc9e4f6ef90a52ec21dd78ce6ded50c0ead81b8c446691e62c9->leave($__internal_4925db570626dcc9e4f6ef90a52ec21dd78ce6ded50c0ead81b8c446691e62c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
