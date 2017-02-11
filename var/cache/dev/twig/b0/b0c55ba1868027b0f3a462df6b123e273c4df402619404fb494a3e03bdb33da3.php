<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6be8bfd0c6ce4f091f48b21d55077f00e4ab9afc3ccf714433e07100694eb24f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fa44588ee5f6d77e34b8491c6196720fa00087cc9f5e6409407b1a920787305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa44588ee5f6d77e34b8491c6196720fa00087cc9f5e6409407b1a920787305->enter($__internal_6fa44588ee5f6d77e34b8491c6196720fa00087cc9f5e6409407b1a920787305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6fa44588ee5f6d77e34b8491c6196720fa00087cc9f5e6409407b1a920787305->leave($__internal_6fa44588ee5f6d77e34b8491c6196720fa00087cc9f5e6409407b1a920787305_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_80538120cb518ad39ca6984a110508cf435ac2f4f96aa61df49f20f399abc8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80538120cb518ad39ca6984a110508cf435ac2f4f96aa61df49f20f399abc8b8->enter($__internal_80538120cb518ad39ca6984a110508cf435ac2f4f96aa61df49f20f399abc8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_80538120cb518ad39ca6984a110508cf435ac2f4f96aa61df49f20f399abc8b8->leave($__internal_80538120cb518ad39ca6984a110508cf435ac2f4f96aa61df49f20f399abc8b8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
