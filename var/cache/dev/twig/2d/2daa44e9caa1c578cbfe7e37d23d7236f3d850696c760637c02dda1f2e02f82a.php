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
        $__internal_b20b57daab06b389cb5407f1a514cb110c2f4ae3e284395fdbe9cc724bcf1d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20b57daab06b389cb5407f1a514cb110c2f4ae3e284395fdbe9cc724bcf1d81->enter($__internal_b20b57daab06b389cb5407f1a514cb110c2f4ae3e284395fdbe9cc724bcf1d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b20b57daab06b389cb5407f1a514cb110c2f4ae3e284395fdbe9cc724bcf1d81->leave($__internal_b20b57daab06b389cb5407f1a514cb110c2f4ae3e284395fdbe9cc724bcf1d81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e27bd580c815ecda18866065991d2c737ac1701d6088d29e77403a01a97fa313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27bd580c815ecda18866065991d2c737ac1701d6088d29e77403a01a97fa313->enter($__internal_e27bd580c815ecda18866065991d2c737ac1701d6088d29e77403a01a97fa313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "MwebAdminBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e27bd580c815ecda18866065991d2c737ac1701d6088d29e77403a01a97fa313->leave($__internal_e27bd580c815ecda18866065991d2c737ac1701d6088d29e77403a01a97fa313_prof);

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
