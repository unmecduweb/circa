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
        $__internal_8afa3f870fb8973fae81e083d13a74630a3db85a400fdcde9d9b80a611ad197c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afa3f870fb8973fae81e083d13a74630a3db85a400fdcde9d9b80a611ad197c->enter($__internal_8afa3f870fb8973fae81e083d13a74630a3db85a400fdcde9d9b80a611ad197c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8afa3f870fb8973fae81e083d13a74630a3db85a400fdcde9d9b80a611ad197c->leave($__internal_8afa3f870fb8973fae81e083d13a74630a3db85a400fdcde9d9b80a611ad197c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfca2958a7f3f22114307b396ba28a0c10acaa6275b8e596a123a5fd9982eb22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfca2958a7f3f22114307b396ba28a0c10acaa6275b8e596a123a5fd9982eb22->enter($__internal_bfca2958a7f3f22114307b396ba28a0c10acaa6275b8e596a123a5fd9982eb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "MwebAdminBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_bfca2958a7f3f22114307b396ba28a0c10acaa6275b8e596a123a5fd9982eb22->leave($__internal_bfca2958a7f3f22114307b396ba28a0c10acaa6275b8e596a123a5fd9982eb22_prof);

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
