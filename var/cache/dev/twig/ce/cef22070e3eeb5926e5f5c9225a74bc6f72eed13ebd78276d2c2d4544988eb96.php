<?php

/* MwebAdminBundle:Resetting:email.txt.twig */
class __TwigTemplate_b9489274a13635b352c9d9f2d3dfefe6e089d05de6da18d1877212ba14dbad86 extends Twig_Template
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
        $__internal_f4278654ba6e8e6efb4662a790b1d8bfafc1fe2d67b528d720178491f1b6da4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4278654ba6e8e6efb4662a790b1d8bfafc1fe2d67b528d720178491f1b6da4a->enter($__internal_f4278654ba6e8e6efb4662a790b1d8bfafc1fe2d67b528d720178491f1b6da4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f4278654ba6e8e6efb4662a790b1d8bfafc1fe2d67b528d720178491f1b6da4a->leave($__internal_f4278654ba6e8e6efb4662a790b1d8bfafc1fe2d67b528d720178491f1b6da4a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0ba625a126ec76a173112f79c27d6643fbc320ad015c4d826192255f350f1ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba625a126ec76a173112f79c27d6643fbc320ad015c4d826192255f350f1ebd->enter($__internal_0ba625a126ec76a173112f79c27d6643fbc320ad015c4d826192255f350f1ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_0ba625a126ec76a173112f79c27d6643fbc320ad015c4d826192255f350f1ebd->leave($__internal_0ba625a126ec76a173112f79c27d6643fbc320ad015c4d826192255f350f1ebd_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5786d8c581feb5fda5328e8908dcc442f105f685015adddbf250bd8984bd2a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5786d8c581feb5fda5328e8908dcc442f105f685015adddbf250bd8984bd2a11->enter($__internal_5786d8c581feb5fda5328e8908dcc442f105f685015adddbf250bd8984bd2a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5786d8c581feb5fda5328e8908dcc442f105f685015adddbf250bd8984bd2a11->leave($__internal_5786d8c581feb5fda5328e8908dcc442f105f685015adddbf250bd8984bd2a11_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5e4a3a807bca01f0f09f1d0c0a73d2b310bf92025fbed70ffbdf82257cb29787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4a3a807bca01f0f09f1d0c0a73d2b310bf92025fbed70ffbdf82257cb29787->enter($__internal_5e4a3a807bca01f0f09f1d0c0a73d2b310bf92025fbed70ffbdf82257cb29787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5e4a3a807bca01f0f09f1d0c0a73d2b310bf92025fbed70ffbdf82257cb29787->leave($__internal_5e4a3a807bca01f0f09f1d0c0a73d2b310bf92025fbed70ffbdf82257cb29787_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "MwebAdminBundle:Resetting:email.txt.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Resetting/email.txt.twig");
    }
}
