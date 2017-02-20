<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3ae626d7dbd31a226f7bf2a0390b0e962cd8cbbe415611d0a64e917c90718cd6 extends Twig_Template
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
        $__internal_cd5dea5c4831f5d9bbeec7cb768e34755ab291f3682f6152446f55b49447d61c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5dea5c4831f5d9bbeec7cb768e34755ab291f3682f6152446f55b49447d61c->enter($__internal_cd5dea5c4831f5d9bbeec7cb768e34755ab291f3682f6152446f55b49447d61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cd5dea5c4831f5d9bbeec7cb768e34755ab291f3682f6152446f55b49447d61c->leave($__internal_cd5dea5c4831f5d9bbeec7cb768e34755ab291f3682f6152446f55b49447d61c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
