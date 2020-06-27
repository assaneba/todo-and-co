<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b99c6472f6b897739014b2d2725b26c39ce12a40cce5ff1ba5649cf2de9cb1e4 extends Twig_Template
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
        $__internal_dea3976153e7cce42a6ff90c1f9fa319b9ebd3b7c4eafa6df141228a60ccf988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea3976153e7cce42a6ff90c1f9fa319b9ebd3b7c4eafa6df141228a60ccf988->enter($__internal_dea3976153e7cce42a6ff90c1f9fa319b9ebd3b7c4eafa6df141228a60ccf988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_dea3976153e7cce42a6ff90c1f9fa319b9ebd3b7c4eafa6df141228a60ccf988->leave($__internal_dea3976153e7cce42a6ff90c1f9fa319b9ebd3b7c4eafa6df141228a60ccf988_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
