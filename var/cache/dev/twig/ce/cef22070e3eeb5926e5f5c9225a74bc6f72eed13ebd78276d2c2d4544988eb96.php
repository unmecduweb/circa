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
        $__internal_9000e03e6715fe98ff45c5f8e7a60fd367573efb779a19b48496bf69b3f83f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9000e03e6715fe98ff45c5f8e7a60fd367573efb779a19b48496bf69b3f83f99->enter($__internal_9000e03e6715fe98ff45c5f8e7a60fd367573efb779a19b48496bf69b3f83f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9000e03e6715fe98ff45c5f8e7a60fd367573efb779a19b48496bf69b3f83f99->leave($__internal_9000e03e6715fe98ff45c5f8e7a60fd367573efb779a19b48496bf69b3f83f99_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4536573c2fbeb68d692283f632b28d5aa1b5b8169fc2587b28a217fb4d9e5cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4536573c2fbeb68d692283f632b28d5aa1b5b8169fc2587b28a217fb4d9e5cb6->enter($__internal_4536573c2fbeb68d692283f632b28d5aa1b5b8169fc2587b28a217fb4d9e5cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_4536573c2fbeb68d692283f632b28d5aa1b5b8169fc2587b28a217fb4d9e5cb6->leave($__internal_4536573c2fbeb68d692283f632b28d5aa1b5b8169fc2587b28a217fb4d9e5cb6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e7e45fb549389d7cf350e9626d96db67afdf046e36fe4075df202d43169a6f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e45fb549389d7cf350e9626d96db67afdf046e36fe4075df202d43169a6f3d->enter($__internal_e7e45fb549389d7cf350e9626d96db67afdf046e36fe4075df202d43169a6f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e7e45fb549389d7cf350e9626d96db67afdf046e36fe4075df202d43169a6f3d->leave($__internal_e7e45fb549389d7cf350e9626d96db67afdf046e36fe4075df202d43169a6f3d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_84e3159a71931b9a1a094c19a0ff1e88c2223b979cfbd010a558ef1b78b23c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e3159a71931b9a1a094c19a0ff1e88c2223b979cfbd010a558ef1b78b23c25->enter($__internal_84e3159a71931b9a1a094c19a0ff1e88c2223b979cfbd010a558ef1b78b23c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_84e3159a71931b9a1a094c19a0ff1e88c2223b979cfbd010a558ef1b78b23c25->leave($__internal_84e3159a71931b9a1a094c19a0ff1e88c2223b979cfbd010a558ef1b78b23c25_prof);

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
