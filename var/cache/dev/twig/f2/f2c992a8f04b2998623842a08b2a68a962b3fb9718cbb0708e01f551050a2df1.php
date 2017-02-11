<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9dbe181db9743215e265c748eb6bfca4d42d0b3c76a9d043b455a883137cddfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a3e316348c9ad61153389125304aa177aefb1ed0735637098e8bd6119580a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3e316348c9ad61153389125304aa177aefb1ed0735637098e8bd6119580a26->enter($__internal_4a3e316348c9ad61153389125304aa177aefb1ed0735637098e8bd6119580a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a3e316348c9ad61153389125304aa177aefb1ed0735637098e8bd6119580a26->leave($__internal_4a3e316348c9ad61153389125304aa177aefb1ed0735637098e8bd6119580a26_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28e7674c9f7d6e1ab7c8c5f67aa5fc2d9ceb5856ae6b34cbad84045b1815f847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e7674c9f7d6e1ab7c8c5f67aa5fc2d9ceb5856ae6b34cbad84045b1815f847->enter($__internal_28e7674c9f7d6e1ab7c8c5f67aa5fc2d9ceb5856ae6b34cbad84045b1815f847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_28e7674c9f7d6e1ab7c8c5f67aa5fc2d9ceb5856ae6b34cbad84045b1815f847->leave($__internal_28e7674c9f7d6e1ab7c8c5f67aa5fc2d9ceb5856ae6b34cbad84045b1815f847_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_52167a178d9c5f2dd6be18f303b632bee257e99aff03e580bef253336c6411f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52167a178d9c5f2dd6be18f303b632bee257e99aff03e580bef253336c6411f8->enter($__internal_52167a178d9c5f2dd6be18f303b632bee257e99aff03e580bef253336c6411f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_52167a178d9c5f2dd6be18f303b632bee257e99aff03e580bef253336c6411f8->leave($__internal_52167a178d9c5f2dd6be18f303b632bee257e99aff03e580bef253336c6411f8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_308cbf33408b0a5eaaebb5f46dc1b61886657f905e48957583ac5d635f6f5b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308cbf33408b0a5eaaebb5f46dc1b61886657f905e48957583ac5d635f6f5b98->enter($__internal_308cbf33408b0a5eaaebb5f46dc1b61886657f905e48957583ac5d635f6f5b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_308cbf33408b0a5eaaebb5f46dc1b61886657f905e48957583ac5d635f6f5b98->leave($__internal_308cbf33408b0a5eaaebb5f46dc1b61886657f905e48957583ac5d635f6f5b98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
