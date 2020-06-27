<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2cf3ff14b8310d63f35f65221e066dd61e7218410cc4786ffa1010c459667d65 extends Twig_Template
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
        $__internal_bcb8033a1eaa5d8d6f0fb45f8e7f78c664120c16b8e7f94f21c07dcf81b1b798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb8033a1eaa5d8d6f0fb45f8e7f78c664120c16b8e7f94f21c07dcf81b1b798->enter($__internal_bcb8033a1eaa5d8d6f0fb45f8e7f78c664120c16b8e7f94f21c07dcf81b1b798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_bcb8033a1eaa5d8d6f0fb45f8e7f78c664120c16b8e7f94f21c07dcf81b1b798->leave($__internal_bcb8033a1eaa5d8d6f0fb45f8e7f78c664120c16b8e7f94f21c07dcf81b1b798_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
