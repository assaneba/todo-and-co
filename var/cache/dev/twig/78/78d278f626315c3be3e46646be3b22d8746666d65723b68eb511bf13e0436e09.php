<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_eb820ed556debbad725a5a05b79defca301c52fa28cd21208db122a7272c5e6c extends Twig_Template
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
        $__internal_1f86c7ccf92bf9d07f27cc73783a13d41bfbd54b2d949629be638177edf97c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f86c7ccf92bf9d07f27cc73783a13d41bfbd54b2d949629be638177edf97c7a->enter($__internal_1f86c7ccf92bf9d07f27cc73783a13d41bfbd54b2d949629be638177edf97c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1f86c7ccf92bf9d07f27cc73783a13d41bfbd54b2d949629be638177edf97c7a->leave($__internal_1f86c7ccf92bf9d07f27cc73783a13d41bfbd54b2d949629be638177edf97c7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
