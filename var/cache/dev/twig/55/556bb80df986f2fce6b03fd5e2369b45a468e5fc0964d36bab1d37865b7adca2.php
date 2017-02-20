<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1e2207503814a9b7273bb6ff449c61e850b271d78954c21e963a8ac85f25ec07 extends Twig_Template
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
        $__internal_3e59e0ff381551cbb0cdfa24dcb915f5a0b7a6c5c5d195397c5dcbb6672558d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e59e0ff381551cbb0cdfa24dcb915f5a0b7a6c5c5d195397c5dcbb6672558d6->enter($__internal_3e59e0ff381551cbb0cdfa24dcb915f5a0b7a6c5c5d195397c5dcbb6672558d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3e59e0ff381551cbb0cdfa24dcb915f5a0b7a6c5c5d195397c5dcbb6672558d6->leave($__internal_3e59e0ff381551cbb0cdfa24dcb915f5a0b7a6c5c5d195397c5dcbb6672558d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
