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
        $__internal_92f4e904ffba00757feb44662d573c40163f7c77c505560b2b418dcb05d8bb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f4e904ffba00757feb44662d573c40163f7c77c505560b2b418dcb05d8bb8b->enter($__internal_92f4e904ffba00757feb44662d573c40163f7c77c505560b2b418dcb05d8bb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_92f4e904ffba00757feb44662d573c40163f7c77c505560b2b418dcb05d8bb8b->leave($__internal_92f4e904ffba00757feb44662d573c40163f7c77c505560b2b418dcb05d8bb8b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_17ba3fc1a48ddf87ebf7fc3ee8b9f75df4792434fe0792557e4d5e612ec7f07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ba3fc1a48ddf87ebf7fc3ee8b9f75df4792434fe0792557e4d5e612ec7f07b->enter($__internal_17ba3fc1a48ddf87ebf7fc3ee8b9f75df4792434fe0792557e4d5e612ec7f07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_17ba3fc1a48ddf87ebf7fc3ee8b9f75df4792434fe0792557e4d5e612ec7f07b->leave($__internal_17ba3fc1a48ddf87ebf7fc3ee8b9f75df4792434fe0792557e4d5e612ec7f07b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_60f1413cf52a0168c3af31f5a6c526f89c94f4f6cb017fb8419b5c775ddf1f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f1413cf52a0168c3af31f5a6c526f89c94f4f6cb017fb8419b5c775ddf1f44->enter($__internal_60f1413cf52a0168c3af31f5a6c526f89c94f4f6cb017fb8419b5c775ddf1f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_60f1413cf52a0168c3af31f5a6c526f89c94f4f6cb017fb8419b5c775ddf1f44->leave($__internal_60f1413cf52a0168c3af31f5a6c526f89c94f4f6cb017fb8419b5c775ddf1f44_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7280fbdd232ab7228bf3726b1cf0b6c6779d577c7b66a218f10aa29e5dc05d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7280fbdd232ab7228bf3726b1cf0b6c6779d577c7b66a218f10aa29e5dc05d75->enter($__internal_7280fbdd232ab7228bf3726b1cf0b6c6779d577c7b66a218f10aa29e5dc05d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7280fbdd232ab7228bf3726b1cf0b6c6779d577c7b66a218f10aa29e5dc05d75->leave($__internal_7280fbdd232ab7228bf3726b1cf0b6c6779d577c7b66a218f10aa29e5dc05d75_prof);

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
