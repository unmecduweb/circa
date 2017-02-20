<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_009f28cae2a36840c5a3e00c8937406efdaf28827751400cffeb4fb1b45f473e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_569ac557ce59fb0140367cc3e0ee028275cfffe294ea73ee001c4e3c0d0c0ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569ac557ce59fb0140367cc3e0ee028275cfffe294ea73ee001c4e3c0d0c0ff7->enter($__internal_569ac557ce59fb0140367cc3e0ee028275cfffe294ea73ee001c4e3c0d0c0ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_569ac557ce59fb0140367cc3e0ee028275cfffe294ea73ee001c4e3c0d0c0ff7->leave($__internal_569ac557ce59fb0140367cc3e0ee028275cfffe294ea73ee001c4e3c0d0c0ff7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39a05d8f3bd1a8ff5fb3f2f1b7f3cda71da7e31838735109fd89bc1d9fff8b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a05d8f3bd1a8ff5fb3f2f1b7f3cda71da7e31838735109fd89bc1d9fff8b49->enter($__internal_39a05d8f3bd1a8ff5fb3f2f1b7f3cda71da7e31838735109fd89bc1d9fff8b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_39a05d8f3bd1a8ff5fb3f2f1b7f3cda71da7e31838735109fd89bc1d9fff8b49->leave($__internal_39a05d8f3bd1a8ff5fb3f2f1b7f3cda71da7e31838735109fd89bc1d9fff8b49_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b5cca42746e1ed7d1e5c9d111e40f6586fe60354673bc99b42bbdae8c02cb50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5cca42746e1ed7d1e5c9d111e40f6586fe60354673bc99b42bbdae8c02cb50->enter($__internal_0b5cca42746e1ed7d1e5c9d111e40f6586fe60354673bc99b42bbdae8c02cb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0b5cca42746e1ed7d1e5c9d111e40f6586fe60354673bc99b42bbdae8c02cb50->leave($__internal_0b5cca42746e1ed7d1e5c9d111e40f6586fe60354673bc99b42bbdae8c02cb50_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4e60ba586d3bc174ee25342817c2f96c51151ec155d60e3d2f241a4849e8562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e60ba586d3bc174ee25342817c2f96c51151ec155d60e3d2f241a4849e8562->enter($__internal_a4e60ba586d3bc174ee25342817c2f96c51151ec155d60e3d2f241a4849e8562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a4e60ba586d3bc174ee25342817c2f96c51151ec155d60e3d2f241a4849e8562->leave($__internal_a4e60ba586d3bc174ee25342817c2f96c51151ec155d60e3d2f241a4849e8562_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
