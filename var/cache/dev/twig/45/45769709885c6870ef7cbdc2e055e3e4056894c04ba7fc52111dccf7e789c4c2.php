<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_aa5c93d0ff4ec6b9ca8352a9ea5a4fb5e2889571a1b21f3400948340eb46e482 extends Twig_Template
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
        $__internal_ec979a5d25ea09bbbcff91e68bd4cd2cfb61feccf427fc3fd9625a522e8f3ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec979a5d25ea09bbbcff91e68bd4cd2cfb61feccf427fc3fd9625a522e8f3ada->enter($__internal_ec979a5d25ea09bbbcff91e68bd4cd2cfb61feccf427fc3fd9625a522e8f3ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ec979a5d25ea09bbbcff91e68bd4cd2cfb61feccf427fc3fd9625a522e8f3ada->leave($__internal_ec979a5d25ea09bbbcff91e68bd4cd2cfb61feccf427fc3fd9625a522e8f3ada_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
