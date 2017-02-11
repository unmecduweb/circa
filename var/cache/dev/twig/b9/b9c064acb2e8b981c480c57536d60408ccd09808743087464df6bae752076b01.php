<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d83702dab8cf127827b59d971880619facbd9eda02738cf115e3b06b30b21899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_29cacc441694ba279e2401af50a69bc0bc5bf64dd96179218243b3f1addd9e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29cacc441694ba279e2401af50a69bc0bc5bf64dd96179218243b3f1addd9e16->enter($__internal_29cacc441694ba279e2401af50a69bc0bc5bf64dd96179218243b3f1addd9e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29cacc441694ba279e2401af50a69bc0bc5bf64dd96179218243b3f1addd9e16->leave($__internal_29cacc441694ba279e2401af50a69bc0bc5bf64dd96179218243b3f1addd9e16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10c9ba647049245a7dbda30879f9aa939217e6cb0314c4d5ce131ac425d3e972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c9ba647049245a7dbda30879f9aa939217e6cb0314c4d5ce131ac425d3e972->enter($__internal_10c9ba647049245a7dbda30879f9aa939217e6cb0314c4d5ce131ac425d3e972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_10c9ba647049245a7dbda30879f9aa939217e6cb0314c4d5ce131ac425d3e972->leave($__internal_10c9ba647049245a7dbda30879f9aa939217e6cb0314c4d5ce131ac425d3e972_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4148451aa508f8d333ae545c5b5de7bd54250624c11b0c82a72dfee6d39c334a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4148451aa508f8d333ae545c5b5de7bd54250624c11b0c82a72dfee6d39c334a->enter($__internal_4148451aa508f8d333ae545c5b5de7bd54250624c11b0c82a72dfee6d39c334a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4148451aa508f8d333ae545c5b5de7bd54250624c11b0c82a72dfee6d39c334a->leave($__internal_4148451aa508f8d333ae545c5b5de7bd54250624c11b0c82a72dfee6d39c334a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_22bb59ea753d881d92d1cf16cae134dc48cd5f5b0fbcc3e1651b0880e3b8d2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bb59ea753d881d92d1cf16cae134dc48cd5f5b0fbcc3e1651b0880e3b8d2d5->enter($__internal_22bb59ea753d881d92d1cf16cae134dc48cd5f5b0fbcc3e1651b0880e3b8d2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_22bb59ea753d881d92d1cf16cae134dc48cd5f5b0fbcc3e1651b0880e3b8d2d5->leave($__internal_22bb59ea753d881d92d1cf16cae134dc48cd5f5b0fbcc3e1651b0880e3b8d2d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
