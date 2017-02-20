<?php

/* MwebAdminBundle:Resetting:request.html.twig */
class __TwigTemplate_699473983d570294a25b045a39b9f8584c28b32c28251c75fca75dbfd466c203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Resetting:request.html.twig", 1);
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
        $__internal_910f3f2374add2768b1d8971638bb6cbec5ac202c93afc14c63136505f1d91b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910f3f2374add2768b1d8971638bb6cbec5ac202c93afc14c63136505f1d91b1->enter($__internal_910f3f2374add2768b1d8971638bb6cbec5ac202c93afc14c63136505f1d91b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_910f3f2374add2768b1d8971638bb6cbec5ac202c93afc14c63136505f1d91b1->leave($__internal_910f3f2374add2768b1d8971638bb6cbec5ac202c93afc14c63136505f1d91b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15f79acba5a6e22b9eacfe8530c0f398925010cb913f1cb0b2053dc6599706ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f79acba5a6e22b9eacfe8530c0f398925010cb913f1cb0b2053dc6599706ea->enter($__internal_15f79acba5a6e22b9eacfe8530c0f398925010cb913f1cb0b2053dc6599706ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "MwebAdminBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_15f79acba5a6e22b9eacfe8530c0f398925010cb913f1cb0b2053dc6599706ea->leave($__internal_15f79acba5a6e22b9eacfe8530c0f398925010cb913f1cb0b2053dc6599706ea_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Resetting:request.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Resetting/request.html.twig");
    }
}
