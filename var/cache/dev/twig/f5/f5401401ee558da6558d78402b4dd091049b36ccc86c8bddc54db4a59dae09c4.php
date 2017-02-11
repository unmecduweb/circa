<?php

/* MwebAdminBundle:Resetting:check_email.html.twig */
class __TwigTemplate_79d1f0b82103bd37fb7bb170ac7ef481f8461fb4f24972fe07d8b26c4072ccfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9d1ef7c95a4c80cc22a04a1abe64005ae594c819cf93914dc3a39445f2c56ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d1ef7c95a4c80cc22a04a1abe64005ae594c819cf93914dc3a39445f2c56ee->enter($__internal_f9d1ef7c95a4c80cc22a04a1abe64005ae594c819cf93914dc3a39445f2c56ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9d1ef7c95a4c80cc22a04a1abe64005ae594c819cf93914dc3a39445f2c56ee->leave($__internal_f9d1ef7c95a4c80cc22a04a1abe64005ae594c819cf93914dc3a39445f2c56ee_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70688aff027e326128976a9394b3e43380b2c07f0e67ac65ee3e61207f9a9bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70688aff027e326128976a9394b3e43380b2c07f0e67ac65ee3e61207f9a9bca->enter($__internal_70688aff027e326128976a9394b3e43380b2c07f0e67ac65ee3e61207f9a9bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_70688aff027e326128976a9394b3e43380b2c07f0e67ac65ee3e61207f9a9bca->leave($__internal_70688aff027e326128976a9394b3e43380b2c07f0e67ac65ee3e61207f9a9bca_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "MwebAdminBundle:Resetting:check_email.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
