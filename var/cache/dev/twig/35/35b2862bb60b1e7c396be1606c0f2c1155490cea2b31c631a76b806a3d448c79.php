<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bbc13f423e137a7771980a7d5441980ae482ac63733d1b956fa4cca77a7a90f7 extends Twig_Template
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
        $__internal_5ae8834d0e26fc7f53481e6ec281f1f4e6cc8ed37c0d86198d059ee5b34e37cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae8834d0e26fc7f53481e6ec281f1f4e6cc8ed37c0d86198d059ee5b34e37cf->enter($__internal_5ae8834d0e26fc7f53481e6ec281f1f4e6cc8ed37c0d86198d059ee5b34e37cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ae8834d0e26fc7f53481e6ec281f1f4e6cc8ed37c0d86198d059ee5b34e37cf->leave($__internal_5ae8834d0e26fc7f53481e6ec281f1f4e6cc8ed37c0d86198d059ee5b34e37cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d299bb037d6c9d01d215128fb9303ee84416fdf2a66de47efce2f0c8fcb982d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d299bb037d6c9d01d215128fb9303ee84416fdf2a66de47efce2f0c8fcb982d8->enter($__internal_d299bb037d6c9d01d215128fb9303ee84416fdf2a66de47efce2f0c8fcb982d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d299bb037d6c9d01d215128fb9303ee84416fdf2a66de47efce2f0c8fcb982d8->leave($__internal_d299bb037d6c9d01d215128fb9303ee84416fdf2a66de47efce2f0c8fcb982d8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_35bad006ecde93f351858e88277f4cd20432835a64812c8fd437f814a5ac2109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bad006ecde93f351858e88277f4cd20432835a64812c8fd437f814a5ac2109->enter($__internal_35bad006ecde93f351858e88277f4cd20432835a64812c8fd437f814a5ac2109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_35bad006ecde93f351858e88277f4cd20432835a64812c8fd437f814a5ac2109->leave($__internal_35bad006ecde93f351858e88277f4cd20432835a64812c8fd437f814a5ac2109_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f107d5f9c8f7b49caa339346164c8ac25a9011abb91dde112af830f08c39c8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f107d5f9c8f7b49caa339346164c8ac25a9011abb91dde112af830f08c39c8c9->enter($__internal_f107d5f9c8f7b49caa339346164c8ac25a9011abb91dde112af830f08c39c8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f107d5f9c8f7b49caa339346164c8ac25a9011abb91dde112af830f08c39c8c9->leave($__internal_f107d5f9c8f7b49caa339346164c8ac25a9011abb91dde112af830f08c39c8c9_prof);

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
