<?php

/* MwebAdminBundle:Registration:check_email.html.twig */
class __TwigTemplate_5ad2ac14de9e127bf8e675031b50e2bcf79475385caa351fd1a5ff77b711285d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Registration:check_email.html.twig", 1);
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
        $__internal_cf93ef736ce2ff413a977cfd12438364e903c8e39de9baf0588bf509c5959862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf93ef736ce2ff413a977cfd12438364e903c8e39de9baf0588bf509c5959862->enter($__internal_cf93ef736ce2ff413a977cfd12438364e903c8e39de9baf0588bf509c5959862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf93ef736ce2ff413a977cfd12438364e903c8e39de9baf0588bf509c5959862->leave($__internal_cf93ef736ce2ff413a977cfd12438364e903c8e39de9baf0588bf509c5959862_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04de5a6f473ac8ae307ce1503214d226364be78ebed795cee240d3083f2a2ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04de5a6f473ac8ae307ce1503214d226364be78ebed795cee240d3083f2a2ada->enter($__internal_04de5a6f473ac8ae307ce1503214d226364be78ebed795cee240d3083f2a2ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_04de5a6f473ac8ae307ce1503214d226364be78ebed795cee240d3083f2a2ada->leave($__internal_04de5a6f473ac8ae307ce1503214d226364be78ebed795cee240d3083f2a2ada_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "MwebAdminBundle:Registration:check_email.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Registration/check_email.html.twig");
    }
}
