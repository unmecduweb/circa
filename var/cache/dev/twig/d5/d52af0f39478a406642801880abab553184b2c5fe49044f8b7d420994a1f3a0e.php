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
        $__internal_21d105b95ca758af8ead0a2378f24d2f6eb619a1b817bbb2c055989ccc9aa0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d105b95ca758af8ead0a2378f24d2f6eb619a1b817bbb2c055989ccc9aa0a3->enter($__internal_21d105b95ca758af8ead0a2378f24d2f6eb619a1b817bbb2c055989ccc9aa0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d105b95ca758af8ead0a2378f24d2f6eb619a1b817bbb2c055989ccc9aa0a3->leave($__internal_21d105b95ca758af8ead0a2378f24d2f6eb619a1b817bbb2c055989ccc9aa0a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5a2db40e927bf8457fb2c639104e4ad5666883251159c6e3f7d2c0d777b1c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a2db40e927bf8457fb2c639104e4ad5666883251159c6e3f7d2c0d777b1c09->enter($__internal_b5a2db40e927bf8457fb2c639104e4ad5666883251159c6e3f7d2c0d777b1c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "MwebAdminBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b5a2db40e927bf8457fb2c639104e4ad5666883251159c6e3f7d2c0d777b1c09->leave($__internal_b5a2db40e927bf8457fb2c639104e4ad5666883251159c6e3f7d2c0d777b1c09_prof);

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
