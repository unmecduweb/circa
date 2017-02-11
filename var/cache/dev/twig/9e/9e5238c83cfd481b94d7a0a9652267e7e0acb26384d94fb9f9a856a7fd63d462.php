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
        $__internal_41f77c4fa4458d7b36ad50d950610d48ebaf208437dbde475931db6f75eda423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f77c4fa4458d7b36ad50d950610d48ebaf208437dbde475931db6f75eda423->enter($__internal_41f77c4fa4458d7b36ad50d950610d48ebaf208437dbde475931db6f75eda423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41f77c4fa4458d7b36ad50d950610d48ebaf208437dbde475931db6f75eda423->leave($__internal_41f77c4fa4458d7b36ad50d950610d48ebaf208437dbde475931db6f75eda423_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9300d0a8d436c3ab3b17b6232cc93237491c96dd7b9d8adace325a6403f79253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9300d0a8d436c3ab3b17b6232cc93237491c96dd7b9d8adace325a6403f79253->enter($__internal_9300d0a8d436c3ab3b17b6232cc93237491c96dd7b9d8adace325a6403f79253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9300d0a8d436c3ab3b17b6232cc93237491c96dd7b9d8adace325a6403f79253->leave($__internal_9300d0a8d436c3ab3b17b6232cc93237491c96dd7b9d8adace325a6403f79253_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_428aff31d693bd41edae2e38f6bdffcaefa6e6d55c082db2a3c26b3fc879886e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428aff31d693bd41edae2e38f6bdffcaefa6e6d55c082db2a3c26b3fc879886e->enter($__internal_428aff31d693bd41edae2e38f6bdffcaefa6e6d55c082db2a3c26b3fc879886e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_428aff31d693bd41edae2e38f6bdffcaefa6e6d55c082db2a3c26b3fc879886e->leave($__internal_428aff31d693bd41edae2e38f6bdffcaefa6e6d55c082db2a3c26b3fc879886e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3be3d560a6f149bf9bb27515e9eb22a4cc6d9c72116866a99f94917ed1ac5988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be3d560a6f149bf9bb27515e9eb22a4cc6d9c72116866a99f94917ed1ac5988->enter($__internal_3be3d560a6f149bf9bb27515e9eb22a4cc6d9c72116866a99f94917ed1ac5988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3be3d560a6f149bf9bb27515e9eb22a4cc6d9c72116866a99f94917ed1ac5988->leave($__internal_3be3d560a6f149bf9bb27515e9eb22a4cc6d9c72116866a99f94917ed1ac5988_prof);

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
