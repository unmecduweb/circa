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
        $__internal_9b51580080301f4f907295a47db11be18951d06795efb2af8c1fa1b978ae2f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b51580080301f4f907295a47db11be18951d06795efb2af8c1fa1b978ae2f57->enter($__internal_9b51580080301f4f907295a47db11be18951d06795efb2af8c1fa1b978ae2f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b51580080301f4f907295a47db11be18951d06795efb2af8c1fa1b978ae2f57->leave($__internal_9b51580080301f4f907295a47db11be18951d06795efb2af8c1fa1b978ae2f57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7261edaf0f78d6cfbc4beb1c0c32735bce30d530a3978af8f6d784c061a1fbcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7261edaf0f78d6cfbc4beb1c0c32735bce30d530a3978af8f6d784c061a1fbcf->enter($__internal_7261edaf0f78d6cfbc4beb1c0c32735bce30d530a3978af8f6d784c061a1fbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7261edaf0f78d6cfbc4beb1c0c32735bce30d530a3978af8f6d784c061a1fbcf->leave($__internal_7261edaf0f78d6cfbc4beb1c0c32735bce30d530a3978af8f6d784c061a1fbcf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de1bf564e8a9ef5ce8af9023d5a842a457a54e923d28a0ac34721674de891672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1bf564e8a9ef5ce8af9023d5a842a457a54e923d28a0ac34721674de891672->enter($__internal_de1bf564e8a9ef5ce8af9023d5a842a457a54e923d28a0ac34721674de891672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_de1bf564e8a9ef5ce8af9023d5a842a457a54e923d28a0ac34721674de891672->leave($__internal_de1bf564e8a9ef5ce8af9023d5a842a457a54e923d28a0ac34721674de891672_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_890982f95f227ca2bfbcd70c980a1b0f61900cf2032fd8879b1ba511880026cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890982f95f227ca2bfbcd70c980a1b0f61900cf2032fd8879b1ba511880026cd->enter($__internal_890982f95f227ca2bfbcd70c980a1b0f61900cf2032fd8879b1ba511880026cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_890982f95f227ca2bfbcd70c980a1b0f61900cf2032fd8879b1ba511880026cd->leave($__internal_890982f95f227ca2bfbcd70c980a1b0f61900cf2032fd8879b1ba511880026cd_prof);

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
