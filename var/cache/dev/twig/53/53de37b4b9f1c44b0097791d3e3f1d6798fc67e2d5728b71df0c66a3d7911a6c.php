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
        $__internal_aa9521b1ce3ff8a4bec0c4ddb9f9c33eb81ac116695fa2be6b394058aa51e37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9521b1ce3ff8a4bec0c4ddb9f9c33eb81ac116695fa2be6b394058aa51e37b->enter($__internal_aa9521b1ce3ff8a4bec0c4ddb9f9c33eb81ac116695fa2be6b394058aa51e37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle::base.html.twig"));

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
        
        $__internal_aa9521b1ce3ff8a4bec0c4ddb9f9c33eb81ac116695fa2be6b394058aa51e37b->leave($__internal_aa9521b1ce3ff8a4bec0c4ddb9f9c33eb81ac116695fa2be6b394058aa51e37b_prof);

    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f99721bb6af6a2c0eedf9a75b677cd26cf2e5d840dc18f30605b3b443e9b3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f99721bb6af6a2c0eedf9a75b677cd26cf2e5d840dc18f30605b3b443e9b3d0->enter($__internal_4f99721bb6af6a2c0eedf9a75b677cd26cf2e5d840dc18f30605b3b443e9b3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4f99721bb6af6a2c0eedf9a75b677cd26cf2e5d840dc18f30605b3b443e9b3d0->leave($__internal_4f99721bb6af6a2c0eedf9a75b677cd26cf2e5d840dc18f30605b3b443e9b3d0_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4bd6b73fcd9c3c0ba08705ea8cc05336bc17c9f1caf311858b6c31347f22a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4bd6b73fcd9c3c0ba08705ea8cc05336bc17c9f1caf311858b6c31347f22a50->enter($__internal_c4bd6b73fcd9c3c0ba08705ea8cc05336bc17c9f1caf311858b6c31347f22a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c4bd6b73fcd9c3c0ba08705ea8cc05336bc17c9f1caf311858b6c31347f22a50->leave($__internal_c4bd6b73fcd9c3c0ba08705ea8cc05336bc17c9f1caf311858b6c31347f22a50_prof);

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
