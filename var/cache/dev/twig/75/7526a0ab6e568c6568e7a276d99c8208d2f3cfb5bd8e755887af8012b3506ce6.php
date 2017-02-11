<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_1e51536a88c773c51e76462aa0a9d8cbe02fd4d8e91ab51011b815e3642e18db extends Twig_Template
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
        $__internal_af741ceba765a11cb6609663680f20f958d3bb5ab7d5314bfc2ac647c7e60a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af741ceba765a11cb6609663680f20f958d3bb5ab7d5314bfc2ac647c7e60a70->enter($__internal_af741ceba765a11cb6609663680f20f958d3bb5ab7d5314bfc2ac647c7e60a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_af741ceba765a11cb6609663680f20f958d3bb5ab7d5314bfc2ac647c7e60a70->leave($__internal_af741ceba765a11cb6609663680f20f958d3bb5ab7d5314bfc2ac647c7e60a70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
