<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8ac13b01dabd02f9bc8119267cbb7ea7f82f82a5615f7402d7df7a5827e04403 extends Twig_Template
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
        $__internal_4114a91a8eee1e3f07a1a4e34d6219f8dbce114700d60f6fd395d71bac3c5c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4114a91a8eee1e3f07a1a4e34d6219f8dbce114700d60f6fd395d71bac3c5c51->enter($__internal_4114a91a8eee1e3f07a1a4e34d6219f8dbce114700d60f6fd395d71bac3c5c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4114a91a8eee1e3f07a1a4e34d6219f8dbce114700d60f6fd395d71bac3c5c51->leave($__internal_4114a91a8eee1e3f07a1a4e34d6219f8dbce114700d60f6fd395d71bac3c5c51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
