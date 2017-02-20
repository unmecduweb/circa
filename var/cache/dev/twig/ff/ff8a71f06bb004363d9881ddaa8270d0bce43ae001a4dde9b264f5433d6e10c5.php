<?php

/* MwebAdminBundle:Registration:confirmed.html.twig */
class __TwigTemplate_71babceac3ae085acf3aaae7f35d38a01016c529f5221a9956aee709b75f2ef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26f78d50cbf939d3747297d1e0ffe3eaf794bc4dd81e058b154efe6bf03e0f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f78d50cbf939d3747297d1e0ffe3eaf794bc4dd81e058b154efe6bf03e0f6c->enter($__internal_26f78d50cbf939d3747297d1e0ffe3eaf794bc4dd81e058b154efe6bf03e0f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26f78d50cbf939d3747297d1e0ffe3eaf794bc4dd81e058b154efe6bf03e0f6c->leave($__internal_26f78d50cbf939d3747297d1e0ffe3eaf794bc4dd81e058b154efe6bf03e0f6c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b702006ade2cd4c91781bb19dabfd8bf37e01c0e231d750910d18ec3a306ed0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b702006ade2cd4c91781bb19dabfd8bf37e01c0e231d750910d18ec3a306ed0f->enter($__internal_b702006ade2cd4c91781bb19dabfd8bf37e01c0e231d750910d18ec3a306ed0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_b702006ade2cd4c91781bb19dabfd8bf37e01c0e231d750910d18ec3a306ed0f->leave($__internal_b702006ade2cd4c91781bb19dabfd8bf37e01c0e231d750910d18ec3a306ed0f_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Registration:confirmed.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
