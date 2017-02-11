<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e1a43d60df93dfeec04bbbf591a1226f145ff4428b5dae4dfa9493e6e68bfec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_f7847b486feb70a25c8d576b34b8ab5f500e15624707f34274e3146780297b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7847b486feb70a25c8d576b34b8ab5f500e15624707f34274e3146780297b46->enter($__internal_f7847b486feb70a25c8d576b34b8ab5f500e15624707f34274e3146780297b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7847b486feb70a25c8d576b34b8ab5f500e15624707f34274e3146780297b46->leave($__internal_f7847b486feb70a25c8d576b34b8ab5f500e15624707f34274e3146780297b46_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b875d3f2a9a6689ad9c1c3f383847abf53eb3bf873e33247e5bcf0c11f9f7fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b875d3f2a9a6689ad9c1c3f383847abf53eb3bf873e33247e5bcf0c11f9f7fbf->enter($__internal_b875d3f2a9a6689ad9c1c3f383847abf53eb3bf873e33247e5bcf0c11f9f7fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b875d3f2a9a6689ad9c1c3f383847abf53eb3bf873e33247e5bcf0c11f9f7fbf->leave($__internal_b875d3f2a9a6689ad9c1c3f383847abf53eb3bf873e33247e5bcf0c11f9f7fbf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f96a2f99947f4bc9ad03828719d68904af2b3670fa2564f7f42f54407bb63c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96a2f99947f4bc9ad03828719d68904af2b3670fa2564f7f42f54407bb63c2e->enter($__internal_f96a2f99947f4bc9ad03828719d68904af2b3670fa2564f7f42f54407bb63c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f96a2f99947f4bc9ad03828719d68904af2b3670fa2564f7f42f54407bb63c2e->leave($__internal_f96a2f99947f4bc9ad03828719d68904af2b3670fa2564f7f42f54407bb63c2e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26220e665f1cede540344e544cd6589d3c63d7d9305d550de1dd81008a431d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26220e665f1cede540344e544cd6589d3c63d7d9305d550de1dd81008a431d0d->enter($__internal_26220e665f1cede540344e544cd6589d3c63d7d9305d550de1dd81008a431d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_26220e665f1cede540344e544cd6589d3c63d7d9305d550de1dd81008a431d0d->leave($__internal_26220e665f1cede540344e544cd6589d3c63d7d9305d550de1dd81008a431d0d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
