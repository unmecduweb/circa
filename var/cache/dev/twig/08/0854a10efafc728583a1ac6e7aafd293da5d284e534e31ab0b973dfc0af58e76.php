<?php

/* MwebAdminBundle:Resetting:reset.html.twig */
class __TwigTemplate_77556a51171b1f101e07a5e525fcd0abfa6f8d9c2510434cc80769def8e878db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MwebAdminBundle:Resetting:reset.html.twig", 1);
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
        $__internal_f65d9e62ec793319096051ed12a69ab0b5aa14fc27ef8b823af0e5f00a84af15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65d9e62ec793319096051ed12a69ab0b5aa14fc27ef8b823af0e5f00a84af15->enter($__internal_f65d9e62ec793319096051ed12a69ab0b5aa14fc27ef8b823af0e5f00a84af15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MwebAdminBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f65d9e62ec793319096051ed12a69ab0b5aa14fc27ef8b823af0e5f00a84af15->leave($__internal_f65d9e62ec793319096051ed12a69ab0b5aa14fc27ef8b823af0e5f00a84af15_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_435f3b2e5d58dca0f3201e757e7fd1b532dcebf2c05a73bd3fa39f198ede8492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435f3b2e5d58dca0f3201e757e7fd1b532dcebf2c05a73bd3fa39f198ede8492->enter($__internal_435f3b2e5d58dca0f3201e757e7fd1b532dcebf2c05a73bd3fa39f198ede8492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "MwebAdminBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_435f3b2e5d58dca0f3201e757e7fd1b532dcebf2c05a73bd3fa39f198ede8492->leave($__internal_435f3b2e5d58dca0f3201e757e7fd1b532dcebf2c05a73bd3fa39f198ede8492_prof);

    }

    public function getTemplateName()
    {
        return "MwebAdminBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "MwebAdminBundle:Resetting:reset.html.twig", "/home/fab/Documents/Pro/www/circa/vendor/mweb/admin-bundle/Mweb/AdminBundle/Resources/views/Resetting/reset.html.twig");
    }
}
