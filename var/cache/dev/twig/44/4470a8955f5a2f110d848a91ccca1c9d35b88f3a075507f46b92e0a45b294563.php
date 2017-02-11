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
        $__internal_8dbe673366c29398493a178ab77c742e02e9f5349b39c616a9c0a18ed5f44a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dbe673366c29398493a178ab77c742e02e9f5349b39c616a9c0a18ed5f44a54->enter($__internal_8dbe673366c29398493a178ab77c742e02e9f5349b39c616a9c0a18ed5f44a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dbe673366c29398493a178ab77c742e02e9f5349b39c616a9c0a18ed5f44a54->leave($__internal_8dbe673366c29398493a178ab77c742e02e9f5349b39c616a9c0a18ed5f44a54_prof);

    }

    // line 3
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_d33647f4daa9f8cd82bc79a3198d22af92fc176e4c13c9969a5d35cc04466140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33647f4daa9f8cd82bc79a3198d22af92fc176e4c13c9969a5d35cc04466140->enter($__internal_d33647f4daa9f8cd82bc79a3198d22af92fc176e4c13c9969a5d35cc04466140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Modifier votre mot de passe";
        
        $__internal_d33647f4daa9f8cd82bc79a3198d22af92fc176e4c13c9969a5d35cc04466140->leave($__internal_d33647f4daa9f8cd82bc79a3198d22af92fc176e4c13c9969a5d35cc04466140_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88df29033300dbd7fbbf6ef3f880c0d84c8e134edfa06c3d47c0c21c9c6015dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88df29033300dbd7fbbf6ef3f880c0d84c8e134edfa06c3d47c0c21c9c6015dc->enter($__internal_88df29033300dbd7fbbf6ef3f880c0d84c8e134edfa06c3d47c0c21c9c6015dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "MwebAdminBundle:ChangePassword:change_password.html.twig", 5)->display($context);
        
        $__internal_88df29033300dbd7fbbf6ef3f880c0d84c8e134edfa06c3d47c0c21c9c6015dc->leave($__internal_88df29033300dbd7fbbf6ef3f880c0d84c8e134edfa06c3d47c0c21c9c6015dc_prof);

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
