<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_715975197f1aab45f7cf9937cc271bae6818022a4104a91c9588f21cfe59e5bd extends Twig_Template
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
        $__internal_b12fcfdfca88af4bfac1b99b3a8b9725bfd9b1493cad8a2260a92814f6e54da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12fcfdfca88af4bfac1b99b3a8b9725bfd9b1493cad8a2260a92814f6e54da1->enter($__internal_b12fcfdfca88af4bfac1b99b3a8b9725bfd9b1493cad8a2260a92814f6e54da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b12fcfdfca88af4bfac1b99b3a8b9725bfd9b1493cad8a2260a92814f6e54da1->leave($__internal_b12fcfdfca88af4bfac1b99b3a8b9725bfd9b1493cad8a2260a92814f6e54da1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
