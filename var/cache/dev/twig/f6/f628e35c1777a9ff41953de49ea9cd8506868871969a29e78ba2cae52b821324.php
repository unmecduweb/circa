<?php

/* MwebAdminBundle:Profile:edit.html.twig */
class __TwigTemplate_d0f1d1a284fd998c910e88b3fa7d553eece4c4890eece07cbbf1a48b49629932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MwebAdminBundle::layout.html.twig", "MwebAdminBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'pageH1' => array($this, 'block_pageH1'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MwebAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a732209c3e73891edc6fcd567a57c23265cb687e8a344d755121df1ba9ec35ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a732209c3e73891edc6fcd567a57c23265cb687e8a344d755121df1ba9ec35ad->enter($__internal_a732209c3e73891edc6fcd567a57c23265cb687e8a344d755121df1ba9ec35ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a732209c3e73891edc6fcd567a57c23265cb687e8a344d755121df1ba9ec35ad->leave($__internal_a732209c3e73891edc6fcd567a57c23265cb687e8a344d755121df1ba9ec35ad_prof);

    }

    // line 3
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_d10aa2296bbe4015db0d34893f5e56cca06ccf21316f4d4666791f37d743dd19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10aa2296bbe4015db0d34893f5e56cca06ccf21316f4d4666791f37d743dd19->enter($__internal_d10aa2296bbe4015db0d34893f5e56cca06ccf21316f4d4666791f37d743dd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Modifier votre compte";
        
        $__internal_d10aa2296bbe4015db0d34893f5e56cca06ccf21316f4d4666791f37d743dd19->leave($__internal_d10aa2296bbe4015db0d34893f5e56cca06ccf21316f4d4666791f37d743dd19_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b075c566034efcdde4aa7d221e04c647393836edba428232e55bf7b6d104464f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b075c566034efcdde4aa7d221e04c647393836edba428232e55bf7b6d104464f->enter($__internal_b075c566034efcdde4aa7d221e04c647393836edba428232e55bf7b6d104464f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "MwebAdminBundle:Profile:edit.html.twig", 5)->display($context);
        
        $__internal_b075c566034efcdde4aa7d221e04c647393836edba428232e55bf7b6d104464f->leave($__internal_b075c566034efcdde4aa7d221e04c647393836edba428232e55bf7b6d104464f_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MwebAdminBundle::layout.html.twig\"  %}

{% block pageH1 %}Modifier votre compte{% endblock %}
{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Profile:edit.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Profile/edit.html.twig");
    }
}
