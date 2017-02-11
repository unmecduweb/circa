<?php

/* MwebAdminBundle:Registration:check_email.html.twig */
class __TwigTemplate_5ad2ac14de9e127bf8e675031b50e2bcf79475385caa351fd1a5ff77b711285d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Registration:check_email.html.twig", 1);
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
        $__internal_d4403d7fd13ed03590a8f67f6d4330361844133d5b8b383263cf1e4855371f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4403d7fd13ed03590a8f67f6d4330361844133d5b8b383263cf1e4855371f11->enter($__internal_d4403d7fd13ed03590a8f67f6d4330361844133d5b8b383263cf1e4855371f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4403d7fd13ed03590a8f67f6d4330361844133d5b8b383263cf1e4855371f11->leave($__internal_d4403d7fd13ed03590a8f67f6d4330361844133d5b8b383263cf1e4855371f11_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8be87d0df99b20abe5b243e089da7d5c4ce698c86332db04e2e4d013f47109c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be87d0df99b20abe5b243e089da7d5c4ce698c86332db04e2e4d013f47109c4->enter($__internal_8be87d0df99b20abe5b243e089da7d5c4ce698c86332db04e2e4d013f47109c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8be87d0df99b20abe5b243e089da7d5c4ce698c86332db04e2e4d013f47109c4->leave($__internal_8be87d0df99b20abe5b243e089da7d5c4ce698c86332db04e2e4d013f47109c4_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "MwebAdminBundle:Registration:check_email.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Registration/check_email.html.twig");
    }
}
