<?php

/* MwebAdminBundle::base.html.twig */
class __TwigTemplate_7e4ab60fe9816f0a86c57a4a96b772bcf39aba938164ddd3406700ddf20920d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e5f4ef0350a475ae5dbfbb7da48f0f687260e4a4df7dac5e1d1e471c412b7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5f4ef0350a475ae5dbfbb7da48f0f687260e4a4df7dac5e1d1e471c412b7ef->enter($__internal_4e5f4ef0350a475ae5dbfbb7da48f0f687260e4a4df7dac5e1d1e471c412b7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 7]>
<html class=\"ie ie7\" lang=\"en-US\">
   <![endif]-->
<!--[if IE 8]>
   <html class=\"ie ie8\" lang=\"en-US\">
      <![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang=\"en-US\" class=\"no-padding\"><!--<![endif]-->
    <head>
        ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "    </head>
    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "</html>";
        
        $__internal_4e5f4ef0350a475ae5dbfbb7da48f0f687260e4a4df7dac5e1d1e471c412b7ef->leave($__internal_4e5f4ef0350a475ae5dbfbb7da48f0f687260e4a4df7dac5e1d1e471c412b7ef_prof);

    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        $__internal_e04cb9597927b32266c253b50ebb115eecb4e91c5be020530d487eb553708e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04cb9597927b32266c253b50ebb115eecb4e91c5be020530d487eb553708e99->enter($__internal_e04cb9597927b32266c253b50ebb115eecb4e91c5be020530d487eb553708e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e04cb9597927b32266c253b50ebb115eecb4e91c5be020530d487eb553708e99->leave($__internal_e04cb9597927b32266c253b50ebb115eecb4e91c5be020530d487eb553708e99_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_06a05b44b3ba3e02c755eeedc298ce03140a12767e804132f003ccab25a5ccff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a05b44b3ba3e02c755eeedc298ce03140a12767e804132f003ccab25a5ccff->enter($__internal_06a05b44b3ba3e02c755eeedc298ce03140a12767e804132f003ccab25a5ccff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_06a05b44b3ba3e02c755eeedc298ce03140a12767e804132f003ccab25a5ccff->leave($__internal_06a05b44b3ba3e02c755eeedc298ce03140a12767e804132f003ccab25a5ccff_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  50 => 11,  43 => 14,  41 => 13,  38 => 12,  36 => 11,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 7]>
<html class=\"ie ie7\" lang=\"en-US\">
   <![endif]-->
<!--[if IE 8]>
   <html class=\"ie ie8\" lang=\"en-US\">
      <![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang=\"en-US\" class=\"no-padding\"><!--<![endif]-->
    <head>
        {% block head %}{% endblock %}
    </head>
    {% block body %}{% endblock %}
</html>", "MwebAdminBundle::base.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/base.html.twig");
    }
}
