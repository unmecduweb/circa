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
        $__internal_385aaacdc095e16c8bf1a6e2877f58460553a9e885d9c92f8685d893291f9de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385aaacdc095e16c8bf1a6e2877f58460553a9e885d9c92f8685d893291f9de2->enter($__internal_385aaacdc095e16c8bf1a6e2877f58460553a9e885d9c92f8685d893291f9de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_385aaacdc095e16c8bf1a6e2877f58460553a9e885d9c92f8685d893291f9de2->leave($__internal_385aaacdc095e16c8bf1a6e2877f58460553a9e885d9c92f8685d893291f9de2_prof);

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
