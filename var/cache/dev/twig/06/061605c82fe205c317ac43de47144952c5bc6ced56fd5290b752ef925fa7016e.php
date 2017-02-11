<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_64df9fb5cf887cc13ec6cee2d6293f32dff76d5dc4c9a500bc26ec8393e79d7e extends Twig_Template
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
        $__internal_17144014f9cbd587ed07858f5f5c6ab5e7bd189c5d08f0188715c2599a415749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17144014f9cbd587ed07858f5f5c6ab5e7bd189c5d08f0188715c2599a415749->enter($__internal_17144014f9cbd587ed07858f5f5c6ab5e7bd189c5d08f0188715c2599a415749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_17144014f9cbd587ed07858f5f5c6ab5e7bd189c5d08f0188715c2599a415749->leave($__internal_17144014f9cbd587ed07858f5f5c6ab5e7bd189c5d08f0188715c2599a415749_prof);

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
", "@Framework/Form/container_attributes.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
