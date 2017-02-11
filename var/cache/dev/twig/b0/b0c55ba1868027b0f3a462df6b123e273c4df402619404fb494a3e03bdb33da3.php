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
        $__internal_997d1605f75269c045ca07cdaa4fe77bb41f9673aef2b6924f5a745eadd3559d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997d1605f75269c045ca07cdaa4fe77bb41f9673aef2b6924f5a745eadd3559d->enter($__internal_997d1605f75269c045ca07cdaa4fe77bb41f9673aef2b6924f5a745eadd3559d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_997d1605f75269c045ca07cdaa4fe77bb41f9673aef2b6924f5a745eadd3559d->leave($__internal_997d1605f75269c045ca07cdaa4fe77bb41f9673aef2b6924f5a745eadd3559d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c35deadff59059786c77d7e008c633e3bbffaa385728649ca77376f843418991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35deadff59059786c77d7e008c633e3bbffaa385728649ca77376f843418991->enter($__internal_c35deadff59059786c77d7e008c633e3bbffaa385728649ca77376f843418991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c35deadff59059786c77d7e008c633e3bbffaa385728649ca77376f843418991->leave($__internal_c35deadff59059786c77d7e008c633e3bbffaa385728649ca77376f843418991_prof);

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
