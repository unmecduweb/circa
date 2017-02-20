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
        $__internal_204a1ab44facb4c6bff193636c463779fa4902e573bdd02841d8e9a65be4df9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204a1ab44facb4c6bff193636c463779fa4902e573bdd02841d8e9a65be4df9f->enter($__internal_204a1ab44facb4c6bff193636c463779fa4902e573bdd02841d8e9a65be4df9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_204a1ab44facb4c6bff193636c463779fa4902e573bdd02841d8e9a65be4df9f->leave($__internal_204a1ab44facb4c6bff193636c463779fa4902e573bdd02841d8e9a65be4df9f_prof);

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
