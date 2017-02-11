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
        $__internal_1e511cddedbe4b7e11933fd4730cee118ad1e92aed023483134f0994051014ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e511cddedbe4b7e11933fd4730cee118ad1e92aed023483134f0994051014ae->enter($__internal_1e511cddedbe4b7e11933fd4730cee118ad1e92aed023483134f0994051014ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e511cddedbe4b7e11933fd4730cee118ad1e92aed023483134f0994051014ae->leave($__internal_1e511cddedbe4b7e11933fd4730cee118ad1e92aed023483134f0994051014ae_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3ed28104cc0b81d3e8ab776162f3e6584342e97ac030c0c1b614e6a34e7bfd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ed28104cc0b81d3e8ab776162f3e6584342e97ac030c0c1b614e6a34e7bfd1->enter($__internal_a3ed28104cc0b81d3e8ab776162f3e6584342e97ac030c0c1b614e6a34e7bfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a3ed28104cc0b81d3e8ab776162f3e6584342e97ac030c0c1b614e6a34e7bfd1->leave($__internal_a3ed28104cc0b81d3e8ab776162f3e6584342e97ac030c0c1b614e6a34e7bfd1_prof);

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
