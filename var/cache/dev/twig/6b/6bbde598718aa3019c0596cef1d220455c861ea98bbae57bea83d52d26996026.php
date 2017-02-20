<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3a55311532fd62e0c7b00664e94a78ca75a04624067d369aed144385ef601087 extends Twig_Template
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
        $__internal_3b005f575628f8bd7f69dce80ca8a1ebe4b7c297a5f105f71252faa194bf759b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b005f575628f8bd7f69dce80ca8a1ebe4b7c297a5f105f71252faa194bf759b->enter($__internal_3b005f575628f8bd7f69dce80ca8a1ebe4b7c297a5f105f71252faa194bf759b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3b005f575628f8bd7f69dce80ca8a1ebe4b7c297a5f105f71252faa194bf759b->leave($__internal_3b005f575628f8bd7f69dce80ca8a1ebe4b7c297a5f105f71252faa194bf759b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
