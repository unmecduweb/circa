<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b0de966814f9e2f981d8b40c7baa4971449e6f22e47023a5e285e667d9919b5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cecc85dd976eb2436a2a22f6f0190d0f46cabd586680eff230183f72af50616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cecc85dd976eb2436a2a22f6f0190d0f46cabd586680eff230183f72af50616->enter($__internal_2cecc85dd976eb2436a2a22f6f0190d0f46cabd586680eff230183f72af50616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cecc85dd976eb2436a2a22f6f0190d0f46cabd586680eff230183f72af50616->leave($__internal_2cecc85dd976eb2436a2a22f6f0190d0f46cabd586680eff230183f72af50616_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_edc77f5d89de6b4c4ba85259ca270e6ab969b346f10232a984e09142b6144660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc77f5d89de6b4c4ba85259ca270e6ab969b346f10232a984e09142b6144660->enter($__internal_edc77f5d89de6b4c4ba85259ca270e6ab969b346f10232a984e09142b6144660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_edc77f5d89de6b4c4ba85259ca270e6ab969b346f10232a984e09142b6144660->leave($__internal_edc77f5d89de6b4c4ba85259ca270e6ab969b346f10232a984e09142b6144660_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f942bd29a224c1ec0596622c35fa3476f102bd86d5ff637038b1a0612df8a594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f942bd29a224c1ec0596622c35fa3476f102bd86d5ff637038b1a0612df8a594->enter($__internal_f942bd29a224c1ec0596622c35fa3476f102bd86d5ff637038b1a0612df8a594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f942bd29a224c1ec0596622c35fa3476f102bd86d5ff637038b1a0612df8a594->leave($__internal_f942bd29a224c1ec0596622c35fa3476f102bd86d5ff637038b1a0612df8a594_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cf668caaa47fa8f8c790a1eaf731185adc3d0e655b7419cc5aa4e4876061b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf668caaa47fa8f8c790a1eaf731185adc3d0e655b7419cc5aa4e4876061b25->enter($__internal_1cf668caaa47fa8f8c790a1eaf731185adc3d0e655b7419cc5aa4e4876061b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1cf668caaa47fa8f8c790a1eaf731185adc3d0e655b7419cc5aa4e4876061b25->leave($__internal_1cf668caaa47fa8f8c790a1eaf731185adc3d0e655b7419cc5aa4e4876061b25_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
