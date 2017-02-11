<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_2b78b0aef006623e53d8bd12da74b16cef92593cbdee2e64d54521742af0f521 extends Twig_Template
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
        $__internal_47955ca0c239865d48a1095c69dd1399a39476f42a8450cb96a2f450abc31597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47955ca0c239865d48a1095c69dd1399a39476f42a8450cb96a2f450abc31597->enter($__internal_47955ca0c239865d48a1095c69dd1399a39476f42a8450cb96a2f450abc31597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_47955ca0c239865d48a1095c69dd1399a39476f42a8450cb96a2f450abc31597->leave($__internal_47955ca0c239865d48a1095c69dd1399a39476f42a8450cb96a2f450abc31597_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
