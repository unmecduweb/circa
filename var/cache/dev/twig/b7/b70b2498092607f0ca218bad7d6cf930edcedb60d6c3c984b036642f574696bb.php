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
        $__internal_4581aaa1bd31df88073857df3c6ff86f5010afe8bb3ce6e2ece5fe6fe959a794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4581aaa1bd31df88073857df3c6ff86f5010afe8bb3ce6e2ece5fe6fe959a794->enter($__internal_4581aaa1bd31df88073857df3c6ff86f5010afe8bb3ce6e2ece5fe6fe959a794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4581aaa1bd31df88073857df3c6ff86f5010afe8bb3ce6e2ece5fe6fe959a794->leave($__internal_4581aaa1bd31df88073857df3c6ff86f5010afe8bb3ce6e2ece5fe6fe959a794_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_575f0370577ee380cd05fee9ffb48271e8857db2896597186aecac08aa695900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575f0370577ee380cd05fee9ffb48271e8857db2896597186aecac08aa695900->enter($__internal_575f0370577ee380cd05fee9ffb48271e8857db2896597186aecac08aa695900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_575f0370577ee380cd05fee9ffb48271e8857db2896597186aecac08aa695900->leave($__internal_575f0370577ee380cd05fee9ffb48271e8857db2896597186aecac08aa695900_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fb5a50d50fd3816e47ad51d1b2fe2a671acb0541102574979476f799a29ba5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb5a50d50fd3816e47ad51d1b2fe2a671acb0541102574979476f799a29ba5a->enter($__internal_8fb5a50d50fd3816e47ad51d1b2fe2a671acb0541102574979476f799a29ba5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8fb5a50d50fd3816e47ad51d1b2fe2a671acb0541102574979476f799a29ba5a->leave($__internal_8fb5a50d50fd3816e47ad51d1b2fe2a671acb0541102574979476f799a29ba5a_prof);

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
