<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_e6029c2fd5a3fd4b03d39627931fbde83d17149c68992c12fb9b1f8352187f1a extends Twig_Template
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
        $__internal_55a08967f32f53b07c5cfd895753b01169ac3eb4a0bdd9f2572e1f9f2accdb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a08967f32f53b07c5cfd895753b01169ac3eb4a0bdd9f2572e1f9f2accdb48->enter($__internal_55a08967f32f53b07c5cfd895753b01169ac3eb4a0bdd9f2572e1f9f2accdb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_55a08967f32f53b07c5cfd895753b01169ac3eb4a0bdd9f2572e1f9f2accdb48->leave($__internal_55a08967f32f53b07c5cfd895753b01169ac3eb4a0bdd9f2572e1f9f2accdb48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
