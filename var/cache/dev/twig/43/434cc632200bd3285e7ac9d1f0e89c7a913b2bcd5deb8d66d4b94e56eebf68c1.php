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
        $__internal_4bfcad25ec69dc6424d93560588e10d44ed665c8ab72fa1184cd2bf1922dedef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfcad25ec69dc6424d93560588e10d44ed665c8ab72fa1184cd2bf1922dedef->enter($__internal_4bfcad25ec69dc6424d93560588e10d44ed665c8ab72fa1184cd2bf1922dedef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4bfcad25ec69dc6424d93560588e10d44ed665c8ab72fa1184cd2bf1922dedef->leave($__internal_4bfcad25ec69dc6424d93560588e10d44ed665c8ab72fa1184cd2bf1922dedef_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6d4fff1796221e3382203498fcc8c81293248d36bfba27875ff53897db999333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4fff1796221e3382203498fcc8c81293248d36bfba27875ff53897db999333->enter($__internal_6d4fff1796221e3382203498fcc8c81293248d36bfba27875ff53897db999333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_6d4fff1796221e3382203498fcc8c81293248d36bfba27875ff53897db999333->leave($__internal_6d4fff1796221e3382203498fcc8c81293248d36bfba27875ff53897db999333_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_80d3d8a3da4d6b8798d7e82f518ad38c0abdc4487954a3151dd40d2048b51aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d3d8a3da4d6b8798d7e82f518ad38c0abdc4487954a3151dd40d2048b51aae->enter($__internal_80d3d8a3da4d6b8798d7e82f518ad38c0abdc4487954a3151dd40d2048b51aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_80d3d8a3da4d6b8798d7e82f518ad38c0abdc4487954a3151dd40d2048b51aae->leave($__internal_80d3d8a3da4d6b8798d7e82f518ad38c0abdc4487954a3151dd40d2048b51aae_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7133c2d2c52958c7ffdf9dc3707cedaa43c7c46f73a784ffcf6ac8452f2b4761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7133c2d2c52958c7ffdf9dc3707cedaa43c7c46f73a784ffcf6ac8452f2b4761->enter($__internal_7133c2d2c52958c7ffdf9dc3707cedaa43c7c46f73a784ffcf6ac8452f2b4761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7133c2d2c52958c7ffdf9dc3707cedaa43c7c46f73a784ffcf6ac8452f2b4761->leave($__internal_7133c2d2c52958c7ffdf9dc3707cedaa43c7c46f73a784ffcf6ac8452f2b4761_prof);

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
