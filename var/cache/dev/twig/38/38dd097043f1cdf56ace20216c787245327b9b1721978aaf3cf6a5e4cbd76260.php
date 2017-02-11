<?php

/* MwebAdminBundle::base.html.twig */
class __TwigTemplate_8d7c54fcda30c577bc1769f55802afa9616f7bf6ec107b4e7b9be0d96e212897 extends Twig_Template
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
        $__internal_46616604b4f3071e5239eb1ee602f7c1acf574e590234a6e9cae0b2cfc72b3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46616604b4f3071e5239eb1ee602f7c1acf574e590234a6e9cae0b2cfc72b3cd->enter($__internal_46616604b4f3071e5239eb1ee602f7c1acf574e590234a6e9cae0b2cfc72b3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::base.html.twig"));

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
        
        $__internal_46616604b4f3071e5239eb1ee602f7c1acf574e590234a6e9cae0b2cfc72b3cd->leave($__internal_46616604b4f3071e5239eb1ee602f7c1acf574e590234a6e9cae0b2cfc72b3cd_prof);

    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        $__internal_632ac035821593b9eb83afc6f12c2fdc043d5012f84a4b7e642c0852edf23293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632ac035821593b9eb83afc6f12c2fdc043d5012f84a4b7e642c0852edf23293->enter($__internal_632ac035821593b9eb83afc6f12c2fdc043d5012f84a4b7e642c0852edf23293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_632ac035821593b9eb83afc6f12c2fdc043d5012f84a4b7e642c0852edf23293->leave($__internal_632ac035821593b9eb83afc6f12c2fdc043d5012f84a4b7e642c0852edf23293_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bb87eda57583d89056a26cba03ceec6ff80da06141d8c70bebfcd27af8e2a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb87eda57583d89056a26cba03ceec6ff80da06141d8c70bebfcd27af8e2a83->enter($__internal_0bb87eda57583d89056a26cba03ceec6ff80da06141d8c70bebfcd27af8e2a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0bb87eda57583d89056a26cba03ceec6ff80da06141d8c70bebfcd27af8e2a83->leave($__internal_0bb87eda57583d89056a26cba03ceec6ff80da06141d8c70bebfcd27af8e2a83_prof);

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
