<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0bb41671933bafcfafc8b2b364d4d91f14d433c00cb226248f064898c9802f29 extends Twig_Template
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
        $__internal_7f46c327b92e0090df5aa5b5c0fa8df955b60cfb9a1805b60dcec6363e6e2726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f46c327b92e0090df5aa5b5c0fa8df955b60cfb9a1805b60dcec6363e6e2726->enter($__internal_7f46c327b92e0090df5aa5b5c0fa8df955b60cfb9a1805b60dcec6363e6e2726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7f46c327b92e0090df5aa5b5c0fa8df955b60cfb9a1805b60dcec6363e6e2726->leave($__internal_7f46c327b92e0090df5aa5b5c0fa8df955b60cfb9a1805b60dcec6363e6e2726_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
