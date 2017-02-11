<?php

/* MwebAdminBundle:Group:new.html.twig */
class __TwigTemplate_8ade82994e428f59f4bd5008544fbb129dd1821fdc1374cca7652f5f2eb6d7e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Group:new.html.twig", 1);
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
        $__internal_89eccc77692cab0e4839fe4c89b65ea8d17312724a957887bb5d089482fa9976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89eccc77692cab0e4839fe4c89b65ea8d17312724a957887bb5d089482fa9976->enter($__internal_89eccc77692cab0e4839fe4c89b65ea8d17312724a957887bb5d089482fa9976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89eccc77692cab0e4839fe4c89b65ea8d17312724a957887bb5d089482fa9976->leave($__internal_89eccc77692cab0e4839fe4c89b65ea8d17312724a957887bb5d089482fa9976_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c523d7e47984f8eb8263e8655066937bd8a9b62b852912b330cae8407ae3872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c523d7e47984f8eb8263e8655066937bd8a9b62b852912b330cae8407ae3872->enter($__internal_4c523d7e47984f8eb8263e8655066937bd8a9b62b852912b330cae8407ae3872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "MwebAdminBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4c523d7e47984f8eb8263e8655066937bd8a9b62b852912b330cae8407ae3872->leave($__internal_4c523d7e47984f8eb8263e8655066937bd8a9b62b852912b330cae8407ae3872_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Group:new.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Group/new.html.twig");
    }
}
