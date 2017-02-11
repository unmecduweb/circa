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
        $__internal_85619473d5951ea85e07ce337c183554f53cba21a5dbbf28c77836bee5e87a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85619473d5951ea85e07ce337c183554f53cba21a5dbbf28c77836bee5e87a91->enter($__internal_85619473d5951ea85e07ce337c183554f53cba21a5dbbf28c77836bee5e87a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85619473d5951ea85e07ce337c183554f53cba21a5dbbf28c77836bee5e87a91->leave($__internal_85619473d5951ea85e07ce337c183554f53cba21a5dbbf28c77836bee5e87a91_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_066bc59b984f9ee03cfd9ea94cd5ca368523e97d16ebf549a2410761acfd9ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066bc59b984f9ee03cfd9ea94cd5ca368523e97d16ebf549a2410761acfd9ba9->enter($__internal_066bc59b984f9ee03cfd9ea94cd5ca368523e97d16ebf549a2410761acfd9ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "MwebAdminBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_066bc59b984f9ee03cfd9ea94cd5ca368523e97d16ebf549a2410761acfd9ba9->leave($__internal_066bc59b984f9ee03cfd9ea94cd5ca368523e97d16ebf549a2410761acfd9ba9_prof);

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
