<?php

/* MwebAdminBundle:Registration:email.txt.twig */
class __TwigTemplate_a667ecfd9bcd67f8c030ea6b9a4ca2214194c0f991517be490ec2a935bb9fc9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ff616d1557a6552b009690064bb2bf25c628d427461d58ed41a2cee44ee0e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff616d1557a6552b009690064bb2bf25c628d427461d58ed41a2cee44ee0e15->enter($__internal_6ff616d1557a6552b009690064bb2bf25c628d427461d58ed41a2cee44ee0e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6ff616d1557a6552b009690064bb2bf25c628d427461d58ed41a2cee44ee0e15->leave($__internal_6ff616d1557a6552b009690064bb2bf25c628d427461d58ed41a2cee44ee0e15_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_851a33ea2b2466eb4bcadc67ff9b8cd11f5a25d3ebafdd8c73e748555d77743f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851a33ea2b2466eb4bcadc67ff9b8cd11f5a25d3ebafdd8c73e748555d77743f->enter($__internal_851a33ea2b2466eb4bcadc67ff9b8cd11f5a25d3ebafdd8c73e748555d77743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_851a33ea2b2466eb4bcadc67ff9b8cd11f5a25d3ebafdd8c73e748555d77743f->leave($__internal_851a33ea2b2466eb4bcadc67ff9b8cd11f5a25d3ebafdd8c73e748555d77743f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_44cb1c096c79f06ffbd0a4bb43f081bd5afd86f86a75b7af0ca7be3c466527cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cb1c096c79f06ffbd0a4bb43f081bd5afd86f86a75b7af0ca7be3c466527cd->enter($__internal_44cb1c096c79f06ffbd0a4bb43f081bd5afd86f86a75b7af0ca7be3c466527cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_44cb1c096c79f06ffbd0a4bb43f081bd5afd86f86a75b7af0ca7be3c466527cd->leave($__internal_44cb1c096c79f06ffbd0a4bb43f081bd5afd86f86a75b7af0ca7be3c466527cd_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_05ab88947a3d29de897991b3691eb057ee91c850b46487503a828799952af804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ab88947a3d29de897991b3691eb057ee91c850b46487503a828799952af804->enter($__internal_05ab88947a3d29de897991b3691eb057ee91c850b46487503a828799952af804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_05ab88947a3d29de897991b3691eb057ee91c850b46487503a828799952af804->leave($__internal_05ab88947a3d29de897991b3691eb057ee91c850b46487503a828799952af804_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "MwebAdminBundle:Registration:email.txt.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Registration/email.txt.twig");
    }
}
