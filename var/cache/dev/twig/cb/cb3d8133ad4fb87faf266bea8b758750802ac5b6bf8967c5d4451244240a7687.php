<?php

/* MwebAdminBundle:Registration:register.html.twig */
class __TwigTemplate_3b9759bea22471d9b2baa34a5a5d47e8d6e741ee8aab3ab2b491b1316429eb9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Registration:register.html.twig", 1);
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
        $__internal_cc4672a64ba6ddce12d475b4ba7545c43a3d62468a4485faaf7ace678190cc2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4672a64ba6ddce12d475b4ba7545c43a3d62468a4485faaf7ace678190cc2f->enter($__internal_cc4672a64ba6ddce12d475b4ba7545c43a3d62468a4485faaf7ace678190cc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc4672a64ba6ddce12d475b4ba7545c43a3d62468a4485faaf7ace678190cc2f->leave($__internal_cc4672a64ba6ddce12d475b4ba7545c43a3d62468a4485faaf7ace678190cc2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_064351ee0c601c20e22273a7262d3e2b597119fe6401bd0c9cd48303996e2d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064351ee0c601c20e22273a7262d3e2b597119fe6401bd0c9cd48303996e2d80->enter($__internal_064351ee0c601c20e22273a7262d3e2b597119fe6401bd0c9cd48303996e2d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "MwebAdminBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_064351ee0c601c20e22273a7262d3e2b597119fe6401bd0c9cd48303996e2d80->leave($__internal_064351ee0c601c20e22273a7262d3e2b597119fe6401bd0c9cd48303996e2d80_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Registration:register.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Registration/register.html.twig");
    }
}
