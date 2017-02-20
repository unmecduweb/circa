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
        $__internal_20106326056148ea92f2697489866c7c974585b176d8e6595b93c0cf2b32197c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20106326056148ea92f2697489866c7c974585b176d8e6595b93c0cf2b32197c->enter($__internal_20106326056148ea92f2697489866c7c974585b176d8e6595b93c0cf2b32197c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20106326056148ea92f2697489866c7c974585b176d8e6595b93c0cf2b32197c->leave($__internal_20106326056148ea92f2697489866c7c974585b176d8e6595b93c0cf2b32197c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c5295c37b716138d761b50163eb0cce5bb7b3b56b9a01a62c5b3ccd8c50ab07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5295c37b716138d761b50163eb0cce5bb7b3b56b9a01a62c5b3ccd8c50ab07b->enter($__internal_c5295c37b716138d761b50163eb0cce5bb7b3b56b9a01a62c5b3ccd8c50ab07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c5295c37b716138d761b50163eb0cce5bb7b3b56b9a01a62c5b3ccd8c50ab07b->leave($__internal_c5295c37b716138d761b50163eb0cce5bb7b3b56b9a01a62c5b3ccd8c50ab07b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_27863ea88ae0baf09ccd53f0dcdf4dc73274c4a9160e5e2bd8c54da7b2375b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27863ea88ae0baf09ccd53f0dcdf4dc73274c4a9160e5e2bd8c54da7b2375b51->enter($__internal_27863ea88ae0baf09ccd53f0dcdf4dc73274c4a9160e5e2bd8c54da7b2375b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_27863ea88ae0baf09ccd53f0dcdf4dc73274c4a9160e5e2bd8c54da7b2375b51->leave($__internal_27863ea88ae0baf09ccd53f0dcdf4dc73274c4a9160e5e2bd8c54da7b2375b51_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e5170fb542719c4c13579abb44d446e1b6f32958efb001a8ef892557155742b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5170fb542719c4c13579abb44d446e1b6f32958efb001a8ef892557155742b->enter($__internal_3e5170fb542719c4c13579abb44d446e1b6f32958efb001a8ef892557155742b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e5170fb542719c4c13579abb44d446e1b6f32958efb001a8ef892557155742b->leave($__internal_3e5170fb542719c4c13579abb44d446e1b6f32958efb001a8ef892557155742b_prof);

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
