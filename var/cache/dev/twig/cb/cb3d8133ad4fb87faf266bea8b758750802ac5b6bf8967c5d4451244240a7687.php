<?php

/* MwebAdminBundle:Registration:register.html.twig */
class __TwigTemplate_3b9759bea22471d9b2baa34a5a5d47e8d6e741ee8aab3ab2b491b1316429eb9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Registration:register.html.twig", 1);
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
        $__internal_a6e57d16ee9019fa30313f0e48d5bc27a42d9a0d53aedfa6bb46d0cf219ff523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e57d16ee9019fa30313f0e48d5bc27a42d9a0d53aedfa6bb46d0cf219ff523->enter($__internal_a6e57d16ee9019fa30313f0e48d5bc27a42d9a0d53aedfa6bb46d0cf219ff523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6e57d16ee9019fa30313f0e48d5bc27a42d9a0d53aedfa6bb46d0cf219ff523->leave($__internal_a6e57d16ee9019fa30313f0e48d5bc27a42d9a0d53aedfa6bb46d0cf219ff523_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c445006855ad232e9324d1218128473a80a2a69496c91f0d19002bb2854fdf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c445006855ad232e9324d1218128473a80a2a69496c91f0d19002bb2854fdf5->enter($__internal_3c445006855ad232e9324d1218128473a80a2a69496c91f0d19002bb2854fdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "MwebAdminBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3c445006855ad232e9324d1218128473a80a2a69496c91f0d19002bb2854fdf5->leave($__internal_3c445006855ad232e9324d1218128473a80a2a69496c91f0d19002bb2854fdf5_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Registration:register.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Registration/register.html.twig");
    }
}
