<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2e62e6ea6b9db5bbdbfd658429378862ac9d0a24c9d7066c4fda83fc70165e33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ba35f7eea409356088d099b671ed4dd5a6b1dd00140aae12e3b93acaa0ed57da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba35f7eea409356088d099b671ed4dd5a6b1dd00140aae12e3b93acaa0ed57da->enter($__internal_ba35f7eea409356088d099b671ed4dd5a6b1dd00140aae12e3b93acaa0ed57da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba35f7eea409356088d099b671ed4dd5a6b1dd00140aae12e3b93acaa0ed57da->leave($__internal_ba35f7eea409356088d099b671ed4dd5a6b1dd00140aae12e3b93acaa0ed57da_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6180877a94fab0eb19cc843f87a7d1da230f0c476acee402a4583642905ea041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6180877a94fab0eb19cc843f87a7d1da230f0c476acee402a4583642905ea041->enter($__internal_6180877a94fab0eb19cc843f87a7d1da230f0c476acee402a4583642905ea041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6180877a94fab0eb19cc843f87a7d1da230f0c476acee402a4583642905ea041->leave($__internal_6180877a94fab0eb19cc843f87a7d1da230f0c476acee402a4583642905ea041_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_226169abd593aff9202c4a5a99a3de8c4d39757712fab00e863551fbac18f0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226169abd593aff9202c4a5a99a3de8c4d39757712fab00e863551fbac18f0ac->enter($__internal_226169abd593aff9202c4a5a99a3de8c4d39757712fab00e863551fbac18f0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_226169abd593aff9202c4a5a99a3de8c4d39757712fab00e863551fbac18f0ac->leave($__internal_226169abd593aff9202c4a5a99a3de8c4d39757712fab00e863551fbac18f0ac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
