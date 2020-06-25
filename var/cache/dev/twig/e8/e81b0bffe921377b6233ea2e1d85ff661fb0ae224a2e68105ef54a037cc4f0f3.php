<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_be3eeda7246d1b2d628e97a0300e6105bc7a25e01ddb29b72f722c21d54c355a extends Twig_Template
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
        $__internal_ce32dd95f4d3fe0d6d6fc0e3a23ae32a40d4ed6eba7afc4b99dafa918f1398fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce32dd95f4d3fe0d6d6fc0e3a23ae32a40d4ed6eba7afc4b99dafa918f1398fd->enter($__internal_ce32dd95f4d3fe0d6d6fc0e3a23ae32a40d4ed6eba7afc4b99dafa918f1398fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ce32dd95f4d3fe0d6d6fc0e3a23ae32a40d4ed6eba7afc4b99dafa918f1398fd->leave($__internal_ce32dd95f4d3fe0d6d6fc0e3a23ae32a40d4ed6eba7afc4b99dafa918f1398fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
