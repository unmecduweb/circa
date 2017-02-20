<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_b7703768cb2af8ad3e1351772be2a21b20f70162000e9951e268acb7e9afc0ee extends Twig_Template
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
        $__internal_53cf16052c6a7a4bc28268d6c8c3f47223c4958949a8f900a86a3382dc77c97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53cf16052c6a7a4bc28268d6c8c3f47223c4958949a8f900a86a3382dc77c97e->enter($__internal_53cf16052c6a7a4bc28268d6c8c3f47223c4958949a8f900a86a3382dc77c97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_53cf16052c6a7a4bc28268d6c8c3f47223c4958949a8f900a86a3382dc77c97e->leave($__internal_53cf16052c6a7a4bc28268d6c8c3f47223c4958949a8f900a86a3382dc77c97e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
