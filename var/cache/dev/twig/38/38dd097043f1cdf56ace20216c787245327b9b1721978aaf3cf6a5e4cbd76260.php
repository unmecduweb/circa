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
        $__internal_a3687dd2d3ee58d21ec7feb4bc6bcc24c9568f7667c855b590416da97edda407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3687dd2d3ee58d21ec7feb4bc6bcc24c9568f7667c855b590416da97edda407->enter($__internal_a3687dd2d3ee58d21ec7feb4bc6bcc24c9568f7667c855b590416da97edda407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::base.html.twig"));

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
        
        $__internal_a3687dd2d3ee58d21ec7feb4bc6bcc24c9568f7667c855b590416da97edda407->leave($__internal_a3687dd2d3ee58d21ec7feb4bc6bcc24c9568f7667c855b590416da97edda407_prof);

    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f82177b9f26e6da441babbf527402857e9f5f12d16b32ef2d00a3a572757e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f82177b9f26e6da441babbf527402857e9f5f12d16b32ef2d00a3a572757e37->enter($__internal_8f82177b9f26e6da441babbf527402857e9f5f12d16b32ef2d00a3a572757e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8f82177b9f26e6da441babbf527402857e9f5f12d16b32ef2d00a3a572757e37->leave($__internal_8f82177b9f26e6da441babbf527402857e9f5f12d16b32ef2d00a3a572757e37_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f46bd751436b41124010ec47a2389759f64e42c73bb5e1d47166d4d9510ada73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46bd751436b41124010ec47a2389759f64e42c73bb5e1d47166d4d9510ada73->enter($__internal_f46bd751436b41124010ec47a2389759f64e42c73bb5e1d47166d4d9510ada73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f46bd751436b41124010ec47a2389759f64e42c73bb5e1d47166d4d9510ada73->leave($__internal_f46bd751436b41124010ec47a2389759f64e42c73bb5e1d47166d4d9510ada73_prof);

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
