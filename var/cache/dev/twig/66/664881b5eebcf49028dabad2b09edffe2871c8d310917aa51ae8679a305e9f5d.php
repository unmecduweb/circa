<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c614e3dc76ff10ab5e96a9556f9b04a2d5402097cdfe9f2f32fac0e503c6eb8c extends Twig_Template
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
        $__internal_dbbbd58efacffe765f6a57b31ec7bdbc715fff194e8ba37294037f5dbd1c9151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbbd58efacffe765f6a57b31ec7bdbc715fff194e8ba37294037f5dbd1c9151->enter($__internal_dbbbd58efacffe765f6a57b31ec7bdbc715fff194e8ba37294037f5dbd1c9151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_dbbbd58efacffe765f6a57b31ec7bdbc715fff194e8ba37294037f5dbd1c9151->leave($__internal_dbbbd58efacffe765f6a57b31ec7bdbc715fff194e8ba37294037f5dbd1c9151_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
