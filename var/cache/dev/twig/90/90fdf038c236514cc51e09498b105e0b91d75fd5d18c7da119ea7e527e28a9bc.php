<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a6075c3134be8bc0fd7c91d9c4d8f0d0df24ebce90f1700f32e6983882633e95 extends Twig_Template
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
        $__internal_c87a053333a5c4ff860e839f880c1df64a40f9ec09ecfa7a9654604826608262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87a053333a5c4ff860e839f880c1df64a40f9ec09ecfa7a9654604826608262->enter($__internal_c87a053333a5c4ff860e839f880c1df64a40f9ec09ecfa7a9654604826608262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_c87a053333a5c4ff860e839f880c1df64a40f9ec09ecfa7a9654604826608262->leave($__internal_c87a053333a5c4ff860e839f880c1df64a40f9ec09ecfa7a9654604826608262_prof);

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
", "@Framework/Form/attributes.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
