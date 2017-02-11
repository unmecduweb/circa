<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5609e424e06fe4208170e824c544b9305ee1e1fe5923ab0bdd63962f22909f83 extends Twig_Template
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
        $__internal_c2b349d099cc66aef956cabf923ece0c1a4fb7e5c993823d2ddbf4011aee17c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b349d099cc66aef956cabf923ece0c1a4fb7e5c993823d2ddbf4011aee17c3->enter($__internal_c2b349d099cc66aef956cabf923ece0c1a4fb7e5c993823d2ddbf4011aee17c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c2b349d099cc66aef956cabf923ece0c1a4fb7e5c993823d2ddbf4011aee17c3->leave($__internal_c2b349d099cc66aef956cabf923ece0c1a4fb7e5c993823d2ddbf4011aee17c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
