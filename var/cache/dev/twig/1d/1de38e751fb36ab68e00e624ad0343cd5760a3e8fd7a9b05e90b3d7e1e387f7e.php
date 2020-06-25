<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_023d1b0f3715926d114432c8f7bcbee1c4e69a144610a4ddf7dedd44a337e5bf extends Twig_Template
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
        $__internal_3de6acaf6248fe1e5a8d137591b46c517fb16192482923a1fc4d6569acb6f68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de6acaf6248fe1e5a8d137591b46c517fb16192482923a1fc4d6569acb6f68e->enter($__internal_3de6acaf6248fe1e5a8d137591b46c517fb16192482923a1fc4d6569acb6f68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_3de6acaf6248fe1e5a8d137591b46c517fb16192482923a1fc4d6569acb6f68e->leave($__internal_3de6acaf6248fe1e5a8d137591b46c517fb16192482923a1fc4d6569acb6f68e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
