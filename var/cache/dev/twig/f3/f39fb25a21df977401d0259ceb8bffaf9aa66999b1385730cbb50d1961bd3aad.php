<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_4a514f7268c90eaf6b835301968328d79c0774a0610edfc0e10cfdee01fcfe47 extends Twig_Template
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
        $__internal_58340749caecb7b7e19ef2b4f365d08de6eb32bb6e32bac32c56a8c39717c847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58340749caecb7b7e19ef2b4f365d08de6eb32bb6e32bac32c56a8c39717c847->enter($__internal_58340749caecb7b7e19ef2b4f365d08de6eb32bb6e32bac32c56a8c39717c847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_58340749caecb7b7e19ef2b4f365d08de6eb32bb6e32bac32c56a8c39717c847->leave($__internal_58340749caecb7b7e19ef2b4f365d08de6eb32bb6e32bac32c56a8c39717c847_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
