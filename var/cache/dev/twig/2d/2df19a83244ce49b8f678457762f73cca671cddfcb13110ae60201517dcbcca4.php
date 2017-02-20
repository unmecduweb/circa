<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5799064eca2e61482025877a8c1936c25c59c92a006562bf2b4f12b2a5808cf2 extends Twig_Template
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
        $__internal_2b91e1b9a2ceea0f690fdaa8ab50194cf56bbbc3cadfabe4ba7eda79a369a631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b91e1b9a2ceea0f690fdaa8ab50194cf56bbbc3cadfabe4ba7eda79a369a631->enter($__internal_2b91e1b9a2ceea0f690fdaa8ab50194cf56bbbc3cadfabe4ba7eda79a369a631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2b91e1b9a2ceea0f690fdaa8ab50194cf56bbbc3cadfabe4ba7eda79a369a631->leave($__internal_2b91e1b9a2ceea0f690fdaa8ab50194cf56bbbc3cadfabe4ba7eda79a369a631_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
