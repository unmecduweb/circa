<?php

/* MwebAdminBundle:Resetting:check_email.html.twig */
class __TwigTemplate_79d1f0b82103bd37fb7bb170ac7ef481f8461fb4f24972fe07d8b26c4072ccfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_fda7760c44fcde159230a5f99017ab64bf0556711e0ba24e1a200c5ceedbfd63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda7760c44fcde159230a5f99017ab64bf0556711e0ba24e1a200c5ceedbfd63->enter($__internal_fda7760c44fcde159230a5f99017ab64bf0556711e0ba24e1a200c5ceedbfd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fda7760c44fcde159230a5f99017ab64bf0556711e0ba24e1a200c5ceedbfd63->leave($__internal_fda7760c44fcde159230a5f99017ab64bf0556711e0ba24e1a200c5ceedbfd63_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd27693f4090f8e89e0660a6ad81e846d090ace7993883a664ba85b6c2bcf9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd27693f4090f8e89e0660a6ad81e846d090ace7993883a664ba85b6c2bcf9ad->enter($__internal_fd27693f4090f8e89e0660a6ad81e846d090ace7993883a664ba85b6c2bcf9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_fd27693f4090f8e89e0660a6ad81e846d090ace7993883a664ba85b6c2bcf9ad->leave($__internal_fd27693f4090f8e89e0660a6ad81e846d090ace7993883a664ba85b6c2bcf9ad_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "MwebAdminBundle:Resetting:check_email.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
