<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_f1fce1a713e4357f9abffed6e8d2b4a92af22dba7a0e100a14642c3f4c6139fc extends Twig_Template
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
        $__internal_3b6cc70713570644ab4a03d86ba83095beff396d7d815d6f27a3e3ecd5a83c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6cc70713570644ab4a03d86ba83095beff396d7d815d6f27a3e3ecd5a83c2a->enter($__internal_3b6cc70713570644ab4a03d86ba83095beff396d7d815d6f27a3e3ecd5a83c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_3b6cc70713570644ab4a03d86ba83095beff396d7d815d6f27a3e3ecd5a83c2a->leave($__internal_3b6cc70713570644ab4a03d86ba83095beff396d7d815d6f27a3e3ecd5a83c2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
