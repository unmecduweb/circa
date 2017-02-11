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
        $__internal_78cd3f1ec1653008503380280e84c5427caca0ec8a60faec48cf7b026c7aa20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cd3f1ec1653008503380280e84c5427caca0ec8a60faec48cf7b026c7aa20c->enter($__internal_78cd3f1ec1653008503380280e84c5427caca0ec8a60faec48cf7b026c7aa20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78cd3f1ec1653008503380280e84c5427caca0ec8a60faec48cf7b026c7aa20c->leave($__internal_78cd3f1ec1653008503380280e84c5427caca0ec8a60faec48cf7b026c7aa20c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d367160d9d622198276db3032c95ebfd0f3b4f15de3915a1b32d78ade66817c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d367160d9d622198276db3032c95ebfd0f3b4f15de3915a1b32d78ade66817c->enter($__internal_8d367160d9d622198276db3032c95ebfd0f3b4f15de3915a1b32d78ade66817c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8d367160d9d622198276db3032c95ebfd0f3b4f15de3915a1b32d78ade66817c->leave($__internal_8d367160d9d622198276db3032c95ebfd0f3b4f15de3915a1b32d78ade66817c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86b9d9a007e26f89d5207751fd8936daa06ea9c5257866d50400fdfc1ee6a7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b9d9a007e26f89d5207751fd8936daa06ea9c5257866d50400fdfc1ee6a7ac->enter($__internal_86b9d9a007e26f89d5207751fd8936daa06ea9c5257866d50400fdfc1ee6a7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_86b9d9a007e26f89d5207751fd8936daa06ea9c5257866d50400fdfc1ee6a7ac->leave($__internal_86b9d9a007e26f89d5207751fd8936daa06ea9c5257866d50400fdfc1ee6a7ac_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c632d092ae24cc7e82611b5f711ba70a5bfc3fb0b8dd24341beeb9d3d95e1e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c632d092ae24cc7e82611b5f711ba70a5bfc3fb0b8dd24341beeb9d3d95e1e19->enter($__internal_c632d092ae24cc7e82611b5f711ba70a5bfc3fb0b8dd24341beeb9d3d95e1e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c632d092ae24cc7e82611b5f711ba70a5bfc3fb0b8dd24341beeb9d3d95e1e19->leave($__internal_c632d092ae24cc7e82611b5f711ba70a5bfc3fb0b8dd24341beeb9d3d95e1e19_prof);

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
