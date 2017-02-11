<?php

/* MwebAdminBundle:Group:list.html.twig */
class __TwigTemplate_0b61d0b99457f02a17130fadd39d0e1656829ffd2502598bace46a4e84b72211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Group:list.html.twig", 1);
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
        $__internal_5e47b121671f2d568da26da81696368cf4717999007a48147702259758aeca4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e47b121671f2d568da26da81696368cf4717999007a48147702259758aeca4c->enter($__internal_5e47b121671f2d568da26da81696368cf4717999007a48147702259758aeca4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e47b121671f2d568da26da81696368cf4717999007a48147702259758aeca4c->leave($__internal_5e47b121671f2d568da26da81696368cf4717999007a48147702259758aeca4c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97e59d8e8888a138a1d9af62ca64c6fe5c64d8bf0503d2f720caaf8ec2c9f698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e59d8e8888a138a1d9af62ca64c6fe5c64d8bf0503d2f720caaf8ec2c9f698->enter($__internal_97e59d8e8888a138a1d9af62ca64c6fe5c64d8bf0503d2f720caaf8ec2c9f698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "MwebAdminBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_97e59d8e8888a138a1d9af62ca64c6fe5c64d8bf0503d2f720caaf8ec2c9f698->leave($__internal_97e59d8e8888a138a1d9af62ca64c6fe5c64d8bf0503d2f720caaf8ec2c9f698_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Group:list.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Group/list.html.twig");
    }
}
