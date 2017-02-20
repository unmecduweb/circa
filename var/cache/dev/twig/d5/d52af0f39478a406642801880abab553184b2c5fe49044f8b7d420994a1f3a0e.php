<?php

/* MwebAdminBundle:Group:edit.html.twig */
class __TwigTemplate_b3d688c422504daf20b3f71a2e0027cb4b12a026cf1f84065be10942167bbf7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Group:edit.html.twig", 1);
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
        $__internal_18b232c9a133f253b700b166720d98bb573a0f8ec29cbe74875ccfb277295489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b232c9a133f253b700b166720d98bb573a0f8ec29cbe74875ccfb277295489->enter($__internal_18b232c9a133f253b700b166720d98bb573a0f8ec29cbe74875ccfb277295489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18b232c9a133f253b700b166720d98bb573a0f8ec29cbe74875ccfb277295489->leave($__internal_18b232c9a133f253b700b166720d98bb573a0f8ec29cbe74875ccfb277295489_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1409ad89e02cb30b61905c9614b52fe4fb97c8c93298cff89159bd6645cb5f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1409ad89e02cb30b61905c9614b52fe4fb97c8c93298cff89159bd6645cb5f28->enter($__internal_1409ad89e02cb30b61905c9614b52fe4fb97c8c93298cff89159bd6645cb5f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "MwebAdminBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1409ad89e02cb30b61905c9614b52fe4fb97c8c93298cff89159bd6645cb5f28->leave($__internal_1409ad89e02cb30b61905c9614b52fe4fb97c8c93298cff89159bd6645cb5f28_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Group:edit.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Group/edit.html.twig");
    }
}
