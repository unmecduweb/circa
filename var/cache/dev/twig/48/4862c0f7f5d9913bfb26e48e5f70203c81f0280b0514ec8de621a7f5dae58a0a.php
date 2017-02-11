<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_91dd0d769de2d2a37085dbf78a04148ae679a3349bb1e048dd85476e00373016 extends Twig_Template
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
        $__internal_bd9c77d5f2f52d305cfe6e8264fd008a7d3ee71fad9a135411d5508479b271e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9c77d5f2f52d305cfe6e8264fd008a7d3ee71fad9a135411d5508479b271e3->enter($__internal_bd9c77d5f2f52d305cfe6e8264fd008a7d3ee71fad9a135411d5508479b271e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_bd9c77d5f2f52d305cfe6e8264fd008a7d3ee71fad9a135411d5508479b271e3->leave($__internal_bd9c77d5f2f52d305cfe6e8264fd008a7d3ee71fad9a135411d5508479b271e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
