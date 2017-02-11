<?php

/* MwebAdminBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_fe2727fd45288cdf9f07cc8d645740389eaf7d708941e8dd6ff4225a27c4e59a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MwebAdminBundle::layout.html.twig", "MwebAdminBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_b474de33ee189902b62f3dc27cebcecdc00f46635f838a5cd2a642e04cb48efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b474de33ee189902b62f3dc27cebcecdc00f46635f838a5cd2a642e04cb48efa->enter($__internal_b474de33ee189902b62f3dc27cebcecdc00f46635f838a5cd2a642e04cb48efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b474de33ee189902b62f3dc27cebcecdc00f46635f838a5cd2a642e04cb48efa->leave($__internal_b474de33ee189902b62f3dc27cebcecdc00f46635f838a5cd2a642e04cb48efa_prof);

    }

    // line 3
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_cc5aaa4d0708c8c2dd99de2b42a4272f8b065dcc807e7f7548b5f20789e5b6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5aaa4d0708c8c2dd99de2b42a4272f8b065dcc807e7f7548b5f20789e5b6c8->enter($__internal_cc5aaa4d0708c8c2dd99de2b42a4272f8b065dcc807e7f7548b5f20789e5b6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Modifier votre mot de passe";
        
        $__internal_cc5aaa4d0708c8c2dd99de2b42a4272f8b065dcc807e7f7548b5f20789e5b6c8->leave($__internal_cc5aaa4d0708c8c2dd99de2b42a4272f8b065dcc807e7f7548b5f20789e5b6c8_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbdc249a3ca1714a764fc61dc90a86f7817f121a6351ebeeea1061e6e5fbaf7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbdc249a3ca1714a764fc61dc90a86f7817f121a6351ebeeea1061e6e5fbaf7c->enter($__internal_fbdc249a3ca1714a764fc61dc90a86f7817f121a6351ebeeea1061e6e5fbaf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "MwebAdminBundle:ChangePassword:change_password.html.twig", 5)->display($context);
        
        $__internal_fbdc249a3ca1714a764fc61dc90a86f7817f121a6351ebeeea1061e6e5fbaf7c->leave($__internal_fbdc249a3ca1714a764fc61dc90a86f7817f121a6351ebeeea1061e6e5fbaf7c_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:ChangePassword:change_password.html.twig";
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

{% block pageH1 %}Modifier votre mot de passe{% endblock %}
{% block fos_user_content %}
    {% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:ChangePassword:change_password.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
