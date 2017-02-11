<?php

/* MwebAdminBundle:Resetting:reset.html.twig */
class __TwigTemplate_77556a51171b1f101e07a5e525fcd0abfa6f8d9c2510434cc80769def8e878db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Resetting:reset.html.twig", 1);
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
        $__internal_edf673a02dbd4b48ab1e0346b88a3897fa2fcd45b0325b256b8cd4d5301f4969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf673a02dbd4b48ab1e0346b88a3897fa2fcd45b0325b256b8cd4d5301f4969->enter($__internal_edf673a02dbd4b48ab1e0346b88a3897fa2fcd45b0325b256b8cd4d5301f4969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edf673a02dbd4b48ab1e0346b88a3897fa2fcd45b0325b256b8cd4d5301f4969->leave($__internal_edf673a02dbd4b48ab1e0346b88a3897fa2fcd45b0325b256b8cd4d5301f4969_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9c382cac71feb89af588903072200d9b14b58025061b7bbb73fe0d828038ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c382cac71feb89af588903072200d9b14b58025061b7bbb73fe0d828038ab7->enter($__internal_d9c382cac71feb89af588903072200d9b14b58025061b7bbb73fe0d828038ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "MwebAdminBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d9c382cac71feb89af588903072200d9b14b58025061b7bbb73fe0d828038ab7->leave($__internal_d9c382cac71feb89af588903072200d9b14b58025061b7bbb73fe0d828038ab7_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Resetting:reset.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Resetting/reset.html.twig");
    }
}
