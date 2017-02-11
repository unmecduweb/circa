<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ab9c34b6803ff9fc232b82733766d061cd2c3fe3d6744cb0fdb04411b3c63681 extends Twig_Template
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
        $__internal_b97a87e4bd9cbc62488b70b17cb1ae6829d5dc5b6ca95818f0fbfd9f18681612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97a87e4bd9cbc62488b70b17cb1ae6829d5dc5b6ca95818f0fbfd9f18681612->enter($__internal_b97a87e4bd9cbc62488b70b17cb1ae6829d5dc5b6ca95818f0fbfd9f18681612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b97a87e4bd9cbc62488b70b17cb1ae6829d5dc5b6ca95818f0fbfd9f18681612->leave($__internal_b97a87e4bd9cbc62488b70b17cb1ae6829d5dc5b6ca95818f0fbfd9f18681612_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
