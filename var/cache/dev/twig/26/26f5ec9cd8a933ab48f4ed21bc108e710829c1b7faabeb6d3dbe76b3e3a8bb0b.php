<?php

/* MwebAdminBundle:Profile:show.html.twig */
class __TwigTemplate_2bd2672a15a574365a850a7797486671c3cd3e1ed99127d6b150a1fe909f8c06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Profile:show.html.twig", 1);
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
        $__internal_1e0f875e3ee61ac0949b876e46e9a9c65421e7b1f9248c9776f1cb68c76f98eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0f875e3ee61ac0949b876e46e9a9c65421e7b1f9248c9776f1cb68c76f98eb->enter($__internal_1e0f875e3ee61ac0949b876e46e9a9c65421e7b1f9248c9776f1cb68c76f98eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e0f875e3ee61ac0949b876e46e9a9c65421e7b1f9248c9776f1cb68c76f98eb->leave($__internal_1e0f875e3ee61ac0949b876e46e9a9c65421e7b1f9248c9776f1cb68c76f98eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8459612bd44603316b1512634652e86761b516fd4408bfb78bc99f72ef36b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8459612bd44603316b1512634652e86761b516fd4408bfb78bc99f72ef36b5e->enter($__internal_a8459612bd44603316b1512634652e86761b516fd4408bfb78bc99f72ef36b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "MwebAdminBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a8459612bd44603316b1512634652e86761b516fd4408bfb78bc99f72ef36b5e->leave($__internal_a8459612bd44603316b1512634652e86761b516fd4408bfb78bc99f72ef36b5e_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Profile:show.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Profile/show.html.twig");
    }
}
