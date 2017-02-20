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
        $__internal_eb2428f250a45077068058382d6499c12fd91cd896e8ae162e04feeeff207d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2428f250a45077068058382d6499c12fd91cd896e8ae162e04feeeff207d9c->enter($__internal_eb2428f250a45077068058382d6499c12fd91cd896e8ae162e04feeeff207d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb2428f250a45077068058382d6499c12fd91cd896e8ae162e04feeeff207d9c->leave($__internal_eb2428f250a45077068058382d6499c12fd91cd896e8ae162e04feeeff207d9c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af432a648828c5af3e54a234705fd93b0f2977819a96dc5d55852e28be6cf373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af432a648828c5af3e54a234705fd93b0f2977819a96dc5d55852e28be6cf373->enter($__internal_af432a648828c5af3e54a234705fd93b0f2977819a96dc5d55852e28be6cf373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "MwebAdminBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_af432a648828c5af3e54a234705fd93b0f2977819a96dc5d55852e28be6cf373->leave($__internal_af432a648828c5af3e54a234705fd93b0f2977819a96dc5d55852e28be6cf373_prof);

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
