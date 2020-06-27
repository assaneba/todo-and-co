<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5cc7dee2789018243beafd2e1c92668b9fc659b0a8d1326535931f9aea21eb66 extends Twig_Template
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
        $__internal_7fe31eb5f31484c314feb24134c40debbdb2c8f052dab9fdf6fdaad6a87f60cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe31eb5f31484c314feb24134c40debbdb2c8f052dab9fdf6fdaad6a87f60cb->enter($__internal_7fe31eb5f31484c314feb24134c40debbdb2c8f052dab9fdf6fdaad6a87f60cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7fe31eb5f31484c314feb24134c40debbdb2c8f052dab9fdf6fdaad6a87f60cb->leave($__internal_7fe31eb5f31484c314feb24134c40debbdb2c8f052dab9fdf6fdaad6a87f60cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
