<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_afe13cb2b7d9e63bc01d99bed17743a3486f91a839cfc30a5bad28816646de0d extends Twig_Template
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
        $__internal_2be976fd31e04a8fd186b7dce0f2c6a49ddbcb484796eb14bf21418120e220e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be976fd31e04a8fd186b7dce0f2c6a49ddbcb484796eb14bf21418120e220e2->enter($__internal_2be976fd31e04a8fd186b7dce0f2c6a49ddbcb484796eb14bf21418120e220e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2be976fd31e04a8fd186b7dce0f2c6a49ddbcb484796eb14bf21418120e220e2->leave($__internal_2be976fd31e04a8fd186b7dce0f2c6a49ddbcb484796eb14bf21418120e220e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
