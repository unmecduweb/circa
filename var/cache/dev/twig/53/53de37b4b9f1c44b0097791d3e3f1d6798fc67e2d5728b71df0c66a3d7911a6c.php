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
        $__internal_befef6bb738b07b2c9c004cdb61b73efbbcf36e140123be4b85d1d58b5133832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_befef6bb738b07b2c9c004cdb61b73efbbcf36e140123be4b85d1d58b5133832->enter($__internal_befef6bb738b07b2c9c004cdb61b73efbbcf36e140123be4b85d1d58b5133832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::base.html.twig"));

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
        
        $__internal_befef6bb738b07b2c9c004cdb61b73efbbcf36e140123be4b85d1d58b5133832->leave($__internal_befef6bb738b07b2c9c004cdb61b73efbbcf36e140123be4b85d1d58b5133832_prof);

    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        $__internal_fad05baffe8188e9e049f7546387445ae0ad7fbdeb50b32bc7d21a7d6cde0537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad05baffe8188e9e049f7546387445ae0ad7fbdeb50b32bc7d21a7d6cde0537->enter($__internal_fad05baffe8188e9e049f7546387445ae0ad7fbdeb50b32bc7d21a7d6cde0537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fad05baffe8188e9e049f7546387445ae0ad7fbdeb50b32bc7d21a7d6cde0537->leave($__internal_fad05baffe8188e9e049f7546387445ae0ad7fbdeb50b32bc7d21a7d6cde0537_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c508d3d97f82feb444f8d0bd40b1b089a12ee7d1a32ebf373a73f189f05e650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c508d3d97f82feb444f8d0bd40b1b089a12ee7d1a32ebf373a73f189f05e650->enter($__internal_5c508d3d97f82feb444f8d0bd40b1b089a12ee7d1a32ebf373a73f189f05e650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5c508d3d97f82feb444f8d0bd40b1b089a12ee7d1a32ebf373a73f189f05e650->leave($__internal_5c508d3d97f82feb444f8d0bd40b1b089a12ee7d1a32ebf373a73f189f05e650_prof);

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
