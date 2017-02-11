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
        $__internal_39559600b721df7e1f01c6a4295cf0fd7560ea94350690b8fbc03633243e5f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39559600b721df7e1f01c6a4295cf0fd7560ea94350690b8fbc03633243e5f56->enter($__internal_39559600b721df7e1f01c6a4295cf0fd7560ea94350690b8fbc03633243e5f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39559600b721df7e1f01c6a4295cf0fd7560ea94350690b8fbc03633243e5f56->leave($__internal_39559600b721df7e1f01c6a4295cf0fd7560ea94350690b8fbc03633243e5f56_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b3ac96592d4edec1a6c09ef61a182d1a1e0d5c98bbe574ba5130e1fc0dadc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3ac96592d4edec1a6c09ef61a182d1a1e0d5c98bbe574ba5130e1fc0dadc20->enter($__internal_0b3ac96592d4edec1a6c09ef61a182d1a1e0d5c98bbe574ba5130e1fc0dadc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_0b3ac96592d4edec1a6c09ef61a182d1a1e0d5c98bbe574ba5130e1fc0dadc20->leave($__internal_0b3ac96592d4edec1a6c09ef61a182d1a1e0d5c98bbe574ba5130e1fc0dadc20_prof);

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
