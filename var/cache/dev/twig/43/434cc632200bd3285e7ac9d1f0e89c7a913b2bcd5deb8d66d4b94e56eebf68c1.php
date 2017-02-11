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
        $__internal_c8e1999c4d4d29b259add2963b1bf7278b28eff2093819515ed2d3f0fccebeba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e1999c4d4d29b259add2963b1bf7278b28eff2093819515ed2d3f0fccebeba->enter($__internal_c8e1999c4d4d29b259add2963b1bf7278b28eff2093819515ed2d3f0fccebeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c8e1999c4d4d29b259add2963b1bf7278b28eff2093819515ed2d3f0fccebeba->leave($__internal_c8e1999c4d4d29b259add2963b1bf7278b28eff2093819515ed2d3f0fccebeba_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_af7c3897ecf9dbfd27a7b68cd2f9f96eb19c7b9a64bafd1d5709f22df8bedc34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7c3897ecf9dbfd27a7b68cd2f9f96eb19c7b9a64bafd1d5709f22df8bedc34->enter($__internal_af7c3897ecf9dbfd27a7b68cd2f9f96eb19c7b9a64bafd1d5709f22df8bedc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_af7c3897ecf9dbfd27a7b68cd2f9f96eb19c7b9a64bafd1d5709f22df8bedc34->leave($__internal_af7c3897ecf9dbfd27a7b68cd2f9f96eb19c7b9a64bafd1d5709f22df8bedc34_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b4435b0ed5e8df83a2a5d6845db05679c364ccd0cfd8e72bb09766d77be23a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4435b0ed5e8df83a2a5d6845db05679c364ccd0cfd8e72bb09766d77be23a7f->enter($__internal_b4435b0ed5e8df83a2a5d6845db05679c364ccd0cfd8e72bb09766d77be23a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b4435b0ed5e8df83a2a5d6845db05679c364ccd0cfd8e72bb09766d77be23a7f->leave($__internal_b4435b0ed5e8df83a2a5d6845db05679c364ccd0cfd8e72bb09766d77be23a7f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_61993180e0b20f2102521ec54e647d29e7954bd50c1d5a27929ac604bdcd815a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61993180e0b20f2102521ec54e647d29e7954bd50c1d5a27929ac604bdcd815a->enter($__internal_61993180e0b20f2102521ec54e647d29e7954bd50c1d5a27929ac604bdcd815a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_61993180e0b20f2102521ec54e647d29e7954bd50c1d5a27929ac604bdcd815a->leave($__internal_61993180e0b20f2102521ec54e647d29e7954bd50c1d5a27929ac604bdcd815a_prof);

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
