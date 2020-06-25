<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_8b516c96059440a73cc3d5c4a31403c41338beceefd57aa1d12451de07fce7a2 extends Twig_Template
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
        $__internal_5eafa1719b40727f8071cfb9b39cea071d07b1bd17ca775d7153fd87a0f3a28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eafa1719b40727f8071cfb9b39cea071d07b1bd17ca775d7153fd87a0f3a28e->enter($__internal_5eafa1719b40727f8071cfb9b39cea071d07b1bd17ca775d7153fd87a0f3a28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5eafa1719b40727f8071cfb9b39cea071d07b1bd17ca775d7153fd87a0f3a28e->leave($__internal_5eafa1719b40727f8071cfb9b39cea071d07b1bd17ca775d7153fd87a0f3a28e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/todo-and-co/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
