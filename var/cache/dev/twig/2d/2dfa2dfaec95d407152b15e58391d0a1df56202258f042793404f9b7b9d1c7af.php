<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_15c6dfbc5f2472e722be19d2b880ac314c4476889ceb74e8806cc75ab81ddf10 extends Twig_Template
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
        $__internal_9b8079e39d11617db315e2f24c213e1e5267899e3b4baf9c4755e81706080ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8079e39d11617db315e2f24c213e1e5267899e3b4baf9c4755e81706080ed0->enter($__internal_9b8079e39d11617db315e2f24c213e1e5267899e3b4baf9c4755e81706080ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9b8079e39d11617db315e2f24c213e1e5267899e3b4baf9c4755e81706080ed0->leave($__internal_9b8079e39d11617db315e2f24c213e1e5267899e3b4baf9c4755e81706080ed0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
