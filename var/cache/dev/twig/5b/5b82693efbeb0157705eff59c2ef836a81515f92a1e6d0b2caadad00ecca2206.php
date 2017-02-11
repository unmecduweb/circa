<?php

/* MwebAdminBundle:Group:show.html.twig */
class __TwigTemplate_e53b2c8e64d8b710d2b57c63f938f211822124d8354a63196c302864614ed133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Group:show.html.twig", 1);
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
        $__internal_4b22f8241cf15a620291b0f59f743b4adbae1607ab1abe1eb259a7c9ca3decdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b22f8241cf15a620291b0f59f743b4adbae1607ab1abe1eb259a7c9ca3decdd->enter($__internal_4b22f8241cf15a620291b0f59f743b4adbae1607ab1abe1eb259a7c9ca3decdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b22f8241cf15a620291b0f59f743b4adbae1607ab1abe1eb259a7c9ca3decdd->leave($__internal_4b22f8241cf15a620291b0f59f743b4adbae1607ab1abe1eb259a7c9ca3decdd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_803c266c0fe76ee5871cc621e35ca295cd718f5d073f9edde0c2961155182ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803c266c0fe76ee5871cc621e35ca295cd718f5d073f9edde0c2961155182ac3->enter($__internal_803c266c0fe76ee5871cc621e35ca295cd718f5d073f9edde0c2961155182ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "MwebAdminBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_803c266c0fe76ee5871cc621e35ca295cd718f5d073f9edde0c2961155182ac3->leave($__internal_803c266c0fe76ee5871cc621e35ca295cd718f5d073f9edde0c2961155182ac3_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Group:show.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Group/show.html.twig");
    }
}
